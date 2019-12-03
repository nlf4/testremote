<?php
$login_form = true;
require_once "lib/autoload.php";

//redirect naar homepage als de gebruiker al ingelogd is
if ( isset($_SESSION['usr']) ) { $_SESSION["msg"][] = "U bent al ingelogd!"; header("Location: steden.php"); exit; }

BasicHead();
ShowMessages();
?>
<body>

<div class="jumbotron text-center">
    <h1>Login</h1>
</div>

<div class="container">
    <div class="row">

        <?php
        print LoadTemplate("login");
        ?>

    </div>
</div>

</body>
</html>