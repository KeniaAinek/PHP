<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sesiones con PHP</title>
        <style>
            form{
                margin: 0 auto;
                text-align: center;
                width: 400px;
            }
            span{
                color: red;
                font-size: 2em;
            }
        </style>
    </head>
    <body>
        <form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
            <?php
              error_reporting(E_ALL ^ E_NOTICE);
              if($_GET["error"]=="si"){
                echo "<span>Verifica tus datos</span>";
              }else{
                echo "<span>Introduce tus datos</span>";
              }
            ?>
            <br><br>
            <label for="usuario_txt">Usuario:</label>
            <input type="text" name="usuario_txt"/>
            <br><br>
            <label for="password_txt">Password:</label>
            <input type="password" name="password_txt"/>
            <br><br>
            <input type="submit" name="entrar_btn" value="Entrar" />
        </form>
    </body>
</html>