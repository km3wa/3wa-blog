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
    $text = "";
    echo('<form method="POST">');
        echo('<input type="text" name="username" placeholder="Username" required autofocus>');
        echo('<input type="password" name="pw" placeholder="Password" required autofocus>');
        echo('<button class="btn btn-large btn-primary">Connexion</button>');
    echo('</form>');
    ?>
</body>
</html>