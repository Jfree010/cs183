<?php require 'session.php';?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
</head>
<body>
  <div id="phpCode" style="display: none;">
    <?php
      $output = $_SESSION['ls'] . "&&&" . $_SESSION['lsf'];
      echo htmlspecialchars($output);
    ?>
  </div>
  <script>
  function nl2br(str) {
    return str.replace(/(?:\r\n|\r|\n)/g, '');
  }
    var div = document.getElementById("phpCode");
    var myData = div.textContent;
    myData = nl2br(myData);
    let x = myData.split("&&&");
    $('body').terminal({
                iam: function (name) {
                    this.echo('Hello, ' + name +
                        '. Welcome to our Demo!');
                },
                maker: function () {
                    this.echo('Jourdon and Elijah');
                },
                ls: function () {
                    this.echo(x[0]);
                },
                lsf: function () {
                    this.echo(x[1]);
                },
                help: function () {
                    this.echo('iam - iam command and '
                    + 'pass your name as argument\n'
                    + 'maker - to know who made this\n'
                    + 'ls - to display all files and directories\n'
                    + 'lsf - to display only files');
                },
            }, {
                greetings: 'Welcome to our User input terminal! type "help" to learn commands'
            });
</script>
</body>
</html>
