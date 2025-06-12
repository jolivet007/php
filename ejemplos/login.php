<?php
session_start();
$host = "localhost";
$dbname = "usuarios_iti";
$username = "tc1";
$password = "tc12025";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
        $stmt->execute([$user, $pass]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $_SESSION["username"] = $result["username"];
            $_SESSION["role"] = $result["role"];
            echo "Bienvenido " . htmlspecialchars($result["username"]) . " - Rol: " . $result["role"];
        } else {
            echo "Credenciales incorrectas.";
        }
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
