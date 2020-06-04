<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>

    <link href="{{asset("")}}lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset("")}}lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("")}}css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Login Admin <span
                    class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60">Login Admin..</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" value="{{ old('email') }}" name="email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter your password" name="password" required autocomplete="current-password">
                    <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </form>

        </div>
    </div>

    <script src="{{asset("")}}lib/jquery/jquery.js"></script>
    <script src="{{asset("")}}lib/popper.js/popper.js"></script>
    <script src="{{asset("")}}lib/bootstrap/bootstrap.js"></script>

</body>

</html>
