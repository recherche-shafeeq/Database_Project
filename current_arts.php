<?php
	include "connect.php";

$qry = "SELECT art.ART_ID,artist.ARTIST_ID from artist join art on art.ARTIST_ID = artist.ARTIST_ID";
    // $qry = "Select ART_ID,ARTIST_ID FROM ART";
			// $qry = "SELECT * FROM student WHERE Department = '".$dept."'";
			// echo $qry;
			$res = $con->query($qry);
            // echo $res;
			$result = "";

			if ($res->num_rows>0) { 
				$result .= "<table align='center'>";
				$result .= "<th>Art ID</th><th>Artist ID</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['ART_ID']."
									</td>
									<td>
										".$row['ARTIST_ID']."
									</td>
								</tr>";
                }
                
                $result .= "</table>";
            }
            echo $result;

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

</body>
</html>

