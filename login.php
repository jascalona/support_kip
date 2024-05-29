<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/log.css">

    <title>Login</title>
</head>
<body>



            <div class="container-login">
                <form action="" method="POST">
                    <div class="row">
                        <h6>Inicar Sesion</h6>
                        <small>Note: To access the technical documentation you must enter the partner portal</small>

                        <?php
                        include "./CONTROLLER/validar.php"

                        ?>                    


                        <div class="inpus">
                            <input type="text" name="user" id="user" placeholder="Ingrese su Usuario" required>
                            <br>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Clave de Intranet" required>
                        </div>
                    
                        <div class="btn-l">
                            <button name="btn-i" type="submit" value="Ingresarasasa"><a href="">Ingresar</a></button>
                        </div>
                    </>
                </form>
            </div>   




    
</body>
</html>