
<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Заголовок</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="container-fluid menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="./img/logo.png" alt="logo">
                          <span> ПРАВОВЕДЫ</span>
                        </a>
                    </div>
            
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">
                            <li id="about" class=" item active"><a href="#">О нас <span class="sr-only">(current)</span></a></li>
                            <li id="price" class="item"><a href="#">Цены</a></li>
                            <li id="terms" class="item"><a href="#">Условия</a></li>
                            <li id="step" class="item"><a href="#">Этапы работы</a></li>
                            <li id="video" class="item"><a href="#">Видео</a></li>
            
                        </ul>
            
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="container-fluid content">
    <div class="container">
        <div class="row">
            <div class="sliders">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li title="about" data-target="#myCarousel" data-slide-to="0"  class="active"></li>
                        <li title="price"  data-target="#myCarousel" data-slide-to="1"  class=""></li>
                        <li title="terms"  data-target="#myCarousel" data-slide-to="2"  class=""></li>
                        <li title="step"  data-target="#myCarousel" data-slide-to="3"  class=""></li>
                        <li title="video"  data-target="#myCarousel" data-slide-to="4"  class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                       <div class="item active" id="about">
                           <img class="first-slide" src="./img/slide1.png" alt="slider">
                       
                           <div class="container">
                               <div class="carousel-caption">
                       
                                   <div class="slide1">
                                   <div class="col-lg-8 text col-lg-offset-1">
                                       <h1>Правду в суде не утаиш</h1>
                       
                                       <p>Бесплатное представление интересов в суде,
                                           бесплатное написание искового заявления,
                                           бесплатное составление претензии, писем.
                                           Для социально незащищенной категории
                                           граждан России.</p>
                                   </div>
                                   <div class="col-lg-2 col-lg-offset-1">
                                       <form action="./mail.php" method="post">
                                           <input type="text" name="name" placeholder="Ваше имя" required>
                                           <input type="text" name="email" placeholder="Ваш Телефон" required>
                                           <input type="text" name="phone" placeholder="Вас e-mail" required>
                                           <br>
                                           <br>
                                           <br>
                                           <br>
                                           <br>
                                           <br>
                                           <input class="mybutton" type="submit" value="Оставить заявку">
                                       </form>
                                   </div>
                       
                                   </div>
                       
                       
                       
                               </div>
                           </div>
                       </div>
                       <div class="item" id="price">
                           <img class="first-slide" src="./img/slide2.png" alt="slider">
                       
                           <div class="container">
                               <div class="carousel-caption col-lg-offset-1">
                       
                                   <div class="item-wrap">
                                   <div class="item-square">
                                       <div class="square"></div>
                                       <span>0 руб.</span>
                                   </div>
                                       <h3>Консультации по телефону</h3>
                                   </div>
                       
                                   <div class="item-wrap">
                                       <div class="item-square">
                                           <div class="square"></div>
                                           <span>0 руб.</span>
                                       </div>
                                       <h3>Консультации устные</h3>
                                   </div>
                       
                                   <div class="item-wrap">
                                       <div class="item-square">
                                           <div class="square"></div>
                                           <span>0 руб.</span>
                                       </div>
                                       <h3>Написание претензий</h3>
                                   </div>
                       
                                   <div class="item-wrap">
                                       <div class="item-square">
                                           <div class="square"></div>
                                           <span>0 руб.</span>
                                       </div>
                                       <h3>Составление искового заявления</h3>
                                   </div>
                       
                               </div>
                           </div>
                       </div>
                       <div class="item slide3" id="terms">
                           <img class="first-slide" src="./img/slide3.png" alt="slider">
                       
                           <div class="container">
                               <div class="carousel-caption col-lg-10 col-lg-offset-1">
                                   <h2>Бесплатная юридическая помощь.<br>
                                       Условия получения</h2>
                       
                                   <h3>Услуга предоставляется только по гражданский делам</h3>
                                   <br>
                                   <p>Право на получение бесплатной юридической помощи имеют граждане льготных категорий: многодетные семьи, инвалиды 1 и 2 группы проживающие на территории ХМАО-Югра. Для льготной категории граждан проживающих за пределами Сургутского р-н, города Сургута возможно дистанционная помощь. Юристы консультируют по телефону только на "входящий" звонок, сами не перезванивают.</p>
                                   <br>
                                   <h4>проект финансируется без участия государства</h4>
                               <span>*Безвозмездное оказание юридической помощи осуществляется за счет собственных средств заработанных Правозащитной Организацией Правоведы НП.
                       Бесплатное представление в Суде, написания искового заявления осуществляется при наличии средств на данные проект в момент обращения гражданина.</span>
                               </div>
                           </div>
                       </div>
                       <div class="item slide4" id="step">
                           <img class="first-slide" src="./img/slide4.png" alt="slider">
                       
                           <div class="container">
                               <div class="carousel-caption col-lg-12">
                                   <h2>Этапы работы</h2>
                       
                                   <div class="col-lg-6">
                                       <div class="item-wrap">
                                           <img class="col-md-4"  src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8" >Ознакомления с проблемой
                                               клиента.</p>
                                       </div>
                                       <div class="item-wrap">
                                           <img class="col-md-4"  src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8">Изучение материалов дела
                                               предоставленных клиентом.</p>
                                       </div>
                                       <div class="item-wrap">
                                           <img class="col-md-4"  src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8">Определение тактики
                                               ведение дела и ее согласование
                                               с клиентом.</p>
                                       </div>
                                   </div>
                                   <div class="col-lg-6">
                                       <div class="item-wrap">
                                           <img class="col-md-4" src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8">Написания претензии,
                                               искового заявление
                                               или жалобы.</p>
                                       </div>
                                       <div class="item-wrap">
                                           <img class="col-md-4"  src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8" >Представление интересов
                                               в Суде.</p>
                                       </div>
                                       <div class="item-wrap">
                                           <img class="col-md-4"  src="../img/items_img.png" alt="">
                       
                                           <p class="col-md-8">Отчет о проделанной работе.</p>
                                       </div>
                                   </div>
                       
                                   <h4 class="col-lg-12">Наши преимущества:</h4>
                       
                                   <p class="col-lg-12">Правоведы внимательно выслушают проблему. Зададут наводящие вопросы по сути проблемы <br>
                                               Окажут психологическую помощь. <br>
                                               Информация о всех этапах работы с делом. </p>
                       
                       
                       
                               </div>
                       
                       
                       
                           </div>
                       </div>
                       <div class="item slide5" id="video">
                           <img class="first-slide" src="./img/slide4.png" alt="slider">
                       
                           <div class="container">
                               <div class="carousel-caption col-lg-12 map">
                                   <div class="col-lg-6 ">
                       
                       
                                       <iframe
                                               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1920.1810488142587!2d73.45544631618039!3d61.23159996410093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4373976a631803a5%3A0x191ee9ad3a4c212e!2z0JTQvtC80LjQvdC-LCDQv9GA0L7QtNC-0LLQvtC70YzRgdGC0LLQtdC90L3Ri9C5INC80LDQs9Cw0LfQuNC9!5e0!3m2!1sru!2skg!4v1448526673391" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
                       
                                   <p>
                                       250-040, 250-022 <br>
                                       ЗВОНИТЕ С 09:00 ДО 17:00 <br>
                                       ВЫХОДНОЙ: СУББОТА,ВОСКРЕСЕНЬЕ
                                   </p>
                       
                       
                       
                                   </div>
                       
                                   <div class="col-lg-6 ">
                       
                       
                       
                       
                                       <iframe width="100%" height="420" src="https://www.youtube.com/embed/Y-fsswnEYP8" frameborder="0"
                                               allowfullscreen></iframe>
                       
                       
                                   </div>
                               </div>
                           </div>
                       </div>
            
            
                    </div>
                    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
                        <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                        <!--<span class="sr-only">Previous</span>-->
                    <!--</a>-->
                    <!--<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
                        <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                        <!--<span class="sr-only">Next</span>-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-offset-1">
                <p>628401, ул. Мелик-Карамова 28/1, оф. 33-г. <br>
                    Сургут, ХМАО-Югра</p>
            </div>
            <div class="col-md-2">
                <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
                <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="odnoklassniki,vkontakte,facebook"></div>
            </div>
        </div>
    </div>
</div>




<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->


<script src="libs/modernizr/modernizr.js"></script>
<script src="libs/jquery/jquery-1.11.2.min.js"></script>
<script src="libs/waypoints/waypoints.min.js"></script>
<script src="libs/animate/animate-css.js"></script>
<script src="libs/plugins-scroll/plugins-scroll.js"></script>

<script src="./libs/bootstrap/js/bootstrap.js"></script>

<script src="js/common.js"></script>
</body>
</html>