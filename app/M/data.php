<?php 
namespace App\M;
use PDOException  ;
use PDO  ;  
class data 
{
    
public function inseret($tableName  , $post , $titel , $r , $t = null  ) 
{
    
    if($r == 2){

    
        $conn = new PDO("mysql:host=;dbname=khabary", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $sql = "INSERT INTO $tableName (post, titel) VALUES (:post, :titel)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':post', $post);
            $stmt->bindParam(':titel', $titel);
            if ($stmt->execute()) {
              
            }
        return ; 
        }
            if($r == 3 ){
                $conn = new PDO("mysql:host=;dbname=khabary", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                    $sql = "INSERT INTO $tableName (user,password , email) VALUES (:user,:password ,:email)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':user', $post);
                    $stmt->bindParam(':password', $titel);
                    $stmt->bindParam(':email', $t);
                    if ($stmt->execute()) {
                      
                    }
                    return   ;    
            }
        }
       public function delet($tableName , $id)
       {
        try {
            $conn = new PDO("mysql:host=;dbname=khabary", 'root', '');
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
            $conn = new PDO("mysql:host=localhost;dbname=khabary", 'root', '');
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
               $conn = new PDO("mysql:host=localhost;dbname=khabary", 'root', '');
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




