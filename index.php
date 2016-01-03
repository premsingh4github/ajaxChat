<?php
	include('includes/loader.php');
	include('tpl/head.php');
	include('tpl/header.php');
	
	$users = get_users();
	
	// Note: You don't need this page on your work, its just a demo
?>
	
    <div class="container">
	  
      <div class="row">
      
      	<div class="content-wrap">
            <div id="login-simulator">
            
            	<p align="center">This is just a login simulator, just for demostrative purposes.</p>
				
                <p>Choose a user:</p>
                <form action="index.php" method="post">
                	<select name="user_id" class="form-control input-sm">
                      <?php 
					  foreach($users as $k => $v) 
					  { 
					  	echo '<option value="'.$v['id'].'">'.$v['display_name'].'</option>';
					  }
					  ?>
                    </select>
                    <input type="submit" name="submit" class="btn btn-sm btn-block btn-primary" value="Simulate Login" />
                </form>
                
            </div>
            
        </div>
        
      </div><!-- // row -->
      
   </div><!-- // container -->
    
<?php
	include('tpl/footer.php');
?>