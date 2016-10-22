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
    <section>
      <form class="form-horizontal" action="./insert_1data.php" method="get">
        <div class="form-group">
          <label for="title" class="col-sm-2 control-label">제목</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="title" name="title" placeholder="제목을 입력하세요">
          </div>
        </div>
        <div class="form-group">
          <label for="content" class="col-sm-2 control-label">내용</label>
          <div class="col-sm-8">
            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="author" class="col-sm-2 control-label">작성자</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="author" name="author" placeholder="작성자를 입력하세요">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">게시</button>
          </div>
        </div>
      </form>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
