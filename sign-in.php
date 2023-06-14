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
    <a href="/index.php" class="logo">
        <img src="img/logo.png" alt="хз">
    </a>
    <section class="sign">
        <form action="./functions/login.php" method="POST">
            <h1>Вход</h1>
            <div>
                <p>Не зарегистрированы?</p>
                <a href="sign-up.php">Зарегистрироваться</a>
            </div>
            <div>
                <div>
                    <label>Login:</label>
                    <input type="text" required name="login" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" required name="password" required>
                </div>
                <div class="check">
                    <input type="checkbox" required>
                    <p><a href="/politica.html">Соглашаюсь со всеми условиями</a>
                    </p>
                </div>
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
            </div>
        </form>
    </section>
</body>

</html>