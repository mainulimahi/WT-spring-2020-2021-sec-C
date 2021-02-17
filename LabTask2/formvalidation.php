<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
</head>

<body>

<?php
$validateName = "";
$validateEmail = "";
$genderValidation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $confirm = $_REQUEST["confirmPassword"];
    $validPassword="";

    if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $validateName = "you must enter your name";
    } else {
        $validateName = "your name is " . $name;
    }
    if (empty($email))
    {
        $validateEmail = "you must enter your email";
    }
   
    else {
        $validateEmail = "your email is " . $email;
    }
    if(!isset($_REQUEST["gender"]))
    {
        $genderValidation="select your gender";
    }
    else
    {
        $gender=$_REQUEST["gender"];;
        $genderValidation="your gender is ".$gender;
    }
    if(empty($password)||empty($confirmPassword))
    {
        $validPassword="enter valid password";
    }
    elseif($password!=$confirmPassword)
    {
        $validPassword="password is incorrect";
    }
    else if($password>8)
    {
        $validPassword="password must contain at least 8 characters";
    }
    else
    {
        $validPassword="password correct";
    }
}
?>



    <h2>Registration</h2>
    <form form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" /><?php echo $validateName; ?></td>
                <td></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" /><?php echo $validateEmail; ?></td>
            </tr>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="userName" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmPassword" /><?php echo $validPassword; ?></td>
            </tr>
        </table>
        Please select your gender:
        <br>
        <br>
        <input type="radio" name="gender" id="male" value="male" />
        Male
        <br>
        <input type="radio" name="gender" id="female" value="female" />
        Female
        <br>
        <input type="radio" name="gender" id="other" value="other" />
        other
        <br>
        <?php echo $genderValidation; ?>
        <br>
        Date of birth:
        <br>
        <input type="date" id="birthday" name="birthday">
        <br>
        <br>
        <input type="submit" value="submit">
        <br>
        <input type="reset" value="reset">
    </form>
</body>

</html>