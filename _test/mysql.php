<?php
require_once 'inc/functions.php';

// 데이터베이스 연결 정보
$mysql_env = get_envs(['MYSQL_IP', 'MYSQL_PORT', "MYSQL_ID", "MYSQL_PW", "MYSQL_DB"]);

$host=$mysql_env['MYSQL_IP'];
$port=$mysql_env['MYSQL_PORT'];
$username=$mysql_env['MYSQL_ID'];
$password=$mysql_env['MYSQL_PW'];
$database=$mysql_env['MYSQL_DB'];

// MySQL 연결 생성
$conn = new mysqli($host, $username, $password, $database, $port);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL 쿼리 실행 예시
$sql = "SELECT * FROM settings_list LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 결과 출력
    while($row = $result->fetch_assoc()) {
        print_r($row) . "<br>"; // $row;
        echo "기관명: " . $row["기관명"]. "<br>";
        // echo "기관명: " . $row["기관명"]. " - 상세페이지주소: " . $row["상세페이지주소"]. "<br>";
    }
} else {
    echo "0 results";
}

// 연결 종료
$conn->close();
?>