<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
$seller_loc = 6;  //6
$seller_id = 3;   //3  //11 quantity
if(isset($_SESSION['seller_id']))
{
	$seller_id = $_SESSION['seller_id'];
}
$myfile = fopen("seller_id.txt", "r");
$seller_id = fread($myfile,filesize("seller_id.txt"));
fclose($myfile);
$result;
if(isset($_POST["query"]))
{
	$pieces = explode(",", $_POST["query"]);

	if(count($pieces) == 3)
	{
	//echo "'$pieces[0]','$pieces[1]'";
	//print_r($pieces);
	mysqli_query($connect,"CALL orderDrugs($pieces[0],$pieces[1],$pieces[2],$seller_id)");
	//print_r($result);
	$query = "SELECT drugs.did,drugs.name,drugs.expiry_time,seller_warehouse.loc_id,seller_warehouse.mfd_date,seller_warehouse.no_of_units
	FROM drugs ,seller_warehouse
	WHERE  drugs.did =seller_warehouse.did and drugs.did = $pieces[0] and seller_warehouse.sid = $seller_id
	";
	$result = mysqli_query($connect,$query);

	}
	else
	{
		$query = "SELECT drugs.did,drugs.name,drugs.expiry_time,seller_warehouse.loc_id,seller_warehouse.mfd_date,seller_warehouse.no_of_units
	FROM drugs ,seller_warehouse
	WHERE  drugs.did =seller_warehouse.did and seller_warehouse.sid = $seller_id
	";
	$result = mysqli_query($connect,$query);
	}
}
else
{
	$query = "SELECT drugs.did,drugs.name,drugs.expiry_time, seller_warehouse.loc_id ,seller_warehouse.mfd_date,seller_warehouse.no_of_units
	FROM drugs ,seller_warehouse
	WHERE  drugs.did =seller_warehouse.did and seller_warehouse.sid = $seller_id
	";
	$result = mysqli_query($connect,$query);	
}

if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DID</th>
							<th>Name</th>
							<th>Loc_id</th>
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
				<td>'.$row["loc_id"].'</td>
				<td>'.$row["mfd_date"].'</td>
				<td>'.$row["expiry_time"].'</td>
				<td>'.$row["no_of_units"].'</td>
				
				</tr>
		';
	}
	echo $output;
}



?>