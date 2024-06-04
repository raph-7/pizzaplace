<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
  <div class="title">
    <h1>contact us</h1>
  </div>
<form action="connect.php" method="post">
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name" name="name">
      <input type="text" class="input" placeholder="Email Address" name="email">
      <input type="text" class="input" placeholder="Phone" name="phone">
      <input type="text" class="input" placeholder="Subject" name="subject">
    </div>
    <div class="msg">
      <textarea placeholder="Message"></textarea>
      <div class="btn">send</div>
    </div>
  </div>
</div>
</form>
</body>
</html>