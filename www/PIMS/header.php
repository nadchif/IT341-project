<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Baptism Information System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	<script src="datepicker//js/bootstrap-datepicker.js"> $('.datepicker').datepicker()</script>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="search.php">Baptism Information System</a>
        </div>
		
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Baptism<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="baptismNewEntry.php">New Entry</a></li>
				<li><a href="search.php">Search Entry</a></li>
				<li><a href="listbaptism.php">List of Baptism</a></li>
              </ul> 
            <li class="dropdown">
						
				<li><a href="contact.php">Contact</a></li>            
			
            </li>
          </ul>
		
		  
         </div><!--/.nav-collapse -->
		   
      </div>
    </div>
