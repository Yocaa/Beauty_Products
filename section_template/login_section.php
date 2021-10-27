<?php
$login_alert='';

if (isset($_POST['submit'])){
      if($_login->checkUser($_POST['email'], $_POST['password'], $db->con)>0){
            $login_alert='';
      }else{
            $login_alert="Email is not Registered or Wrong Password";
      }
      
}

?>

<section class="form mx-5">
      <div class="container">
            <div class="row no-gutters">
                  <div class="welcome-img col-lg-5">
                        <img src="https://www.boldsky.com/img/2017/06/cover-image---beauty--13-1497358325.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-7 px-5 pt-5">
                        <h1>Shop Name</h1>
                        <h4>Login your Account</h4>
                        <form method="post">
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <h7>Email:</h7>
                                          <input type="email" name="email" id="" class="form-control mb-3 p-4" placeholder="Email..." required>
                                    </div>
                              </div>
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <h7>Password:</h7>
                                          <input type="password" name="password" id="" class="form-control mb-3 p-4" placeholder="Password..." required>
                                    </div>
                              </div>
                              <div class="form-row">
                                    <div class="col-lg-7">
                                          <button type="submit" name="submit" class="btn-login">Login</button>
                                    </div>
                              </div>
                              <small class="text-danger"><?php echo $login_alert?></small>
                        </form>
                        ...<a href="">Forgot Password</a>?
                  </div>
            </div>
      </div>
</section>