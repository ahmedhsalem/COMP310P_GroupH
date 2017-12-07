<!-- Page where user can create class -->

<!doctype html> 
<?php  
error_reporting(0);
session_start();
if(isset($_SESSION['userId']) && $_SESSION['userId'] !=''){	 
?>
<html>
<?php include('include/head.php');?

<script>
<!-- scripting would go here -->

<body>
<?php include('include/userheader.php');?>
<div class="container">
<div class="col-md-12">
 <div class="col-md-9">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <h2 class="loginform">Search for Classes</h2>
				
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Class Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" name="name" class="form-control" value="<?php echo $_REQUEST['name']?>" >
                    </div>
                </div>               

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-9">
                        <input type="text" id="datepicker" class="form-control" name="date" value="<?php echo $_REQUEST['date']?>" >
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
                    <div class="col-sm-9 col-sm-offset-3">
                        <input class="btn btn-success" type="submit"  value="search">
						<input type="hidden" name="action" value="search">
                    </div>
                </div>
            </form> <!-- /form -->
			
			
			<?php 
			if(isset($_REQUEST['action']) && $_REQUEST['action'] =='search'){
			?>
			
			<div class="row">
			<h1 class="loginform">Avaible Classes</h1>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Date</th>
              <th>Categories</th>
              <th>Image</th>
              <th>User</th>
               
            </tr>
          </thead>
          <tbody id="myTable">
             <?php 
			 $checkbox1 = $_REQUEST['check_list'];
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."<br>";  
   }   
       if($_REQUEST['date']!=''){
	   $date = 'or  `date` like "'.$_REQUEST['date'].'" ';
	   }
	   if($_REQUEST['check_list']!=''){
	   $check_list12 = 'or  `check_list` like "%'.$chk.'%" ';
	   }if($_REQUEST['name']!=''){
		   $name = ''.$_REQUEST['name'].'%';
	   }
           // echo "SELECT * FROM `class` where `name` like  '".$name."' ".$date." ".$check_list12." ";
		     $sql = mysql_query("SELECT * FROM `class` where `name` like  '".$name."' ".$date." ".$check_list12." ");
             while($row = mysql_fetch_array($sql)){?>			
		    <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['check_list'];?></td>
                <td><img src="images/class/<?php echo $row['image'];?>" height="100" width="100"></td>
                <td><?php 				 
				$sql1 = mysql_query("select * from `admin` where `id`='".$row['userid']."'");
                while($row1 = mysql_fetch_array($sql1)){
				echo  $row1['username'];}
				?></td>
				 
            </tr>
		<?php }	?>             
          </tbody>
        </table>   
      </div>
      <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
	</div>	
			
			<?php }?>	
			
			
			
			
			
			
        </div>
		<?php include('include/sidebar.php');?>
		</div>
		</div> <!-- ./container -->
<!-- for styling BEA --><?php include('include/footer.php');?>
</body>
</html>

