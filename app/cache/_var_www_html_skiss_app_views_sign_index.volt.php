<?php use Phalcon\Tag; ?>
<div class="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Sign using this form</h2>
		</div>
	</div>
</div>
<script>
function loadForm(what){
	if(what=='login'){
		$("h3").html("Sign In");
		$("#change").attr("onclick","loadForm('register');");
		$("#change").html("Don't Have A Account?");
		$("#submit").attr("value","Login")
	}else if(what=='register'){
		$("h3").html("Sign Up");
		$("#change").attr("onclick","loadForm('login');");
		$("#change").html("Already Have A Account?");
		$("#submit").attr("value","Register")
	}
	
}
</script>
<div class="row">
	<div class="col-md-4 col-md-offset-4" name="form">
	        	<div class="login-panel panel panel-default">
                  	<div class="panel-heading">
                  		<h3 class="panel-title">Sign Up</h3>
                  	</div>
                 	<div class="panel-body">
			<?php echo Tag::form("sign/verifly"); ?>
 			<p>
    			<label for="name">Name</label>
    			<?php echo Tag::textField("username") ?>
 			</p>
 			<p>
    			<label for="name">E-Mail</label>
    			<?php echo Tag::textField("email") ?>
 			</p>
			<a id="change" onclick="loadForm('login');">Already Have A Account?</a>
 			<p>
    			<input id="submit" class="btn btn-lg btn-success btn-block" type="submit" value="Register">
 			</p>
			</form>
	</div>
</div>