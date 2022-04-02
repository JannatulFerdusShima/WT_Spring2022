<?php
Class db{
    function opencon(){
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    echo "could not connect";
}
else{
    return $conn;
}
    }
function InsertData($fname,$lname,$age,$salary,$address,$tablename,$conn){
$sql="INSERT INTO $tablename (Frist_Name,Last_Name,Age,Salary,Address) VALUES 
('$fname','$lname','$age','$salary','$address')";

if ($conn->query($sql)===TRUE)

{

    echo "data inserted";
    return $sql;
}
else{
echo "data cant insert ".$conn->error;

}
}


function closecon($conn){
     $conn->close();
}

}
?>