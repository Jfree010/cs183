<?php require 'session.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
			<h2>Log In</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Username</label>
  			<br/>
  			<input type="text" name="name" id="username">
  			<br/>
  			<label for="password">Password</label>
  			<br/>
  			<input type="password" name="pass" id="password">
  			<br/>
  			<button type="submit">Sign In</button>
  			<br/>
      </form>
      <?php
        error_reporting(E_ALL & E_STRICT);
        ini_set('display_errors', '1');
        ini_set('log_errors', '0');
        ini_set('error_log', './');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
        include('phpseclib/Net/SSH2.php');
        $uname = $_POST["name"];
        $passd = $_POST["pass"];
        $sname = $_POST["server"];
        $ssh = new Net_SSH2("$sname", 3022);
        if (!$ssh->login("$uname", "$passd")) {
            exit(' ');
        }

        echo $ssh->exec('ls');
       ?>
  </body>
</html>
