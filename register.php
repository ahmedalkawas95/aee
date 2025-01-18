<?php
// الاتصال بقاعدة البيانات
$host = 'Server: sql12.freemysqlhosting.net';
$dbname = 'registration_db.sql';
$username = 'sql12758266';
$password = 'VquZzQV7Lj';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}

// استلام البيانات من الفورم
$name = $_GET['name'];
$phone = $_GET['phone'];
$governorate = $_GET['governorate'];
$referral_phone = $_GET['referral_phone'];
$age = $_GET['age'];
$college = $_GET['college'];
$university = $_GET['university'];




// التحقق من أن جميع الحقول تم ملؤها
if (empty($name) || empty($phone) || empty($governorate) || empty($referral_phone) || empty($age) || empty($college) || empty($university)) {
    die("يرجى ملء جميع الحقول المطلوبة.");
}


// حفظ البيانات في قاعدة البيانات
$sql = "INSERT INTO users (name, phone, governorate, referral_phone, age, college, university) 
        VALUES (:name, :phone, :governorate, :referral_phone, :age, :college, :university)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':name' => $name,
    ':phone' => $phone,
    ':governorate' => $governorate,
    ':referral_phone' => $referral_phone,
    ':age' => $age,
    ':college' => $college,
    ':university' => $university
]);

echo "تم تسجيل البيانات بنجاح!";
?>
