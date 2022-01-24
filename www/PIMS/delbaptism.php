
<?php
/**
* Description:	This is for List of entry for baptism
*				includes main details, 1st, personal details and sponsors.
* Author:		Joken Villanueva
* Date Created:	June 10, 2013
* Revised By:		
*/

require_once("includes/initialize.php");
include("header.php"); ?>

<?php
	$bapt_id = $_GET['id'];
	$bapt = new Baptism();
	$bapt->delete($bapt_id);
	$pers_id = "'".$_GET['pers_id']."'";
	$sec = new secdetails();
	$sec->delete($pers_id);
	$sponsor_id = "'".$_GET['sponsor_id']."'";
	$spn = new sponsor();
	$spn->delete($sponsor_id);
	 
   ?>
 <script type="text/javascript">
	alert("Baptism entry has successfully deleted!");
	window.location = "listbaptism.php";
</script>

 <?php //include_layout_template('admin_footer.php');?>

  