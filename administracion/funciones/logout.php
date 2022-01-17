<?PHP session_start();
error_reporting (0);
// Destruir todas las variables de sesión.
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>
<script> location.replace("../user_login.php"); </script>

