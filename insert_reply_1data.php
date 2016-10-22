<?php
  $community1_id = $_GET['community1_id'];
  $author = $_GET['reply_author'];
  $content = $_GET['reply_content'];

  $host = 'mysql:host=localhost;dbname=test';
  $user = 'test';
  $password = '1234';
  $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

  /* Data 조회를 위한 Query 작성 */
  $stmt = $conn->prepare('INSERT INTO community1_reply (community1_id,author,content) VALUES ("'.$community1_id.'","'.$author.'","'.$content.'")');
 /* Query 실행 */
  $stmt->execute();
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
     <section class="container">
       <h3 style="color : #ffffff">성공적으로 등록되었습니다.</h3>
       <a href="./datainfo.php?id=<?php echo $community1_id?>" class="btn btn-primary">돌아가기</a>
     </section>
     <script src="./lib/jquery-3.1.1.min.js"></script>
     <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="./js/script.js"></script>
   </body>
 </html>
