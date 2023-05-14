<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <title><?= $_SESSION['user']['login'] ?></title>
</head>

<body>
    <header class="container">
        <nav>
            <ul>
                <a href="index.php">
                    <li>
                        <img src="/img/logo.png" alt="No Ethernet" />
                    </li>
                </a>
                <a href="/show_program.php">
                    <li>
                        <p>Шоу-программы и квесты</p>
                    </li>
                </a>
                <a href="/animators.php">
                    <li>
                        <p>Аниматоры</p>
                    </li>
                </a>
                <a href="/otzivi.php">
                    <li>
                        <p>Отзывы</p>
                    </li>
                </a>
                <a href="/onas.php">
                    <li>
                        <p>О нас</p>
                    </li>
                </a>

                <? require('./header.php') ?>

            </ul>
        </nav>
    </header>
    <div class="mobile-header container">
        <a href="index.php">
            <img src="/img/logo.png" alt="No Ethernet" />
        </a>
        <div class="elem" onclick="burger()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="burger">
            <ul>
                <? require('./header.php') ?>
                <a href="/show_program.php">
                    <li>
                        <p>Шоу-программы и квесты</p>
                    </li>
                </a>
                <a href="/animators.php">
                    <li>
                        <p>Аниматоры</p>
                    </li>
                </a>
                <a href="/otzivi.php">
                    <li>
                        <p>Отзывы</p>
                    </li>
                </a>
                <a href="/onas.php">
                    <li>
                        <p>О нас</p>
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="info-me">
                <!-- <h1><?= $_SESSION['user']['name'] ?></h1> -->

                <form action="./functions/edit_avatar.php" method="post" enctype="multipart/form-data">
                    <div class="border-img">
                        <img width="200" src="<?= $_SESSION['user']['avatar'] ?>" alt="No Ethernet">
                    </div>
                    <div class="change-avatar">
                        <input type="file" name="avatar" required>
                        <p>Выберите фото</p>
                    </div>
                    <button type="submit">Изменить Аватар</button>
                </form>
                <form action="./functions/edit_profile.php" method="post">
                    <div>
                        <label for="">Имя:</label>
                        <input type="text" name="name" value="<?= $_SESSION['user']['name'] ?>">
                    </div>
                    <div>
                        <label for="">Login:</label>
                        <input type="text" name="login" value="<?= $_SESSION['user']['login'] ?>">
                    </div>
                    <div>
                        <label for="">E-mail:</label>
                        <input type="text" name="email" value="<?= $_SESSION['user']['email'] ?>">
                    </div>
                    <div>
                        <label for="">Пароль:</label>
                        <input type="password" name="password">
                    </div>

                    <!-- <label for="">Avatar</label>
        <input type="file" name="avatar" required> -->

                    <button type="submit">Редактировать</button>
                    <!-- <?php
                            if (isset($_SESSION['message'])) {
                            ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                        </div>
                    <?
                            }
                            unset($_SESSION['message']);
                    ?> -->
                </form>

                <a href="./functions/logout.php">Выход</a>
            </div>
            <div class="reviews">
                <h2>Мои отзывы</h2>
                <div>
                    <?
                    require('./functions/connect.php');
                    $id_user = $_SESSION['user']['id'];
                    $sql = $connect->query("SELECT * FROM `reviews` WHERE `id_user` = '$id_user'");
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    ?><div>
                            <p><?= $row['text'] ?></p>
                            <div>
                                <img width="200" src="<?= $row['img'] ?>" alt="">
                            </div>
                            <p class="name">Имя: <?= $row['name'] ?></p>
                            <p class="party">Мероприятие:<br> <?= $row['event'] ?></p>
                            <p>Статус: <?= $row['status'] ?></p> <br>
                            <a href="./functions/delete_review.php?id=<?= $row['id'] ?>">+</a>
                        </div>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="first-footer-div">
                <img class="logo-footer" src="/img/logo.png" alt="No Ethernet" />
                <p class="first-footer-p">
                    Мы гарантируем вашу безопасность, а также не распространяем ваши
                    личные данные, наш сервис гарантирует это!
                </p>
                <div class="social">
                    <a href=""><img src="/img/whatsapp.png" alt="No Ethernet" /></a>
                    <a href=""><img src="/img/telegram.png" alt="No Ethernet" /></a>
                    <a href=""><img src="/img/inst.png" alt="No Ethernet" /></a>
                    <a href=""><img src="/img/twit.png" alt="No Ethernet" /></a>
                </div>
            </div>
            <div class="first-footer-div">
                <h1>Контакты</h1>
                <div>
                    <img src="/img/metka.png" alt="No Ethernet" />
                    <p>ул. Бориса Алексеева, 59</p>
                </div>
                <div>
                    <img src="/img/mail.png" alt="No Ethernet" />
                    <p>fotyaland@mail.ru</p>
                </div>
                <div>
                    <img src="/img/phone.png" alt="No Ethernet" />
                    <p>+7 (961) 815 - 97 - 70</p>
                </div>
                <p>+7 (961) 815 - 97 - 70</p>
            </div>
            <div class="first-footer-div">
                <h1>Полезные ссылки</h1>
                <ul>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Аниматоры</a></li>
                    <li><a href="">Готовые решения</a></li>
                    <li><a href="">Отзывы</a></li>
                </ul>
            </div>
            <div class="first-footer-div">
                <h1>Подписка</h1>
                <p>Подпишитесь на наши соц. сети</p>
                <p>Оставайтесь всегда с улыбкой!</p>
                <form action="">
                    <input type="text" name="" id="" placeholder="Your Email" />
                    <button type="submit">
                        <img src="/img/mailv.png" alt="No Ethernet" />
                    </button>
                </form>
                <p>*Мы против спам рассылок.</p>
            </div>
        </div>
        <hr />
        <div class="footer-bot container">
            <div>
                <a href="">Условия соглашения</a>
                <p>|</p>
                <a href="">Конфиденциальность</a>
            </div>
            <div>
                <p>Copyright Ⓒ 2022 FOTYALAND by ‘’Sav’’ inc.</p>
            </div>
        </div>
    </footer>
</body>
<script src="/js/burger.js"></script>

</html>