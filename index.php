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
        $paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, asperiores? Totam error, nam modi harum quas saepe sint officiis corrupti veniam, provident doloribus. Quae magnam adipisci beatae amet? Quidem, nesciunt.';

        $badword = $_GET["badword"];
        $censura = str_replace($badword, '***', $paragrafo);
        
    ?>

    <h1>La lunghezza è: <?php echo strlen($paragrafo); ?></h1>
    <p><?php echo $paragrafo; ?></p>

    <h1>La lunghezza è: <?php echo strlen($censura); ?></h1>
    <p><?php echo $censura; ?></p>

</body>
</html>