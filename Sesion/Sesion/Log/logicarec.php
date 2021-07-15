<?php
try{
if(isset($_POST["email"] && !empty($_POST["email"]) )){
    $pass = substr(md5(microtime()), 1, 10  );
    $mail = $_POST["email"];

    $dbhost= 'localhost';
    $dbuser= 'root';
    $dbpass= '';
    $dbname= 'inicio_sesion';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn){
        die("No hay conexion: ".mysqli_connect_error());
    }

    $sql = "UPDATE usuarios SET Contra='$pass' WHERE Correo = '$mail'";

    if($conn->query($sql)== TRUE ){
        echo "EL USUARIO HA SIDO CAMBIADO CORRECTAMENTE";
    }else {
        echo "-ERROR-<br> JA QUE PENDJO PAPITO MEJOR SUICIDECE".$conn->error ;
    }

    $to = $_POST["email"];//a quien se el envia el mensaje AJAJ
    $from = "From: "."El amor de tu vida jsjs";
    $subject= "Nueva contraseña, ¿Pará que la olvida pedazo de ctm?";
    $message= "Aqui esta su contra bb 7u7".$pass;


}

}catch


?>
