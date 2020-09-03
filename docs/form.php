<?php



if (isset($_POST["submit"])) {
    $Name = $_POST["Name"];
    $Telefono = $_POST["Number"];
    $Correo = $_POST["Email"];
    $Mensaje = $_POST["Coment"];

    $Destino = "helopython123@gmail.com";
    $Asunto = "Te ha llegado un correo de tu pagina! de parte de:".$Name;
    $txt = $Mensaje.".\n\n El correo del remitente es:".$Correo;
    mail($Destino,$Asunto,$txt,$Correo);
    header("Location: index.php?mailsend")
}