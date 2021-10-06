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
    echo('<h1>ARTICLES</h1>');
    foreach($articles as $article){
        echo('<h2>'.$article->getTitle().'</h2>');
        echo('<article>'.$article->getContent().'</article>');
    };

    echo('<h1>CATEGORIES</h1>');
    foreach($categories as $category){
        echo('<h2 style="color:'.$category->getColor().'">'.$category->getTitle().'</h2>');
    };
    ?>
</body>
</html>