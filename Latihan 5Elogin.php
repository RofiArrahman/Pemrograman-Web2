<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    //username dan pasword bisa diganti
    if ($_POST["username"]== "RofiArrahman" && $_POST["password"] == "26072005") {

        header("Location: Latihan 5Eadmin.php");
        exit;
    } else {
        
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <?php if(isset($error)) : ?>
            <p style="color:red; font-style: italic;"> Username Atau Password Salah!!</p>
        <?php endif; ?>
     
        <form action="" method="post">
            <label for="username">Username </label>
            <input type="text" name="username" id="username">

            <label for="password">Password </label>
            <input type="password" name="password" id="password">

            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
<style>
body {
    font-family: 'Times New Roman', Times, serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
    background-color: gainsboro;
}

.login-container {
    background-color: whitesmoke;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
}

h2 {
    text-align: center;
    color: black;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: blue;
}

.error {
    color: red;
    margin-bottom: 10px;
}

</style>
</html>
