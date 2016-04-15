<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <p><img src="programAssignments-ch-1.jpg" alt="Assignment-1.jpg" class="img-circle" width="150" height="150"></p>
  <h1>Eli-Lin</h1>
  <table class="table table-hover">
  	<thead>
  	<tr>
  	  <th>Phone</th>
  	  <th>E-mail</th>
  	  <th>Address</th>
  	</tr>
  	</thead>
  	<tbody>
  	<tr>
  	  <td>0912345678</td>
  	  <td>Eli-lin@gmail.com</td>
  	  <td>haven</td>
  	</tr>
  	</tbody>
  </table>
  <h1><a href="https://www.facebook.com/linyichin.eli"><img class="img-rounded" src="facebook.png"></a></h1>
  <form method="post">
  Your name:<input type="text" name="name"></input>
  <input type="submit" name="sure" value="submit">
  </form>
<?php
error_reporting(E_ALL &~ E_NOTICE);
if($_POST["sure"])
{
  echo "<h1>Hello! " . $_POST["name"] . ". Nice to meet you!</h1>"; 
}
?>
</div>
</body>
</html>