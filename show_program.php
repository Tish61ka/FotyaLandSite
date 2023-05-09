<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/main3.css" />
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
  <section class="under-header">

    <div class="container">
      <div>
        <h1>Шоу-программы и квесты</h1>
        <p>
          В один миг сказка может превратиться в увлекательный перфоманс или квест
          и добавить волшебства этому дню. Больше тайн, больше загадок, больше игр и
          головоломок — чтобы никому не было скучно на нашем празднике!

        </p>
        <button>Оставить заявку</button>
      </div>
    </div>
  </section>
  <section class="age-contaier">
    <ul class="ageblock" style=" display: flex; flex-direction: row;">
      <li>1 годик</li>
      <li>2-4 года</li>
      <li>5-7 лет</li>
      <li>от 8 лет и старше</li>
    </ul>
  </section>
  <section class="show">

    <div class="container grid-show">
      <div>
        <h2>Шоколадная фабрика</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Дикий запад</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <button>Подробнее</button>
        <h2>Изумрудный город</h2>
      </div>
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
    <div class="container grid-show invisible">
      <div>
        <h2>Шоколадная фабрика</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Дикий запад</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <button>Подробнее</button>
        <h2>Изумрудный город</h2>
      </div>
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
    <div class="container grid-show invisible">
      <div>
        <h2>Шоколадная фабрика</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Дикий запад</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <button>Подробнее</button>
        <h2>Изумрудный город</h2>
      </div>
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
    <div class="container grid-show invisible">
      <div>
        <h2>Шоколадная фабрика</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Дикий запад</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <button>Подробнее</button>
        <h2>Изумрудный город</h2>
      </div>
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
      <img src="/img/tarifimg2.png" alt="No Ethernet" />
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
  <script src="/js/agecontrol.js"></script>
  </script>
</body>

</html>