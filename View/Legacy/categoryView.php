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
    
    echo("<h2>".$category->getTitle()."</h2>");
    echo("<article>".$category->getColor()."</article>");
    echo("<div>".$category->getCreatedAt()->format('Y-m-d H:i:s')."</div>");
    ?>
</body>
</html>