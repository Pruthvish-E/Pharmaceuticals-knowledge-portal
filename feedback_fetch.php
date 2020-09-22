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
$query = "select * from cust_info_feedback";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>CID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Location</th>
							<th>Feedback</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["CID"].'</td>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Email"].'</td>
				<td>'.$row["Contact"].'</td>
				<td>'.$row["Location"].'</td>
				<td>'.$row["Feedback"].'</td>
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