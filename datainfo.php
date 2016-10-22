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

$stmt_reply = $conn->prepare('SELECT * FROM community1_reply WHERE community1_id ='.$id);
/* Query 실행 */
$stmt_reply->execute();
/* 조회한 Data를 배열(Array) 형태로 모두 저장 */
$list_reply = $stmt_reply->fetchAll();

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
            </li>
          </ul>
        </div><!-- /.container-fluid -->
      </nav>
    </section>
    <section class="imgbody col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <table>
              <tr>
                <th><?php echo $item[0]['title']; ?></th>
              </tr>
          </table>
        </div>
        <div class="panel-body">
          <table class="table table-responsive">
            <tr>
              <td style="width: 65%"><?php echo $item[0]['timestamp']; ?></td>
              <td><?php echo $item[0]['author']; ?></td>
              <td>
                <a href="./modify_1data.php?id=<?php echo $item[0]['id']?>" class="btn btn-success btn-sm">수정</a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">삭제</button>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <?php echo $item[0]['content']; ?>
              </td>
            </tr>
          </table>
        </div>

        <div class="panel-footer">
          <form id="insert_reply" action="./insert_reply_1data.php">
            <table style = "width : 100%">
              <tr>
                <th><h4>댓글</h4></th>
              </tr>
              <tr>
                <td>
                  <div class="input-group col-xs-3">
                    <span class="input-group-addon" id="basic-addon1">작성자</span>
                    <input type="text" class="form-control" placeholder="작성자" name="reply_author" aria-describedby="basic-addon1">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width : 100%;" rowspan="2"><textarea class="form-control" id="content" name="reply_content" placeholder="댓글 내용"></textarea></td>
                <td style="width : 100%;height : 100%"></td>
              </tr>
              <tr>
                <input type="hidden" name="community1_id" value="<?php echo $item[0]['id'] ?>">
                <td><button type="submit" class="btn btn-success">입력</button></td>
              </tr>
            </table>
          </form>
          <table style = "width : 100%">
            <tr><td colspan="2" style="padding-top : 20px;" ></td></tr>
            <?php if(count($list_reply) > 0){ foreach ($list_reply as $item_reply) {?>
            <tr style="border-top : gray solid 2px">
              <td style="color:#213e5e;font-size : 16px; font-weight: bold;"><?php echo $item_reply['author']; ?></td>
              <td style="float: right; color:#6f6f6f"><?php echo $item_reply['timestamp']; ?></td>
            </tr>
            <tr>
              <td colspan="2" style="padding-bottom : 10px;"><?php echo $item_reply['content']; ?></td>
            </tr>
            <?php }}else{?>
              <tr style="border-top : gray solid 2px;">
                <td colspan="2" style="padding-top:10px;" class="text-center">등록된 댓글이 없습니다.</td>
              </tr>
            <?php } ?>
            <!-- <tr>
              <td class="text-center"><a href="./datainfo.php?id=<?php echo $item[0]['id']-1?>" class="btn btn-default btn-sm"><</a></td>
              <td class="text-center" style="width: 100%"><a href="./community1.php" class="btn btn-primary btn-sm">목록으로</a></td>
              <td class="text-center"><a href="./datainfo.php?id=<?php echo $item[0]['id']+1?>" class="btn btn-default btn-sm">></a></td>
            </tr> -->
          </table>
        </div>
      </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">게시물 삭제</h4>
          </div>
          <div class="modal-body">
            정말 삭제하시겠습니까?
          </div>
          <div class="modal-footer">
            <form class="" action="./delect_1data.php" method="get">
              <input type="hidden" name="id" value="<?php echo $item[0]['id']?>">
              <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
              <button type="submit" class="btn btn-danger">삭제</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
