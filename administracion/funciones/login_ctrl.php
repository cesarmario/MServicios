<?PHP
session_start();
if(!isset($_SESSION['sesion_UserId'])) {?>
     <script> location.replace("user_login.php"); </script>
<?PHP } ?>