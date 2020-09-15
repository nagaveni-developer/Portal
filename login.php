<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

    <style>
   
       .btnsubmit{
    background-color:white;
    border:1px solid #0f81a7;
    color:#00bafa;
    padding:10px 100px;
    display:block;
    font-weight:bold;
    border-radius:5px;
}
.btnsubmit:hover{
    background-color: #2ec7fa;
    border:1px solid #0f81a7;
    color:white;
    padding:10px 100px;
    display:block;
    font-weight:bold;
     border-radius:5px;
}

 body {
 
  align-items: center;
  justify-content: center;
  height: 100%;
  background-image:url("http://3.bp.blogspot.com/-XZauq1eTP-A/VCLUowF7ZVI/AAAAAAAABl8/FWkzpBOcW9s/s1600/plain-wallpaper-blue-703296.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}

input[type="text"],
input[type="password"],
input[type="email"] {
  box-sizing: border-box;
  width: 100%;
  height: calc(3.5em + 2px);
  margin: 0 0 1em;
  padding: 1em;
  border: 1px solid #ccc;
  background: #fff;
  resize: none;
  outline: none;
  border-radius:5px;
}

input[type="text"][required]:focus,
input[type="password"][required]:focus,
input[type="email"][required]:focus{
  border-color: #1288af;
}
input[type="text"][required]:focus + label[placeholder]:before,
input[type="password"][required]:focus + label[placeholder]:before,
input[type="email"][required]:focus + label[placeholder]:before{
  color: #1288af;
}
input[type="text"][required]:focus + label[placeholder]:before,
input[type="text"][required]:valid + label[placeholder]:before,
input[type="password"][required]:focus + label[placeholder]:before,
input[type="password"][required]:valid + label[placeholder]:before,
input[type="email"][required]:focus + label[placeholder]:before,
input[type="email"][required]:valid + label[placeholder]:before {
  transition-duration: .2s;
  transform: translate(0, -1.5em) scale(0.9, 0.9);
}

input[type="text"][required]:invalid + label[placeholder][alt]:before,
input[type="password"][required]:invalid + label[placeholder][alt]:before,
input[type="email"][required]:invalid + label[placeholder][alt]:before  {
  content: attr(alt);
}

input[type="text"][required] + label[placeholder],
input[type="password"][required] + label[placeholder],
input[type="email"][required] + label[placeholder] {
  display: block;
  pointer-events: none;
  line-height: 1em;
  margin-top: calc(-3em - 2px);
  margin-bottom: calc((3em - 1em) + 2px);
}

input[type="text"][required] + label[placeholder]:before,
input[type="password"][required] + label[placeholder]:before,
input[type="email"][required] + label[placeholder]:before{
  content: attr(placeholder);
  display: inline-block;
  margin: 0 calc(1em + 2px);
  padding: 4px 2px;
  color: #898989;
  white-space: nowrap;
  transition: 0.3s ease-in-out;
  background-image: linear-gradient(to bottom, #fff, #fff);
  background-size: 100% 5px;
  background-repeat: no-repeat;
  background-position: center;
}
.main-form{
  width:350px;
  margin: 100px auto;
  padding-top: 10px;
  padding-left:50px;
  padding-bottom: 50px;
  padding-right: 50px;
  border: 1px solid rgba(0,0,0,0.1);
  -webkit-box-shadow:0 1px 2px rgba(0,0,0,0.2);
  background:rgba(255, 255, 255, 0.9);
  border-radius: 5px;
}
h2{
 
  color: #0b87b8;
  
  font-size: 2em;
  font-weight: 300;
  height:2px;
 
 
}
#nav{
  margin-top: 2.5em;
  text-align: center;
}
#nav ul li {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;    
  display: inline-block;
  padding: 1em;
  font-size: 1.15em;
}
#nav ul li.active-item a {
  border-top: 0.35em solid #ecf0f1;
}
#nav ul li:last-child {
  padding-right: 0;
}
#nav ul li ul {
  display: none;
  margin: 0;
  padding: 0;
  position: absolute;
  background: #fff;
  padding: .5em;
  margin-top: .75em;
  margin-left: 0em;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.35);
  border-radius: .25em;
}
#nav ul li ul:before {
  content: "";
  position: absolute;
  top: -8px;
  left: 5%;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 10px 8px 10px;
  border-color: transparent transparent #ffffff transparent;
}
#nav ul li ul li {
  display: block;
  margin: 0;
  padding: 0;
}
#nav ul li ul li a {
  font-weight: normal;
  font-size: .65em;
  padding: .5em;
  display: block;
  border-radius: .25em;
}
#nav ul li ul li a:hover {
  border-top: none;
  color: #2a333b;
  background: #eaeaea;
}
#nav ul li ul li a:active {
  position: relative;
  top: 1px;
}
#nav ul li a {
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
  text-decoration: none;
  padding-top: 1em;
  letter-spacing: 0.2em;
}
#nav ul li a:hover {
  border-top: 0.35em solid #34495e;
  color: #d9d9d9;
}

    </style>
   
  </head>

  <body >
      <!--navigation bar-->
      <nav id="nav" class="navigation">
        <ul>
        <li><a href="">Home</a></li>
        <li class="active-item"> <a href="login.php">Log In</a></li>
        <li> <a href="signup.php">Sign Up</a></li>
        <li><a href="">More</a></li>
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