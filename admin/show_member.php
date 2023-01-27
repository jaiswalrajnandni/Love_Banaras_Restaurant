<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:50px;padding-left:30px;padding-right:30px;">		
	 <TABLE class="table table-striped table-bordered">
	 	<tr><th colspan="11" style="color:blue;text-align:center;font-size:25px;">
        All Love Banaras Restaurant Member</th></tr>
	 	<tr>
	 		<th>Sno.</th>
	 		<th>ID</th>
	 		<th>Customer Name</th>
	 		<th>Email</th>
      <th>Contact No.</th>
	 		<th>Date of Birth</th>
	 		<th>Time</th>
	 		<th>Message</th>
	 	</tr>
	   <?php 

       $cnn = mysqli_connect("localhost","root","","love_banaras_restaurant");
       $sql = "SELECT * from member";
       $rec = mysqli_query($cnn,$sql);
       $n = mysqli_num_rows($rec);        
       for($i=1;$i<=$n;$i++)
       {
          $row = mysqli_fetch_assoc($rec);
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>" . $row['time'] . "</td>";
          echo "<td>" . $row['message'] . "</td>";     
          echo "<tr>";
       }

        mysqli_close($cnn);

	   ?>		
	 </TABLE>
	</div>
  </div>		   
</div>
</body>
</html>