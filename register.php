// <?php
// // استدعاء ملف الاتصال بقاعدة البيانات
// include 'db_connection.php';

// // استلام البيانات من النموذج
// $name = $_POST['name'] ?? '';
// $phone = $_POST['phone'] ?? '';
// $governorate = $_POST['governorate'] ?? '';
// $referral_phone = $_POST['referral_phone'] ?? '';
// $age = $_POST['age'] ?? '';
// $college = $_POST['college'] ?? '';
// $university = $_POST['university'] ?? '';

// // التحقق من ملء جميع الحقول
// if (empty($name) || empty($phone) || empty($governorate) || empty($referral_phone) || empty($age) || empty($college) || empty($university)) {
//     die("يرجى ملء جميع الحقول.");
// }

// // إدخال البيانات في قاعدة البيانات
// $sql = "INSERT INTO users (name, phone, governorate, referral_phone, age, college, university) 
//         VALUES (:name, :phone, :governorate, :referral_phone, :age, :college, :university)";
// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     ':name' => $name,
//     ':phone' => $phone,
//     ':governorate' => $governorate,
//     ':referral_phone' => $referral_phone,
//     ':age' => $age,
//     ':college' => $college,
//     ':university' => $university
// ]);

// echo "تم تسجيل البيانات بنجاح!";
// ?>
<?php
include 'db_connection.php'; // تضمين ملف الاتصال بقاعدة البيانات

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $governorate = $_POST['governorate'];
    $referral_phone = $_POST['referral_phone'];
    $age = $_POST['age'];
    $college = $_POST['college'];
    $university = $_POST['university'];

    $sql = "INSERT INTO registrations (name, phone, governorate, referral_phone, age, college, university) 
            VALUES ('$name', '$phone', '$governorate', '$referral_phone', '$age', '$college', '$university')";

    if ($conn->query($sql) === TRUE) {
        echo "تم التسجيل بنجاح";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
