
<?php
/**
* Description:	This is for adding of new entry for baptism
*				includes main details, 1st, personal details and sponsors.
* Author:		Joken Villanueva
* Date Created:	May 29, 2013
* Revised By:		
*/

require_once("includes/initialize.php");
include("header.php"); ?>


<?php
		$id = $_GET['id'];
		$mydb->setQuery("SELECT * from bapt_pers_spon where b_id=".$id);
		$res = $mydb->loadSingleResult();
		/* $auto = new autonumbers();
		$cur = $auto->listOfautonumber();
		$rec = $user->singleUser($id); */
?>

<div class="container">
    <h3>Baptism[Edit Entry]</h3>

    <div class="well">
      <form action="pbaptism.php?b_id=<?php echo $id;?>" class="form-inline well span9" method="post">

        <fieldset>
          <legend>Primary Details:</legend>

          <div class="control-group">
            <div class="rows">
              <div class="col-md-6">
                <div class="rows">
                  <div class="col-md-2">
                    <label>Bapt.No.:</label>
                  </div>

                  <div class="col-md-10">
                    <input name="bapt_id" type="hidden" value="<?php echo $res->bapt_id;?>">
                  <label> <?php echo $res->bapt_id;?></label>
				  </div>
				  </div>
              </div>
            </div>

            <p>&nbsp </p>

            <div class="rows">
              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Book#:</label>
                  </div>

                  <div class="col-md-6">
                    <input name="bkNum" type="text" value="<?php echo $res->bkNum;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Page#:</label>
                  </div>

                  <div class="col-md-6">
                    <input name="Page" type="text" value="<?php echo $res->bkPage;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-5">
                    <label>Line#:</label>
                  </div>

                  <div class="col-md-6">
                    <input name="line" type="text" value="<?php echo $res->bkLine;?>">
                  </div>
                </div>
              </div>
            </div>
<p> &nbsp </p>

            <div class="rows">
              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Lastname:</label>
                  </div>

                  <div class="col-md-6">
                    <input align="right" name="lName" type="text" value="<?php echo $res->lName;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Firstname:</label>
                  </div>

                  <div class="col-md-6">
                    <input name="fName" type="text" value="<?php echo $res->fName;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-5">
                    <label>Middlename:</label>
                  </div>
				  

                  <div class="col-md-6">
                    <input name="mName" type="text" value="<?php echo $res->mName;?>">
                  </div>
                </div>
              </div>
<p> &nbsp </p>

              <div class="rows">
                <div class="col-md-3">
                  <div class="rows">
                    <div class="col-md-4">
                      <label>S.Name:</label>
                    </div>

                    <div class="col-md-5">
                      <input name="sName" size="5" type="text" value="<?php echo $res->sName;?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Minister:</label>
                  </div>

                  <div class="col-md-6">
                    <input name="minister" type="text" value="<?php echo $res->minister;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-5">
                    <label>Stipend:</label>
                  </div>

                  <div class="col-md-6">
                    <input id="stipend" name="stipend" type="text"value="<?php echo $res->stipend;?>">
                  </div>
                </div>
              </div>
<p> &nbsp </p>

              <div class="rows">
                <div class="col-md-3">
                  <div class="rows">
                    <div class="col-md-4">
                      <label>Date:</label>
                    </div>

                    <div class="col-md-6">
                      <input id="cur_date" name="cur_date" readonly="true"
                      type="text" value="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="rows">
                  <div class="col-md-4">
                    <label>Remarks:</label>
                  </div>

                  <div class="col-md-6">
                    <textarea class="app_txtbox" cols="40" name="remarks" rows="4" value="<?php echo $res->remarks;?>">
</textarea>
                  </div>
                </div>
              </div>
            </div>
			

          </div>
        </fieldset>

        <fieldset>
          <legend>Secondary Details:</legend>

          <div class="control-group">
            <div class="rows">
              <div class="col-md-4">
			  <div class="rows">
					<div class="col-md-4">
						<label>No.:</label> 
					</div>
					<div class="col-md-6">		
						<input class="app_txtbox" id="pers_id"
                name="pers_id" readonly="true" size="15" type="hidden"
                value="<?php echo $res->pers_id;?>">
				<label><?php echo $res->pers_id;?>"</label>
					</div>
              </div>
			  </div>
              <div class="col-md-5">
				<div class="rows">
					<div class="col-md-4">
						<label>Age:</label>
					</div>
					<div class="col-md-6">
						<input id="age" name="age" type="text" value="<?php echo $res->age;?>">
					</div>
				</div>
			  </div>
			</div>
