<!DOCTYPE html>
<html class="no-js" lang="uk">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content="telephone=no" name="format-detection">
        <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
        <meta name="HandheldFriendly" content="true">

        <!-- <link rel="stylesheet" type="text/css" href="libs/jquery.fullPage.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/bootstrap-grid.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/slick.min.css"/>
        <link rel="stylesheet" href="libs/jquery.fancybox.min.css" type="text/css"/> -->
        <link rel="stylesheet" type="text/css" href="css/libs.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.min.css">


        <title>ОкмиТур</title>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400i,700i" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body>
        <a href="#okmiTour" class="scroll-up">
            <span class="icon-arrow-up"></span>
        </a>
        
        <div id="fullpage">
            
            <div class="header" >
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="logo">
                            <img src="img/logo.png" alt="logo">
                        </div>
                        <div class="col no-padding">
                            <ul id="menu" class="menu">
                                <li data-menuanchor="aboutTourSection" class="menu__item">
                                    <a href="#aboutTourSection">О туре</a>
                                </li>
                                <li  data-menuanchor="priceSection" class="menu__item">
                                    <a href="#priceSection">Стоимость</a>
                                </li>
                                <li data-menuanchor="trainersSection" class="menu__item">
                                    <a href="#trainersSection">О тренерах</a>
                                </li>
                                <li data-menuanchor="programSection" class="menu__item">
                                    <a href="#programSection">Программа</a>
                                </li>
                                <li data-menuanchor="viewsSection" class="menu__item">
                                    <a href="#viewsSection">Отзывы</a>
                                </li>
                            </ul>
                            <div class="top-contact">
                                <span class="icon-phone"></span>
                                +38 073 030 36 76
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div id="title" class="section title-section" >  
                <div class="bg-section"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-sm-6 col-10">
                            <div class="row">
                                <h2 class="main-date light-text align-center">28 апреля 2018 года</h2>
                                <h1 class="main-title">Фитнес тур</h1>
                                <p class="main-description">в солнечную Грецию 3 в 1</p>
                                <a  data-fancybox="video" href="img/video.mp4" class="video-block">
                                    <p class="video-description">
                                        <span>Место проведения — отель элит класса</span>
                                        <span class='light-text'>Aldemar Knossos Royal Beach Resort 5*</span>
                                    </p>
                                    <img src="img/video.jpg" alt="video">
                                </a>
                            </div>                            
                        </div>
                        <div class="col-md-5 col-sm-6 col-8">
                            <div class="row">
                                <div class="form-block">
                                    <p>
                                        <span class="form-block__title">Забронируй место сейчас,</span>
                                        <span> пока это не сделал кто-то другой и получи </span>
                                        <span class="text-bold bright-text text-nowrap">скидку 10 Евро!</span>
                                    </p>
                                    <form class="send-form-1">
                                    <input class="input-style" type="text" placeholder="Ваше имя" name="name">
                                    <input class="input-style" type="text" placeholder="Ваш номер телефона" name="phone">
                                    <button class="bright-btn" data-form="1">Оставить заявку</button>
                                    </form>
                                </div>
                                <div class="promo-sticker">
                                    <h3>795 евро</h3>
                                    <p>при бронировании до 15 февраля!</p>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <div id="infoSecondary" class="section fp-auto-height" >
                <div class="container">
                    <div class="row  align-items-center justify-content-between">
                        <div class="col-xl-5 col-6">
                            <div class="row">
                                <p class="info-secondary__text">Никак не можете похудеть к лету </br> и постоянно заедаете стресс?</p>
                                <h2>Хотите поразить всех своей фигурой и получить новые знания в области питания?</h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="info-secondary__img">
                                    <img src="img/burger-in-trashcan.jpg" alt="put your burger in the trashcan">
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>     
            </div>

            <div id="aboutTour" class="section about-tour" >
                <div class="bg-section"></div>
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-5 col-sm-6 col-8 ">
                            <h2>Отдых, который изменит отношение к себе и своему телу</h2>
                            <p>Персональный тренер Вадим Кравченко совместно с Наталией Черныш организовывают 11 дневный фитнес тур в Солнечную Грецию, где вы сможете не только насладиться теплым морем, но и подтянуть тело, получить знания в области диетологии, а также посетить лекции личного роста.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="price" class="section price" >
                <div class="bg-section"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-sm-6 col-8">
                            <div class="row">
                                <h2>Фитнес тур </br> «Путешествуй за мечтой» </br> стартует 28 апреля</h2>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <p class="price-text">Его длительность – 11 ночей </br> Стоимость –850 евро с человека </p>
                                        <div class="promo-sticker">
                                            <h3>795 евро</h3>
                                            <p>при бронировании до 15 февраля!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="light-border-block">
                                    <h4 class="light-border-block__title">В стоимость входит:</h4>
                                    <ul class="list-style column-2">
                                        <li>Авиаперелет;</li>
                                        <li>Проживание 11 ночей;</li>
                                        <li>Питание завтрак+ужин;</li>
                                        <li>Трансфер;</li>
                                        <li>Страховка;</li>
                                        <li>Семинары и тренинги;</li>
                                        <li>Тренировки.</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-8">
                            <div class="row">
                                <div class="form-block">
                                    <p>
                                        <span class="form-block__title">Забронируй место сейчас,</span>
                                        <span> пока это не сделал кто-то другой и получи </span>
                                        <span class="text-bold bright-text">скидку 10 Евро!</span>
                                    </p>
                                    <form class="send-form-2">
                                    <input class="input-style" type="text" placeholder="Ваше имя" name="name">
                                    <input class="input-style" type="text" placeholder="Ваш номер телефона" name="phone">
                                    <button class="bright-btn" data-form="2">Оставить заявку</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>

            <div id="trainers" class="section trainers" >
                <h1>О тренерах</h1>
                <div class="trainers__block">
                    <div class="trainers__bg"></div>
                     <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="trainers__photo" style="background-image: url(img/trainer1-photo.jpg">                          
                                </div>
                                <div class="trainers__info">
                                    <h2 class="light-text">Кравченко Вадим</h2>
                                    <ul class="light-text list-style">
                                        <li>Более 8 лет работает фитнес тренером;</li>
                                        <li>С 2013 года является сертифицированным тренером-преподавателем;</li>
                                        <li>Преподавал на кафедре оздоровления и реабилитации;</li>
                                        <li>Автор многочисленных научных статей по физической культуре и спорту;</li>
                                        <li>Помог сотням людей улучшить свою фигуру и добиться желаемого результата.</li>
                                    </ul>
                                    <p class="light-text trainers__text">Вадим поможет вам получить тело своей мечты, убрать лишние сантиметры, подкачать мышцы и получить великолепную мотивацию для дальнейшей работы над собой.</p>
                                </div>   
                            </div>
                            <div class="col-6">
                                <div class="trainers__photo trainers__photo-right" style="background-image: url(img/trainer2-photo.jpg">                          
                                </div>
                                <div class="trainers__info">
                                    <h2 class="light-text">Наталья Черныш</h2>
                                    <ul class="light-text list-style">
                                        <li>Психолог, тренер, коуч.</li>
                                        <li>Опыт работы в практической психологии 20 лет.</li>
                                        <li>Владелец тренинговой компании Киевский центр Взаимоотношений .</li>
                                        <li>Автор тренинговых программ - Коучинг стройности, Радуга чувств, Дамский сад, Основной инстинкт , Формула счастья и многих других.</li>
                                        <li>Семейный психотерапевт, ведущий тренер международной компании GRC.</li>
                                    </ul>
                                    <p class="light-text  trainers__text">Наталья поможет избавиться от пищевых привычек, различать голод от мыслей о еде. Так же, вы избавитесь от заедания стресса и научитесь правильно питаться.</p>
                                </div>
                            </div> 
                        </div>
                    </div>     
                </div>
            </div>

            <div class="trainers__after-text section fp-auto-height">
                <div class="container">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <p class="primary-text align-center">Активный отдых - отличная возможность привести свое тело в порядок. Наталья и Вадим с радостью поделятся своими знаниями и опытом, чтоб вы получили максимум удовольствия и пользы от фитнес тура “Путешествуй с мечтой”.</p>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>

            <div id="program" class="section program"  >
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            
                            <div class="row">
                                <div class="program__list scroll-style">
                                    <div class="scroll-content">
                                        
                                    <h1>Итак программа Фитнес тура в Греции</h1>
                                    <div class="program__text primary-text align-center">
                                        Даты тура: 28.04.2018 – 09.05.2018 (11 ночей)
                                    </div>
                                
                                    <ol class="list-days list-fadeout">
                                        <li>28.04.2018 вылет из аэропорта Киев Борисполь в 03:50, прилет в Ираклион (Крит) в 06:40. Трансфер в отель, заселение. Свободное время, отдых. Вечером информационная встреча с тренерами, обсуждение программы, знакомство. </li>
                                        <li>Скандинавская ходьба на открытом воздухе по побережью Крита. Первый вечер по программе блиц-курса Коучинг стройности. Тема: Привет из букваря. Общество чистых тарелок. Детские установки о еде и их трансформация.</li>
                                        <li>Тренировка Full body в фитнес зале Aldemar Knossos. Вечером поговорим об отличии голода от аппетита. Когда и сколько мы хотим есть на самом деле. </li>
                                        <li>Тренировка с координационной лестницей и резинками (акцент ягодицы) на спортивной лужайке которая находится на побережье Крита. Тема вечера: Что мы заедаем? Способы наполнить себя не едой. </li>
                                        <li class="hide">Тренировка на верх в фитнес зале Aldemar Knossos. По желанию (за доп. плату) вечерняя экскурсия: Вечернее очарование Ретимно (с ужином) или Греческий вечер с танцами, песнями и местным колоритом.</li>
                                        <li class="hide">Тренировка на низ (акцент: внутренняя и внешняя части бедра) в фитнес зале Aldemar Knossos. Вечером: Динамическая медитация – отказываюсь быть толстой!</li>
                                        <li class="hide">Стретчинг всего тела на побережье Крита. Свободный вечер. </li>
                                        <li class="hide">Relax day (восстановление). По желанию экскурсия: Пещеры Зевса или Кносский дворец, или Тайны православных святынь. Тренинг "Развитие эмоционального интеллекта - "Что растет в твоем саду". Чувства. Эмоции. Самовыражение. Взрослый мир чувств.</li>
                                        <li class="hide">Тренировка на ягодицы в фитнес зале Aldemar Knossos. Тема вечера: "Моя личная логика".</li>
                                        <li class="hide">Работа со спиной (под каждого занимающегося индивидуально разработанная программа упражнений) Вечером очень интересная тема: Интонации, ведущие к любви.</li>
                                        <li class="hide">Cardio day по побережью Крита. Последний вечер: "Я знаю в себе и вижу в тебе. Эмоциональный контакт".</li>
                                        <li class="hide"><p class="">Вы научитесь:</h3>
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                        <div >Коучинг стройности</div>
                                                        <p>
                                                            Соединятся со своими истинными потребностями, есть только когда по настоящими голодны , не заедать стресс и проблемы, а решать их, принять решение быть стройной и оставаться такой долгие годы .
                                                        </p>
                                                </div> 
                                                <div class="col-sm-6 col-12">
                                                        <div>Тренинг развития эмоционального интеллекта:</div>
                                                        <p>
                                                            Определять свои чувства, управлять своим состоянием присоединятся к эмоциям других людей для создания близких отношений. Вы научитесь больше любить и принимать себя. Сделаете свою жизнь более яркой и насыщенной.
                                                        </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>  
                                    </div>
                               
                                </div>
                                <button class="show-program rimary-btn" >Показать полную программу</button>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>

            <div id="plan" class="section  fp-auto-height" >
                <h1>Вы научитесь</h1>
                <div class="plan">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-sm-5 col-12">
                                <div class="secendary-title light-text">Коучинг стройности</div>
                                <p class="light-text">Соединяться со своими истинными потребностями, есть только когда по настоящими голодны , не заедать стресс и проблемы, а решать их, принять решение быть стройной и оставаться такой долгие годы.</p>
                            </div>
                            <div class="col-sm-5 col-12">
                                <div class="secendary-title">Тренинг развития эмоционального интеллекта:</div>
                                <p>Определять свои чувства, управлять своим состоянием присоединятся к эмоциям других людей для создания близких отношений. Вы научитесь больше любить и принимать себя. Сделаете свою жизнь более яркой и насыщенной.</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div id="report" class="section  fp-auto-height"  >
                <div class="container">
                    <div class="row">
                        <div class="slider__header post-slider__header">
                            <button class="slider__arrow slider__prev"></button>
                            <h1>Как это было</h1>
                            <button class="slider__arrow slider__next"></button>
                        </div>
                        <div class="post-slider">
                            <?php
                                $dir    = 'img/slider';
                                $slides = array_diff(scandir($dir), array('..', '.'));
                                foreach ($slides as $slide):
                            ?>
                            <div class="post-slide">
                                <a class="" data-fancybox="gallery" href="img/slider/<?= $slide ?>" style="background-image: url(img/slider/<?= $slide ?>);"></a>
                            </div>

                            <?php
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="views" class="section views"  >
                <div class="container">
                    <div class="row">
                        <div class="slider__header views-slider__header">
                            <button class="slider__arrow slider__prev"></button>
                            <h1>Отзывы участников</h1>
                            <button class="slider__arrow slider__next"></button>
                        </div>                        
                        <div class="views__slider">
                           <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2088.JPG" alt="photo">
                                </div>
                                <div class="views__name">Игорь Ворошило</div>
                                <div class="views__text">
                                    Фитнес-тур, это не просто занятия на свежем воздухе. Это незабываемый отдых, который помогает пересмотреть отношение к себе, своему телу и питанию! Спасибо ОкмиТур за такую возможность!

                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2089.JPG"" alt="photo">
                                </div>
                                <div class="views__name">Ольга Лепета</div>
                                <div class="views__text">
                                    После отдыха на Крите, я начала лучше понимать чувства и эмоции других людей, научилась любить себя и свое тело. Это лучший отпуск, из всех, которые у меня были.
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2093.JPG" alt="photo">
                                </div>
                                <div class="views__name">Руслан Грищенко</div>
                                <div class="views__text">
                                    Раньше казалось, что научиться правильно питаться и заниматься спортом на отдыхе – нереально. Но благодаря ОкмиТур я понял, что это возможно. Это замечательная возможность переосмыслить то, что ты ешь, зачем и когда, отношение к себе и своему телу. Спасибо, ОкмиТур! 
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2094.JPG" alt="photo">
                                </div>
                                <div class="views__name">Дима Дмитриев</div>
                                <div class="views__text">
                                    Групповые занятия на свежем воздухе – это круто. Чувствуешь, что ты можешь все и даже больше. Спасибо тренерам, за информацию, которая поможет получить идеально тело. Отдельное спасибо ОтмиТур, которые организовали и дали возможность насладиться отдыхом. 
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2091.JPG" alt="photo">
                                </div>
                                <div class="views__name">Екатерина Пантелеенко</div>
                                <div class="views__text">
                                    ОкмиТур сделали невероятное: соединили приятное с полезным. Именно так можно охарактеризовать фитнес-тур в Грецию. Занятия на свежем воздухе, лекции о питании, и это малая часть того, что было. Спасибо всем, кто организовывал и помогал становиться лучше, вы просто супер! 
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2090.JPG" alt="photo">
                                </div>
                                <div class="views__name">Виктория Лишневсткая</div>
                                <div class="views__text">
                                    Хочу выразить огромную благодарность за прошедший фитнес тур! Все было просто супер!
 
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/photo5472309847669188878.jpg" alt="photo">
                                </div>
                                <div class="views__name">Алексей Момот</div>
                                <div class="views__text">
                                    Большое спасибо ОкмиТур за отличный и полезный осенний отдых в Греции! Мы с женой остались очень довольны. Еще раз спасибо! Успехов и процветания в туристическом бизнесе! 
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/IMG_2092.JPG" alt="photo">
                                </div>
                                <div class="views__name">Лиза Гаврилова</div>
                                <div class="views__text">
                                    Спасибо ОкмиТур и всем тренерам! С вашей помощью я смогла увидеть себя другими глазами и начала меняться. Это незабываемый отдых, который я запомню на долго!
                                </div>
                            </div>
                            <div class="views__slide">
                                <div class="views__photo">
                                    <img src="img/views/photo5472190769700907288.jpg" alt="photo">
                                </div>
                                <div class="views__name">Елена Шпортюк</div>
                                <div class="views__text">
                                    Спасибо ОкмиТур за возможность провести отдых с максимальной пользой. Всё было просто супер! 
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div id="end" class="end section">
                <div class="container">
                    <div class="row justify-content-center">
                       <div class="col-md-7 col-sm-6 col-8">
                            <div class="row">
                               <h1 class="light-text">Успейте зарегистрироваться сейчас</h1>
                               <div class="end__text primary-text">чтоб в апреле наслаждаться солнцем и привести свое тело в порядок!</div>
                               <div class="promo-sticker">
                                    <h3>795 евро</h3>
                                    <p>при бронировании до 15 февраля!</p>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-5 col-sm-6 col-8">
                           <div class="row">
                               <div class="form-block">
                                    <p>
                                        <span class="form-block__title">Забронируй место сейчас,</span>
                                        <span> пока это не сделал кто-то другой и получи </span>
                                        <span class="text-bold bright-text text-nowrap">скидку 10 Евро!</span>
                                    </p>
                                   <form class="send-form-3">
                                    <input class="input-style" type="text" placeholder="Ваше имя" name="name">
                                    <input class="input-style" type="text" placeholder="Ваш номер телефона" name="phone">
                                    <button class="bright-btn" data-form="3">Оставить заявку</button>
                                   </form>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="logo col-lg-2 col-md-3 col-4">
                                <img src="img/logo.png" alt="logo">
                            </div>
                            <div class="col d-flex align-items-center justify-content-end">
                                <p>Подпишитесь на новости:</p>
                                <ul class="social-menu">
                                    <li><a href="https://www.instagram.com/okmi_tour/"><span class="icon-instagram"></span></a></li>
                                    <li><a href="https://www.facebook.com/okmitour/"><span class="icon-facebook-f"></span></a></li>
                                    <li><a href="https://t.me/okmi_tour"><span class="icon-send"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
            

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/scrolloverflow.min.js"></script>
        <script src="libs/jquery.fullpage.min.js" ></script>
        <script src="libs/slick.min.js" ></script>
        <script type="text/javascript" src="libs/jquery.fancybox.min.js"></script>
        <script src="js/main.js" ></script>
    </body>
</html>