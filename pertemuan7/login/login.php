<?php 
// apakah tombol sumbit sudah ditekan

if ( isset($_POST["submit"])){
    // cek username dan password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ){
        // jika benar
        header("Location: admin.php");
        // jika salah tampilkan pesan kesalahan
    }else{
        $error = true;
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
<?php if (isset ($error)) : ?>
    <p style=color:red>username / password salah !</p>
<?php endif ; ?>
<ul>
    <form action="" method="post">

    <li>
        <label for="username">username :</label>
        <input id="username" type="text" name="username">
    </li>    

    <li>
        <label for="password">password :</label>
        <input id="password" type="password" name="password">
    </li>

    <li>
        <button type="submit" name="submit">Login</button>
    </li>

    </form>
</ul>
</body>
</html>