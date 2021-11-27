<?php require 'session.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styling.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="login-box">
      <div class="box-header">
				<h2>Log In</h2>
			</div>
      <form method="post" action="terminal.php">
        <label for="username">Username</label>
  			<br/>
  			<input type="text" name ="name" id="username">
  			<br/>
  			<label for="password">Password</label>
  			<br/>
  			<input type="password" name="pass" id="password">
  			<br/>
  			<button type="submit">Sign In</button>
  			<br/>
      </form>
    </div>
      <?php
        error_reporting(E_ALL & E_STRICT);
        ini_set('display_errors', '1');
        ini_set('log_errors', '0');
        ini_set('error_log', './');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
        include('phpseclib/Net/SSH2.php');
        $uname = $_POST["name"];
        $passd = $_POST["pass"];
        $ssh = new Net_SSH2('127.0.0.1', 3022);
        if (!$ssh->login("$uname", "$passd")) {
            exit(' ');
        }

        $ls = $ssh->exec('ls');
        $_SESSION['ls'] = $ls;
        $lsf = $ssh->exec('ls -f');
        $_SESSION['lsf'] = $lsf;
       ?>
  </body>
</html>
