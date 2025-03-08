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
      if(!isset($_POST["nazione"]) ||   strlen($_POST["nazione"]) == 0) header("Location: index.php");
      
      $show = $db->getAereoportiNazione($_POST["nazione"]);
    ?>

    <div class="row">
      <div class="col-12 col-md-8 col-lg-6 mx-auto mt-5 border rounded shadow-sm text-center">
      <table class="table">
      <tr>
        <th colspan="3" class="fs-3 text-center text-primary">Aereoporti in <?php echo $_POST["nazione"]; ?></th>
      </tr>
        <tr>
          <th>Nome</th>
          <th>Città</th>
          <th>Via</th>
        </tr>
        <?php 
          for($i = 0; $i < count($show); $i++){
        ?>
        <tr>
          <td><?php echo $show[$i]["nome"]; ?></td>
          <td><?php echo $show[$i]["citta"]; ?></td>
          <td><?php echo $show[$i]["via"]; ?></td>
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