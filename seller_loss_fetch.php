<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer2");
$output = '';
$seller_id = 3;
if(isset($_SESSION['seller_id']))
{
	$seller_id = $_SESSION['seller_id'];
}
$myfile = fopen("seller_id.txt", "r");
$seller_id = fread($myfile,filesize("seller_id.txt"));
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	
	$query = "select sname,group_concat(drugs.name) as assosciated_drugs
from drug_symptoms,symptoms,drugs
where  symptoms.sname LIKE '%".$search."%' and drug_symptoms.sid=symptoms.sid and drug_symptoms.did=drugs.did
group by sname
";

}
else
{
$query = "select * from seller_warehouse_delete where sid = '$seller_id'";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DID</th>
							<th>MF_DATE</th>
							<th>NO_OF_UNITS</th>
							<th>LOSS</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["DID"].'</td>
				<td>'.$row["Mfd_date"].'</td>
				<td>'.$row["No_of_units"].'</td>
				<td>'.$row["loss"].'</td>
				</tr>
		';
	}
	echo $output;
}
else
{
	echo '<b>NO LOSS <b>';
}
?>