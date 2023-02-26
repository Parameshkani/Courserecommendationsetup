


 <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
       
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="aboutus.php" class="nav-item nav-link">About</a>
                            <a href="coursefull.php" class="nav-item nav-link">Courses</a>
                             <a href="jobs.php" class="nav-item nav-link">jobs</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                            <a href="admin/index.php" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Admin Login</a>
							
					  <?php if(isset($_SESSION["name"])) { ?>
					 
					  <a href="" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href=""><?php  echo $_SESSION["name"]; ?></a>
					  
					   <a href="logout.php" class="btn btn-danger py-2 px-4 ml-auto d-none d-lg-block">logout</a>
					  <?php
					   } else { ?>			
						
                   <a href="login.php" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" >User Registration</a>
                            <a href="user_login.php" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" >User Login</a>
						
                <?php } ?>   					  
							
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->