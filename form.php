
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="action.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" require>
        <label for="name">Email</label>
        <input type="text" name="email" require>
        <label for="name">message</label>
        <input type="text" name="message" require>

        <input type="submit" value="submit data">
    </form>
</body>
</html>