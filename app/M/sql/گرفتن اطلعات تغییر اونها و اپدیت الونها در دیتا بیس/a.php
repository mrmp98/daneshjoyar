<?php
for($i=1; $i<=5; $i++){

        $servername = "localhost";
        $username = "mrqwir_mp";
        $password = "R&#[[o_fq!1)";


        try {
            $conn = new PDO("mysql:host=$servername;dbname=mrqwir_mp", $username, $password);

            $sql = "SELECT * FROM qw WHERE id = $i" ;
            $stmt = $conn->prepare ($sql) ;
            $stmt->execute () ;
            $user = $stmt->fetch (PDO:: FETCH_ASSOC) ;
            if ($stmt->execute()) {
                    $newName =base64_encode($user["name"]) ; 
                $newUsername = base64_encode($user["username"]) ; 
                    $newEmail =   base64_encode($user["email"]) ; 
                    $newPassword = base64_encode($user["paswoord"]) ;   
            $sql = "UPDATE qw SET name = :newName, username = :newUsername, email = :newEmail, paswoord = :newPassword WHERE id = $i";
            $query = $conn->prepare($sql);
            $query->bindParam(':newName', $newName);
            $query->bindParam(':newUsername', $newUsername);
            $query->bindParam(':newEmail', $newEmail);
            $query->bindParam(':newPassword', $newPassword);

            $query->execute();
            $affectedRows = $query->rowCount () ;
            if ($affectedRows > 0) {
            echo "موفق بودم نام را به‌روزرسانی کردم. " ;
            } else {
            echo "خطا در به‌روزرسانی نام. " ;
            } 
  
            } else {
                echo "خطا در وارد کردن اطلاعات: " . $stmt->errorInfo();
            
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            break ; 
        }

    }


