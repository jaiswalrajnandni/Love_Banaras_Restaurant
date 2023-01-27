<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:100px;padding-left:180px;">		
	 <h5>Search Customer</h5><br>
	 <div class="col-md-8">
	 <form action="search_member.php" method="get"> 
	 <div class="input-group">
	 	Customer Email : &nbsp;
      <input type="text" class="form-control" name="txtemail">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit" name="btnSearch">
          Search          
        </button>        
      </div>
    </div>    
   </form>
    <br><br>
    <?php

      $cnn = mysqli_connect("localhost","root","","love_banaras_restaurant");

      if(isset($_GET['btnSearch']))
      {
             
        $email  = $_GET['txtemail'];        
        $sql = "SELECT * from member WHERE email = '$email'" ;
        $rec = mysqli_query($cnn,$sql);
        $n = mysqli_num_rows($rec);

        if(!$n)
         echo "<b><font color='red'>Record Not Found !!!</font></b>";
        else      
        {
           $row = mysqli_fetch_assoc($rec);
           $id   = $row['id'];
           $name = $row['name'];
           $email = $row['email'];
           $phone = $row['phone'];
           $date = $row['date'];
           $time  = $row['time'];
           $message = $row['message'];
    ?>
   
   <style>
   	th
   	{
   		text-align:left; 
   		width:100%;  		
   	}
   	TABLE
   	{
   		border:0px;
   	}
   </style>
   <TABLE border="1">
     <tr>
     	  <th>Customer ID  </th><td><?php echo $id; ?></td>        
    </tr>
    <tr>
     <th>Customer Name  </th><td><?php echo $name; ?></td>
    </tr>
    <tr>
     <th>Email  </th><td><?php echo $email; ?></td>
    </tr>
    <tr>
     <th>Contact No.  </th><td><?php echo $phone; ?></td>
    </tr>
    <tr>
     <th>Date </th><td><?php echo $date; ?></td>
    </tr>
    <tr>
     <th>Time  </th><td><?php echo $time; ?></td>
    </tr>
    <tr>
     <th>Message  </th><td><?php echo $message; ?></td>
    </tr>
    </TABLE>	<?php } } ?>
</div>
	</div>
  </div>		   
</div>
</body>
</html>