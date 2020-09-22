<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
if(isset($_POST["feedback"]))
{
	

	$query = "Insert into cust_info_feedback (name,email,contact,location,feedback) values ('$_POST[name]','$_POST[email] ','$_POST[phone]','$_POST[location]','$_POST[feedback]')";

	// echo "$_POST[feedback]";

	// $query = "Insert into cust_info_feedback (name,email,contact,location,feedback) values ('1','1@1.com','12121','1','1')";
	

	$result = mysqli_query($connect, $query);


	if($result > 0)
	{
		echo "done";
		header("location: http://localhost/km/templates/newsbit/newsbit/contact_us.html"); 
	}
	else
	{
		echo "No";
		header("location: http://localhost/km/templates/newsbit/newsbit/contact_us.html");
	}


}
else
{
	echo "No";
	header("location: http://localhost/km/templates/newsbit/newsbit/contact_us.html");
}
?>