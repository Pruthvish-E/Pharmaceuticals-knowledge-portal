<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$arr = explode(",", $search);
	$query = "SELECT drugs.did,drugs.name,drugs.expiry_time, mf_drug_stock.mf_date,mf_drug_stock.no_of_units
FROM drugs ,mf_drug_stock
WHERE  drugs.did =mf_drug_stock.did and drugs.did like '$arr[0]'
";
if(count($arr) == 3)
{
mysqli_query($connect, "Insert Into mf_drug_stock  values ($arr[0],'$arr[1]',$arr[2])");
}


}
else
{
$query = "SELECT drugs.did,drugs.name,drugs.expiry_time, mf_drug_stock.mf_date,mf_drug_stock.no_of_units
FROM drugs ,mf_drug_stock
WHERE  drugs.did =mf_drug_stock.did;
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
				<td>'.$row["mf_date"].'</td>
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