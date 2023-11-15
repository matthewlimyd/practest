<?php
session_start(); 

# If user not in session and tries to redirect to welcome 😠
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login");
    exit;
}
include "head.inc.php";

# Casting the password into session, since only password is used, though not secure 💀
$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    include "nav.inc.php";
    ?>
    <main class="container">
        <h2>Welcome</h2>
        <p>Your password is: <?php echo htmlspecialchars($password); ?></p>
        <form action="logout" method="post">
            <button class="btn btn-primary submit-button" type="submit">Logout</button>
        </form>
    </main>
</body>

</html>