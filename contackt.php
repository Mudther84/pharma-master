<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات
    $first_name = trim($_POST['c_fname']);
    $last_name = trim($_POST['c_lname']);
    $email = trim($_POST['c_email']);
    $subject = trim($_POST['c_subject']);
    $message = trim($_POST['c_message']);

    // التحقق من البيانات
    if (empty($first_name) || empty($last_name) || empty($email) || empty($message)) {
        die("يرجى ملء جميع الحقول المطلوبة.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("يرجى إدخال بريد إلكتروني صحيح.");
    }

    // إدخال البيانات إلى قاعدة البيانات
    try {
        $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, subject, message) 
                                VALUES (:first_name, :last_name, :email, :subject, :message)");
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);

        echo "تم إرسال رسالتك بنجاح!";
    } catch (PDOException $e) {
        die("خطأ في إرسال الرسالة: " . $e->getMessage());
    }
}
