<!-- User can see classes he's organising -->

<!doctype html> 
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
<h2 class="loginform">Classes i'm organising</h2>
	<div class="row">
      <div class="table-responsive">
	  <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Date</th>
			  <th>Category</th>
			  <th>Image</th>			  
            </tr>
          </thead>
          <tbody id="myTable">
			<?php $sql = mysql_query("select * from `class`where `userid`='".$_SESSION['userId']."'  order by `date` desc");
			while($row = mysql_fetch_array($sql)){
				?>	  
			 <tr>
             <td><?php echo $row['name'];?></td>
			 <td><?php echo $row['date'];?></td>
			 <td><?php echo $row['check_list'];?></td>
			 <td><img src="images/class/<?php echo $row['image'];?>" height="100" width="100"></td>
			 </tr>
			<?php }?>
	      </tbody>
        </table>
        
              <?php $sql = mysql_query("select * from `attend` where `createrid`='".$_SESSION['userId']."'");
			while($row = mysql_fetch_array($sql)){
				?>	  
			 <tr>
             <td><?php $rrt = mysql_query("select * from  `admin` where `id`='".$row['userid']."'");
                  while ($rrt1 = mysql_fetch_array($rrt)){
               echo $rrt1['username'];				 
				 }
			 ?></td>
			 <td><?php $r = mysql_query("select * from  `class` where `id`='".$row['classid']."'");
                  while ($rt = mysql_fetch_array($r)){
              echo $rt['name'];				 
				 }
			 ?></td>			  
			 </tr>
			<?php }?>
      
     </div>
      <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
	</div>		     
        </div>
		
		<?php include('include/sidebar.php');?>
		
		</div>
		</div> <!-- ./container -->

</body>
</html>
