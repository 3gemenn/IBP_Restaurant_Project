
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/register.css" rel="stylesheet">
</head>
<body class="">

<main class="form-signin">
    <form action="{{ route('registerPost') }}" method="POST">
        @csrf
        <div class="container">
            <h1>Register</h1>
            <hr>
            <label for="name"><b>Name</b></label>

            <input type="text" placeholder="Enter Name" name="name" id="name" required>
            <label for="lastName"><b>Last Name</b></label>
            <input type="text" placeholder="Enter LastName" name="lastName" id="lastName" required>
            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" id="phone" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <input type="submit" value="Kaydet">

        </div>
    </form>
</main>



</body>
</html>

