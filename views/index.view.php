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
            <h1 class="titulo">Mi increíble galería en PHP y MySQL</h1>
        </div>
        <br>
    <div class="contenedor">
        <div class="paginacion">
            <a href="subir.php">Subir foto</a>
        </div>
    </div>
    </header>

    <section class="fotos">
        

        <div class="contenedor">
                
                    <?php foreach($fotos as $foto): ?>
                        <div class="thumb">
                            <a href="foto.php?id=<?php echo $foto['id']?>">
                                <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                        
                        </div>
                    <?php endforeach; ?>
                </a>
                        

            <div class="paginacion">
                
            <?php if($pagina_actual > 1) :   ?>
            <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página anterior</a>
            <?php endif ?>

            <?php if($total_paginas != $pagina_actual) :   ?>
            <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Página siguiente <i class="fa fa-long-arrow-right"></i></a>
            <?php endif ?>

            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galería creada por Adrià Gari</p>
    </footer>
</body>
</html>