<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
if(isset($_POST["query"]))
{
$pieces = explode(",", $_POST["query"]);

if(count($pieces) == 2)
{

//echo "'$pieces[0]','$pieces[1]'";
//print_r($pieces);
$result = mysqli_query($connect,"CALL findSellers('$pieces[0]','$pieces[1]')");
//print_r($result);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Sellers Email</th>
							<th>Contact Info</th>
							<th>Drug Name</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["email"].'</td>
				<td>'.$row["contact_no"].'</td>
				<td>'.$row["name"].'</td>
				</tr>
		';
	}
	echo $output;
}
else
{
	echo "<b>No Sellers Found<b>";
}
}
else
{
	echo "<b>No Sellers Found<b>";
}
}

?>