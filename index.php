<? session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/main.css" />
  <title>FotyaLand</title>
</head>

<body>
  <header>
    <img src="/img/backhead.png" alt="No Ethernet" />
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

  <img class="mobile-back" src="/img/backhead.png" alt="No Ethernet" />
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
    <img src="/img/EllipseBack.png" alt="No Ethernet" />
    <div class="container">
      <div>
        <h1>ОРГАНИЗАЦИЯ ДЕТСКИХ ПРАЗДНИКОВ</h1>
        <p>
        FOTYA LAND украсит ваш праздник яркими персонажами. Закажите аниматоров на детский день рождения в Астрахани. 
        </p>
        <a href="/show_program.php">
        <button>Подобрать квест</button>
      </a>
      </div>
    </div>
  </section>
  <div class="Backelement-1">
    <img src="img\Backelement-1.png" alt="No Ethernet" />
  </div>
  <section class="birthay-in-details container">
    <div>
      <h1>Немного о празднике</h1>
      <h3>Уникальные костюмы</h3>
      <p>
      Компания занимается разработкой костюмов героев из детских книг и мультфильмов. 
      Все образы в точности передают характер и настроение персонажей, благодаря внимательному 
      подходу к деталям. Костюмы создаются для детских праздников и будут прекрасным украшением 
      для любого мероприятия. В них дети не только будут выглядеть замечательно, но и смогут 
      полностью погрузиться в мир своих любимых героев.
      </p>
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="/img/image1.png" />
      </div>
      <div class="mySlides fade">
        <img src="/img/image2.png" />
      </div>
      <div class="mySlides fade">
        <img src="/img/image3.png" />
      </div>
      <div class="mySlides fade">
        <img src="/img/image4.png" />
      </div>
      <div class="mySlides fade">
        <img src="/img/image5.png" />
      </div>
      <a class="prev" onclick="plusSlides(-1)"><img src="/img/Arrowleft.png" alt="" /></a>
      <a class="next" onclick="plusSlides(1)"><img src="/img/ArrowRight.png" alt="" /></a>
    </div>
    <br />
  </section>
  <section class="categories container">
    <div>
      <div>
        <img src="/img/image1.png" alt="No Ethernet" />
      </div>
      <div>
        <img src="/img/image2.png" alt="No Ethernet" />
      </div>
      <div>
        <img src="/img/image3.png" alt="No Ethernet" />
      </div>
      <div>
        <img src="/img/image4.png" alt="No Ethernet" />
      </div>
      <div>
        <img src="/img/image5.png" alt="No Ethernet" />
      </div>
    </div>
  </section>
  <section class="show">
    <h1>Шоу-программы и квесты</h1>
    <div class="container grid-show">
      <?
      require('./functions/connect.php');
      $sql = $connect->query("SELECT * FROM `animators` LIMIT 6");
      while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div style="background-image: url(<?= $row['main_img'] ?>);">
          <a href="/str_animator.php?id=<?= $row['id'] ?>">
            <h2><?= $row['main_title'] ?></h2>
            <button>Подробнее</button>
          </a>
        </div>
      <?
      }
      ?>
      <!-- <?
            require('./functions/connect.php');
            $sql = $connect->query("SELECT * FROM `animators` ");
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            ?>
        <div style="background-image: url(<?= $row['main_img'] ?>);">
          <a href="/str_animator.php?id=<?= $row['id'] ?>">
            <h2><?= $row['main_title'] ?></h2>
            <button>Подробнее</button>
          </a>
        </div>
      <?
            }
      ?> -->

      <!-- <div>
        <h2>Дикий запад</h2>
        <button>Подробнее</button>
      </div>
      <div>
        <h2>Изумрудный город</h2>
        <button>Подробнее</button>
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
      </div> -->
    </div>
    <a href="/show_program.php">
      <button>Подробнее</button>
    </a>
  </section>
  <section class="whywe">
    <div class="container inside-div">
      <h1>Почему именно мы?</h1>
      <p>
        Потому что мы профессионалы своего дела с горящими глазами и с большим
        опытом за плечами. У нас есть всё для идеального праздника.
      </p>
      <div>
        <div>
          <img src="/img/whywe-1.png" alt="No Ethernet" />
          <p>Авторские костюмы ручной работы</p>
        </div>
        <div>
          <img src="/img/whywe-2.png" alt="No Ethernet" />
          <p>Профессиональные аниматоры</p>
        </div>
        <div>
          <img src="/img/whywe-3.png" alt="No Ethernet" />
          <p>Объемные декорации</p>
        </div>
        <div>
          <img src="/img/whywe-4.png" alt="No Ethernet" />
          <p>Аутентичный инвентарь и костюмы</p>
        </div>
      </div>
    </div>
  </section>
  <section class="reviews">
    <div class="container inside-div-1">
      <div>
        <h1>ОТЗЫВЫ</h1>
        <div></div>
      </div>
      <div class="section-div">
        <div>
          <p>
            Замечательный квест, особенно для фанатов историй о Гарри Поттере. 
            Обстановка, детализация предметов и сама история квеста погружают
            в мир Хогвартса. Бегал с детьми (дочери 12 и 10 лет) по комнатам 
            как ребенок радуясь.
          </p>
          <img src="/img/reviews-1.png" alt="No Ethernet" />
          <h2>Алексей</h2>
          <p>Мероприятие: Квест Гарри Тайная комната</p>
        </div>
        <div>
          <p>
            Квест оказался очень увлекательным, столько необычных путей прохождения
            заданий, что мы за время прохождения квеста смогли не только поработать
            мозгами, но и от души повеселиться и посмеяться. 
          </p>
          <img src="/img/reviews-2.png" alt="No Ethernet" />
          <h2>Ирина</h2>
          <p>Мероприятие: Квест Лего: Ты сильнее</p>
        </div>
        <div>
          <p>
            Играла со своей сестренкой! нам очень понравилось! очень интересный сюжет 
            с неожиданной развязкой. атмосфера декорации музыкальное сопровождение 
            и головоломки!
          </p>
          <img src="/img/reviews-3.png" alt="No Ethernet" />
          <h2>Анна</h2>
          <p>Мероприятие: Квест Пиратское сокровище</p>
        </div>
      </div>
      <a href="/otzivi.php">
      <button>Оставить отзыв</button>
          </a>
    </div>
  </section>
  <section class="tarif">
    <h1>Тарифы праздника</h1>
    <div class="top-div-tarif container">
      <div>
        <h1>Базовый от 15 000 ₽</h1>
        <h2>25 000 ₽</h2>
        <div>
          <p>2-3 Аниматора</p>
          <p>Продолжительность праздника: 2-4 часа</p>
          <p>Фотосъемка праздника</p>
          <p>Базовое звуковое оборудование</p>
          <p>Шоу-программа из базового каталога</p>
          <p>Базовое оформление шарами</p>
          <p>Фотозона до 5 элементов декора</p>
        </div>
      </div>
      <div>
        <h1>Оптимальный от 35 000 ₽</h1>
        <h2>45 000 ₽</h2>
        <div>
          <p>2-5 Аниматора</p>
          <p>Продолжительность праздника: 3-5 часа</p>
          <p>Фотосъемка праздника</p>
          <p>Базовое звуковое оборудование</p>
          <p>Шоу-программа из базового каталога</p>
          <p>Расширенный пакет оформления воздушными шарами</p>
          <p>Фотозона до 10 элементов декора</p>
          <p>Шоу-программа из авторского каталога</p>
          <p>1 добавка из расширенного каталога услуг</p>
          <p>Шоу-программа из авторского каталога</p>
          <p>Персональный инвент-менеджер на площадке</p>
        </div>
      </div>
      <div>
        <h1>Премиум от 50 000 ₽</h1>
        <h2>70 000 ₽</h2>
        <div>
          <p>
            Анимационная программа, квест или интерактивный спектакль с 4-7
            героями
          </p>
          <p>Продолжительность праздника: 4-7 часа</p>
          <p>1+ шоу-программа из базового каталога</p>
          <p>2+ шоу-программы из авторского каталога</p>
          <p>Расширенная премиум-фотозона до 20 элементов декора</p>
          <p>Расширенный пакет оформления воздушными шарами</p>
          <p>Фотосъемка праздника</p>
          <p>Звуковое и световое оборудование</p>
          <p>2+ добавки из расширенного каталога услуг</p>
          <p>Оформление Candy-bar, тематические сладости и торт</p>
          <p>Тематическое оформление стола</p>
          <p>Персональный подбор площадки для праздника</p>
          <p>Персональный инвент-менеджер на площадке</p>
          <p>
            Электронные пригласительные стилизованные под тематику/оформление
            праздника
          </p>
        </div>
      </div>
    </div>
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
              <p>Соглашаюсь со всеми условиями</p>
            </div>
            <button type="submit">Отправить</button>
          </div>
        </form>
      </div>
      <img src="/img/tarifimg.png" alt="No Ethernet" />
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
        <a href="/politica.html" target="_blank">Условия соглашения</a>
        <p>|</p>
        <a href="/politica.html" target="_blank">Конфиденциальность</a>
      </div>
      <div>
        <p>Copyright Ⓒ 2022 FOTYALAND by ‘’Sav’’ inc.</p>
      </div>
    </div>
  </footer>
  <script src="/js/scroll.js"></script>
  <script src="/js/slider.js"></script>
  <script text="java/script" src="/examples/libs/ui-components/itc-slider/itc-slider.js" defer></script>
  <script src="/js/burger.js"></script>
</body>

</hmtl>