<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php include_once("./views/header.php") ?>
    <div class="container">

        <h2 class='my-3'>Aplicativo JQuery</h2>
        
        <div id="nombre" class="input-group mt-4">
            <input type="text" id="nombre_fruta" class="form-control" placeholder="Nombre">
            <button type="button" class="agregar btn btn-outline-primary" id="btn_agregar">Agregar</button>
        </div>
        
        <div id="listado_frutas" class="mt-5">
            <ul class="list-group"></ul>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <script src="../Assets/js/index.js"></script>

</body>

</html>