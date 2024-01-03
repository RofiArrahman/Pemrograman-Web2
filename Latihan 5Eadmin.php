<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="box">
      <div class="logout"><a href="Latihan 5Elogin.php">Logout</a></div>
        <h2>Selamat Datang, Admin!</h2>
        <div class="box1"><p>Ini adalah halaman admin</p></div>
       
    </div>
</body>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
        background-color: gainsboro;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .box{
        background-color:ghostwhite;
        padding: 30px 80px 30px 80px;
        margin-top: 100px;
        border: 0.5px solid black;
    }

    a{
        text-decoration: none;
        padding: 3px;
        background-color:firebrick;
        border: 2px solid gainsboro;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        color: white;
    }
    a:hover {
        background-color: red;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    a:active {
         box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1);
    }
    h2{
        color:olivedrab ;
    }
    p{
        color: black;
    }
    .box1{
        padding: 0.5px;
        background-color: gainsboro;
        text-align: center;
        border: 2px solid gray;
    }
</style>
</html>
