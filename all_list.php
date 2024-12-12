
  
  
</head>
<body>

<div class="container">

	<?php
require_once("conn.php");
$sql = "SELECT * FROM `all_seminar_leads_copy2` WHERE `seminar_name`= 'dailyweb'";
$result = mysqli_query($conn,$sql);
?>

  <h2 class="text-center">Money Multiplier Leads</h2>
  <!--<p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  -->
  <div class="table-responsive">          
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>No.</th>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>User Name</th>
        <th>User Email ID</th>
        <th>Mobile No </th>
		<!--<th>Profession </th>-->
		<th>City</th>
	<!--	<th>seat category</th>-->
		<th>Added on</th>
      </tr>
    </thead>
    <tbody>
		<?php $i=1;while($row = mysqli_fetch_array($result)) {?>
      <tr>
		<td><?php echo $i;?> </td>
		<td><?php echo $row["seminar_name"]; ?></td>
		<td><?php echo $row["seminar_date"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<!--<td><?php echo $row["professional"]; ?></td>-->
		<!-- <td><?php /*  echo $row["payment_type"]; */  ?></td> -->
		<td><?php echo $row["city"]; ?></td>
		<!--<td><?php echo $row["added_by_2"]; ?></td>-->
		<td><?php echo date('d-m-Y', strtotime($row["added_on"])); ?></td>
      </tr>
	  	<?php $i++;}?>
    </tbody>
  </table>
  </div>
  
  <br>
  <br><button type="button" class="btn btn-info" onclick="window.location.href='export_lead.php'">Export Data</button>
  
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
         "scrollY":        "400px",
        "scrollCollapse": true,
        
    });
} );
</script>
</body>
</html>
