<html>

<head>
    <title>Login</title>
    <style>
        body {
            background-image: url(gambar/bg_login.png);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
        }

        .login {
            width: 500px;
            margin: 16px auto;
            font-size: 16px;
            margin-top: 10%;

        }

        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .login-header {
            background-color: #ffa500;
            padding: 20px;
            font-size: 1.4em;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            border-radius: 25px 25px 0 0;
            color: #fff;
            font-weight: bolder;
        }

        .login-container {
            background: #ebebeb;
            padding: 12px;
            border-radius: 0 0 25px 25px;
        }

        /* Every row inside .login-container is defined with p tags */
        .login p {
            padding: 12px;
        }

        .login input {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            padding: 16px;
            outline: 0;
            font-family: inherit;
            font-size: 0.95em;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: #fff;
            border-color: #bbb;
            color: #555;
        }

        /* Text fields' focus effect */
        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            border-color: #888;
        }

        .login input[type="submit"] {
            background: #ffa500;
            border-color: transparent;
            color: #fff;
            cursor: pointer;
            font-weight: bolder;
        }

        .login input[type="submit"]:hover {
            background: #17c;
        }

        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
            border-color: #05a;
        }
    </style>
</head>


<body>
    <div class="login">
        <h2 class="login-header">Form Login</h2>
        <!-- Kirim data ke page Login.php menggunakan method post -->
        <form class="login-container" method="POST" action="login.php">
            <p>
                <input type="text" placeholder="Username" name="username">
            </p>
            <p>
                <input type="password" placeholder="Password" name="password">
            </p>
            <p>
                <input type="submit" value="Masuk">
                <input type="hidden" name="id">
            </p>
        </form>
    </div>
</body>

</html>