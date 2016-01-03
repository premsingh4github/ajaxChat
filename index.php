<?php
	include('includes/loader.php');
	include('tpl/head.php');
	include('tpl/header.php');
	
	$users = get_users();
	
	// Note: You don't need this page on your work, its just a demo
?>
	
    <div class="container">
       <div class="row login">
           <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Please Sign In</h3>
                   </div>
                   <div class="panel-body">
                      <?php
                        if(@$error){
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
                               <a href="register.php" class="btn  btn-success btn-block">Register</a>
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