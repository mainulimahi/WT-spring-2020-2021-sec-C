<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
<table>

<!-- Name: -->
<tr><td>Name: </td><td><input type="text" name="Name"></td></tr><br>

<!-- Email -->
<tr><td>Email: </td><td><input type="text" email="Email"></td></tr><br>

<!-- Password -->
<tr><td>Password: </td><td><input type="password" pass="Name"></td></tr><br>

<!-- ConfirmPassword -->
<tr><td>Confirm Password: </td><td><input type="password" pass="ConfirmPassword"></td></tr><br>

<!-- Gender -->
<tr><td>Gender: 
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>

<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>

<input type="radio" id="other" name="gender" value="other">
<label for="other">other</label>
<br>
</td></tr>
<!-- Birthday -->
<tr><td>
<label for="Birthday">Date of Birth</label><input type="date" id="date" name="date">
</td></tr><br>

<tr><td>
<input type="submit" value="submit">
<input type="reset" value="reset">
</td></tr>

</table>
</body>
</html>