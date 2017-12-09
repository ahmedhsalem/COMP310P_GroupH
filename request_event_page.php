<!DOCTYPE html>
<head>
  <title>Host Event Request</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
  <?php include "session.php";?>
</head>

<body>
    
  <div class="container">
  <div class="col-md-12">
    <div class="col-md-9">   
        
        <form class="form-horizontal" action="action" method="post" enctype="multipart/form-data">
            <h2 class="loginform">Request to Host</h2>
                <!--php-- if Added successfully <h5 class="loginform " style="color:green;">Event Requested Successfully!</h5> -->
            
            <div class="form-group">
                <label >Event Name</label>
                <div>
                    <input type="text" id="firstname" placeholder="Full Name" name="name" required>
                </div>
            </div>
            
            <div>
                <label>Event Date</label>
                <div>
                    <input type="text" id="datepicker" name="date" required>
                </div>         
            </div>

            <div>
                <label>Event Categories</label>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="calorieCheckbox" name="check_list[]"  value="Outdoor Space">Outdoor Space
                        </label>
                    </div>
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="calorieCheckbox" name="check_list[]"  value="Indoor Space">Indoor Space
                        </label>
                    </div>
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="calorieCheckbox" name="check_list[]"  value="Ballet stage">Ballet Stage
                        </label>
                    </div>
                    
                    
                </div>         
            </div>
            <div class="form-group">
                <label>Event Image</label>
                <div>
                    <input type="file" class="form-control" name="image" required>
                </div>          
            </div>
            <div class="form-group">
                <div>
                    <input type="submit" value="Add Event">
                    <input type="hidden" name="action" value="add">
                </div>
            </div>
            
        </form>    
    </div>
  </div>
  </div>    
    
</body>
</html>
