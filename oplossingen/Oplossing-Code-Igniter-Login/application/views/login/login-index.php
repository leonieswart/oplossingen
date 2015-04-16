

<!DOCTYPE html>
<html>
<head>
	<title>Login-index</title>
</head>
<body>

	<?php echo form_open('login/login-index') ?>

	    <label>e-mail</label>
	    <input type="email" value="<?php echo set_value('email'); ?>" name="e-mail" placeholder="Vul je e-mail in.">
	    	
	    <label>wachtwoord</label>
	    <input type="text" value="<?php echo set_value('password'); ?>" name="password" placeholder="Vul je wachtwoord in.">

	    <input type="submit" value="Login" name="login">

    </form>

    <?php echo validation_errors(); ?>



</body>
</html>