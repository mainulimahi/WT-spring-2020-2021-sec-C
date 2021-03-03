<?php
class value_insert{
function OpenCon()
{ 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $UserName, $Password, $dbname);

if ($conn->connect_error)
{ 
    die("Connection failed: " . $conn->connect_error);
}
}

function value($conn,$Name,$Email,$UserName,$Password,$Gender,$Birthday)
{
    $sql = "INSERT INTO Users (User,Email,UserName,Password,Gender,Birthday) VALUES ('$Name','$Email','$UserName','$Password','$Gender','$Birthday')";
$res = $conn->query($sql);//execute query
if($res)
{ echo "new record inserted"; }
else
{ echo "error occurred". $conn->error; }

}

function insertUserdata($conn,$Email,$UserName,$Password,$Gender,$Birthday)
{
    
    $qry = "INSERT INTO Users (fname, email, uname, password, gender, dob) VALUES ('$fname','$email', '$uname', '$password1', '$gender', '$dob')";
    $res = $conn->query($sql);
    if(res) {
        return 1;
    }
    else {
        return 0;
    }

}

function CloseCon($conn)
 {
 $conn -> close();
 }

};

?>