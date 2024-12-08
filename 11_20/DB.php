<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'ConnectDB.php';

    try{
        $sql="insert into student values('July','2020ASP006',  20 , 'AMC')";
        $result= mysqli_query($connect,$sql);
        if ($result) {
            echo "New student record created successfully";
        }else{
            die("error".mysqli_error($connect));
        }
    }catch(Exception $e){
        die($e ->getMessage());
    }

    ?>
</body>
</html>