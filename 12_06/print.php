<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 

require_once '../11_20/ConnectDB.php';
require_once 'myFun.php';

 $id =$_GET['RegNo'];

Studentdetails($id,$connect);

?>

</body>
</html>