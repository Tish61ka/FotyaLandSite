<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/in.css" />
    <title>Sign-In</title>
</head>

<body>
    <section class="sign">
        <a href="/index.php">
            <img src="img/logo.png" alt="хз">
        </a>
        <form class="box">
            <h1>Вход</h1>
            <p>Не зарегистрированы?</p>
            <a href="sign-up.php">Зарегистрироваться</a>
        </form>
        <form class="box2" action="./functions/login.php" method="POST">
            <h2>Login:</h2>
            <input type="text" required name="login" placeholder="">
            <h3>Password</h3>
            <input type="password" required name="password" placeholder="">
            <input type="checkbox" required placeholder="">
            <p>Соглашаюсь со всеми условиями<br>
                реального и сказочного мира
            </p>
            <input type="submit" value="Войти">
            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                </div>
            <?
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </section>
</body>

</html>