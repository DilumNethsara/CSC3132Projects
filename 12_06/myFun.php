<?php
require_once '../11_20/ConnectDB.php';
function Studentdetails($id,$connect){
    try{
    
        $sql = "SELECT * FROM  Student where  RegNo like '%$id%'";
    
    
        $result = mysqli_query($connect,$sql);
    
        if (mysqli_num_rows($result)>0) {
        
    
            echo "<table border=1> ";
    
        $col = mysqli_fetch_fields($result);
    
        echo "<tr>";
        foreach ($col as $value) {
            
                echo "<td>".$value->name."</td>";
            }
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
            }
            echo "</table>";
        } 
        else{
            echo "No results"; 
        }
    
        }
    
    
    catch(Exception $e){
        die($e->getMessage());
    }
}

?>