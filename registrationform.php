<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>
<?php
$nameError = "";
$name = "";

 if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['name'])) {
$nameError = "its empty file.please fillup first";
}
else {
$name = test_input($_POST['name']);
}
}

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


<form action="/action_page.php">
 <fieldset>
  <legend>Basic Information:</legend>
<form action="form-submit.php" method="post" autocomplete="off" novalidate>


<label for="fname">First Name:</label>
<input type="text" id="fname" name="fname">
<span style="color: blue"><?php echo $nameError; ?></span>

<br><br>

<label for="lname">Last Name:</label>
<input type="text" id="lname" name="lname">
<span style="color: blue"><?php echo $nameError; ?></span>

<br><br>

<label for="Gender">Gender:</label>
<br>
<input type="radio" id="male"name="gender" value="male">
<label for="male">Male</label>
<br>
<input type="radio" id="female" name="gender" value="female">
<label for="male">female</label>
<br>
<input type="radio" id="other" name="gender" value="other"
<label for="other">other</label>

<span style="color: blue"><?php echo $nameError; ?></span>

<br><br>

<label for="Religion">Religion:</label>
        <select id="Religion" name="Religion">
            <option value="" selected></option>
            <option value="Muslim">Muslim</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddist">Buddist</option>
            <option value="Christian">Christian</option>
            <option value="Others">Others</option>
        </select>
 <span style="color: blue"><?php echo $nameError; ?></span>       

 </fieldset>






<br><br>



<form action="/action_page.php">
 <fieldset>
  <legend>Contact Information:</legend>
<label for="present address">present address:</label>
<span style="color: blue"><?php echo $nameError; ?></span>
        <textarea id="present address" name="present address" rows="15" cols="25"></textarea>


<br><br>

<label for="permanent address">permanent address:</label>
<span style="color: blue"><?php echo $nameError; ?></span>
        <textarea id="permanent address" name="permanent address" rows="15" cols="25"></textarea>

<br><br>        

<label for="email">Email:</label>
<input type="email" id="email" name="email">
<span style="color: blue"><?php echo $nameError; ?></span>

<br><br>

<label for="phone number">phone number:</label>
<input type="tel" id="tel" name="tel">
<span style="color: blue"><?php echo $nameError; ?></span>

<br><br>

<label for="Website link">Website link:</label><p><a href="https://www.facebook.com/acepect.rayhan/">facebook profile</a></p>
</fieldset>


<br><br>

<form action="/action_page.php">
 <fieldset>
  <legend>Account Information:</legend>



<label for="name">Username:</label>
<input type="text" id="name" name="name">
<span style="color: blue"><?php echo $nameError; ?></span>

<label for="password">password:</label>
<input type="password" id="pwd" name="pwd">
<span style="color: blue"><?php echo $nameError; ?></span>


</fieldset>





<input type="submit" name="submit" value="Submit">










</form>
</body>
</html>