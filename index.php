<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="padding-top:100px">
        <form action="pause.php" method="post">
            <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Nombre: </label>
             <input type="text" class="form-control" name="nombre"  aria-describedby="emailHelp">
             </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Apellidos: </label>
              <input type="text" class="form-control" name="apellido" >
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Correo: </label>
              <input type="email" class="form-control" name="email">
            </div>
            <div>
                <label for="">Seleccione su nivel de estudio:</label>
                <select class="form-select" name="nivelEstudio" aria-label="Default select example">
                    <option selected></option>
                    <option value="Bachiller">Bachiller</option>
                    <option value="Tecnico">Tecnico</option>
                    <option value="Tecnologo">Tecnologo</option>
                    <option value="Profecinal">Profecinal</option>
                    <option value="Estudiante">Estudiante</option>
                </select>
            </div>
            <br>
            <h5>Lenguajes de programacion Aprendidos</h5>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Python">
                    Python
                </label>   
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="HTML">
                    HTML
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Css">
                    Css
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Javascript">
                    Javascript
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Php">
                    PHP
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Nodejs">
                    Nodejs
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="C++">
                    C++
                </label>
                <label class="form-check col-4">
                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="TypeScript">
                    TypeScript
                </label>
            <br>
            <div>
                <label for="">Seleccione su nivel de ingles:</label>
                <select class="form-select" name="nivelEstudio" aria-label="Default select example">
                    <option selected></option>
                    <option value="Basico">Basico</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary"><a href="pause.php" style="color:white; text-decoraction:none;">Enviar</a></button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</body>
</html>