<?php
$con  mysqli_connect("localhost","root","","mychat");
$user = "select * from users";
$run_user = mysqli_query($con, $user);
while ($row_user=mysqli_fetch_array($run_user)){
$user_id = $row_user['user_id'];
$user_name = $row_user['user_name'];
$user_profile = $row_user['user_profile'];
$login = $row_user['log_in'];

echo"
<li>
<div class='chat-left-img'>
<img src='$user_profile'>
</div>
</li>
";
}
?>