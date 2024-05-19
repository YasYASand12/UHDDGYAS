
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        body {
        font-family: Helvetica, sans-serif;
        background-color: #ffffff;
        }
        
        .TITLE {
        font-size: 30px;
        color: black;
        }

        .Formnya {
        width: 500px;
        height: 390px;
        margin: auto;
        padding: 25px;
        background-color: #fdffa3;
        border-radius: 20px;
        box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.1);
        border: 4px solid #000000;
        }
        
        input[type="text"], input[type="email"], input[type="password"] {
        font-size: 15px;
        width: 100%;
        padding: 10px;
        margin: 12px 0;
        border: 3px solid #000000;
        border-radius: 12px;
        box-sizing: border-box;
        color: rgb(0, 0, 0);
        }
        
        button[type="submit"] {
        background-color: #ffffff;
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        background-color: #ff0000;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        border-radius: 70px;
        }

    </style>

    <title>Login</title>
</head>
<body>

    <form action="handler_login.php" method="post">

    <div class="Formnya">

    <h2 class="TITLE"> <b><u>Halaman Login</u></b> </h2>

    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>

    <button type="submit">Login</button>
    
    <p>Belum Punya Akun?</p>
    <i><p>Klik <a href="daftar.php">Disini</a> Untuk Ke Halaman Pendaftaran!</p></i>

    </div>

    </form>

</body>
</html>