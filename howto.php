<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>How To Use</title>
    <link rel="stylesheet" href="styling.css">
  </head>
  <body>
    <div class="navbar">
      <a class="center" href="credits.html">Credits</a>
      <a href="howto.php">How To Use</a>
      <a href="index.php">Home</a>
    </div>
    <div class="howto">
      <h1>How To Use</h1>
      <h2>Connecting to Centos 7 on VM</h2>
      <div class="steps">
        <li>Select VM to connect to on Virtual Box</li>
        <li>Click Settings and go to "Network"</li>
        <li>Make sure "Attached To" says "NAT" and click "Advanced"</li>
        <li>Select "Port Forwarding"</li>
        <li>Press the icon with the green plus sign on the side to add a new rule</li>
        <li>Click on "Name" and change it to "SSH"</li>
        <li>Click on "Host IP" and change it to "127.0.0.1"</li>
        <li>Click on "Host Port" and change it to "3022"</li>
        <li>Click on "Guest IP" and chagne it to "10.0.2.15"</li>
        <li>Click on "Guest Port" and change it to "22"</li>
        <li>Press OK on all windows</li>
        <li>Return to Home page and enter your username and password</li>
      </div>
    </div>
  </body>
</html>
