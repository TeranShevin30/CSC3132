<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     require_once 'DBconnect.php';
     //insert data into students table
     try {
         //Query
         $sql = "insert into students values('2020/ASP/5','Ruby',22,'ICT')";
         //execute the query
         $result = mysqli_query($connect,$sql);
         if ($result) {
             echo "New student record created successfully";
         }else{
             die("Error ".mysqli_error($connect));
         }
        
        } catch (Exception $e) {
         die($e->getMessage());
     }

    
    
    ?>    

</body>
</html>