<!DOCTYPE html>
<html lang="en">








<?php include 'head.php'; ?>

<body>
       <?php include 'topbar.php'; ?>

   <?php include 'nav.php'; ?>


<?php

$search = $_GET['q'];



?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Search</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Search</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


  

    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Search Keyword <?php echo $search; ?></h5>
                <h1> Courses Related Keyword <?php echo $search; ?></h1>
            </div>
            <div class="row">
			
			<?php
 $sql = "SELECT * FROM `course` where coursename LIKE '%$search%' OR course_category LIKE '%$search%' "; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	?>
			
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo IMAGEURL; ?><?php echo $row["image_name"]; ?>" alt="<?php echo IMAGEURL; ?><?php echo $row["image_name"]; ?>">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?php echo $row["link"]; ?></small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i><?php echo $row["code"]; ?></small>
                            </div>
                            <a class="h5" href="coursedetail.php?code=<?php echo $row["code"]; ?>"><?php echo $row["coursename"]; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">FREE : <?php echo $row["free"]; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
		<?php
}

} else { 

echo "0 results"; 

}





?>			
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>
    </div>
    <!-- Courses End -->
	
	
	
	
	
	
	
	<!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Related Jobs </h1>
            </div>
            <div class="row">
			
			<?php
			//where `job_title` LIKE '%$search%' OR job_category LIKE '%$search%'
			
	 $sqla = "SELECT * FROM `job` where `job_title` LIKE '%$search%' OR job_category LIKE '%$search%'";

$resulta = $conn->query($sqla);
if ($resulta->num_rows > 0) {
// output data of each row
while($row1 = $resulta->fetch_assoc()) {
	
	?>
			
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?php echo IMAGEURL; ?><?php echo $row1["img"]; ?>" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?php echo $row1["joburl"]; ?>">
                            <h4 class="text-white font-weight-medium"><?php echo $row1["job_title"]; ?></h4>
                            <span><?php echo $row1["job_category"]; ?></span>
                        </a>
                    </div>
                </div>
				
<?php
}
}
?>				
				
            
            </div>
        </div>
    </div>
    <!-- Category Start -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


      <?php include 'footer.php'; ?>
</body>

</html>