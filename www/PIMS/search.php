<?php include("header.php");?> 
 <div class="container">
    <h3 style="text-align: left">Search[Entry]</h3>

    <div class="jumbotom">
      <form action='listbaptism.php' class="form-horizontal" method='post'>
        <div class="form-group col-lg-3"></div>

        <div class="form-group col-lg-6">
          <div class="well" style="text-align: center">
            <div class="rows">
              <div class="form-group col-lg-12">
                <div class="col-lg-5">
                  <label class="control-label">Baptism No.:</label>
                </div>

                <div class="col-lg-7">
                  <input class="form-control" name="bapt_id" placeholder=
                  "Baptism No" type="text">
                </div>
              </div>
            </div>

            <div class="rows">
              <div class="form-group col-lg-12">
                <div class="col-lg-5">
                  <label>Lastname :</label>
                </div>

                <div class="col-lg-7">
                  <span class="input-group-btn"><input class="form-control"
                  name="lname" placeholder="Lastname" type="text"></span>
                </div><span class="input-group-btn"></span>
              </div>
            </div>

            <div class="rows">
              <span class="input-group-btn"></span>

              <div class="control-group col-lg-3">
                <span class="input-group-btn"></span>
              </div>

              <div class="control-group col-lg-6" style="text-align: center">
                
				<button class="btn btn-primary" name="submit" type="submit">Search </button>
				<button class="btn btn-primary" type="reset">Reset</button> 
                <!--    <button type="add" class="btn btn-primary" >Add</button>-->
              </div>

              <div class="control-group col-lg-3" style="text-align: center">
              </div>
            </div>

            <p>&nbsp;</p>
          </div>
        </div>

        <div class="form-group col-lg-3"></div>
      </form>
    </div>
  </div><!-- /.container -->

<?php include("footer.php");?>