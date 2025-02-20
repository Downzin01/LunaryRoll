<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/principal/reset.css">
    <link rel="stylesheet" href="./src/css/principal/styles.css">
    <title>
        <?php
            if (isset($titulo) && !empty($titulo)) {
                echo $titulo;
            } else {
                echo 'Sua lista';
            }
        ?>
    </title>
</head>
<body>
    
</body>
</html>