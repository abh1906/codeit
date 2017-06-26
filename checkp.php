<?php
$pid=$_REQUEST["q"];
$aid=$_REQUEST["p"];

require_once('connection.php');
$sql ="select pid from problems where pid='".$pid."' and aid='".$aid."'";

$result=$con->query($sql);


if($row=$result->fetch_assoc()){

echo $pid." is not available !!";


}

elseif($pid=="")
echo "Field cannot be left blank";

else{


echo $pid." is available !";


}





?>
