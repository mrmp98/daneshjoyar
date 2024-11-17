<?php 
namespace App\M;
use PDOException  ;
use PDO  ;  
class data 
{
    
public function inseret() 
{
    
        $conn = new PDO("mysql:host=;dbname=", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
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
       public function delet()
       {
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
       }

       public function serech()
       {

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
       }
}




