<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>::Delete Customer::</title>  
  <?php include('admin_zone.php'); ?>
  <div class="col-md-7" style="padding-top:50px;padding-left:100px;">   
   <h5>Delete Customer</h5><br>
  <form action="delete_member.php" method="get"> 
   <div class="input-group">
    Customer Email: &nbsp;
      <input type="text" class="form-control" name="txtemail">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit" name="btnSearch">
          Search          
        </button>
      </div>
    </div>
    <?php

      $cnn = mysqli_connect("localhost","root","","love_banaras_restaurant");

      if(isset($_GET['btnSearch']))
      {
             
        $_SESSION['email'] = $_GET['txtemail'];
        $email =  $_SESSION['email'] ;
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
           $message  = $row['message'];
     ?>
   
   <style>
    th
    {
      text-align:left;           
    }
    TABLE
    {
      
      width:100%;
    }
   </style><br><br>
   <TABLE border="0">
     <tr>
     <th>Customer ID  </th><td><?php echo $id; ?></td>        
    </tr>
    <tr>
     <th>Customer Name  </th><td><?php echo $name; ?></td>
    </tr>
    <tr>
     <th>Email  </th><td><?php echo $email; ?>
    </tr>
     <tr>
     <th>Contact No.  </th><td><?php echo $phone; ?>
    </tr>   
     <th>Date  </th><td><?php echo $date; ?>
    </tr>
    <tr>
     <th>Time </th><td><?php echo $time; ?>
    </tr>
    <tr>
     <th>Message  </th><td><?php echo $message; ?>
    </tr>
    <tr>
      <td colspan="3"><br>
       <Button class="btn btn-danger" name="btnDelete">Delete</Button>
      </td>
    </tr>
   </TABLE> 
    <?php 

        }//End of else 
      }//end of btnSearch


      if(isset($_GET['btnDelete']))
      {
         $email =  $_SESSION['email'] ;
         $sql = "DELETE FROM member WHERE email = '$email'" ;
         
        if(mysqli_query($cnn,$sql))
        {
          echo "<script>alert('Record Deleted.')</script>";
          echo "<script>location.href='show_member.php'</script>";
        }  

      }

    ?>     
  </form>

  </div>

  </div>       
</div>
</body>
</html>