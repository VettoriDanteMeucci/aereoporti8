<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FindYourFly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center mb-5">Benvenuti Nel Sito per Cercare voli per eccellenza</h1>
    <div class="row w-75 mx-auto">
      <!-- Colonna 1 di 2 -->
      <div class="col-4 mx-auto border rounded">
        Qui puoi cercare Aereoporti
        <!-- form 1 per Nazione -->
        <form action="./searchNation.php" method="POST" class="p-4">
          <div class="mb-3">
            <label for="nation" class="form-label">La Nazione che ti interessa</label>
            <!-- Input Nazione -->
            <input type="text" name="nazione" class="form-control" id="nation">
          </div>
          <button type="submit" class="btn btn-primary">Vedi tutti</button>
        </form>
      </div>
      <!-- Colonna 2 di 2 -->
      <div class="col-4 mx-auto border rounded">
        Qui puoi cercare i voli che partono in data
        <form action="./searchDate.php" method="POST" class="p-4">
          <div class="mb-3">
            <label for="dataPartenza" class="form-label">La data che ti interessa</label>
            <!-- Input Data di partenza -->
            <input type="date" name="dataPartenza" class="form-control" id="dataPartenza">
          </div>
          <button type="submit" class="btn btn-primary">Vedi tutti</button>
        </form> 
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>