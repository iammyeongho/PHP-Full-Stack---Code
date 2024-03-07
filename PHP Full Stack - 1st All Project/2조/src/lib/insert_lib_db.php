<?php
	// ----------------------------
	// 함수명 	: db_conn
	// 기능 	: DB Connecy
	// 파라미터 : PDO &$conn
	// 리턴 	: 없음
	// ----------------------------

	function db_conn( &$conn )
	{
		$db_host 	= "192.168.0.85"; //host | 127.0.0.1 = localhost 
		$db_user 	= "team2"; // user
		$db_pw 		= "team2"; // password
		$db_name 	= "1st_project"; // DB name
		$db_charset = "utf8mb4"; // charset
		$db_dns		= "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
	
		try
		{
			$db_options = [
			PDO::ATTR_EMULATE_PREPARES		=> false
			,PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION
			,PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC
			];
		
			$conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
			return true;
		}
		catch (Exception $e)
		{
			$conn = null;
			return false;
		}
	}

	// ----------------------------
	// 함수명 	: db_destroy_conn
	// 기능 	: DB Destoroy
	// 파라미터 : PDO &$conn
	// 리턴 	: 없음
	// ----------------------------

	function db_destroy_conn(&$conn)
	{
		$conn = null;
	}

	// ----------------------------
	// 함수명 	: db_select
	// 기능 	: boards paging 조회
	// 파라미터 : PDO 		&$conn
	// 			: Array 	&$arr_param | 쿼리 작성용 배열
	// 리턴 	: Array / false
	// ----------------------------

	function db_select(&$conn) {
		try {
			$sql = 
				" SELECT "
				." 		id "
				."		,cate.category_name "
				."		,todo.title "
				."		,todo.amount_used "
				." FROM "
				."		todolist_table todo "
				." JOIN "
				." category_table cate "
				." ON "
				." todo.category_id = cate.category_id "
				;

			$stmt = $conn->query($sql);
			$result = $stmt->fetchAll();
			return $result; // 정상 : 쿼리 결과 리턴
		}
		catch(Exception $e) {
			return false; // 예외 발생 : flase 리턴
		}
	}

	// ----------------------------
	// 함수명 	: db_select_date
	// 기능 	: boards paging 조회
	// 파라미터 : PDO 		&$conn
	// 			: Array 	&$arr_param | 쿼리 작성용 배열
	// 리턴 	: Array / false
	// ----------------------------

	function db_select_date(&$conn, &$arr_param) {
		try {
			$sql = 
				" SELECT "
				." 		todo.id "
				."		,cate.category_name "
				."		,todo.title "
				."		,todo.amount_used "
				." FROM "
				."		todolist_table todo "
				." JOIN "
				." category_table cate "
				." ON "
				." todo.category_id = cate.category_id "
				." WHERE "
				." todo.create_date = :date "
				;

			$arr_ps = [
				":date" => $arr_param["date"]
			];

			$stmt = $conn->prepare($sql);
			$stmt->execute($arr_ps);
			$result = $stmt->fetchAll();
			return $result; // 결과 리턴
		}
		catch(Exception $e) {
			return false; // 예외 발생 : flase 리턴
		}
	}

// ******* insert lib. *************
// ----------------------------
	// 함수명 	: db_insert
	// 기능 	: boards 레코드 작성
	// 파라미터 : PDO 	&$conn
	//			Array	&$arr_param 쿼리 작성용 배열
	// 리턴 	: Boolean
	// ----------------------------

	function db_insert(&$conn, &$arr_param) {
		$sql =
			" INSERT INTO todolist_table ( "
			." title "
			." ,memo "
			." ,amount_used "
			." ,create_date "
			." ,category_id "
			." ) "
			." VALUES ( "
			." :title "
			." ,:memo "
			." ,:amount_used "
			." ,:create_date "
			." ,:category_id "
			." ) "
			;
		$arr_ps = [
			":title" => $arr_param["title"]
			,":memo" => $arr_param["memo"]
			,":amount_used" => $arr_param["amount_used"]
			,":create_date" => $arr_param["create_date"]
			,":category_id" => $arr_param["category_id"]
		];
		try {
			$stmt = $conn->prepare($sql);
			$result = $stmt->execute($arr_ps);
			return $result; //결과 리턴
		}catch(Exception $e) {
			return false;
		}
	}
?>