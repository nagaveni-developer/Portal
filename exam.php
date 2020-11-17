
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 600px;
  margin : auto;
 
  text-align: center;
  font-family: arial;
}
.log{
   width: 200px;
   float : right;
}
.title {
  color: grey;
  font-size: 18px;
}

button {
  border: 2px solid white;
  outline: 0;
  display : inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}
input{

  border: 2px solid white;
  outline: 0;
  display : inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>    
  
<h2 style="text-align:center;color:#087D72;">Student Document Requests</h2>
<div class="log">
<a href="logout.php"><button type="button">logout</button> </a>
<br>
<a href="exam_comp.php"><button type="button">completed</button></a>
</div>
<div class="card">
  <form action="mail.php" method="post">
  <h3>Name : John Doe</h3>
  <p>Year : 2</p>
  <p>Branch : CSE</p>
  <p>Requested Doc. : Lost Memo</p>
  <p>Date : 11-10-2020</p>
  <button type="button">Upload Doc.</button>
  <input type="submit" value="submit" name="submit">
  </form> 
</div>

</body>
</html>
