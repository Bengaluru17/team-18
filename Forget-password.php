<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#btn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<body>

<div class="container">
  <br>
  <h2>Forgot Password?</h2>
  <p>Enter your email address and last four digits of your registered phone number and hit "Send Mail".</p>
  <form>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control" id="usr" size="50">
    </div>
    <div class="form-group">
      <label for="lfd">Last four digits:</label>
      <input type="text" class="form-control" id="lfd">
    </div>
	<div class="btn-group">
	  <button id="btn" type="button" class="btn btn-primary">Send Mail</button>
	</div>
  </form>
</div>

</body>
</html>