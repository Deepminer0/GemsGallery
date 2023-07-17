<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">

<body>

<!-- ----------------header------------------- -->
<div class="header">
<h1 class="headertext">Offline database</h1>
</div> 

<div class="form_border"> 
<h2>Customer details</h2>

<form method="POST" action="process.php">
<div class="container">

<input type="text" name="name" placeholder="Full Name" required>
<br>
<input type="email" name="email" placeholder="Email" required>
<br>
<input type="number" name="number"placeholder="Number" required>
<br>
<input type="password" name="password" placeholder="Password" required>
<br><br>

<button type="submit"class="button" >Send</button>
</form>
    </form>
</div>



   
</head>
</body>
</html>
