<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logoss.jpg" />
    <title>Cafe Trio & Restro</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* .navbar {
                position: fixed ;
        } */
       /* *{
        width: 100%;
       } */
        .bg-primary {
            background-color: #12372A !important;
        }

        .bg-secondary {
            background-color: #0c5e41 !important;
            /* background-color: #436850 !important; */
        }
        .bg-light{
            background-color: #ADBC9F!important;
        }
        .bg-extra-light{
            background-color: #c6d6b7!important;

        }
        .text-light{
            color: rgb(224, 224, 224) !important;
        }
        .text-dec a{
            text-decoration: none;
            color: rgb(155, 147, 188);
            font-size: 35px;
        }

        .login {
            text-decoration: none !important;
            color: rgb(94, 93, 93) !important;
            font-size: 20px;
        }

    </style>
</head>

<body>
    <header>
        <!-- navbar -->
        <x-navbar />
    </header>
    <main>
        {{ $slot }}
    </main>
    <!-- footer -->

    <footer>
        <x-footer/>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
