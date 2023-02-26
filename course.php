<!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
			
			
          			
			<?php
$sql = "SELECT * FROM `course`"; 
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

$conn->close();



?>			
		
				
				
				
				
				
				
				
				
				
				
				
            </div>
        </div>
    </div>
    <!-- Courses End -->