<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            height: 100dvh;
        }
        .container {
            display: flex;
            justify-content: center;
        }
        form {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }
        input[type="submit"] {
            grid-column: 1/span 2;
        }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <form action="submit.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
    
                <input type="submit" value="Login">
            </form>
        </fieldset>
    </div>
</body>
</html>