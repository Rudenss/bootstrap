<?php
$id = $_GET['id'];

$host = 'mysql:host=localhost;dbname=test';
$user = 'test';
$password = '1234';
$conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

/* Data 조회를 위한 Query 작성 */
$stmt = $conn->prepare('SELECT * FROM community1 WHERE id ='.$id);
/* Query 실행 */
$stmt->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$item = $stmt->fetchAll();

/* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
?>
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
      <div class="panel panel-default col-xs-offset-2 col-xs-8">
        <div class="panel-heading">
          <h3 class="panel-title">게시물 수정</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" action="./update_1data.php" method="get">
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">제목</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="제목을 입력하세요" value="<?php echo $item[0]['title']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-sm-2 control-label">내용</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="content" name="content" rows="5"><?php echo $item[0]['content']?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="author" class="col-sm-2 control-label">작성자</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author" placeholder="작성자를 입력하세요" value="<?php echo $item[0]['author']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="timestamp" class="col-sm-2 control-label">이전작성일</label>
              <div class="col-sm-10">
                <p id="timestamp"><?php echo $item[0]['timestamp']?></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="id" value="<?php echo $item[0]['id']?>">
                <button type="submit" class="btn btn-warning">수정</button>
                <a href="./datainfo.php?id=<?php echo $item[0]['id']?>" class="btn btn-success" style="float:right;">취소</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
