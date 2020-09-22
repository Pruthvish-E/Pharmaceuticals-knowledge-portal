<?php
$connect = mysqli_connect("localhost", "root", "", "pfizer");
$connect2 = mysqli_connect("localhost", "root", "", "pfizer2");

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
		$query = "SELECT * from search_failed_drugs ORDER BY COUNT DESC";


}
$result = mysqli_query($connect2, $query);
if(mysqli_num_rows($result) > 0)
{
	if(isset($_POST['cset']))
	{
		$query2 = "SELECT * from searched_drugs where NAME = '$_POST[query]' ";
		//echo $query2;
		$result2 = mysqli_query($connect2, $query2);
		if(mysqli_num_rows($result2) > 0)
		{
			$query3 = "UPDATE searched_drugs SET COUNT = COUNT + 1 WHERE NAME = '$_POST[query]'";
			$result3 = mysqli_query($connect2, $query3);
		}
		else
		{
			$query3 = "INSERT INTO searched_drugs(NAME,COUNT) VALUES ('$_POST[query]',1)";
			$result3 = mysqli_query($connect2, $query3);

		}	
	}
	
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>DRUG_NAME</th>
							<th>FREQUENCY SEARCHED</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["COUNT"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	if(isset($_POST['cset']))
	{
		$query2 = "SELECT * from search_failed_drugs where NAME = '$_POST[query]' ";
		//echo $query2;
		$result2 = mysqli_query($connect2, $query2);
		if(mysqli_num_rows($result2) > 0)
		{
			$query3 = "UPDATE search_failed_drugs SET COUNT = COUNT + 1 WHERE NAME = '$_POST[query]'";
			$result3 = mysqli_query($connect2, $query3);
		}
		else
		{
			$query3 = "INSERT INTO search_failed_drugs(NAME,COUNT) VALUES ('$_POST[query]',1)";
			$result3 = mysqli_query($connect2, $query3);

		}	
	}

	echo 'Data Not Found';
}
?>