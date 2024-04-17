<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NewsArchive</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      padding-top: 56px; /* Adjust based on navbar height */
    }
    #information {
      margin-top: 250%;
    }
    .sidebar {
      background-color: #dddddd;
      height: 110vh; /* Full height */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container"> 
      <a class="navbar-brand">
        <center>
          NewsArchive
        </center>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
    </div>
  </nav>

  <!-- Page content -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="container">
          <img src="news-icon_609277-3675.jpg" class="img-fluid" alt="Responsive image">
          <ul >
            <li id = "information">
             <p class="text-primary">Made by: Kydyrbekov Aidar</p>
             <p class="text-primary">Contacts: 87776666666 </p>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main content -->
      <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Только сегодня</h1>
  </div>
  <!-- First row with thumbnails -->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://tengriauto.kz/autonews/konets-mopedistov-podrobnyiy-razbor-novogo-zakonoproekta-532547/">
          <img src="motocycle.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Конец для мопедистов? Подробный разбор нового законопроекта в Казахстане</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://tengrinews.kz/article/probki-ocheredi-i-duhota-chto-jdet-almatinskiy-aeroport-2409/">
          <img src="photo_3507.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Пробки, очереди и духота. Что ждет алматинский аэропорт</p>
          </div>
        </a>
      </div>
    </div>
  </div><Br><br>
  <!-- End of first row -->

  <!-- Second row with thumbnails -->
  <div class="row">
   <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://tengrinews.kz/kazakhstan_news/tokaev-rasporyadilsya-vvesti-rejim-jestkoy-ekonomii-532567/">
          <img src="photo_469146.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Президент Касым-Жомарт Токаев на встрече с эвакуированными жителями Костанайской области сообщил, что в стране будет введен режим жесткой экономии, передает Tengrinews.kz со ссылкой на пресс-службу Акорды.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://tengrinews.kz/curious/shutka-pugayuschaya-realnost-politsiya-vzyala-kontrol-532530/">
          <img src="paren.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Шутка или пугающая реальность. Полиция взяла на контроль площадь рядом с Esentai Mall в Алматы</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- End of second row -->

</main>
</body>
</html>