<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="display-1 text-bold">Cas DSC</h1>
    </header>
    <h2 class="pb-2 border-bottom">Liste des pompiers</h2>
    <div id="contenu">
        <?= $content ?>
    </div>
    <footer class="display-6">
        Page MVC - BTS SIO -
    </footer>
</body>
</html>