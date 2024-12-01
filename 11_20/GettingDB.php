<?php
require_once 'DBConnect.php';

function tablePrint($connect,$arr)
{
    foreach ($arr as $key => $val) {
        try {
            //query
            $sql = "select $val from books";
            
            //execute the query
            $result = mysqli_query($connect,$sql);
        
            //check if data executed
            if(mysqli_num_rows($result)>0){
                //fetch the data from rows
                echo "<table border = '1'>";
                $col = mysqli_fetch_fields($result);
                //print the columns
                echo"<tr>";
                foreach($col as $value){
                    //return an object
                    //print_r($value);
                    echo "<td>$value->name</td>";
                }
                echo "<tr>";
        
                while($row = mysqli_fetch_assoc($result)){
                    //print the data in a table format
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "<tr>";
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        
        } catch (Exeption $e) {
            die($e->getMessage());
        }
    }

   
}



//printTable("Books",$connect);
//printTable("Reviews",$connect);
$data=[
    'Name',
    'ISBN'

];
tablePrint($connect,$data);


?>