<p>&nbsp </p>

            <div class="rows">
              <div class="col-md-4">
				<div class="rows">
				  <div class="col-md-4">
                    <label>Birth Date:</label>
					</div>
					  <div class="col-md-6">
                  		<input name="birth_date" readonly="true" type="text&quot;">
					  </div>
				</div>
			  </div>

            

              <div class="col-md-5">
				<div class="rows">
					<div class="col-md-4">
					     <label>BirthPlace:</label> 
					</div>	 
					<div class="col-md-6">
						 <input id="birth_place" name="birth_place" type="text" value="<?php echo $res->birth_place;?>">
					</div>
              </div>
			  </div>
            </div>
<p>&nbsp </p>

            <div class="rows">
              <div class="col-md-4">
				<div class="rows">
					<div class="col-md-4">
						<label>Father:</label> 
					</div>
					<div class="col-md-6">
						<input id="father" name="father" type="text" value="<?php echo $res->father;?>">
					</div>
				</div>
				</div>
              <div class="col-md-5">
				<div class="rows">
					<div class="col-md-4">
						<label>Origin:</label>
					</div>
					<div class="col-md-4">
						<input id="f_Origin" name="f_Origin" type="text" value="<?php echo $res->f_Origin;?>">
					</div>
				</div>
				</div>
			</div>
<p>&nbsp </p>

			
            <div class="rows">
              <div class="col-md-4">
					<div class="rows">
						<div class="col-md-4">
							<label>Mother:</label>
						</div>
						<div class="col-md-6">
							<input id="Mother" name="Mother" type="text" value="<?php echo $res->Mother;?>">
						</div>
					</div>	
			  </div>

              <div class="col-md-5">
				<div class="rows">
					<div class="col-md-4">
						<label>Origin:</label> 
					</div>
					<div class="col-md-6">	
						<input id="m_Origin" name="m_Origin"type="text" value="<?php echo $res->m_Origin;?>">
						</div>
					</div>	
				</div>
            </div>
<p>&nbsp </p>


            <div class="rows">
              <div class="col-md-4">
			  <div class="rows">
					<div class="col-md-4">
						<label>Legitimacy:</label>
					</div>
					<div class="col-md-6">
					<input id="legitimacy" name=
                "legitimacy" type="text" value="<?php echo $res->legitimacy;?>">
				</div>
				</div>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Sponsors:</legend>

        <div class="control-group">
           <div class="rows">
            <div class="col-md-6">
			  <div class="rows">
					<div class="col-md-4">	
					<label>No.:</label> 
					</div
					<div class="col-md-10">
					<input class="app_txtbox" id="sponsor_id"
					name="sponsor_id" readonly="true" type="hidden" value="<?php echo $res->sponsor_id;?>">
					<label><?php echo $res->sponsor_id;?></label>
				  </div>
				</div>
			</div>
			<p>&nbsp </p>
            <div class="rows">
              <div class="col-md-5">
				<div class="rows">
					<div class="col-md-4">
					<label>Sponsor 1:</label>
					</div>
					<div class="col-md-6">
					<input id="sponsName1" name="sponsName1" type="text" value="<?php echo $res->sponsName1;?>">
					</div>
					</div>
			  </div>


              <div class="col-md-5">
			  	<div class="rows">
					<div class="col-md-4">
						<label>Origin:</label>
					</div>
					<div class="col-md-6">		
						<input id="s_origin1" name="s_origin1" type="text" value="<?php echo $res->sponsOrigin1;?>">
					</div>
				</div>
            </div>
			</div>
<p> &nbsp </p>
            <div class="rows">
              <div class="col-md-5">
			  <div class="rows">
				<div class="col-md-4">
                <label>Sponsor 2:</label>
					</div>
					<div class="col-md-6">
						<input id="sponsName2" name="sponsName2" type="text" value="<?php echo $res->sponsName2;?>">
					</div>
				</div>	
			  </div>

              <div class="col-md-5">
			   	<div class="rows">
					<div class="col-md-4">
                <label>Origin:</label>
				</div>
				<div class="col-md-6">
					<input id="s_origin2" name="s_origin2" type="text" value="<?php echo $res->sponsOrigin2;?>">
				</div>
			  </div>
            </div>
			</div>
<p> &nbsp </p>			
            <div class="rows">
              <div class="col-md-5">
			  	<div class="rows">
					<div class="col-md-4">
						<label>Other Sponsor:</label> 
					</div>
					<div class="col-md-8">
						<textarea class="app_txtbox" cols="40" name="s_others" rows="4" value="<?php echo $res->s_others;?>">
						</textarea >   
					</div>
				</div>
			</div>		
			</div>
<p> &nbsp </p>
<p> &nbsp </p>
<p> &nbsp </p>
		
				<div class="rows">
					<div class="col-md-12">
						<div class="controls">
							<input class="btn btn-success" type="submit" name="submit" value="Save Changes">
							<input class="btn btn-success" type="reset" value="Reset">
						</div>
					</div>
				</div>
				
			
			
			</div>
        </fieldset>
			
			
		</form>
    </div>
  </div>