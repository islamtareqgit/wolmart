
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:33:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/images/icons/favicon.png')}}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="preload" href="{{ asset('dashboard/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('dashboard/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">

    <link rel="preload" href="{{ asset('dashboard/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2"
            crossorigin="anonymous">

    <link rel="preload" href="{{ asset('dashboard/assets/fonts/wolmart87d5.woff?png09e')}}" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/style.min.css')}}">
<div class="tab-pane active in" id="sign-up">

    <div class="form-body">
        <form class="" action="#" method="POST">
            @csrf
            <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="inputEmailAddress" placeholder="Email Address">
            </div>

            <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
            </div>
            <div class="col-12">
                <label for="inputChoosePassword" class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                    <input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                </div>
            </div>
            <div class="col-12">
                <label for="inputChoosePassword" class="form-label">Cell</label>
                <div class="input-group" id="show_hide_password">
                    <input type="cell" name="cell" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                </div>
            </div>
            
            
            <div class="col-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    
    </div>
    
    
   
    



<!-- Plugin JS File -->
<script src="{{ asset('dashboard/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('dashboard/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('dashboard/assets/js/main.min.js')}}"></script>