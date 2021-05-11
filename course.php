<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '','project');
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


if(isset($_POST['submit'])){
  $Section =  $_POST['Section'];
$Course_Code = $_POST['Course_Code'];
$ID = $_POST['ID'];
$Course_Tittle =$_POST['Course_Tittle'];
$Intake= $_POST['Intake'];



$sql = "INSERT INTO course VALUES (NULL,'$ID','$Course_Code','$Course_Tittle','$Intake','$Section')";
if($mysqli->query($sql) === true){
   // $_SESSION['message'] = "Address saved";
   // header('location: show.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
}




?>













<html>
<head>

<style>
H2 {
    background: orange;
        width: 30em;
}
body{
background-color:white;

}


label {
 margin-top: 3px;
  font-size: 18px;
 color:orange;
 margin-right: 15px;
 text-align: left;
 float:left;
 margin-left:400px;

}

input {
  margin-top: 2px;
 height: 20px;
 width: 200px;
 
 margin-top: 10px;
 float:right;
 margin-right:400px;
 
}
button {

margin-top: 30px;
margin-right: 18px;   
  background-color:orange;
  border: purple;
  color: black;
  padding: 10px 25px;
  text-align: RIGHT;
  text-decoration: NONE;
  display: inline-block;
  font-size: 16px;
  border-radius:; 
  

}

P{
COLOR:VIOLET;
}
</STYLE>
</head>
<a href="teacher.php"><b>ADD NEW</b></a>
<BODY>




<? php require_once 'insert.php'?>


<center>

<br>
<br>
<br>
  <h2>Teacher Personal Information</h2>
<br>
<br>
<br>
<br>
<br>
<br>
<form  action ="" method="POST">
  <action>
<?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>

<br>
<br>
</div>
<div>
<label><b> Teacher Id:</b></label>
<input type ="text" name="ID" required/>
<BR>
<br>
</div>
</div>
<div>
<label><b>Course_Code:</b></label>
<input type ="text" name="Course_Code" required/>

<br>
<br>
</div>
<div>
<label><b>Course_Tittle:</b></label>
<input type ="text" name="Course_Tittle" required/>
<BR>
<br>
<label><b>Intake:</b></label>
<input type ="text" name="Intake" required/>
<BR>
<br>
<label><b>Section:</b></label>
<input type ="text" name="Section" required/>
<BR>
<br>
</div>
<div>

<br>
<br>
<br>
<br>
<br>
<br>
</div>


<button type="submit" name="submit">Save</button >


 
<br>
<br>
<br>
<br>
<br>


</action>
</form>





</body>



</html>