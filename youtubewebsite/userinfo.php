
<?php
if(isset($_REQUEST["user"]) && isset($_REQUEST["email"]) && isset($_REQUEST["mobile"]) && isset($_REQUEST["comment"])){
 $user = htmlentities($_REQUEST["user"]);
 $email = htmlentities($_REQUEST["email"]);
 $mobile = htmlentities($_REQUEST["mobile"]);
 $comment = htmlentities($_REQUEST["comment"]);
$insertUsersData = "INSERT into userinfodata(user,email,mobile,comment) VALUES ('$user','$email','$mobile','$comment')";
$runUserQuery = mysqli_query($connect,$insertUsersData);
if($runUserQuery==true){
	header("location:index.php?done_signup=Registration successful!");
}
}
?>