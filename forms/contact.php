<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO contact (name, email, phone, msg) VALUES ('$name', '$email', '$phone', '$msg')";
	if($connect->query($sql) === TRUE) {
        ?>
          <div class="jumbotron">
          <h1 class="display-4">Successfully  Details is Added!</h1>
          <div class="col-md-4">
         
          <a href='index.html'><button class = 'btn btn-warning ' type='button'>Home</button></a>
                </div>
        <?php
        } else {
            echo "Error " ;
        }
        
        ?>
    </div>
    <?php
        $connect->close();
    }
    
    ?>
    </html>
