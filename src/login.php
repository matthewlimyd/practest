<?php
include "head.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    include "nav.inc.php";
    ?>
    <main class="container">
        <h2>Login</h2>
        <form action="process_login" method="post" class="form-validate">
            <div class="form-group">
                <label for="password">Password:</label> <i class="bi bi-eye-slash" id="togglePwd"></i>
                <input class="form-control" type="password" id="password" required name="password" placeholder="Enter password" required>
            </div>

            <?php
            if (isset($_GET['error'])) {
                echo '<div style="color:red;">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            ?>

            <div class="form-group">
                <button class="btn btn-primary submit-button" type="submit" name="Login">Login</button>
            </div>
        </form>
    </main>
</body>

</html>