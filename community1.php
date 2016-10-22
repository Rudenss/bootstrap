<!DOCTYPE html>
<?php
$host = 'mysql:host=localhost;dbname=test';
$user = 'test';
$password = '1234';
$conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

/* Data 조회를 위한 Query 작성 */
$stmt = $conn->prepare('SELECT * FROM community1 ORDER BY id DESC LIMIT 0,5');
/* Query 실행 */
$stmt->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$list = $stmt->fetchAll();

/* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
 // foreach($list as $member) {
 //  print_r($member);
 // }
?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
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
            </li>
          </ul>
        </div><!-- /.container-fluid -->
      </nav>
    </section>
    <section class="imgbody col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>자유게시판</h4></div>
        <table class="table table-responsive">
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>날짜</th>
          </tr>
          <?php foreach ($list as $item) {?>
          <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="./datainfo.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></td>
            <td><?php echo $item['author'] ?></td>
            <td><?php echo $item['timestamp'] ?></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="3">
              <nav>
                <ul class="pagination pagination-sm">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </td>
            <td>
              <a href="./write.php" class="btn btn-primary" style="float : right">글쓰기</a>
            </td>
          </tr>
        </table>
      </div>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
