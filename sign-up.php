<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/up.css" />
    <title>Sign-In</title>
</head>

<body>
    <section class="sign">
        <a href="/index.php">
            <img src="img/logo.png" alt="хз">
        </a>
        <form class="box">
            <h1>Регистрация</h1>
            <p>Уже зарегистрированы?</p>
            <a href="sign-in.php">Вход</a>
        </form>
        <form class="box2" enctype="multipart/form-data" action="./functions/registration.php" method="POST">
            <h2>Login:</h2>
            <input type="text" required name="login" placeholder="">
            <h2>Name:</h2>
            <input type="text" required name="name" placeholder="">
            <h2>E-mail:</h2>
            <input type="text" required name="email" placeholder="">
            <h2>Avatar</h2>
            <input type="file" name="avatar" required>
            <h3>Password</h3>
            <input type="password" required name="password" placeholder="">
            <h4>Repeat Password</h4>
            <input type="password" required name="password_confirm" placeholder="">
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