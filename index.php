<?php
	include('includes/loader.php');
	include('tpl/head.php');
	include('tpl/header.php');
	
	$users = get_users();
	
	// Note: You don't need this page on your work, its just a demo
?>
	
    <div class="container">
       <div class="row login" id="login">
           <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Please Sign In</h3>
                   </div>
                   <div class="panel-body">
                      <?php
                        if(@$success){
                          ?>
                          <div class="alert alert-success">
                            <strong>Success!</strong> <?php echo $success; ?>
                          </div>
                          <?php
                        }

                       ?>
                       <?php
                         if(@$error){
                           ?>
                           <div class="alert alert-danger">
                             <strong>Sorry!</strong><?php echo $error; ?>
                           </div>
                           <?php
                         }
                        ?>
                      <?php
                        if(@$login_error){
                          ?>
                          <div class="alert alert-danger">
                            <strong>Sorry!</strong> Invalid Credential
                          </div>
                          <?php
                        }

                       ?>
                       <form role="form" method="POST">
                           <fieldset>
                               <div class="form-group">
                                   <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                               </div>
                               <div class="form-group">
                                   <input class="form-control" placeholder="Password" name="password" type="password" value="">
                               </div>
                               <div class="checkbox">
                                   <label>
                                       <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                   </label>
                               </div>
                               <!-- Change this to a button or input when using this as a form -->
                               <button type="submit" name="login" class="btn  btn-success btn-block">Login</button>
                               <a href="#" onclick="changeLogin()" class="btn  btn-success btn-block">Register</a>
                           </fieldset>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div class="row login" id="register">
           <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Register</h3>
                   </div>
                   <div class="panel-body">
                      <?php
                        if(@$success){
                          ?>
                          <div class="alert alert-success">
                            <strong>Success!</strong> <?php echo $success; ?>
                          </div>
                          <?php
                        }

                       ?>
                       <?php
                         if(@$error){
                           ?>
                           <div class="alert alert-danger">
                             <strong>Sorry!</strong><?php echo $error; ?>
                           </div>
                           <?php
                         }

                        ?>
                      
                       <form id="signupform" role="form" method="POST">
                           <fieldset>
                            <div class="form-group">
                                <label>
                                    Display Name
                                </label>
                                   <input class="form-control" placeholder="Display Name" name="display_name" type="text" required="required" autofocus>
                               </div>
                               <div class="form-group">
                                <label>
                                    Username
                                </label>
                                   <input class="form-control" placeholder="Username" name="username" type="text" required="required" autofocus>
                               </div>
                               <div class="form-group">
                                <label>
                                    Email
                                </label>
                                   <input class="form-control" placeholder="Email" name="email" required type="email" autofocus>
                               </div>
                               <div class="form-group">
                                  <label>
                                      Password
                                  </label>
                                   <input class="form-control" placeholder="Password" name="password" type="password" value="">
                               </div>
                               <div class="form-group">
                                  <label>
                                      Confrm - Password
                                  </label>
                                   <input class="form-control" placeholder="Password" name="password_confirmation" type="password" value="">
                               </div>

                               <div class="checkbox">
                                   <label>
                                       <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                   </label>
                               </div>
                               <!-- Change this to a button or input when using this as a form -->
                               <button name="register" type="submit" class="btn  btn-success btn-block">Register</button>
                               <a href="#" onclick="changeLogin()" class="btn  btn-success btn-block">Login</a>
                           </fieldset>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
    
<?php
	include('tpl/footer.php');
?>