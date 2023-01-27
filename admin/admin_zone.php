
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/glyphicons.css" rel="stylesheet">
<script src="../bootstrap/jQuery/jQuery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.navbar-brand
	{
		color:white;
		font-size:25px;
	}
	.nav-link
	{
	   color:white;
	}
	#menu
	{
		background-color:#944642  ;
		font-family:verdana;
		font-size:15px;
		height:620px;
		text-align:center;
		padding-top:10px;						
	}
	#menu a
	{
		color:white;			
	}
	#menu a:hover
	{
	   text-decoration:none;			
	}
	.glyphicon
	{
		font-size:35px;	
		margin-top:5px;
		color: yellow;		
	}
	.glyphicon-user
	{
		font-size:22px;
		color:white;
	}
  </style>
</head>
<body>
 <div class="navbar bg-danger">
 	<a href="index.php" class="navbar-brand">
 	 <span class="glyphicon glyphicon-user"></span>&nbsp; 
 	  Administrator</a>  	
 	<UL class="navbar-nav">
 		<li class="nav-item"> 			
 			<a href="#" class="nav-link">
              Welcome, <?php echo $_SESSION['admin']; ?>        
 			</a> 
 		</li>  
 	</UL>
 </div>
 
 <div class="container-fluid">
	 <div class="row">
	   <div class="col-md-2" id="menu">
	   	<a href="show_member.php"> 
	   	 <span class="glyphicon glyphicon-check"></span><br>
	   	 Show All Customers
	   	</a> 
	   	 <br><br><br>
	   	<a href="search_member.php"> 
	   	 <span class="glyphicon glyphicon-search"></span><br>
	   	 Search a Customer 
	   </a>	 
	   	 <br><br><br>   	  
	  <a href="delete_member.php"> 	 
	   	 <span class="glyphicon glyphicon-trash"></span><br>
	   	 Delete Customer
	  </a> 	 
	   	 <br><br><br>
	  <a href="gallery.php">
	   	 <span class="glyphicon glyphicon-cloud"></span><br>
	      Photos
	  </a>
	   	 <br><br><br>	   
	   <a href="logout.php">
	   	 <span class="glyphicon glyphicon-log-out"></span><br>
	   	 Logout 
	   </a>	 
    </div> 
	