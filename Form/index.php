<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Formulario</title>
</head>



<body>


  <form id="form" class="form" method="post" action="registrar.php">
     <h1 class="form__titulo">CONTACTO</h1>

    <div class="contenedor">

        <div class="form__grupo" id="grupo__nombre" >
          <input name="nombre" type="text" class="form__input" placeholder=" "required>
          <label for="" class="form__label">Nombre</label>
          <span class="form__linia"></span>
        </div>

        <div class="form__grupo" id="grupo__pais">
          <select class="form__input" id="miSelect" name="pais" placeholder=" "required>
          <option selected disabled>Selecciona</option></select>
          <label for="" class="form__label">Pais</label>
          <span class="form__linia"></span>
        </div>

        <div class="form__grupo" id="grupo__celular">
          <input name="celular" type="text" class="form__input" placeholder=" "required>
          <label for="" class="form__label">Celular</label>
          <span class="form__linia"></span>
        </div>

        <div class="form__grupo" id="grupo__email">
          <input name="email" type="text" class="form__input" placeholder=" "required>
          <label for="" class="form__label">Email</label>
          <span class="form__linia"></span>
        </div>
         
        <input class="form__submit" type="submit" name="submit" value="Guardar">
       
    </div>


     
  </form>

  <div id="particles-js">

  </div>


</body>
</html>
<script src="script.js"></script>
<script src="Diseño/particles.min.js"></script>
<script src="Diseño/fondo.js"></script>




   


