<? session_start();
require('./functions/connect.php');
$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM `animators` WHERE `id` = '$id'");
$animator = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/main5.css" />
  <title>FotyaLand</title>
</head>

<body>
  <header>
    <img width="1132" height="593" src="<?= $animator['right_img'] ?>" alt="No Ethernet" />
    <img class="logoa1" src="<?= $animator['left_img'] ?>" alt="No Ethernet" />
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
  <section class="under-header">
    <div class="container">
      <div>
        <h1><?= $animator['title'] ?></h1>
        <button>Оставить заявку</button>
      </div>
    </div>
  </section>
  <section class="osnova">
    <img class="imga2" src="<?= $animator['bottom_first'] ?>" alt="No Ethernet" />
    <img class="imga3" src="<?= $animator['bottom_second'] ?>" alt="No Ethernet" />
    <div class="container">
      <div>
        <h1>Программа и активности</h1>
        <p><?= $animator['text'] ?></p>
      </div>
    </div>
  </section>


  <section class="show">
    <h1>Похожее</h1>
    <div class="container grid-show">

      <div>
        <h2>Тайная комната</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Звездный путь</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Подземные расследования</h2>
        <button>Подробнее</button>
      </div>
    </div>
  </section>

  <section class="tarif" style="background-image: url(<?= $animator['bottom_page_img_left'] ?>);">

    <div class="bottom-div-tarif container">
      <div>
        <h1>Не нашли подходящего персонажа?</h1>
        <p>
          Оставьте заявку на сайте и расскажите, что нравится вашему ребенку.
          Мы подберем любимого героя для вашего праздника.
        </p>
        <form action="./functions/otziv.php" method="post">
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
      <img src="<?= $animator['bottom_page_img_right'] ?>" alt="No Ethernet" />
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
  <script src="/js/scroll.js"></script>
  <script src="/js/slider.js"></script>
  <script text="java/script" src="/examples/libs/ui-components/itc-slider/itc-slider.js" defer>
  </script>
</body>

</html>