<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="/css/main6.css" />
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

  <section class="o_nas">
    <div class="kekno">
      <img src="img/o_nas.png" alt="нет настроения">
      <h1>Fotya Land - это</h1>
      <p>один из способов найти подходящих аниматоров и квест для вашего праздника. С 2022 года наша миссия – делать
        детские праздники по-настоящему яркими событиями. Такими, которые они запомнят на всю жизнь. Построения
        сюжета в фольклорных произведениях, путешествие персонажей к определённой цели через преодоление
        трудностей например, миф о Персее или даже 12 подвигах. Обычно во время этого путешествия героям
        приходится преодолевать многочисленные трудности и встречать множество персонажей, которые помогают либо
        мешают им. Герои могут выполнять квест как из личной выгоды, так и из других мотивов. Выполнение некоторых
        квестов связано с решением нравственно-этических задач.</p>
    </div>
  </section>

  <section class="under-header">
    <img class="imgl" src="/img/bckheadl.png" alt="No Ethernet" />
    <img class="imgr" src="/img/bckheadr.png" alt="No Ethernet" />
  </section>

  <section class="chto">
    <div class="chto_est">
      <img src="img/spider-man.png" alt="нет настроения">
      <h1>Что у нас для этого есть?</h1>
      <p>○ Увлекательные мастер классы<br>
        ○ Профессиональные аниматоры<br>
        ○ Объемные декорации<br>
        ○ Десятки праздничных сценариев<br>
        ○ Аутентичный инвентарь и костюмы</p>
    </div>
  </section>

  <section class="photografi">
    <div class="foto">
      <h1>Фотографии</h1>
      <img src="img/photografi.png" alt="нет настроения">
    </div>
  </section>
  <section class="kontakt">
    <div class="kontik">
      <img src="img/kontaktik.png" alt="нет настроения">
      <h1>Контакты</h1>
      <p>E-mail: fotyaland@mail.ru<br>
        8 (961) 815-97-70<br>
        г. Москва Ул. Н. Бреженская 68к2<br>
      </p>
    </div>
  </section>
  <section class="maps">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A183e4b1755642b09d85276db1439ff49be85e4812b1ddd7772f5806f9c6b81bb&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
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
  <script src="/js/burger.js"></script>
</body>

</html>