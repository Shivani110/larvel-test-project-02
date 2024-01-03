<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{ asset('/pr/css/style.css?clearAll') }}">
  <link rel="stylesheet" href="{{ asset('/pr/css/responsive.css') }}">
  <title>PR PARTNERS - Login Page</title>
  <link rel="shortcut icon" href="{{ asset('/pr/img/pr-partners-favicon.png') }}">
</head>

<body class="login_bg">
    <header class="header_wrapper">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="header_content justify-content-center">
                <div class="logo_img text-center">
                <img src="{{ asset('/pr/img/Logo.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>
    <section class="login_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login_content">
                        <div class="login_img">
                            <img src="{{ asset('/pr/img/login.png ') }}" class="img-fluid" alt="">
                        </div>
                        <h2>Protected Page</h2>
                        @if ($message = Session::get('success'))
                            <div class="text text-left text-success">
                                <p>{{ $message }}</p>
                            </div>
                        @elseif ($message = Session::get('error'))
                            <div class="text text-left text-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{ url('/signin') }}" method="POST"> 
                            @csrf          
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            <div class="text text-left text-danger"> 
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                            <button class="btn" role="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_content">
                        <p>© 2023 PR Partners International</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('/pr/js/script.js') }}"></script>
   

</body></html>