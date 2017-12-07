<!doctype html> 

<!--User can create a new class -->
<?php  
error_reporting(0);
session_start();
if(isset($_SESSION['userId']) && $_SESSION['userId'] !=''){	 
?>
<html>
<?php include('include/head.php');?>
<body>
<?php include('include/userheader.php');?>
<div class="container">
<div class="col-md-12">
 <div class="col-md-9">
            <form class="form-horizontal" action="process/class.php" method="post" enctype="multipart/form-data">
                <h2 class="loginform">Add Class</h2>
				<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=="suc"){?>
	  <h5 class="loginform " style="color:green;">Add Class Successfully !</h5>
	  <?php }?>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Class Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" name="name" class="form-control" required>
                    </div>
                </div>               

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-9">
                        <input type="text" id="datepicker" class="form-control" name="date" required>
                    </div>
                </div>
				
                <div class="form-group">
                    <label class="control-label col-sm-3">Class categories</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" name="check_list[]"  value="cooking">Cooking
                            </label>
                        </div>
						<div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" name="check_list[]" value="language">Languages
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" name="check_list[]" value="reading">Reading
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Class Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input class="btn btn-success" type="submit"  value="Add Class">
						<input type="hidden" name="action" value="add">
					</div>
                </div>
            </form> <!-- /form -->
        </div>
		
		<?php include('include/sidebar.php');?>
		
		</div>
		</div> <!-- ./container -->

</body>
</html>
