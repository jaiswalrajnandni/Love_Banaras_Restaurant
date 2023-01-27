<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>::Admin Zone::</title>
	<?php include('admin_zone.php'); ?>
	<div class="col-md-10" style="padding-top:100px;padding-left:180px;">		
	 <h5> Change Marquee </h5><br>
	 <div class="col-md-8">
	 <form action="marquee.php" method="post"> 
	  <div class="input-group">Maruee : &nbsp;
      <input type="text" class="form-control" name="txtMarquee" value="<?php echo $row['marquee'];?>">
      <div class="input-group-append">
       <button class="btn btn-primary" name="btnUpdate" style="width:100px;">Update</button>
      </div>
    </div>    
   </form>
    <?php  

      $cnn = mysqli_connect("localhost","root","","love_banaras_restaurant");
         
         $email = $_SESSION['email'];           
         $pass =  $_SESSION['pass'];


         $sql = "SELECT * from admin WHERE email = '$email' AND pass = '$pass'" ;

          $rec = mysqli_query($cnn,$sql);
          $row = mysqli_fetch_assoc($rec);
          $photo = $row['email'];
      
      if(isset($_POST['btnUpdate'])) 
      {
         $marquee = $_POST['txtMarquee'];     
         $sql="UPDATE admin SET marquee = '$marquee' WHERE email = '$email'";
         if(mysqli_query($cnn,$sql))
         {
           echo "<script>alert('Profile Updated.');</script>";
           echo "<script>location.href='index.php'</script>";
         }
      } 
   ?>

  </div>
	</div>
  </div>		   
</div>
</body>
</html>