<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
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
$query = "select * from mf_drug_stock_delete";

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
				<td>'.$row["MF_date"].'</td>
				<td>'.$row["No_of_units"].'</td>
				<td>'.$row["loss"].'</td>
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