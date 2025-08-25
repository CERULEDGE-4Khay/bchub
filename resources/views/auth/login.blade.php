<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container" id="container">
        <!-- LOGIN FORM -->
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>

                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" placeholder="Email" required>
                </div>
                @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" placeholder="Password" required>
                </div>

                <a href="forgot-password">Lupa Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- REGISTER FORM -->
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <h1>Register</h1>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input type="email" id="reg-email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label for="reg-password-confirm">Konfirmasi Password</label>
                    <input type="password" id="reg-password-confirm" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>

                <div class="form-group">
                    <label for="file">Upload KTP
                        <i style="color: red">*</i>
                    </label>
                    <input type="file" id="file" name="file" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>

                <div class="form-group">
                    <label for="nomor_wa">Nomor WhatsApp</label>
                    <input type="number" id="nomor_wa" name="nomor_wa" required>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
        
        <!-- OVERLAY -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Sudah punya akun? Silakan login di sini</p>
                    <button class="ghost" id="signIn" type="button">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Belum punya akun? Yuk daftar dulu</p>
                    <button class="ghost" id="signUp" type="button">Register</button>
                </div>
            </div>
        </div>
    </div>

  <script src="js/script.js"></script>
</body>
</html>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
