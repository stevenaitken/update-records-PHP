<?php include('includes/error-reporting.php');include('includes/connx.php');?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
body{font-family: 'Roboto', sans-serif;}

button, input[type=submit], input[type=reset] {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    display: inline-block;
  }

  input[type=text], input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:90%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

<meta charset="utf-8">
<title><?php echo 'Edit record: '?></title>
</head>

<body>


 
<h2>Update record for employee ID:<h2>
<div>

<form action="update-record.php" method="POST">
  
<input type="hidden" name="employee_id" value="">

	<table>
  <tbody>
    <tr>
      <td><label for="fname">Firstname:</label></td>
      <td><input type="text" name="fname" value=""></td>
    </tr>

    <tr>
      <td><label for="sname">Surname:</label></td>
      <td><input type="text" name="sname" value=""></td>
    </tr>

    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" name="email" value=""></td>
    </tr>

  <tr>
      <td><label for="phone">Phone No:</label></td>
      <td><input type="text" name="phone" value=""></td>
    </tr>

    <tr>
      <td><label for="profile_pic">Profile:</label></td>
      <td><input type="text" name="profile_pic" value=""></td>
    </tr>

    <tr>
      <td><label for="location">Location:</label></td>
      <td><input type="text" name="location" value=""></td>
    </tr>

    <tr>
      <td><input type="submit" value="Update Record"></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>
    </div>

</body>
</html>