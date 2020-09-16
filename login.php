<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
  </head>

  <body >
      <!--navigation bar-->
      <nav id="nav" class="navigation">
        <ul>
        <li><a href="">Home</a></li>
        <li class="active-item"> <a href="login.php">Log In</a></li>
        <li> <a href="signup.php">Sign Up</a></li>
        <li><a href="">Contact us</a></li>
        </ul>
      </nav>
    <form>
      <div class="main-form">
        <h2>Log In</h2><br><br>
      <input type='text' autofocus required >
      <label alt='Hall Ticket Number' placeholder='1602-XX-7XX-XXX'></label>
      <input type='password' pattern=".{6,}"
                    title="minimum 8 characters" required >
      <label placeholder='Password'></label>
      <button type='submit'class='btnsubmit'>Submit</button>
      </div>
    </form>
  </body>
</html>
