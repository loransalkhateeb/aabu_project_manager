<?php
include('dbconnect.php');	

$sql="SELECT * FROM `projects` where `status`='Rejected'"; 
$res=$con->query($sql);
while($row=$res->fetch_assoc()){
    $data[]=$row;
}
echo json_encode($data) ;
?>