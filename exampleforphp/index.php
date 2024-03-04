<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello World</title>
</head>
<body>
    <h1>PHP Hello World</h1>
    
    <?php
    if(isset($_POST['submit'])) {
        echo "<p>Hello</p>";
    }
    ?>

    <form method="post">
        <input type="submit" name="submit" value="Click Me">
    </form>
</body>
</html>
