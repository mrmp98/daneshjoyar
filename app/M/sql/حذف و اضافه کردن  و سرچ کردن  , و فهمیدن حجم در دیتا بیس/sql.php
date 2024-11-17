<?php
// اضافه کردنن 

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=aref", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tableName = "aref";

    $email = "john@example.com";
    $password = "446544";

    // بررسی وجود اطلاعات قبل از وارد کردن
    $checkQuery = "SELECT COUNT(*) as count FROM $tableName WHERE rms = :password";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bindParam(':password', $password);
    $checkStmt->execute();
    $row = $checkStmt->fetch(PDO::FETCH_ASSOC);
    $count = $row['count'];

    if ($count > 0) {
        echo "اطلاعات در پایگاه داده موجود است. ورود صرف نظر خواهد شد.";
    } else {
        // اجرای استعلام INSERT
        $sql = "INSERT INTO $tableName (esm, famil, rms) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $name = "aref jami";
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            echo "اطلاعات با موفقیت وارد شد.";
        } else {
            echo "خطا در وارد کردن اطلاعات: " . $stmt->errorInfo();
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// حذف کردن 
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=aref", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tableName = "aref";
    $idToDelete = 3; // شناسه رکوردی که می‌خواهید حذف شود


    // اجرای استعلام DELETE
    $sql = "DELETE FROM $tableName WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $idToDelete);

    if ($stmt->execute()) {
        echo "رکورد با موفقیت حذف شد.";
    } else {
        echo "خطا در حذف رکورد: " . $stmt->errorInfo();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// سرچ کردن در دیتا بیس 
// اتصال به دیتابیس
$servername = "نام سرور";
$username = "نام کاربری";
$password = "رمز عبور";
$dbname = "نام دیتابیس";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // استعلام برای بررسی وجود مقدار x در دیتابیس
    $sql = "SELECT COUNT(*) AS count FROM table_name WHERE column_name = :x";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':x', $x);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row['count'] > 0) {
        echo "مقدار $x در دیتابیس وجود دارد.";
    } else {
        echo "مقدار $x در دیتابیس یافت نشد.";
    }
} catch(PDOException $e) {
    echo "خطا در اتصال به دیتابیس: " . $e->getMessage();
}

$conn = null;
// 
// فهمیدن حجم دیتا بیس

$conn = new PDO("mysql:host=hostname;dbname=databasename", "username", "password");
$stmt = $conn->prepare("SELECT table_schema AS 'Database', SUM(data_length + index_length) / 1024 / 1024 AS 'Size (MB)' FROM information_schema.TABLES WHERE table_schema = 'databasename' GROUP BY table_schema;");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo "حجم دیتابیس: " . $result['Size (MB)'] . " مگابایت";