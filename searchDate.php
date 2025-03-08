<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FindYourFly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php 
      include_once "./DB.php";
      $db = new DB();
      if(!isset($_POST["dataPartenza"]) ||   strlen($_POST["dataPartenza"]) == 0) header("Location: index.php");

      $show = $db->getVoliInData($_POST["dataPartenza"]);
    ?>

<div class="row">
      <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 border rounded shadow-sm text-center">
      <table class="table">
      <tr>
        <th colspan="6" class="fs-3 text-center text-primary">Voli in data <?php echo $_POST["dataPartenza"]; ?></th>
      </tr>
        <tr>
          <th>Ora partenza</th>
          <th>Aereoporto partenza</th>
          <th>Nazione partenza</th>
          <th>Ora arrivo</th>
          <th>Aereoporto arrivo</th>
          <th>Nazione arrivo</th>
        </tr>
        <?php 
          for($i = 0; $i < count($show); $i++){
        ?>
        <tr>
          <td><?php echo $show[$i]["ora_partenza"]; ?></td>
          <td><?php echo $db->getInfoAereoportoDaID($show[$i]["id_aeroporto_partenza"])["nome"]; ?></td>
          <td><?php echo $db->getInfoAereoportoDaID($show[$i]["id_aeroporto_partenza"])["nazione"]; ?></td>
          <td><?php echo $show[$i]["ora_arrivo"]; ?></td>
          <td><?php echo $db->getInfoAereoportoDaID($show[$i]["id_aeroporto_arrivo"])["nome"]; ?></td>
          <td><?php echo $db->getInfoAereoportoDaID($show[$i]["id_aeroporto_arrivo"])["nazione"]; ?></td>
        </tr>
        <?php } ?>
      </table>
      <a href="./index.php" class="btn btn-outline-success mt-2 mb-4">Cerca ancora</a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>