<nav class="navbar navbar-expand-md navbar-dark">
    <a class="navbar-brand" href="index">
        <img src="images/adversary.png" width="40" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link bi bi-house-heart-fill" href="index"> Home</a>
            </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                echo "<li class='nav-item'><a class='nav-link bi bi-box-arrow-left' href='logout'> Logout</a> </li>";
            } else {
                echo "<li class='nav-item'><a class='nav-link bi bi-box-arrow-in-right' href='login'> Login</a> </li>";
            }
            ?>
        </ul>
    </div>
</nav>

<header class="jumbotron text-center">
    <h1>ICT3203 Practical</h1>
</header>