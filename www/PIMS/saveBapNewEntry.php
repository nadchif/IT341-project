<?php
require_once("includes/initialize.php");
include("header.php");

if (isset($_POST['submit'])){
	
	/*----Primary details----*/
		$bapt_id = trim($_POST['bapt_id']);
		$bkNum 	= trim($_POST['bkNum']);
		$Page 	= trim($_POST['Page']);
		$line 	= trim($_POST['line']);
		$lName 	= trim($_POST['lName']);
		$fName 	= trim($_POST['fName']);
		$mName 	= trim($_POST['mName']);
		$sName	= trim($_POST['sName']);
		$cur_date = trim($_POST['cur_date']);
		$minister = trim($_POST['minister']);
		$stipend  = trim($_POST['stipend']);
		$remarks  = trim($_POST['remarks']);
	/*----End of Primary details----*/
	/*----Secondary details----*/
		$pers_id	 = $_POST['pers_id'];
		$birth_date  = $_POST['birth_date'];
		$age 		 = $_POST['age'];
		$birth_place = $_POST['birth_place'];
		$father		 = $_POST['father'];
		$f_Origin 	 = $_POST['f_Origin'];
		$Mother 	 = $_POST['Mother'];
		$m_Origin 	 = $_POST['m_Origin'];
		$legitimacy  = $_POST['legitimacy'];
			
	/*----End of Secondary details----*/	
	/*----Sponsors details----*/
		$sponsor_id  	= $_POST['sponsor_id'];
		$sponsName1  	= $_POST['sponsName1'];
		$sponsOrigin1 	= $_POST['s_origin1'];
		$sponsName2  	= $_POST['sponsName2'];
		$sponsOrigin2 	= $_POST['s_origin2'];
		$s_others 		= $_POST['s_others'];
		
		
			$baptism = new Baptism();
			$baptism->bapt_id 		= $bapt_id;
			$baptism->bkNum			= $bkNum;
			$baptism->bkPage  	 	= $Page;
			$baptism->bkLine 		= $line;
			$baptism->lName 		= $lName;
			$baptism->fName 		= $fName;
			$baptism->mName 		= $mName;
			$baptism->sName 		= $sName;
			$baptism->cur_date 		= $cur_date;
			$baptism->minister 		= $minister;
			$baptism->stipend 		= $stipend;
			$baptism->remarks 		= $remarks;
			$baptism->pers_id 		= $pers_id;
			$baptism->sponsor_id	= $sponsor_id;
			$baptism->create();
			$primary = autonumbers::bPrimaryUpdate(7);
			$a1 = new autonumbers();
			$a1->autostart 		= $primary;
			$a1->update(7);
			
			$secdetails = new secdetails();
			$secdetails->pers_id 		= $pers_id;
			$secdetails->birth_date 	= $birth_date;
			$secdetails->age 			= $age;
			$secdetails->birth_place	= $birth_place;
			$secdetails->father 		= $father;			
			$secdetails->f_Origin 		= $f_Origin;
			$secdetails->Mother 		= $Mother;
			$secdetails->m_Origin 		= $m_Origin;
			$secdetails->legitimacy 	= $legitimacy;
			
			$secdetails->create();
			$second = autonumbers::bPrimaryUpdate(5);
			$a2 = new autonumbers();
			$a2->autostart 		= $second;
			$a2->update(5);
			
			$sponsor = new sponsor();
			$sponsor->sponsor_id		= $sponsor_id;
			$sponsor->sponsName1		= $sponsName1;
			$sponsor->sponsOrigin1		= $sponsOrigin1;
			$sponsor->sponsName2		= $sponsName2;
			$sponsor->sponsOrigin2		= $sponsOrigin2;
			$sponsor->s_others			= $s_others;
			$sponsor->create();
				
			$spons = autonumbers::bPrimaryUpdate(4);
			$a3 = new autonumbers();
			$a3->autostart 		= $spons;
			$a3->update(4);	
		//	if($istrue){?>
				<script type="text/javascript">
					alert("New Baptism[Entry] has successfully added!");
					window.location = "baptismNewEntry.php";
				</script>
				<?php
		//	}else{
		//		 echo "Inserting Failed!";
		//	 }
			
	}else{

		$bkNum 	= "";
		$Page 	= "";
		$line 	= "";
		$lName 	= "";
		$fName 	= "";
		$mName 	= "";
		$sName	= "";
		$cur_date = "";
		$minister = "";
		$stipend  = "";
		$remarks  = "";
			?>
				<script type="text/javascript">
					alert("Insertion Failed!");
					window.location = "baptismNewEntry.php";
				</script>
				<?php
	}

?>		