<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$host = 'localhost';
$dbname = 'clinic_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["error" => "فشل الاتصال: " . $e->getMessage()]);
    exit;
}

// استقبال البيانات بصيغة JSON
$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data['c_fname']) && !empty($data['c_lname']) && !empty($data['c_email']) && !empty($data['c_message'])) {
    $stmt = $pdo->prepare("INSERT INTO messages (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)");

    if ($stmt->execute([$data['c_fname'], $data['c_lname'], $data['c_email'], $data['c_subject'], $data['c_message']])) {
        echo json_encode(["message" => "تم حفظ الرسالة بنجاح!"]);
    } else {
        echo json_encode(["error" => "فشل في حفظ الرسالة."]);
    }
} else {
    echo json_encode(["error" => "يجب ملء جميع الحقول المطلوبة."]);
}
