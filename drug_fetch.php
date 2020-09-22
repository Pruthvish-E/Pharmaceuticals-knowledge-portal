<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	
	$query = "SELECT drugs.did,drugs.name,group_concat(sname) as assosciated_symptoms
from drug_symptoms,symptoms,drugs
where  drugs.name LIKE '%".$search."%' and drug_symptoms.sid=symptoms.sid and drug_symptoms.did=drugs.did
group by drugs.did,drugs.name";

}
else
{
		$query = "SELECT drugs.did,drugs.name,group_concat(sname) as assosciated_symptoms
	from drug_symptoms,symptoms,drugs
	where  drugs.name LIKE '%".''."%' and drug_symptoms.sid=symptoms.sid and drug_symptoms.did=drugs.did
	group by drugs.did,drugs.name";


}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DID</th>
							<th>Name</th>
							<th>Symptoms</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["did"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["assosciated_symptoms"].'</td>
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