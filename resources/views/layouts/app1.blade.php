<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">

    <style>
    .margin-base{
        /* margin-top: 150px; */
    }
    .border-user{
        border:0.05px solid silver;
        border-radius: 3px;
        padding: 15px;
        /* padding-top:15px;
        padding-bottom:15px; */
        background-color: white;
    }

    .footer-theme{
        background-color: black;

    }
    .middleware-theme{
      background-color: gray;
      margin-top: 15px;
      padding-top: 15px;
    }
  </style>

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
  </head>
  <body>

    <!--Шапка сайта-->
    <div class="conteiner-fluid">
        <img src="img/illustrator_preview.png" class="img-responsive center-block" alt="Responsive image">
    </div>
    <!--========================-->

    <!--Панель навигации-->
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
        <div class="container-fluid">
          <!-- Brand и toggle сгруппированы для лучшего отображения на мобильных дисплеях -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Сайт для иллюстраторов</a>
          </div>

      <!-- Соберите навигационные ссылки, формы, и другой контент для переключения -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Рубрика 1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Рубрика 2</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Поиск</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Войти</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
    <!--=======================================-->
  <!--Две колонки-->
  <div class="container">
    <div class="row margin-base">

      <!--Первая колонка-->
      <div class="col-md-8">
                  <div class="media border-user">
                      <div class="container-fluid">
                        <a href="#">
                          <img class="media-object img-responsive"  src="img/illustrator_preview.png" alt="...">
                        </a>
                      </div>
                      <div class="container-fluid">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <p><a href="#">Чиать полность-></a></p>
                      </div>
                  </div>


                  <div class="media border-user">
                    <div class="row">
                        <div class="col-md-6">
                          <h4 class="media-heading">Media heading</h4>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p><a href="#">Чиать полность-></a></p>
                        </div>
                        <div class="col-md-6">
                          <a href="#">
                            <img class="media-object img-responsive"  height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                          </a>
                        </div>
                    </div>
                  </div>

                  <div class="media border-user">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="#">
                          <img class="media-object img-responsive"  height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                        </a>
                      </div>
                        <div class="col-md-6">
                          <h4 class="media-heading">Media heading</h4>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p><a href="#">Чиать полность-></a></p>
                        </div>

                    </div>
                  </div>

                  <div class="media border-user">
                    <div class="row">
                        <div class="col-md-6">
                          <h4 class="media-heading">Media heading</h4>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                          <p><a href="#">Чиать полность-></a></p>
                        </div>
                        <div class="col-md-6">
                          <a href="#">
                            <img class="media-object img-responsive"  height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                          </a>
                        </div>
                    </div>
                  </div>


      </div>
      <!--==========конец первой колноки=============-->

      <!--Вторая колонка-->
      <div class="col-md-4">

          <div class="thumbnail">
              <img height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante so</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
          </div>

          <div class="thumbnail">
              <img height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante so</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
          </div>

      </div>
      <!--==========конец второй колноки=============-->
    </div>
  </div>
  <!--==========Конец контейнера с контентом===============-->

  <!--Промежуточный блок с чем-либо, например случайные посты-->
  <div class="container-fluid middleware-theme">
      <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
                <img height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante so</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
                <img height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante so</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
                <img height="200px" width="300px" src="img/illustrator_preview.png" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante so</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
          </div>
      </div>
  </div>
  <!--========Конец промежуточного блока-->


    <!--Подключаемые скрипты-->

    <!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
    <script src="js/app.js"></script>
  </body>

  <!--========Футер====-->
  <footer>
    <div class="container-fluid footer-theme">
        <div class="row">
            <div class="col-md-3 text-center">
              <h3>Контакты</h3>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
            </div>
            <div class="col-md-3 text-center">
              <h3>Рубрики</h3>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
            </div>

            <div class="col-md-6 text-center">
              <h3>Еще что-то важное</h3>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
              <a><p>Какой-то текст</p></a>
            </div>
        </div>
    </div>

  </footer>
  <!--=======конец футера========-->
</html>
