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
    foreach($articles as $article){
        echo('<h2>'.$article->getTitle().'</h2>');
        echo('<article>".$article->getContent()."</article>');
    };
    ?>
</body>
</html>