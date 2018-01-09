<?php
//Start session
session_start();

//Connect to mysql server
include('connection/connect.php');


$b=$_POST['nid'];
$c=$_POST['username'];
$d=$_POST['password'];
$w=$_POST['rpassword'];
$e='notRegistered';
$f='notvoted';
$g='Registered';
if ($w!=$d) {
$errmsg_arr[] = 'Password Mismatch';
echo "fail";
}
$resultas = $db->prepare("SELECT * FROM voter_list WHERE nid= :k AND status= :l");
$resultas->bindParam(':k', $b);
$resultas->bindParam(':l', $e);
$resultas->execute();
for($i=0; $rowas = $resultas->fetch(); $i++){
	$a=$rowas['name'];
}

$result = $db->prepare("SELECT * FROM voter_list WHERE nid= :a AND status= :e");
$result->bindParam(':a', $b);
$result->bindParam(':e', $e);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
	
	$sql = "INSERT INTO voters (name,nid,username,password,status) VALUES (:a,:b,:c,:d,:f)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':f'=>$f));
	
	$sqla = "UPDATE voter_list 
        SET status=?
		WHERE nid=?";
$qa = $db->prepare($sqla);
$qa->execute(array($g,$b));
echo "success";
}
else{
	return "fail";
}
?>