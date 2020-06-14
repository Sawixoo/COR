<?php
session_start();
if(!isset($_SESSION['test']) and !isset($_POST['q'])){
    $q = 0; // Номер текущего вопроса
    $title = 'Пройдите тест';
}
else{
    if($_POST['q'] != '1')
        $_SESSION['test'][] = $_POST['answer'];
    $q = $_POST['q'];
    $title = $_POST['title'];
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blender3D/Тестовые задания</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a href="../index.html" class="navbar-brand"
          ><img src="../img/logo.png" class="imgHead" /> Blender/Тестовые
          задания</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active">Тестовые задания курса</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Close Navigation-->
    <!--Content-->
    <div class="card w-100 infoCard">
      <div class="card-body">
            <h3 class="infoH">Перед началом тестированаия просим ознакомится с правилами:</h3>
            <ul>
              <li>Не используйте кнопки "вперед", "назад".</li>
              <li>Не обновляйте страницу.</li>
              <li>В случае не выбора варианта ответа он автоматически засчитывается в неправильно отвеченые.</li>
              <li>В каждом вопросе всего один верный вариант ответа.</li>
            </ul>
            <h5 class="infoH">Надеемся на вашу честность во время прохождения теста!</h5>
            <h5 class="infoH">Удачи вам!</h5>
        </div>
    </div> 
    <!--CloseContent-->
    <!--StartTest-->
    <div class="card w-100 testCard">
        <div class="card-body">
        <?php
            switch($q){
                case 0:
                    include 'start.php';
                    break;
                case 1:
                    include 'q1.php';
                    break;
                case 2:
                    include 'q2.php';
                    break;
                case 3:
                    include 'q3.php';
                    break;
                case 4:
                    include 'q4.php';
                    break;
                case 5:
                    include 'q5.php';
                    break;
                case 6:
                    include 'q6.php';
                    break;
                case 7:
                    include 'q7.php';
                    break;
                case 8:
                    include 'q8.php';
                    break;
                case 9:
                    include 'q9.php';
                    break;
                case 10:
                      include 'q10.php';
                      break;
                case 11:
                      include 'q11.php';
                      break;
                case 12:
                      include 'q12.php';
                      break;
                case 13:
                      include 'q13.php';
                      break;
                case 14:
                      include 'q14.php';
                      break;

                case 15:
                        include 'q15.php';
                        break;
                case 16:
                        include 'q16.php';
                        break;
                case 17:
                        include 'q17.php';
                        break;
                case 18:
                        include 'q18.php';
                        break;
                case 19:
                        include 'q19.php';
                        break;
                case 20:
                        include 'q20.php';
                        break;
                case 21:
                        include 'q21.php';
                        break;
                case 22:
                        include 'q22.php';
                        break;
                case 23:
                        include 'q23.php';
                        break;
                case 24:
                        include 'q24.php';
                        break;
                case 25:
                        include 'q25.php';
                        break;
                default:
                    include 'result.php';
            }
        ?>
        </div>
    </div>
    <!--CloseTest-->
    <footer>
      <div class="foot">
        <p>TEST BLENDER 3D</p>
      </div>
    </footer>
     <!--Script-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </body>
</html>