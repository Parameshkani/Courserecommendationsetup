 <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Explore Top Jobs</h1>
            </div>
            <div class="row">
			
			<?php
						  $sql = "SELECT * FROM `job`"; 

$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
// output data of each row
while($row1 = $result1->fetch_assoc()) {
	
	?>
			
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?php echo IMAGEURL; ?><?php echo $row1["img"]; ?>" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
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