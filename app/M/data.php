<?php 
namespace app\M;
use PDOException  ;
use PDO  ;  
require_once __DIR__ . '/Config.php'; 

class data 
{
    public function REED($U = null)
{
    if ($U == 3) {
        try {
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // اجرای کوئری
            try {
                $stmt = $conn->query('SELECT * FROM `post` WHERE stuat = 1');
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $users; 
            } catch (PDOException $e) {
                echo 'Query failed: ' . $e->getMessage();
                return [];
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return [];
        }
    }
    if ($U == 2) {
        try {
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // اجرای کوئری
            try {
                $stmt = $conn->query('SELECT * FROM `post` WHERE stuat = 0');
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $users; 
                
            } catch (PDOException $e) {
                echo 'Query failed: ' . $e->getMessage();
                return [];
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return [];
        }
    }
    try {
        $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // اجرای کوئری
        $stmt = $conn->query('SELECT * FROM `user`');

        // ذخیره‌سازی نتایج در یک آرایه
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users; 
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return [];
    }
}
    public function inseret($tableName, $post, $titel ,  $r, $t = null , $stuat = null) 
    {
        if ($r == 2) {
            // استفاده از مقادیر تعریف شده به جای نام متغیرها
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $sql = "INSERT INTO $tableName (post, titel , stuat) VALUES (:post, :titel , :stuat)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':post', $post);
            $stmt->bindParam(':titel', $titel);
            $stmt->bindParam(':stuat', $stuat);
            if ($stmt->execute()) {
                // موفقیت در اجرای دستور
            }
            return; 
        }
        
        if ($r == 3) {
            // استفاده از مقادیر تعریف شده به جای نام متغیرها
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $sql = "INSERT INTO $tableName (user, password, email) VALUES (:user, :password, :email)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $post);
            $stmt->bindParam(':password', $titel);
            $stmt->bindParam(':email', $t);
            if ($stmt->execute()) {
                // موفقیت در اجرای دستور
            }
            return;    
        }
    }

       public function delet($tableName , $id)
       {
        try {
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
        
            // اجرای استعلام DELETE
            $sql = "DELETE FROM $tableName WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
        
            if ($stmt->execute()) {
              
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
       }

       public function serech($tableName , $serech , $value)
       {
        try {
            // اتصال به پایگاه داده
            $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
            // مقداردهی به متغیر جستجو
            
            // استعلام برای بررسی وجود مقدار x در دیتابیس
            $sql = "SELECT COUNT(*) AS count FROM $tableName WHERE $serech = :x";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':x', $value);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // استفاده از $serech به جای $x
            if ($row['count'] > 0) {
                return 1 ; 
            } else {
              return 0  ; 
            }
        } catch(PDOException $e) {
            echo "خطا در اتصال به دیتابیس: " . $e->getMessage();
        }
        
        $conn = null;
       }
       public function update($tableName, $updateColumn, $updateValue, $conditionColumn, $conditionValue)
       {
           try {
               // اتصال به پایگاه داده
               $conn = new PDO("mysql:host=" . host . ";dbname=" . dbname, usename, password);
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
               // استعلام برای به‌روزرسانی مقدار
               $sql = "UPDATE $tableName SET $updateColumn = :updateValue WHERE $conditionColumn = :conditionValue";
               $stmt = $conn->prepare($sql);
               
               // باند کردن پارامترها
               $stmt->bindParam(':updateValue', $updateValue);
               $stmt->bindParam(':conditionValue', $conditionValue);
               
               // اجرای دستور
               if ($stmt->execute()) {
               }
           } catch(PDOException $e) {
               return "خطا در اتصال به دیتابیس: " . $e->getMessage();
           } finally {
               $conn = null; // اطمینان از بستن اتصال به پایگاه داده
           }
       }
}
 