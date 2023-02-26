
<?php include 'config.php'; ?>

<?php
$email =  $_POST['email'];
$password =  $_POST['password'];
//echo ""; print_r($_REQUEST); die;

if (!empty($email) || !empty($password)  )

{
   

    if (mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }

    else
    {
        $SELECT = "SELECT * From user Where email ='$email' and password = '$password' "; 

        $result = mysqli_query($conn, $SELECT);

        if($result->num_rows > 0)
        {
			while($row = $result->fetch_assoc()) {
				
		session_start();
		$_SESSION["name"] = $row["name"];;
		$_SESSION["username"] = $row["username"];

			header("Location:home.php"); 


            }
        }
        else
        {
            echo "Enter the fields correctly!!";
			header("Location:index.php"); 
        }
    }
}
    else 
    {
        echo "Enter all fields";
        die();
    }

?>
