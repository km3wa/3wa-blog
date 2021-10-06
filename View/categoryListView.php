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
    foreach($categories as $category){
        echo('<h2><a href="../Controller/category.php?id='.$category->getId().'">'.$category->getTitle().'</a></h2>');
        echo('<article>'.$category->getColor().'</article>');
        echo('<div><a href="../Controller/deleteCategory.php?id='.$category->getId().'">supprimer catégorie '.$category->getId().'</a></div>');
    };
    ?>
</body>
</html>