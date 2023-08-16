<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../PROYECTO PHP2/assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon-96x96.png" type="image/png" />
    <title>Conversiones Grupo 1</title>
</head>
<body>
    <?php 
        include "./header.php";
    ?>
    <main class="container">
       <?php
            require_once "./Clases/convertidor.php";
       ?>
        <h1 class="text-center fw-bold py-4">CALCULADORA DE MEDIDAS</h1>
        <form  action="" method="POST">
            <div class="row ">
                <div class="col-12 col-lg-8 col-sm-6">
                    <div class="llenar"> 
                        <label for="categoria">Unidad de Medida:</label>
                        <select name="categoria" id="categoria" >
                            <option value="">--Seleccione Medida--</option>
                            <option value="longitud">Longitud</option>
                            <option value="masa">Masa</option>
                            <option value="volumen">Volumen</option>
                            <option value="datos">Datos</option>
                            <option value="moneda">Moneda</option>
                            <option value="tiempo">Tiempo</option>
                        </select>   
                    </div>              
                    <div class="llenar">            
                        <label for="">Valor a Convertir:</label>
                        <input type="number" name="value" id="value" placeholder="cantidad a convertir" required>
                    </div>
                    <div class="llenar">
                        <label for="uni">De Unidad Inicial:</label>
                        <select name="uni" id="uni">
                            <option value="">--Seleccione--</option>
                        </select>  
                    </div>
                    <br>
                    <div class="llenar">        
                        <label for="unf"> A Unidad Final:      </label>
                        <select name="unf" id="unf" >
                        <option value="">--Seleccione--</option>
                        </select>  
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-sm-6">  
                    <input type="submit" class="buton btn btn-primary btblue" value="CALCULAR">
                    <input type="button" class="buton btn btn-danger mt-5 btred" value="LIMPIAR" onclick="clean()">
                </div>
            </div>
        </form>         
    </main>    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="./assets/js/unidades.js"></script>
<script src="./assets/js/limpiar.js"></script>
</html>