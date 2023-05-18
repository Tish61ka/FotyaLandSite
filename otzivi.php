<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/main4.css" />
  <title>FotyaLand</title>
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
  <div class="modal-icon removed">
    <div class="modal-form">
      <img src="/img/cross.svg" onclick="closeModal()"></img> <!-- Тут должно быть свг крестик не забудь перенисти онклик в свг -->
      <h1>Оставить отзыв</h1>
      <p>Не зарегистрированы?</p>
      <a href="sign-up.html">Зарегистрироваться</a>
    </div>
    <form class="box2" action="./functions/review.php" enctype="multipart/form-data" method="POST">
      <h2>Ваше Имя:</h2>
      <input type="text" name="name" placeholder="" value="<?= $_SESSION['user']['name'] ?>">
      <h3>Мероприятие:</h3>
      <input type="text" name="event" placeholder="">
      <h4>Ваше фото:</h4>
      <div class="pod-form">
        <input type="file" name="img">
      </div>
      <h5>Отзыв:</h5>
      <textarea name="text"></textarea>

      <input type="submit" value="Отправить">
    </form>
    <!-- Здесь должна быть форма -->

  </div>
  <section class="under-header">
    <div class="container">
      <h1>Отзывы</h1>
      <p>
        Дети верят в сказку, чудо и супер-героев и мы поможем им побывать в мире
        сказок и поверить, что мечты по настоящему сбываются. Детские аниматоры
        Арчи Шоу это прирождённые профессиональные актёры, которые в
        мельчайших подробностях вживаются в самые разные роли.

      </p>
      <?
      if (empty($_SESSION['user']) && empty($_SESSION['admin'])) {
      ?>
        <button>Оставить отзыв</button>
      <?
      } else {
      ?>
        <button onclick="openModal()">Оставить отзыв</button>
      <?
      }
      ?>
    </div>
  </section>

  <section class="reviews">
    <div class="container inside-div-1">
      <div class="section-div">
        <?
        require('./functions/connect.php');
        $sql = $connect->query("SELECT * FROM `reviews` WHERE `status` = 'Одобрен'");
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <div>
            <p>
              <?= $row['text'] ?>
            </p>
            <div>
              <img src="<?= $row['img'] ?>" alt="No Ethernet" />
            </div>
            <p class="name"><?= $row['name'] ?></p>
            <p class="party">Мероприятие: <?= $row['event'] ?></p>
          </div>
        <?
        }
        ?>
        <!-- <div>
          <p>
            Здравствуйте ) Хочу поделиться своим впечатлением о данном фильме.
            Раньше я никогда не любила корейские фильмы и различные дорамы.
            Тут на просмотре и выбора фильма мне попался я наткнулась на LiSA
            Another Great Day. Изначально...
          </p>
          <img src="/img/reviews-2.png" alt="No Ethernet" />
          <h2>Ирина Заноская</h2>
          <p>Мероприятие: Тайная пещера</p>
        </div>
        <div>
          <p>
            Я с удовольствием хочу поделиться своими впечатлениями о фильме
            Lisa Another Great Day, который вышел в 2022 году, то есть совсем
            недавно) Я как и все фанаты Кореи, то есть всех, и актёров и
            певцов...
          </p>
          <img src="/img/reviews-3.png" alt="No Ethernet" />
          <h2>Владимир Южный</h2>
          <p>Мероприятие: Изумрудный лес</p>
        </div> -->
      </div>
    </div>
  </section>

  <!-- <section class="reviews">
    <div class="container inside-div-1">
      <div class="section-div">
        <div>
          <p>
            Я люблю смотреть разные фильмы, это могут быть, как криминальные
            детективы или мелодрама с романтическими страстями. Иногда, когда
            выходят новые кино-работы про звезд , то и уделяя и им пристальное
            внимание, хотя не очень люблю...
          </p>
          <img src="/img/reviews-1.png" alt="No Ethernet" />
          <h2>Леха Рыбак</h2>
          <p>Мероприятие: Шоколадная фабрика</p>
        </div>
        <div>
          <p>
            Здравствуйте ) Хочу поделиться своим впечатлением о данном фильме.
            Раньше я никогда не любила корейские фильмы и различные дорамы.
            Тут на просмотре и выбора фильма мне попался я наткнулась на LiSA
            Another Great Day. Изначально...
          </p>
          <img src="/img/reviews-2.png" alt="No Ethernet" />
          <h2>Ирина Заноская</h2>
          <p>Мероприятие: Тайная пещера</p>
        </div>
        <div>
          <p>
            Я с удовольствием хочу поделиться своими впечатлениями о фильме
            Lisa Another Great Day, который вышел в 2022 году, то есть совсем
            недавно) Я как и все фанаты Кореи, то есть всех, и актёров и
            певцов...
          </p>
          <img src="/img/reviews-3.png" alt="No Ethernet" />
          <h2>Владимир Южный</h2>
          <p>Мероприятие: Изумрудный лес</p>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="container inside-div-1">
      <div class="section-div">
        <div>
          <p>
            Я люблю смотреть разные фильмы, это могут быть, как криминальные
            детективы или мелодрама с романтическими страстями. Иногда, когда
            выходят новые кино-работы про звезд , то и уделяя и им пристальное
            внимание, хотя не очень люблю...
          </p>
          <img src="/img/reviews-1.png" alt="No Ethernet" />
          <h2>Леха Рыбак</h2>
          <p>Мероприятие: Шоколадная фабрика</p>
        </div>
        <div>
          <p>
            Здравствуйте ) Хочу поделиться своим впечатлением о данном фильме.
            Раньше я никогда не любила корейские фильмы и различные дорамы.
            Тут на просмотре и выбора фильма мне попался я наткнулась на LiSA
            Another Great Day. Изначально...
          </p>
          <img src="/img/reviews-2.png" alt="No Ethernet" />
          <h2>Ирина Заноская</h2>
          <p>Мероприятие: Тайная пещера</p>
        </div>
        <div>
          <p>
            Я с удовольствием хочу поделиться своими впечатлениями о фильме
            Lisa Another Great Day, который вышел в 2022 году, то есть совсем
            недавно) Я как и все фанаты Кореи, то есть всех, и актёров и
            певцов...
          </p>
          <img src="/img/reviews-3.png" alt="No Ethernet" />
          <h2>Владимир Южный</h2>
          <p>Мероприятие: Изумрудный лес</p>
        </div>
      </div>
    </div>
  </section> -->



  <section class="tarif">
    <div class="bottom-div-tarif container">
      <div>
        <h1>Не нашли подходящего персонажа?</h1>
        <p>
          Оставьте заявку на сайте и расскажите, что нравится вашему ребенку.
          Мы подберем любимого героя для вашего праздника.
        </p>
        <form action="./functions/otziv.php" method="POST">
          <div class="input">
            <label for="">Имя</label>
            <input type="text" name="name" placeholder="Как вас зовут?" />
          </div>
          <div class="input">
            <label for="">Телефон</label>
            <input type="text" name="number" placeholder="Введите телефон*" />
          </div>
          <div class="check" required>
            <div>
              <input type="checkbox" />
              <p>Соглашаюсь со всеми условиями реального и сказочного мира</p>
            </div>
            <button type="submit">Отправить</button>
          </div>
        </form>
      </div>
      <img src="/img/tarifimg4.png" alt="No Ethernet" />
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
  <script src="/js/modal.js"></script>

  <script src="/js/burger.js"></script>
</body>

</html>