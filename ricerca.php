<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca Hotel</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Ricerca Hotel per Voto</h1>

        <form action="alberghi.php" method="get">
            <div class="mb-3">
                <label for="voto" class="form-label">Inserisci il voto desiderato:</label>
                <input type="number" class="form-control" id="voto" name="voto" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Cerca</button>
        </form>
    </div>
</body>

</html>