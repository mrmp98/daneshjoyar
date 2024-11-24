<?PHP 
 
// اطلاعات اتصال به پایگاه داده
$host = 'localhost'; // آدرس سرور پایگاه داده
$db = 'khabary'; // نام پایگاه داده
$user = 'root'; // نام کاربری پایگاه داده
$pass = ''; // رمز عبور پایگاه داده
$charset = 'utf8mb4';

// DSN (Data Source Name) برای PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // ایجاد اتصال به پایگاه داده
    $pdo = new PDO($dsn, $user, $pass, $options);

    // ایجاد جدول post
    $sql = "CREATE TABLE IF NOT EXISTS post (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        post LONGTEXT NOT NULL,
        titel LONGTEXT NOT NULL,
        
        stuat TEXT NOT NULL,
        time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

    $pdo->exec($sql);
    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        user     LONGTEXT NOT NULL,
        password LONGTEXT NOT NULL,
        email    LONGTEXT NOT NULL
        
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

    $pdo->exec($sql);
   
} catch (\PDOException $e) {
    // در صورت بروز خطا، پیام خطا را نمایش می‌دهد
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}