<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body, h1, form {
    margin: 0;
    padding: 0;
}

/* Basic styling for body */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Styling for login container */
.login-container {
    background-color: #fff;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Styling for headings */
h1 {
    margin-bottom: 1em;
    color: #333;
}

/* Styling for form input groups */
.input-group {
    margin-bottom: 1em;
}

.input-group label {
    display: block;
    margin-bottom: 0.5em;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 0.8em;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Styling for submit button */
button {
    width: 100%;
    padding: 0.8em;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1em;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="ceklogin.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
