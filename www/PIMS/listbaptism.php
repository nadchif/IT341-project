<?php 
require_once("includes/initialize.php");
include("header.php");
?>
<div class="container">
<div class="row">
    <div class="col-md-12">
		<div class="well">
			<h2 class="text-center">Search Results</h2>
			<hr width="70%">
<table class="table table-striped">
	<thead>
		<tr>
			<th width="6%" align="left">Code</th>
			<th width="7%" align="left">Book #</th>
			<th width="7%" align="left">Page #</th>
			<th width="7%" align="center">Line #</th>
			<th width="30%" align="left">Fullname</th>
			<th width="17%" align="center">Date of Baptism</th>
			<th width="29%" align="center">OPTION</th>
			
		</tr>
	</thead>
	<tbody>
<?php
	
	if(isset($_POST['submit'])){
	
		$bapt_id = $_POST['bapt_id'];
		$lname 	 = $_POST['lname'];
		
		if ($bapt_id == NULL && $lname== NULL) {
			$mydb->setQuery("SELECT * from bapt_pers_spon");
			displayresults();
		}else{
			$mydb->setQuery("SELECT * FROM  `bapt_pers_spon` WHERE  `bapt_id` = '{$bapt_id}' or lName='{$lname}'");
			displayresults();
		}
	}elseif(!isset($_POST['submit'])){
	
		$mydb->setQuery("SELECT * from bapt_pers_spon");
		displayresults();
	}

	function displayresults(){
	global $mydb;
	$cur = $mydb->loadResultList();
			foreach ($cur as $object){	

				echo '<tr>';
				echo ' <td> ';
				echo '<a href="editbaptism.php?id='.$object->b_id.'" class="app_listitem_key">'.$object->bapt_id.'</a>';			
				echo ' <td align="center"> ';
				echo $object->bkNum;
				echo ' <td align="center"> ';
				echo $object->bkPage;
				echo ' <td align="center"> ';
				echo $object->bkLine;
				echo ' <td align="left"> ';
				$fullname = $object->fName ." ".$object->mName."."." ".$object->lName . " ".$object->sName;
				echo $fullname;
				echo ' <td align="left"> ';
				echo $object->cur_date;
				echo ' <td align="center"> ';
				echo '<a href="rptbaptismal.php?id='.$object->b_id.'" class="app_listitem_key">[Print Entry]</a>';	
				echo '<a href="editBaptism.php?id='.$object->b_id.'" class="app_listitem_key">[Edit Entry]</a>';	
				echo '<a href="delbaptism.php?id='.$object->b_id.'&pers_id='.$object->pers_id.'&sponsor_id='.$object->sponsor_id.'" class="app_listitem_key">[Delete Entry]</a>';
			}
	
	}	
?>
			
			
			
			</tbody>
		</table>
		</div>
	</div>
		<!--/span--> 
		 <?php include('footer.php');?>
</div>
</div>

  