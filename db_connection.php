<?php
// بيانات الاتصال بقاعدة البيانات
$host = 'https://github.com'; // اسم السيرفر (محليًا يكون localhost)
$dbname = 'registration_db.sql'; // اسم قاعدة البيانات
$username = 'sql12758266'; // اسم المستخدم (محليًا يكون root)
$password = 'VquZzQV7Lj'; // كلمة المرور (محليًا تكون فارغة)

// إنشاء الاتصال
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}
?>
