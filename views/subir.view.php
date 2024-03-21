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
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>
<div class="contenedor">
    <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

<label for="foto">Selecciona tu foto</label>
<input type="file" name="foto" id="foto">

<label for="titulo">Titulo de la foto</label>
<input type="text" name="titulo" id="titulo">

<label for="texto">Descripción</label>
<textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

<?php if(isset($error)) : ?>
    <p class="error"><?php echo $error ?></p>
<?php endif ?>

<input type="submit" class="submit" value="Subir foto">

</form>
</div>

    <footer>
        <p class="copyright">Galería creada por Adrià Gari</p>
    </footer>
</body>
</html>


