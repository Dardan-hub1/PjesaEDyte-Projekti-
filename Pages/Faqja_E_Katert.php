<!DOCTYPE html>
<html>
<head>
<title>Account Page</title>
<link rel='stylesheet' href='../css/stili4.css' type='text/css' />
<script src="../js/scripta.js"></script>
</head>
<body>
    <div id="full-content">
    <header>
    <div id="header">
        <ul>
            <li><img src="../photos/Ford-logo-1.png"></li>
        </ul>
    </div>
</header>
<main>
<div id="formulari">
<div id="header1">
<a onclick="changeForm(0)" href="#">Login</a>
<a onclick="changeForm(1)" href="#">Sign In</a>
</div>
<form id="mainForm" action="../Login&Register/loginverify.php" method="post" onsubmit="return validate()">
    <div class="login forms form-style">
        <p>If you have a Ford or Lincoln account,</p>
        <p>enter your username and password here.</p>
<ul>
<li><label>Username:</label></li>
<li><input type="text" name="username" class="login" size="15" placeholder="Username"/></li>
<li><label>Password:</label></li>
<li><input type="password" name="password" size="15" class="login" placeholder="Password"/></li>
<li><input type="submit" value="Login"  id="login-btn" onclick="validate(0)"/></li>
</ul>
</div>
<div class="register forms hidden">
    <p>If you don't have a Ford or Lincoln account,</p>
    <p>create an account here for free.</p>
    <ul>
        <li><label>Name and Surname:</label></li>
       <li><input type="text" id="name" class="login" size="40" placeholder="Name Surname"/></li>
       <li><label>Email:</label></li>
       <li><input type="text" id="email" class="login" size="40" placeholder="Email"/></li>
       <li><label>Password:</label></li>
       <li><input type="password" id="pass" class="login" size="15" placeholder="Password"/></li>
       <li><input type="submit"  id="login-btn" value="Login" onclick="validate(1)"/></li>
    </ul>
</div>
</form>
</div>
</main>
<footer>
    <div id="footer">
        <h3>California Resident</h3>
        <p>Exercise your rights under the California Consumer Privacy Act here</p>
        <a href="#">Do Not Sell My Personal Information</a>
    </div>
</footer>
</body>
</html>