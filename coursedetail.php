<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
   <?php include 'topbar.php'; ?>

   <?php include 'nav.php'; ?>
   
   
   
   
   
   
   


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Course Detail</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Course Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

			<?php
			
			$search = $_GET['code'];
			
$sql = "SELECT * FROM `course` where code=$search"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	?>
	<?php $coursename = $row["coursename"]; ?>
	<?php $imgname = $row["image_name"]; ?>
		<?php $coursecontent = $row["coursecontent"]; ?>
	<?php $course_category = $row["course_category"]; ?>
	<?php
}
}
	?>
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                       
						
                        <h1 class="mb-5"><?php echo $coursename; ?></h1>
						
                        <img class="img-fluid rounded w-100 mb-4" src="<?php echo IMAGEURL; ?><?php echo $imgname; ?>" alt="Image">
						
                        <p><?php echo $coursecontent; ?></p>
                    </div>

                

                    
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
              

             

                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Job Suggested</h3>
                        <ul class="list-group list-group-flush">
						<?php
						  $sql = "SELECT * FROM `job` where job_category LIKE '%$course_category%' "; 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	?>
						
						
						
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0"><?php echo $row["job_title"]; ?></a>
                                <span class="badge badge-primary badge-pill"><?php echo $row["job_category"]; ?></span>
                            </li>
							
	<?php
}
}
?>	
							
							
                     
                        </ul>
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Related Jobs</h3>
						
						
										<?php
						  $sql = "SELECT * FROM `job` where job_category LIKE '%$course_category%' "; 

$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
// output data of each row
while($row1 = $result1->fetch_assoc()) {
	
	?>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="<?php echo IMAGEURL; ?><?php echo $row1["img"]; ?>" width="80" height="80" alt="Image Not Found">
                            <div class="pl-3">
                                <h6 class="m-1"><a href="<?php echo $row1["joburl"]; ?>"><?php echo $row1["job_title"]; ?></a></h6>
                                <small><?php echo $row1["job_category"]; ?></small>
                            </div>
                        </a>
						
						
	<?php
}
}
?>							
						
						
						
                       <!-- <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a> -->
                    </div>

                    <!-- Tag Cloud -->
                   <!-- <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">Design</a>
                            <a href="" class="btn btn-outline-primary m-1">Development</a>
                            <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                            <a href="" class="btn btn-outline-primary m-1">SEO</a>
                            <a href="" class="btn btn-outline-primary m-1">Writing</a>
                            <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                        </div>
                    </div> -->
					
					
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
    </div>
<br clear="all">
 <?php include 'footer.php'; ?>
</body>

</html>