<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php 
            if(!empty($titulo)){
                echo $titulo;
            } else{
                echo $foto;
            }

             ?></h1>
        </div>
    </header>
<div class="contenedor">
    <div class="foto">
            <img src="fotos/<?php echo $imagen ?>" alt="">
        <p class="texto"><?php 
        
        if(!empty($texto)){
            echo $texto;
        } else{
            echo "No hay descripción";
        }
         ?></p>
        <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
    </div>
</div>

    <footer>
        <p class="copyright">Galería creada por Adrià Gari</p>
    </footer>
</body>
</html>