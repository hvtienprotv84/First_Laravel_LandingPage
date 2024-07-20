<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tiến - First Laravel - Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>

    <style>
        html{
            /* background-color: black; */
            background-image: url(https://prakashinfotech.com/wp-content/uploads/2022/11/laravel-banner.jpg);
            background-size: cover;
            height: 100%;
        }
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            width: 100%;
            margin: 0 auto;
            top: 0;
            margin-top: 50px;
        }
        .logo p{
            color: transparent;
            font-size: 60px;
            font-weight: bold;
            -webkit-text-stroke: 0.1rem #ffffff;
            margin-left: 20px;
            width: 450px;
        }
        .logo p:hover{
            /* color: #ff2f22; */
            -webkit-text-stroke: 0.1rem #ff2f22;
        }
        .logo img{
            width: 150px;
        }
        a{
            text-decoration: none;
        }
        footer{
            color: white;
            display: flex;
            position: absolute;
            bottom: 0;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            margin-left: 520px;
        }
        footer span{
            margin-left: 5px;
        }
    </style>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div>
            <a href="/">
            <div class="logo">
                <img src="logo_1.png"/>
                <p >Huỳnh Vĩnh Tiến</p>
            </div>
            </a>
        </div>
                    <footer>
                        Trang Laravel Đầu Tiên của <span> Huỳnh Vĩnh Tiến</span>
                    </footer>
    </body>
</html>
