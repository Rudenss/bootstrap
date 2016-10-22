<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <section class="container">
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="./index.php">Test</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="./community1.php">자유게시판</a></li>
            <li><a href="#">추천덱</a></li>
          </ul>
        </div>
      </nav>
    </section>
    <section class="imgbody col-xs-8 col-xs-offset-2">
      <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
            <li data-target="#carousel-example-generic" data-slide-to="8"></li>
            <li data-target="#carousel-example-generic" data-slide-to="9"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="./img/hs.jpg" alt="0">
              <div class="carousel-caption">
                <h3>하스스톤</h3>
                <p>워크래프트의 영웅들</p>
              </div>
            </div>
            <div class="item">
              <img src="./img/가로쉬.jpg" alt="1">
              <div class="carousel-caption">
                <h3>가로쉬</h3>
                <p>전사</p>
              </div>
            </div>
            <div class="item">
              <img src="./img/굴단.jpg" alt="2">
              <div class="carousel-caption">
                <h3>굴단</h3>
                <p>흑마법사</p>
              </div>
            </div>
            <div class="item">
              <img src="./img/렉사르.jpg" alt="3">
              <div class="carousel-caption">
                <h3>렉사르</h3>
                <p>사냥꾼</p>
              </div>
            </div>
            <div class="item">
              <img src="./img/말퓨리온.jpg" alt="4">
                <h3>말퓨리온</h3>
                <p>드루이드</p>
            </div>
            <div class="item">
              <img src="./img/발리라.jpg" alt="5">
                <h3>발리라</h3>
                <p>도적</p>
            </div>
            <div class="item">
              <img src="./img/스랄.jpg" alt="6">
                <h3>스랄</h3>
                <p>주술사</p>
            </div>
            <div class="item">
              <img src="./img/안두인.jpg" alt="7">
                <h3>안두인</h3>
                <p>사제</p>
            </div>
            <div class="item">
              <img src="./img/우서.jpg" alt="8">
                <h3>우서</h3>
                <p>성기사</p>
            </div>
            <div class="item">
              <img src="./img/제이나.jpg" alt="9">
                <h3>제이나</h3>
                <p>마법사</p>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
    <section>
      <iframe class="col-xs-offset-3" width="50%" height="600px" src="https://www.youtube.com/embed/qy5h_moB1a4" frameborder="0" allowfullscreen></iframe>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
