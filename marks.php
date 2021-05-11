<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '','project');
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


if(isset($_POST['submit'])){
  //$stu_id =  $_POST['stu_id'];
//$Name = $_POST['Name'];
$stduentID = $_POST['SID'];
$marks =$_POST['marks'];
$grade = $_POST['grade'];



$sql = "INSERT INTO marks VALUES ( NULL,'$SID','$marks','$grade')";
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
<label><b>STUDENT ID :</b></label>
<input type ="text"   name="SID" required/>
<br>
<br>
<label><b>marks :</b></label>
<input type ="text"   name="marks" required/>
<br><br>
<label><b>Grade :</b></label>
<input type ="text"   name="grade" required/>
</div>
<div>

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