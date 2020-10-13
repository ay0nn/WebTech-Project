<?php

   
    require_once 'models/db_connect.php'; 
	include 'order_header.html';
	   	
?>

<html>
    <head>
<title>Food </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel='stylesheet' type='text/css' href='styles/orderstyle.css'>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="title">
<h3>Menu</h3>
</div>
    <div class="container">
        <?php
        $query = "SELECT * from food";
        $result= getResult($query);
        if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_array($result))
            {
				?>
                <div class="menu">
               <form method="Post"  action="order.php?action=add&id=<?php echo $row["id"]?>"> 
                <div>

                    <img src="<?php echo $row["fimage"];?>" class="img" width="290" height="270">
                    <h4 class="text-info">Item: <?php echo $row["foodname"]?> </h4>
                    <h4 class="text-info">Price: ৳<?php echo $row["foodprice"]?> </h4> 
                    <h4 class="text-info">Details:<?php echo $row["fdescription"]?> </h4> 
                    <input type="hidden" name="hidden_name"  value="<?php echo $row["foodname"];?>">
                    <input type="hidden" name="hidden_price"  value="<?php echo $row["foodprice"];?>">
    
                    </div>
                    </form>
                    </div>
                <?php
                }
        }
        ?>
	
    </div>
	   </div>
	      </div>
	
</body>
</html>