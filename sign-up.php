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
    <a href="/index.php" class="logo">
        <img src="img/logo.png" alt="хз">
    </a>
    <section class="sign">
        <form enctype="multipart/form-data" action="./functions/registration.php" method="POST">
            <h1>Регистрация</h1>
            <div>
                <p>Уже зарегистрированы?</p>
                <a href="sign-in.php">Вход</a>
            </div>
            <div>
                <div>
                    <label>Login:</label>
                    <input type="text" required name="login" required>
                </div>
                <div>
                    <label>Name:</label>
                    <input type="text" required name="name" required>
                </div>
                <div>
                    <label>E-mail:</label>
                    <input type="text" required name="email" required>
                </div>
                <div>
                    <label>Avatar</label>
                    <input type="file" name="avatar" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" required name="password" required>
                </div>
                <div>
                    <label>Repeat Password</label>
                    <input type="password" required name="password_confirm" required>
                </div>
                <div class="check">
                    <input type="checkbox" required required>
                    <p><a href="/politica.html" target="_blank">Я принимаю условия политики обработки персональных данных</a>
                    </p>
                </div>
                <input type="submit" value="Зарегистрироваться">
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