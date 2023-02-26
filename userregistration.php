<!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
              
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">User Registration</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="signup_con.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="username" placeholder="Your user name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Your email" required="required" />
                                </div>
								
								 <div class="form-group">
                                    <input type="password" class="form-control border-0 p-4" name="password" placeholder="Your Password" required="required" />
                                </div>
                             
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" value="Signup" type="submit"><a href="login.php">Sign Up Now</a></button>
                                </div>
                                <br>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" value="login" type="submit">
                                    <a href="user_login.php">Login</a>    
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
