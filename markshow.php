<?php

$mysqli = new mysqli("localhost", "root", "", "project");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM marks";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){

?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin:auto 100px;
}
H2 {
    background: orange;
        width: 30em;
        }

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
button {
  background-color:#D35400;
  border: purple;
  color: black;
  text-decoration: NONE;
  display: inline-block;
padding: 10px 25px;
  border-radius:30px; 
  
}
#BUTTON {
  background-color:white;
  border: purple;
  color: black;
  text-decoration: NONE;
  display: inline-block;
 padding: 10px 25px;
  border-radius:50px; 
  
}
</style>
</head>
<body> 
  <center>
    <h2>Teacher Personal Information</h2>
</center>
<br>
<br>
<br>

<table id="customers">
  <tr>
    <th>Serial</th>
   
    <th>STUDENT ID</th>
  
    <th>Marks.</th>
    <th>grade</th>
     <th>Action</th>
  </tr>
  <?php while($row = $result->fetch_array()){?>
  
  <tr>

   
       <td><?php echo $row['id']; ?></td>
 
    <td><?php echo $row['SID']; ?></td>
    <td><?php echo $row['marks']; ?></td>
     <td><?php echo $row['grade']; ?></td>
      
 
    <td>
   
    	
    	<a href="delect.php?del=<?php echo $row['id']; ?>" id="button" onclick="return confirm('Do You Want To Delete !!');">Delete</a>
    </td>
  </tr>
<?php } ?> 
</table>
<?php
$result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
<br>
<br>
<br>
<br>
<br>
<center>

</body>
</html>
