<section class="form mx-5" style="min-height:100vh">
      <div class="container">
            <div class="row no-gutters">
                  <div class="welcome-img col-lg-5">
                        <img src="https://www.boldsky.com/img/2017/06/cover-image---beauty--13-1497358325.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-7 px-5 pt-2">
                        <h1>Coolest Beauty Products </h1>
                        <h4>Login your Account</h4>
                        <form action="./php_modals/login_modal.php" method="post">
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <h7>Email:</h7>
                                          <input type="email" name="email" class="form-control mb-3 p-4" placeholder="Email..." required>
                                    </div>
                              </div>
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <h7>Password:</h7>
                                          <input type="password" name="password" class="form-control mb-3 p-4" placeholder="Password..." required>
                                    </div>
                              </div>
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <button type="submit" name="submit" class="btn-login">Login</button>
                                    </div>
                              </div>
                              <?php
                                    if(isset($_SESSION['error'])){
                                          echo $_SESSION['error'];
                                          unset($_SESSION['error']);
                                    }
                              ?>
                        </form>
                        ...<a href="" class="">Forgot Password</a>?
                  </div>
            </div>
      </div>
</section>