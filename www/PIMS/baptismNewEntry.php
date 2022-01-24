<?php
/**
* Description:    This is for adding of new entry for baptism
*               includes main details, 1st, personal details and sponsors.
* Author:       Joken Villanueva
* Date Created: May 29, 2013
* Revised By:       
*/

require_once("includes/initialize.php");
include("header.php");
?>
<!DOCTYPE html>

<html>
<head>
  <title></title>
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>
  <div class="container">
    <h3>Baptism[New Entry]</h3>

    <div class="well">
      <form action="saveBapNewEntry.php" class="form-horizontal well span9" method="post">
        <fieldset>
          <legend>Primary Details:</legend>

          <div class="form-group">
            <div class="col-md-4">
              <label class="col-lg-4 control-label" for=
              "baptid">Bapt.No.:</label>

              <div class="col-lg-8">
                <input class="form-control" id="baptid" name="bapt_id"
                readonly="true" type="text" value=
                "<?php echo $cur = autonumbers::bPrimary(7);?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-lg-4 control-label" for="bkno">Book#:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="bkno" name="bkNum" type=
                  "text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for="Page">Page#:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="Page" name="Page" type=
                  "text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for="line">Line#:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="line" name="line" type=
                  "text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "lName">LastName:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="lName" name="lName" type=
                  "text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "fName">Firstname:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="fName" name="fName" type=
                  "text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "mName">Middlename:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="mName" name="mName" type=
                  "text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "sName">S.Name:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="sName" name="sName" type=
                  "text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "minister">Minister:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="minister" name="minister"
                  type="text">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-lg-4 control-label" for=
                "stipend">Stipend:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="stipend" name="stipend" type=
                  "text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-6">
                <label class="col-lg-2 control-label" for=
                "remarks">Remarks:</label>

                <div class="col-lg-8">
                  <textarea class="form-control" id="remarks" name="remarks"
                  rows="3">
</textarea>
                </div>
              </div>

              <div class="col-md-6">
                <label for="cur_date" class="col-lg-7 control-label">Date of Baptism:</label>

                    <div class="input-group date form_curdate col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="cur_date" id="cur_date">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<!--<input type="hidden" id="dtp_input2" value="" /><br/>-->
              </div>
            </div>
			
          </div>
        </fieldset>

        <fieldset>
          <legend>Secondary Details:</legend>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "pers_id">No.:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="pers_id" name="pers_id"
                  readonly="true" type="text" value=
                  "<?php echo $cur = autonumbers::bPrimary(5);?>">
                </div>
              </div>

              <div class="col-md-5">
				<label for="birth_date" class="col-lg-4 control-label">Birth Date:</label>

                    <div class="input-group date form_bdate col-md-8" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="birth_date" id="birth_date">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<!--<input type="hidden" id="dtp_input2" value="" /><br/>-->
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for="age">Age:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="age" name="age" type="text">
                </div>
              </div>

              <div class="col-md-5">
                <label class="col-lg-4 control-label" for="birth_place">Birth Place:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="birth_place" name=
                  "birth_place" type="text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "father">Father:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="father" name="father" type=
                  "text">
                </div>
              </div>

              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "f_Origin">Origin:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="f_Origin" name="f_Origin"
                  type="text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "Mother">Mother:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="Mother" name="Mother" type=
                  "text">
                </div>
              </div>

              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "m_Origin">Origin:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="m_Origin" name="m_Origin"
                  type="text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "legitimacy">Legitimacy:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="legitimacy" name="legitimacy"
                  type="text">
                </div>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Sponsors:</legend>

          <div class="form-group">
            <div class="col-md-5">
              <label class="col-lg-4 control-label" for=
              "sponsor_id">No.:</label>

              <div class="col-lg-8">
                <input class="form-control" id="baptid" name="sponsor_id"
                readonly="true" type="text" value=
                "<?php echo $cur = autonumbers::bPrimary(4);?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for="sponsName1">Sponsor
                1:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="sponsName1" name="sponsName1"
                  type="text">
                </div>
              </div>

              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "s_origin1">Origin:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="s_origin1" name="s_origin1"
                  type="text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-5">
                <label class="col-lg-4 control-label" for="sponsName2">Sponsor 2:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="sponsName2" name="sponsName2"
                  type="text">
                </div>
              </div>

              <div class="col-md-5">
                <label class="col-lg-4 control-label" for=
                "s_origin1">Origin:</label>

                <div class="col-lg-8">
                  <input class="form-control" id="s_origin2" name="s_origin2"
                  type="text">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="rows">
              <div class="col-md-8">
                <label class="col-lg-3 control-label" for="s_others">Other
                Sponsor:</label>

                <div class="col-lg-7">
                  <textarea class="form-control" id="s_others" name="s_others"
                  rows="3">
</textarea>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<div class="col-lg-12">
								<button class="btn btn-success btn-lg" type="submit" name="submit">Save Data</button>
							</div>
						</div>
					</div>
				</div>
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>

<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript">
	$('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_bdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>	
<?php include("footer.php");?>