<?php include "session.php";?>
<!DOCTYPE html>
<head>
  <title>Host Event Request</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <style>
#registrationBox {
   		white-space: normal;
  		border: 1px solid black;
  		margin: auto;
  		border-radius: 40px;
  		padding: 50px;
  		padding-top: 10px;
  		width: 450px;
}
.label {
    float: left;
}

input, textarea {
    	float: right;
    	width: 200px;
    	resize: none;
    	margin-right: 50px;
    }
 #logo {
  		display: block;
    	margin: auto;
    	margin-top: 2%;
  }
  </style>


</head>

<body>
  <img src="logo.png" width="20%" height="70px" id="logo">  
  <div id="registrationBox">
  <div>
    <div>   
        
        <form action="action" method="post" enctype="multipart/form-data">
            <h2 align="center" class="loginform">Request to Host</h2>
                <!--php-- if Added successfully <h5 class="loginform " style="color:green;">Event Requested Successfully!</h5> -->
            <br />
            <div>
                <label for="event_name" class="label"><b>Event Name:</b></label>
                <div>
                    <input type="text" id="firstname" placeholder="Full Name" name="event_name" required>
                </div>
            </div>
            <br />
            <br />
            <div>
                <label for="event_category" class="label"><b>Event Categories:</b></label>
                <br />
                <br />
                <div>
                    <div>
                        <label style="float:right">
                            <input type="checkbox" name="category_check_list[]"  value="Outdoor Space">Outdoor Space
                        </label>
                    </div>
                    
                    <div>
                        <label style="float:right">
                            <input type="checkbox" name="category_check_list[]"  value="Indoor Space">Indoor Space
                        </label>
                    </div>
                    
                    <div>
                        <label style="float:right">
                            <input type="checkbox" name="category_check_list[]"  value="Ballet stage">Ballet Stage
                        </label>
                    </div>
                    
                    
                </div>         
            </div>
            <br>  
            <br>
            <br>
            <br>
            
            <div>
                <label for="event_capacity" class="label"><b>Event Capacity:</b></label>
                <div>
                    <input type="text" id="capacity" placeholder="Capacity of event" name="capacity" required>
                </div>
            </div>
            <br>
            <br>
            <br>
            
            <div>
                <label for="ticket_price" class="label"><b>Ticket Price:</b></label>
                <div>
                    <input type="text" id="price" placeholder="Price of 1 ticket" name="ticket" required>
                </div>
            </div>    
            <br>  
            <br>
            <br>
            <div >
                <label class="label"><b>Event Date:</b></label>
                <br />
                <br />
                <label for="event_start_date_time" class="label">From:</label>
                    <input type="datetime" name="dateFrom"/>
                <br />
                <br />    
                <label for="event_end_date_time" class="label">To:</label>
                    <input type="datetime" name="dateTo"/>
                         
            </div>
            <br>
            <br>
            <br>
            <div>
                <label for="description" class="label"><b>Event Description:</b></label>
                <div>
                    
                    <textarea id = "description" placeholder="Describe your event as in much detail as possible" name ="description" rows="3" required><?php if(isset($_GET['description'])) echo htmlspecialchars($_GET['description']); ?></textarea><br/><br/><br/><br/>
                </div>
            </div>
            <br />
            <div>
                <label for="image" class="label"><b>Event Image:</b></label>
                <div>
                    <input type="file" name="image" required>
                </div>          
            </div>
            <br />
            <br />
            <br />
            <div class="label">
                <div>
                    <input type="submit"  value="Add Event">
                    <input type="hidden" name="action" value="add">
                </div>
            </div>
            
        </form>    
    </div>
  </div>
  </div>    
    
</body>
</html>
