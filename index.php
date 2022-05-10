<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file to your database</title>
</head>
<body>
    <?php 
     

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
   //ip address of database system
   //root as username of phpmyadmin database
   //password for mysql database
   //table database name
    $con = mysqli_connect("127.0.0.1","root","mfonisoekere","fileupload");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
    
    } 
     
    if (isset($_REQUEST['choosefile'])){
        $choosefile = stripslashes($_REQUEST['choosefile']);
        $choosefile = mysqli_real_escape_string($con,$choosefile); 
        
               $query = "INSERT into `usersupload` (choosefile)
       VALUES ('$choosefile')";
               $result = mysqli_query($con,$query);
               if($result){
                   echo "<div class='jumbotron'>
       <h3>You have uploaded file successfully to   database.</h3>
       <br/>Click here to <a href='login.php'>Login</a></div>";
               }
           }else{
           }
       ?>
    
    <form method="POST" >
    <input name="choosefile" type="file">
    <button class="btn" name="submit">Submit Image </button>
    </form>
</body>
</html>