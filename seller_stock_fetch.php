<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
$seller_id = 3;
if(isset($_SESSION['seller_id']))
{
	$seller_id = $_SESSION['seller_id'];
}
$myfile = fopen("seller_id.txt", "r");
$seller_id = fread($myfile,filesize("seller_id.txt"));
fclose($myfile);
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	
	$query = "SELECT drugs.did,drugs.name,drugs.expiry_time, seller_warehouse.mfd_date,seller_warehouse.no_of_units
FROM drugs ,seller_warehouse
WHERE  drugs.did =seller_warehouse.did and drugs.name like '$search' and seller_warehouse.sid = $seller_id
";


}
else
{
$query = "SELECT drugs.did,drugs.name,drugs.expiry_time, seller_warehouse.mfd_date,seller_warehouse.no_of_units
FROM drugs ,seller_warehouse
WHERE  drugs.did =seller_warehouse.did  and seller_warehouse.sid = $seller_id
";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DID</th>
							<th>Name</th>
							<th>mf_date</th>
							<th>expiry_time</th>
							<th>no_of_units</th>

						</tr>';

	while($row = mysqli_fetch_array($result))
	{
		//print_r($row);
		$output .= '
			<tr>
				<td>'.$row["did"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["mfd_date"].'</td>
				<td>'.$row["expiry_time"].'</td>
				<td>'.$row["no_of_units"].'</td>
				
				</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>