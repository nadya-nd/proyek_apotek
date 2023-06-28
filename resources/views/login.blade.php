<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="col-poster">
            <div class="ayat">
                <h1>
                    ApotekAI
                </h1>
            </div>
        </div>
        <div class="col-form">
            <div class="card">
                <h1>Masuk</h1>
                {{-- begin::form --}}
                <div class="form-login">
                    <form action="login" method="post">
                        @csrf
                        <!--begin::Email-->
                        <div class="input-control">
                            <input type="email" placeholder="email@example.com" id="email" name="email" autofocus required>
                        </div>
                        <!--end::Email-->
                        <br>
                        <!--begin::Password-->
                        <div class="input-control">
                            <input type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                        </div>
                        <!--end::Password-->
                        <br>
                        <div class="login-btn">
                            <button type="submit">Masuk</button>
                        </div>
                    </form>
                    <br>
                    <div class="navigasi-login">
                        <small><a href=""></a></small>
                        <small><a href="">Lupa Password</a></small>
                    </div>
                </div>
                {{-- end::form --}}
            </div>
        </div>
    </div>
</body>
</html>