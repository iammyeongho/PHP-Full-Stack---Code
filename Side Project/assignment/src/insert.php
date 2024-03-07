<?php 
    define("ROOT",$_SERVER["DOCUMENT_ROOT"]."/assignment/src/");
    define("ERROR_MSG_PARAM", "%s : 필수 입력 사항입니다.");
    require_once(ROOT."lib/lib.php");

    $conn = null;
    $http_method = $_SERVER["REQUEST_METHOD"];
    $arr_err_msg = [];
    $true_conn = false;

    try {
        if(!db_conn($conn))
			{
				throw new Exception("DB Error : PDO Instance");
			}
        if($http_method === "GET") {
            $user = isset($_GET["user"]) ? $_GET["user"] : "";
        } else {
            // *************************************************************************************
            // 값 확인 및 POST로 빈값이 오면 alert 출력
            $user = isset($_POST["user"]) ? $_POST["user"] : "";
            $title = isset($_POST["title"]) ? $_POST["title"] : "";
            $content = isset($_POST["content"]) ? $_POST["content"] : "";

            if($title === "" ) {
                $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "제목");
			}
            if($content === "" ) {
                $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "내용");
			}
			if (count($arr_err_msg) >= 1) {
				$error_messages = implode("\n", $arr_err_msg);
    
				echo '<script>';
				echo 'window.onload = function() {';
				echo '   var error_message = "' . addslashes($error_messages) . '";';
				echo '   alert(error_message);';
				echo '};';
				echo '</script>';
			}
            // *************************************************************************************

            // *************************************************************************************
            // 작성 구문 실행
            if(count($arr_err_msg) === 0) {

                $true_conn = $conn->beginTransaction();

                $arr_param = [
                    "user" => $_POST["user"]
					,"title" => $_POST["title"]
					,"content" => $_POST["content"]
				];

                if(insert_boards($conn, $arr_param) === false) {
                    // DB Insert 에러
                    throw new Exception("DB Error : Insert Boards");
                }
    
                $conn->commit();
    
                // 리스트 페이지로 이동
                header("Location: /assignment/src/list.php/?user=$user");
                exit;
            }
            // *************************************************************************************
        }
        
        // *************************************************************************************
        // 값 저장
        $tit_stay = isset($_POST["title"]) ? $_POST["title"] : "";
        $con_stay = isset($_POST["content"]) ? $_POST["content"] : "";

    } catch(Exception $e) {
		if($http_method === "POST") {
			echo $e->getMessage();
			if($true_conn === true)
			{
				$conn->rollBack();
			}
		}
		exit;
    } finally { 
        db_destroy_conn($conn);
    }

?>

<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="/assignment/src/css/style.css">
		<title>작성 페이지</title>
	</head>
	<body>
		<div class="background">
			<?php require_once(ROOT."header.php"); ?>
            <div class="container">
                <div class="insert-main">
                    <form action="/assignment/src/insert.php" method="POST">
                        <div class="insert-content">
                            <input type="hidden" name="user" value="<?php echo $user; ?>">
                            <div class="insert-content-item insert-color-title-1<?php if($user == 1) { ?> background-color-1 <?php } else if($user == 2) { ?> background-color-2 <?php } else if($user == 3) {?> background-color-3 <?php } else if($user == 4) { ?> background-color-4 <?php } ?>">작성자</div>
                            <div class="insert-content-item insert-color-content-1"><?php if($user == 1) { echo "신짱구" ;} else if($user == 2) { echo "안철수"; } else if($user == 3) { echo "유나이티드 맹구"; } else if($user == 4) { echo "한유라"; }?></div>
                            <div class="insert-content-item insert-color-title-1<?php if($user == 1) { ?> background-color-1 <?php } else if($user == 2) { ?> background-color-2 <?php } else if($user == 3) {?> background-color-3 <?php } else if($user == 4) { ?> background-color-4 <?php } ?>">제목</div>
                            <div class="insert-content-item insert-color-content-1"><input type="text" name="title" placeholder="제목을 입력해주세요. (50자 제한)" maxlength='50' value="<?php echo $tit_stay; ?>"></div>
                            <div class="insert-content-item insert-color-title-2<?php if($user == 1) { ?> background-color-1 <?php } else if($user == 2) { ?> background-color-2 <?php } else if($user == 3) {?> background-color-3 <?php } else if($user == 4) { ?> background-color-4 <?php } ?>">내용</div>
                            <div class="insert-content-item insert-color-content-2"><textarea type="text" name="content" placeholder="내용을 입력해주세요. (100자 제한)" maxlength='100'><?php echo $con_stay; ?></textarea></div>
                            <div class="insert-btn <?php if($user == 1) { ?> background-color-1 <?php } else if($user == 2) { ?> background-color-2 <?php } else if($user == 3) {?> background-color-3 <?php } else if($user == 4) { ?> background-color-4 <?php } ?>"><button></button></div>
                        </div>  
                    </form>
                </div>
            </div>

        <?php require_once(ROOT."footer.php"); ?>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>