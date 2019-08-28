<? php
require 'config.php';
$name=$email=$password=$address='';
$mobile;
echo "1";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$sql="insert into user values(?,?,?,?,?)";	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$address=$_POST["address"];
	$mobile=$_POST["mobile"];
	echo "string";
	if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $name,$email,$password,$address,$mobile);
           
            if(mysqli_stmt_execute($stmt)){
                
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    
    }
    
    mysqli_close($link);

?>