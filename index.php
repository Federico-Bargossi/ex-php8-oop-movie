<?php
require_once './Traits/HasDirector.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';
require_once './db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Film in Catalogo</h1>

    <div class="row g-4">
        <?php foreach ($movies as $movie): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($movie->title) ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($movie->getDirector()) ?></h6>
                        <p class="card-text">
                            <strong>Anno:</strong> <?= $movie->year ?><br>
                            <strong>Voto:</strong> <?= $movie->rating ?><br>
                            <strong>Genere:</strong> <?= htmlspecialchars($movie->getGenreName()) ?>
                        </p>
                        <p class="card-text"><?= htmlspecialchars($movie->description) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
