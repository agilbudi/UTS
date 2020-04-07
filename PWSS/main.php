<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: berita.php");
    exit; 
}
include 'sql.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = query("SELECT * FROM member WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            if ($row["username"] === "agil") {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            }else {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $row["username"];
                $_SESSION["photo"] = $row["photo"];
                header("Location: berita.php");
                exit;
            }
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
    <style>
    body,html {
        background-image: url("https://images.pexels.com/photos/1619317/pexels-photo-1619317.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin: 0;
    }
    </style>
</head>
  <body>
    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%; height: 100%;">
            <thead style="height: 5%">
                <tr>
                    <td> </td>
                </tr>
            </thead>
            <tbody align="center" >
                <tr>
                    <th> </th>
                </tr>
                <tr style="height: 10%">
                    <td><h2 style="font: italic bold; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Baca berita tanpa jenuh</h2></td>
                </tr>
                <tr style="height: 70%">
                    <td>
                        <form method="post" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 15, 0.7);">
                            <div class="form-group">
                                Login dulu untuk membaca berita terWOW!<br/>
                                <br/>
                                <input type="namespace" class="form-control" id="username" name="username" placeholder="Username">
                                <small id="username" class="form-text">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <small id="passwordHelp" class="form-text">Password must be 6-8 or more and can't contain special characters.</small>
                            </div>
                            <?php if (isset($error)): ?> 
                            <div class="text-danger" style="font-family: 'Courier New', Courier, monospace; font-size: 10pt">Username or Password is wrong...</div>
                            <?php endif; ?>
                            <div align="right">
                                <a href="member.php">Become a member</a>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Login & Read News</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                </tr>
            </tbody>
            <tfoot style="height: 5%" align="center">
                <tr>
                    <td style="font-family: 'Courier New', Courier, monospace; font-size: 10pt">Create by A Gil</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php //"https://images.pexels.com/photos/1619317/pexels-photo-1619317.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"); ?>