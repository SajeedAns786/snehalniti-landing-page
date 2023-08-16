<?php
require_once("conn.php");
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=money multiply.xls");
header("Pragma: no-cache");
header("Expires: 0");
$m_H_f="<FONT SIZE=2 COLOR=black face=arial>";

echo "<table width=100%  border='1'>
	<tr>
					  <th>No</th>
					  <th>Event Name</th>
					  <th>Event Date</th>
					  <th>User Name</th>
					  <th>User EmailID</th>
					  <th>Mobile No</th>
					  <th>Profession</th>
					   <th>City</th>
					  <th>Pay OR Cash </th>
					    <th>seat category</th>
					  <th>Added on</th>
					</tr>";

	$sql = "SELECT * FROM `all_seminar_leads_copy2` WHERE `seminar_name`= 'dailyweb'";
	$result = mysqli_query($conn,$sql);
	$i=1;while($row = mysqli_fetch_array($result)) {
		
	 	echo "<tr>";
		echo "<td>".$m_H_f.$i."</td>";
		echo "<td>".$m_H_f.$row["seminar_name"]."</td>";
		echo "<td>".$m_H_f.$row["seminar_date"]."</td>";
		echo "<td>".$m_H_f.$row["name"]."</td>";
        echo "<td>".$m_H_f.$row["email"]."</td>";
        echo "<td>".$m_H_f.$row["phone"]."</td>";
        echo "<td>".$m_H_f.$row["professional"]."</td>";
		 echo "<td>".$m_H_f.$row["city"]."</td>";
         echo "<td>".$m_H_f.$row["payment_type"]."</td>";
		   echo "<td>".$m_H_f.$row["added_by_2"]."</td>";
        echo "<td>".$m_H_f.$row["added_on"]."</td>";     
        echo "</tr>";    
        $i=$i+1;
}
echo "</table>";

function get_val($str,$column_name){
	include("conn.php");
	$m_name="";
	$resultstr=mysqli_query($conn,$str);
	 if($resultstr){
		while ($myrow1=mysqli_fetch_array($resultstr)){
			$m_name=$myrow1[$column_name];
		 }
	}
	return $m_name;
}