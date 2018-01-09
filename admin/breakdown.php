<?php 
	include 'connection/auth.php';
?>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("whole").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:12px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a id="addd" href="javascript:Clickheretoprint()">Print</a>
<div id="whole">
<?php
echo 'Name : '.$_GET['name'].'<br>';
echo 'Position : '.$_GET['position'].'<br>';
echo 'Party : '.$_GET['party'].'<br>';
echo 'Number of Votes : '.$_GET['numberofvotes'].'<br>';
?>
<table id="resultTable">
<thead>
	<tr>
		<th> NID </th>
		<th> Name </th>
	</tr>
</thead>
<tbody>
<?php
include('connection/connect.php');
$dsds=$_GET['name'];
$results = $db->prepare("SELECT * FROM votedetails WHERE candidate= :a");
	$results->bindParam(':a', $dsds);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
		$dddddd=$rows['voters'];
		$resultas = $db->prepare("SELECT * FROM voters WHERE nid= :j");
		$resultas->bindParam(':j', $dddddd);
		$resultas->execute();
		for($i=0; $rowas = $resultas->fetch(); $i++){
		?>
		<tr class="record">
			<td><?php echo $rowas['nid']; ?></td>
			<td><?php echo $rowas['name']; ?></td>
		</tr>
		<?php
		}
		
}
?>
</tbody>
</table>
</div>