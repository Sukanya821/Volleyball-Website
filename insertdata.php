<?php
require('connect.php');

// รับค่าจากฟอร์ม
$Rank_id    = $_REQUEST['Rank_id'];
$Total_Score = $_REQUEST['Total_Score']; // แก้ไขเป็น Total_Score
$Team_id    = $_REQUEST['Team_id'];
$Team_name  = $_REQUEST['Team_name']; // เพิ่ม Team_name หากต้องการใช้

// ตรวจสอบค่าที่ได้รับ
if (empty($Rank_id) || empty($Total_Score) || empty($Team_id) || empty($Team_name)) {
    die("Error: All fields are required.");
}

// สร้าง SQL Query
$sql = "
    INSERT INTO volleyball.rank (Rank_id, Total_Score, Team_id, Team_name)
    VALUES ('$Rank_id', '$Total_Score', '$Team_id', '$Team_name'); 
";

// รัน Query
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "New record Inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn); // แสดงข้อผิดพลาดจาก MySQL
}

mysqli_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>
