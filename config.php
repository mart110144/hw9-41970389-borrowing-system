<?php
// แก้ไขค่าให้ตรงกับฐานข้อมูล borrowings_db ที่คุณมาร์ทใช้งานจริง
$host = 'db'; 
$dbname = 'borrowings_db'; // เปลี่ยนจาก equipment_borrow_db เป็นตัวที่มาร์ทใช้จริง
$username = 'root';        // เปลี่ยนเป็น root เพื่อให้มีสิทธิ์จัดการฐานข้อมูล
$password = 'rootpassword'; // รหัสผ่านมาตรฐานตามที่ตั้งค่าใน docker-compose

try {
    // สร้างการเชื่อมต่อฐานข้อมูลผ่าน PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // ตั้งค่าการแจ้งเตือน Error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // หากเชื่อมต่อไม่สำเร็จ ให้แสดงข้อความแจ้งเตือน
    die("Connection failed: " . $e->getMessage());
}
?>