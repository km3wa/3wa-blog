<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo('<form method="POST">');
        echo('<input type="text" name="title" placeholder="Title" required autofocus>');
        echo('<input type="text" name="color" placeholder="Color" required autofocus>');
        echo('<button class="btn btn-large btn-primary">Créer catégorie</button>');
    echo('</form>');
    ?>
</body>
</html>