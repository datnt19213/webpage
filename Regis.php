<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/RegisLogin.css">
</head>

<?php
    $rand = rand(1000, 9999);
?>

<body>
    <div class="Wrapper">
        <form action="" class="loginForm">
            <ul class="inputLoginlist">
                <div class="loginLabel">
                    <b>Register</b>
                </div>
                <li class="marginli">
                    <p>Username:</p>
                    <input class="formatinput" placeholder="User name" type="text">
                </li class="marginli">
                <li class="marginli">
                    <p>Fullname:</p>
                    <input class="formatinput" placeholder="Full name" type="text">
                </li>
                <li class="marginli">
                    <p>Gender:</p>
                    <div>
                        <input style="margin: 1% 10%;" type="radio" name="genderrd" id="male" value="male"><label for="male">Male</label>
                    </div>
                    <div>
                        <input style="margin: 1% 10%;" type="radio" name="genderrd" id="female" value="female"><label for="female">Female</label>
                    </div>
                    <div>
                        <input style="margin: 1% 10%;" type="radio" name="genderrd" id="others" value="others"><label for="others">Others</label>
                    </div>
                </li>
                <li class="marginli">
                    <p>Email:</p>
                    <input class="formatinput" placeholder="abc123@example.com" type="email">
                </li>
                <li class="marginli">
                    <p>Address:</p>
                    <input class="formatinput" placeholder="Address" type="text">
                </li>
                <li class="marginli">
                    <p>Phone:</p>
                    <input class="formatinput" placeholder="Telephone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </li>
                <li class="marginli">
                    <p>Password:</p>
                    <input class="formatinput" placeholder="Password" type="password">
                </li>
                <li class="marginli">
                    <p>Confirm Password:</p>
                    <input class="formatinput" placeholder="Confirm password" type="password">
                </li>
                <li>
                    <p>Verify number:</p>
                    <input placeholder="Verify number" style="width: 50%; height: 30px; margin: 5% 0%; padding: 0px 10px; outline: none; border: 2px solid silver; box-shadow: 0px 3px 5px gray;" min="0" max="9999" type="number"><input type="text" value="<?php echo $rand; ?>" name="ramdomNum" readonly style="margin: 0px 5%; width: 100px; height: 30px; font-size: 20px; text-align: center; outline: none; border: none; color: blue; background-color: rgb(225, 225, 225);">
                </li>
                <li style="margin-top: 5%;">
                    <a href="?page=login">
                        <input class="logbtn" type="button" value="Register">
                    </a>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>