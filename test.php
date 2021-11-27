<?php require 'session.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="name"><br><br>
    Password: <input type="text" name="pass"><br>
    <input type="submit">
    </form>
    <?php
    error_reporting(E_ALL & E_STRICT);
    ini_set('display_errors', '1');
    ini_set('log_errors', '0');
    ini_set('error_log', './');
    set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
    include('phpseclib/Net/SSH2.php');

    $apple = "apple song";
    $horse = "horse analogy";
    $_SESSION['apple'] = $apple;
    $_SESSION['horse'] = $horse;

    $uname = $_POST["name"];
    $passd = $_POST["pass"];
    $ssh = new Net_SSH2('127.0.0.1', 3022);
    if (!$ssh->login("$uname", "$passd")) {
        exit('Login Failed');
    }

    $ls = $ssh->exec('ls');
    $_SESSION['ls'] = $ls;
    $lsf = $ssh->exec('ls -f');
    $_SESSION['lsf'] = $lsf;

    echo $_SESSION['ls'];
?>
  </body>
</html>
