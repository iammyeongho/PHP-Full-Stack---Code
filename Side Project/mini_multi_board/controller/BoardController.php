<?php
	namespace controller;

	use model\BoardModel as BM;

	class Boardcontroller extends ParentsController {
		protected $arrBoardInfo; 
		protected $titleBoardName;
		protected $boardType;


		protected function listGet() {
			// 파라미터 세팅
			$b_type = isset($_GET["b_type"]) ? $_GET["b_type"] : "0";

			$arrBoardInfo = [
				"b_type" => $b_type
			];

			// 페이지의 제목 세팅
			foreach($this->arrBoardNameInfo as $item) {
				if($item['b_type'] === $b_type) {
					$this->titleBoardName = $item["b_name"];
					$this->boardType = $item["b_type"];
					break;
				}
			}

			// 모델 인스턴스
			$boardModel = new BM(); 

			// board list 획득
			$this->arrBoardInfo = $boardModel->getBoardList($arrBoardInfo);


			// data 가공
			// $this->arrBoardInfo["b_content"] = mb_substr($this->arrBoardInfo["b_content"], 0, 10)."...";
			// $this->arrBoardInfo["b_img"] = isset($this->arrBoardInfo["b_img"]) ? _PATH_USERIMG.$this->arrBoardInfo["b_img"] : "";

			$boardModel->destroy();
			return "view/list.php";
		}

		// 글 작성
		protected function addPost() {
			// 작성 데이터 생성
			$u_pk = isset($_SESSION["u_pk"]) ? $_SESSION["u_pk"] : "";
			$b_type = isset($_POST["b_type"]) ? $_POST["b_type"] : "";
			$b_title = isset($_POST["b_title"]) ? $_POST["b_title"] : "";
			$b_content = isset($_POST["b_content"]) ? $_POST["b_content"] : "";
			// $b_img = isset($_FILES["b_img"]["name"]) ? $_FILES["b_img"]["name"] : NULL;
			$b_img = $_FILES["b_img"]["name"];

			// 이미지 파일 저장
			// 첫번째 파라미터 (원본 파일), 두번째 파라미터 (저장 경로)
			move_uploaded_file($_FILES["b_img"]["tmp_name"], _PATH_USERIMG.$b_img);

			$arrAddBoardInfo = [
				"u_pk" => $u_pk
				,"b_type" => $b_type
				,"b_title" => $b_title
				,"b_content" => $b_content
				,"b_img" => $b_img
			];

			// 모델 인스턴스
			$boardModel = new BM(); 

			$boardModel->beginTransaction();

			$result = $boardModel->addBoard($arrAddBoardInfo);
			if($result !== true) {
				$boardModel->rollBack();
			} else {
				$boardModel->commit();
			}

			$boardModel->destroy();

			return "Location: /board/list?b_type=".$b_type;


		}

		// 상세 정보 API
		protected function detailGet() {
			// $deleteFlg = "";
			$id = isset($_GET["id"]) ? $_GET["id"] : "";

			$arrBoardDetailInfo = [
				"id" => $id
			];

			$boardModel = new BM(); 
			$result = $boardModel->getBoardDetail($arrBoardDetailInfo);

			// 이미지 패스 재설정
			$result[0]["b_img"] = "/"._PATH_USERIMG.$result[0]["b_img"];

			// 작성 유저 플래그 설정
			$result[0]["uFlg"] = $result[0]["u_pk"] === $_SESSION["u_pk"] ? "1" : "0";

			// if($result[0]["u_pk"] === $_SESSION["u_pk"]) {
			// 	$deleteFlg = 1;
			// } else {
			// 	$deleteFlg = 0;
			// }
			
			// 레스폰스 데이터 작성
			$arrTmp = [
				"errflg" => "0"
				,"msg" => ""
				,"data" => $result[0]
			];
			$response = json_encode($arrTmp);

			// rsponse 처리
			header('Content-type: application/json');
			echo $response;
			exit();
	}

	// protected function deleteGet() {
	// 	$id = $_GET["id"];
	// 	$b_type = $_GET["b_type"];

	// 	$arrBoardDeleteInfo = [
	// 		"id" => $id
	// 	];

	// 	$boardModel = new BM(); 

	// 	$boardModel->beginTransaction();

	// 	$result = $boardModel->getBoardDelete($arrBoardDeleteInfo);
	// 	if($result !== true) {
	// 		$boardModel->commit();
	// 	} else {
	// 		$boardModel->rollBack();
	// 	}

	// 	$boardModel->destroy();

	// 	return "Location: /board/list?b_type=".$b_type;
	// }

	// 삭제처리 API
	protected function removeGet() {
		$errFlg = "0";
		$errMsg = "";
		$arrDeleteBoardInfo = [
			"id" => $_GET["id"]
			,"u_pk" => $_SESSION["u_pk"]
		];

		// 삭제 처리
		$boardModel = new BM();
		$boardModel->beginTransaction();
		$result = $boardModel->removeBoardCard($arrDeleteBoardInfo);

		if($result !== 1) {
			$errFlg = "1";
			$errMsg = "삭제 처리 이상";
			$boardModel->rollBack();
		} else {
			$boardModel->commit();
		}

		$boardModel->destroy();

		$arrTmp = [
			"errflg" => $errFlg
			,"msg" => $errMsg
			,"id" => $arrDeleteBoardInfo["id"]
		];
		$response = json_encode($arrTmp);

		header('Content-type: application/json');
		echo $response;
		exit();
	}
}