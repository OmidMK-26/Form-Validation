<?php

$errors = array('name' => '', 'address' => '', 'Zipcode' => '', 'Country' => '', 'gender' => '', 'phone' => '', 'email' => '', 'password' => '', 'Vpassword' => '');


if (isset($_POST['submit'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST['name'])) {
            $errors['name'] = "Please enter your name!";
        } else {
            $name = $_POST['name'];
        }


        if (empty($_POST['Zipcode'])) {
            $errors['Zipcode'] = "Please enter your zipcode!";
        } else {
            $zipcode = $_POST['Zipcode'];
        }


        if (empty($_POST['Country'])) {
            $errors['Country'] = "Please choose your Counter!";
        } else {
            $country = $_POST['Country'];
        }


        if (empty($_POST['gender'])) {
            $errors['gender'] = "Please choose your gender!";
        } else {
            $gender = $_POST['gender'];
        }


        if (empty($_POST['phone'])) {
            $errors['phone'] = "Please enter your phone!";
        } else {
            $phone = $_POST['phone'];
        }


        if (empty($_POST['email'])) {
            $errors['email'] = "Please enter your email!";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $errors['password'] = "Please enter your password!";
        } else {
            $password = $_POST['password'];
        }

        if (empty($_POST['Vpassword'])) {
            $errors['Vpassword'] = "Please enter the verification!";
        } else {
            $Vpassword = $_POST['Vpassword'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>form-validation</title>
    <style>
        .btn1 {
            margin-left: 20px;
        }

        .btn2 {
            margin-left: 2px;
        }

        .error_text {
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <form method="POST">
            <label>Name* </label>
            <input type="text" name="name">
            <div class="error_text"><?php echo $errors['name']; ?></div>
            <br><br>
            <label>Address</label>
            <input type="address" name="address">
            <br><br>
            <label>Zip Code*</label>
            <input type="text" name="Zipcode">
            <div class="error_text"><?php echo $errors['Zipcode']; ?></div>
            <br><br>
            <label>Country*</label>
            <select name="Country" value="Country">
                <option value="select">Please select</option>
                <option value="Iran">Iran</option>
                <option value="USA">USA</option>
                <option value="Frence">Frence</option>
                <option value="Canada">Canada</option>
            </select>
            <div class="error_text"><?php echo $errors['Country']; ?></div>
            <br><br>
            <label>Gender*</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <div class="error_text"><?php echo $errors['gender']; ?></div>
            <br><br>
            <label for="">Prefereces*</label>
            <input type="checkbox" name="color" value="Red">Red
            <input type="checkbox" name="color" value="Green">Green
            <input type="checkbox" name="color" value="Blue">Blue
            <br><br>
            <label>Phone*</label>
            <input type="tel" name="phone" pattern="[0-9]*">
            <div class="error_text"><?php echo $errors['phone']; ?></div>
            <br><br>
            <label>Email*</label>
            <input type="email" name="email">
            <div class="error_text"><?php echo $errors['email']; ?></div>
            <br><br>
            <label>Password (6-8 characters)*</label>
            <input type="password" name="password">
            <div class="error_text"><?php echo $errors['password']; ?></div>
            <br><br>
            <label>verify password*</label>
            <input type="password" name="Vpassword">
            <div class="error_text"><?php echo $errors['Vpassword']; ?></div>
            <br><br>
            <input class="btn1" type="submit" name="submit" value="submit">
            <input class="btn2" type="submit" name="clear" value="clear">
        </form>
        <h1>Your Input:</h1>
        <?php

        if (isset($_POST['submit'])) {

            echo $name, '<br><br>';
            echo $_POST['address'], '<br><br>';
            echo $zipcode, '<br><br>';
            echo $country, '<br><br>';
            echo $gender, '<br><br>';
            echo $_POST['color'], '<br><br>';
            echo $phone, '<br><br>';
            echo $email, '<br><br>';
            echo $password, '<br><br>';
        }
        ?>
    </div>
</body>

</html>