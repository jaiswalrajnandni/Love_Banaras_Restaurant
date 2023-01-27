<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
   <title>::Change photos::</title>
   <?php include('admin_zone.php'); ?>
   <div class="col-md-10" style="padding-top:20px;">
     <div class="col-md-12">
      <form action="gallery.php" method="POST" enctype="multipart/form-data">
       <div class="row" style="margin-bottom:20px;">
        <div class="col-md-3">
         <a href = "../images/gallery/g1.jpg" data-lightbox="g1" data-title="Images" >
          <img src = "../images/gallery/g1.jpg" id="img1" class="img-fluid">
         </a>
         <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
         <a href = "../images/gallery/g2.jpg" data-lightbox="g2" data-title="Images" >
           <img src = "../images/gallery/g2.jpg" id="img1" class="img-fluid">
         </a>
         <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
          <a href = "../images/gallery/g4.jpg" data-lightbox="g3" data-title="Images" >
           <img src = "../images/gallery/g4.jpg" id="img1" class="img-fluid">
          </a> 
         <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
          <a href = "../images/gallery/g4.jpg" data-lightbox="g4" data-title="Images" >
           <img src = "../images/gallery/g4.jpg" id="img1" class="img-fluid">
          </a>
          <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
       </div>
       <div class="row" style="margin-bottom:20px;">     
        <div class="col-md-3">
          <a href = "../images/gallery/g5.jpg" data-lightbox="g5" data-title="Images" >
           <img src = "../images/gallery/g5.jpg" id="img1" class="img-fluid">
          </a> 
         <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
         <a href = "../images/gallery/g6.jpg" data-lightbox="g6" data-title="Images" >
          <img src = "../images/gallery/g6.jpg" id="img1" class="img-fluid">
         </a>
        <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
        <a href = "../images/gallery/g8.jpg" data-lightbox="g7" data-title="Images" >
         <img src = "../images/gallery/g8.jpg" id="img1" class="img-fluid">
        </a>
        <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>
        <div class="col-md-3">
        <a href = "../images/gallery/g8.jpg" data-lightbox="g7" data-title="Images" >
         <img src = "../images/gallery/g8.jpg" id="img1" class="img-fluid">
        </a>
        <br><br>
           <input type="file" name="fileImage" >
         <br>
           <button class="btn btn-primary" name="btnUpdate" value="Upload Images" style="width:100px;">Update</button>
        </div>    
       </div>
      </form>
    </div>
   </div>
  </div>       
 </div>
</body>
</html>
