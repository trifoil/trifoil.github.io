<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello World</title>
    <style>
        body {
            background-image: url('logo.png');
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            padding: 50px;
        }
        form {
            display: inline-block;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Hello World</h1>
        
        <?php
        if(isset($_POST['submit'])) {
            echo "<p>Hello</p>";
        }
        ?>

        <form method="post">
            <input type="submit" name="submit" value="Click Me">
        </form>
    </div>
</body>
</html>

