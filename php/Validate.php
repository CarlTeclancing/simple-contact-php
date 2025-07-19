<?php
// Define variables and set to empty values
$name = $email = $gender = $comment = "";
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation Example</title>
</head>
<body>
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span style="color:red">* <?php echo $nameErr;?></span><br><br>

        Email: <input type="text" name="email" value="<?php echo $email;?>">
        <span style="color:red">* <?php echo $emailErr;?></span><br><br>

        Gender:
        <input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked";?>>Female
        <input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked";?>>Male
        <span style="color:red">* <?php echo $genderErr;?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $genderErr == "") {
        echo "<h3>Your Input:</h3>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $gender . "<br>";
    }
    ?>
</body>
</html>
