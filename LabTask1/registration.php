<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
<form>
<table>
<!-- Name: -->
<tr><td>Name: </td><td><input type="text" name="Name"></td></tr>

<!-- Email -->
<tr><td>Email: </td><td><input type="text" email="Email"></td></tr>

<!-- Password -->
<tr><td>Password: </td><td><input type="password" pass="Name"></td></tr>

<!-- ConfirmPassword -->
<tr><td>Confirm Password: </td><td><input type="password" pass="ConfirmPassword"></td></tr>
</table>

<!-- Gender -->
<p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
<br>
<br>
<table><!-- Birthday -->
<tr><td>
<label for="Birthday">Date of Birth</label><input type="date" id="date" name="date">
</td></tr>

<br>

<tr><td>
<input type="submit" value="submit"></td>
<br>

<tr><td><input type="reset" value="reset"></td></tr>

</table>

</form>


</body>
</html>