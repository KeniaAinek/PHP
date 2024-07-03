<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envio de correo con la funcion mail de PHP</title>
    <style> 
    form{
        margin: 1em auto;
        text-align: center;
    }
    span{
        color: #f60;
        font-size: 1.5em;
    }
</style>
<script> 
    function validarForm(){
        let verificar = true;
        let expRegEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if(!document.mail_frm.de_txt.value){
            alert("El campo 'De' es requerido");
            verificar = false;
        } else if(!expRegEmail.exec(document.mail_frm.de_txt.value)){
            alert("El correo no es válido");
            verificar = false;
        } else if(!document.mail_frm.para_txt.value){
            alert("El campo 'Para' es requerido");
            verificar = false;
        } else if(!expRegEmail.exec(document.mail_frm.para_txt.value)){
            alert("El correo no es válido");
            verificar = false;
        } else if(!document.mail_frm.asunto_txt.value){
            alert("El campo 'Asunto' es requerido");
            verificar = false;
        } else if(!document.mail_frm.mensaje_txt.value){
            alert("El campo 'Mensaje' es requerido");
        }

        if(verificar){
            document.mail_frm.submit();
        }
    }

    window.onload = function(){
        document.mail_frm.enviar_btn.onclick = validarForm;
    }
</script>
</head>
<body>
    <form name="mail_frm" action="enviar-mail.php" method="post" enctype="application/x-www-form-urlencoded">
        <label for="nombre">De:</label>
        <input type="text" name="de_txt" id="nombre">
        <br><br>
        <label for="nombre">Para:</label>
        <input type="text" name="para_txt" id="nombre">
        <br><br>
        <label for="nombre">Asunto:</label>
        <input type="text" name="asunto_txt" id="nombre">
        <br><br>
        <label for="nombre">Mensaje:</label><br>
        <textarea name="mensaje_txt" id="nombre"></textarea> 
        <br><br>
        <input type="button" name="enviar_btn" value="Enviar"/>
        <?php 
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if(isset($_GET['respuesta'])){
            echo "<span>".$_GET['respuesta']."</span>";
        }
        
        ?>
    </form>
</body>
</html>