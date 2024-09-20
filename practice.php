<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST['email'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $no=$_POST['no'];
    $erremail=$errname=$errpass=$errno="";
    function password($pass){
        if(!strlen($pass)>8 && !strlen($pass)<12){
            return false;
        }
        elseif(!preg_match('/[A-Z]/',$pass) || !preg_match('/[0-9]/',$pass) || !preg_match('/[\W]/',$pass)){
            return false;
        }
        else{
            return true;
        }
    }

        if(empty($name)){
            $errname="fill name";
        }
        elseif(empty($pass)){
            $errpass="fill pass";
        }
        elseif(empty($email)){
            $erremail="fill email";
        }
        elseif(!(strlen($no)==10)){
            $errno="no must be 10";
        }
        elseif($email != $name){
            $errname="name and email doesnot same";
        }
        elseif(!password($pass)){
            $errpass="password consists alteast 1 capital,special and no and should be greater than 8 and les than 12";
        }
        else{
            echo "registered succefully";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h3>username: </h3>
        <input type="text" name="name"><?php echo $errname; ?><br>
        <h3>password: </h3>
        <input type="pass" name="pass"><?php echo $errpass; ?><br>
        <h3>email: </h3>
        <input type="email" name="email"><?php echo $erremail; ?><br>
        <input type="number" name="no"><?php echo $errno; ?><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>