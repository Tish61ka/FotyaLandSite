<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Admin</title>
</head>

<body>
    <div class="contain">
        <aside>
            <img src="/img/logo.png" alt="No Ethernet">
            <div class="navigation">
                <div class="activated" onclick="Application()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.46001 21.24L21.25 6.45L17.55 2.75L2.75999 17.54L2.75 21.25L6.46001 21.24Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.3501 6.12891L17.8701 8.6489" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>Заявки</p>
                </div>
                <div onclick="Review()">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.8865 25H7.11352C5.40108 25 4 23.6243 4 21.9143V10.0857C4 8.38857 5.38811 7 7.11352 7H24.8865C26.5989 7 28 8.37571 28 10.0857V21.9143C28 23.6243 26.6119 25 24.8865 25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27 8L17.8122 17.2193C16.7824 18.2602 15.231 18.2602 14.1878 17.2193L5 8" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 16L27 24" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 24L13 16" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>Отзывы</p>
                </div>
                <div onclick="User()">
                    <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.13069 3.04777C6.18691 3.04777 7.14468 3.46771 7.83956 4.14585C8.53946 4.82867 8.97247 5.77204 8.97247 6.81319C8.97247 7.85401 8.53946 8.79737 7.83956 9.48053C7.54319 9.76954 7.19926 10.0117 6.81984 10.1942L6.97054 10.2313L7.00135 10.2427C7.34862 10.3707 7.63729 10.5049 7.91089 10.6556C8.18214 10.805 8.42795 10.9634 8.69719 11.1456L8.73738 11.1757C8.99892 11.3837 9.19483 11.5695 9.35792 11.7795C9.52871 11.9989 9.65496 12.2313 9.77083 12.5243C9.84819 12.7004 9.91181 12.8726 9.96472 13.0444C10.098 12.68 10.1556 12.6013 10.3803 12.2922L10.4744 12.1633C10.5233 12.0966 10.591 12.0119 10.6589 11.9269C10.7473 11.8167 10.8368 11.7048 11.0454 11.3877L11.0896 11.32L12.0728 10.3984L13.563 9.57966L14.9511 9.17278L15.3202 9.16876C14.5302 8.94907 13.8232 8.53449 13.2573 7.98193C12.3889 7.13434 11.8518 5.96426 11.8518 4.67262C11.8518 3.38098 12.3889 2.21056 13.257 1.36364C14.1203 0.521078 15.3105 0 16.6232 0C17.9359 0 19.1261 0.521078 19.9894 1.36364C20.8575 2.21056 21.3943 3.38098 21.3943 4.67262C21.3943 5.96426 20.8575 7.13434 19.9891 7.98193C19.3508 8.60548 18.5324 9.05289 17.6185 9.24343L17.9601 9.26755C18.1262 9.2873 18.2708 9.29032 18.4148 9.29367C18.8053 9.30204 19.1968 9.31075 19.6814 9.48489C19.9439 9.55789 20.1458 9.62621 20.3424 9.72232C20.5594 9.82848 20.7459 9.95506 20.9633 10.1389C21.2242 10.3743 21.5001 10.6342 21.7489 10.8817C21.8099 10.9497 21.8795 11.014 21.9488 11.0776C22.1364 11.2504 22.3246 11.4235 22.5044 11.7283L23.2053 12.6663L23.2552 12.7286C23.562 13.0973 23.7616 13.3391 23.8128 13.9361L23.933 14.8631L24 16.0677L22.7151 16.1383L22.6487 14.9508L22.5279 14.042C22.5111 13.8487 22.4133 13.7302 22.2636 13.549C22.2636 13.5427 22.1873 13.4543 22.1722 13.4375L21.4492 12.4697L21.417 12.4121C21.3343 12.2621 21.2054 12.1435 21.0768 12.0253C20.9864 11.9419 20.8953 11.8579 20.8032 11.7571L20.1221 11.1131C19.9874 11.0006 19.8833 10.9279 19.7781 10.8763C19.6589 10.8184 19.5129 10.7708 19.3083 10.7149L19.2581 10.6998C18.96 10.591 18.6747 10.5846 18.3897 10.5786C18.1945 10.5743 17.9986 10.5699 17.8114 10.5481L16.3225 10.4433L15.144 10.4557L14.0701 10.7705L12.8317 11.451L12.0735 12.1616C11.8689 12.4694 11.7647 12.5996 11.6619 12.7282C11.6291 12.7691 11.5959 12.8103 11.5146 12.9215L11.4235 13.048C11.2597 13.2738 11.2346 13.3079 11.1187 13.6384L10.7457 14.7549L10.4145 16.205L9.66668 16.0365H8.92793V14.3491C8.88975 14.0959 8.85157 13.8652 8.80402 13.6672C8.75278 13.4543 8.68547 13.2453 8.58635 13.0283L8.57128 12.9981C8.50095 12.8203 8.42962 12.686 8.33987 12.5705C8.24711 12.4513 8.12622 12.3367 7.96112 12.2035C7.72135 12.0421 7.50702 11.9034 7.29102 11.7845C7.08038 11.6687 6.85735 11.5642 6.58911 11.464C6.33861 11.4021 6.12161 11.3683 5.90461 11.3509C5.65077 11.3308 5.40965 11.3298 5.13069 11.3334H5.11294C4.81054 11.3277 4.50848 11.3599 4.2091 11.4135V11.4162C3.88258 11.4744 3.58286 11.5494 3.29486 11.6281C3.11068 11.6981 2.93654 11.8106 2.76809 11.9469C2.57353 12.1037 2.38164 12.2986 2.18808 12.5012L2.16564 12.5239C1.98849 12.6931 1.81267 12.8695 1.66633 13.0541C1.5384 13.2135 1.43392 13.3802 1.37364 13.553L1.36862 13.5681C1.26614 13.8441 1.28322 14.1836 1.30131 14.544C1.30633 14.6511 1.31202 14.7593 1.31537 14.9117L0.0304271 14.9368C0.0284178 14.8527 0.0220551 14.7268 0.0160272 14.6046C-0.00841928 14.112 -0.0318611 13.6471 0.164045 13.1194C0.277905 12.7989 0.453049 12.5146 0.658332 12.2554V12.253C0.844192 12.0183 1.0555 11.805 1.26648 11.6027C1.4875 11.3713 1.7112 11.1462 1.9617 10.944C2.23496 10.7229 2.53401 10.5364 2.88229 10.4108L2.93018 10.3958C3.13379 10.3398 3.33739 10.2859 3.53765 10.239C3.12039 10.0518 2.74331 9.79365 2.42216 9.4802C1.72226 8.79704 1.28925 7.85401 1.28925 6.81319C1.28925 5.77238 1.72259 4.82901 2.42216 4.14585C3.11671 3.46771 4.07514 3.04777 5.13069 3.04777ZM6.94241 5.06778C6.4806 4.61703 5.84031 4.33807 5.13069 4.33807C4.42175 4.33807 3.78111 4.61736 3.31931 5.06812C2.86253 5.51385 2.57956 6.13137 2.57956 6.81319C2.57956 7.49501 2.8622 8.1122 3.31898 8.55793C3.78078 9.00902 4.42175 9.28798 5.13069 9.28798C5.84031 9.28798 6.48094 9.00902 6.94274 8.55826C7.39952 8.1122 7.68217 7.49535 7.68217 6.81319C7.68217 6.13103 7.39952 5.51384 6.94241 5.06778ZM19.0923 2.28558C18.462 1.67073 17.5893 1.2903 16.6232 1.2903C15.6571 1.2903 14.784 1.67073 14.1541 2.28558C13.5289 2.89573 13.1421 3.73997 13.1421 4.67262C13.1421 5.60527 13.5292 6.44951 14.1541 7.05966C14.784 7.67484 15.6571 8.05561 16.6232 8.05561C17.5893 8.05561 18.462 7.67484 19.0923 7.05966C19.7172 6.44951 20.1043 5.60527 20.1043 4.67262C20.1043 3.73997 19.7175 2.89573 19.0923 2.28558Z" fill="black" />
                    </svg>
                    <p>Пользователи</p>
                </div>
            </div>
            <a href="./functions/logout.php">Выход</a>
        </aside>
        <section>
            <div class="application-section">
                <h1>Заявки</h1>
                <table>
                    <thead>
                        <tr>
                            <td>Имя</td>
                            <td>Номер телефона</td>
                            <td>Статус</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                        require('./functions/connect.php');
                        $sql = $connect->query("SELECT * FROM `otziv`");
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <tr>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['number'] ?></td>
                                <td>
                                    <button disabled class="treatment">В обработке</button>
                                    <button class="active">Активная</button>
                                    <button class="complite">Завершено</button>
                                </td>
                            </tr>
                        <?
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="review-section">
                <h1>Отзывы</h1>
                <div>
                    <?
                    require('./functions/connect.php');
                    $sql = $connect->query("SELECT * FROM `reviews`");
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div>
                            <p>Отзыв: <?= $row['text'] ?></p>
                            <div>
                                <img width="200" src="<?= $row['img'] ?>" alt="">
                            </div>
                            <p class="name">Имя: <?= $row['name'] ?></p>
                            <p class="party">Мероприятие: <?= $row['event'] ?></p>
                            <p>Статус: <?= $row['status'] ?></p>
                            <?
                            if ($row['status'] == 'Проверяется') {
                            ?>
                                <a href="./functions/accept_review.php?id=<?= $row['id'] ?>">Одобрить</a>
                                <a href="./functions/delince_review.php?id=<?= $row['id'] ?>">Отклонить</a>

                            <?
                            }
                            ?>
                        </div>
                    <?
                    }
                    ?>
                </div>

            </div>
            <div class="user-section">
                <h1>Пользователи</h1>
                <table>
                    <thead>
                        <tr>
                            <td>Аватар</td>
                            <td>Имя</td>
                            <td>Login</td>
                            <td>Почта</td>
                            <td>Действия</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                        require('./functions/connect.php');
                        $id_user = $_SESSION['admin']['id'];
                        $sql = $connect->query("SELECT * FROM `users` WHERE `id` != '$id_user'");
                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <tr>
                                <td>
                                    <img src="<?= $row['avatar'] ?>" alt="">
                                </td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['login'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><a href="./functions/delete_user.php?id=<?= $row['id'] ?>"><button>Удалить</button></a></td>
                            </tr>
                        <?
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </section>
    </div>
    <a href="./index.php">Главная</a>
</body>
<script>
    if (document.querySelector('.application-section table tbody td button').getAttribute('disabled') != null) {
        document.querySelector('.application-section table tbody td button').style.cursor = 'auto';
    }
</script>
<script src="/js/admin.js"></script>

</html>