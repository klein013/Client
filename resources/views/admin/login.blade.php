<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Barangay Payatas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
</head>
<body>
<div id="wrapper">
@include('admin.layout.head')
@include('admin.layout.aside3')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Incident</a><i class="icon-angle-right"></i></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form id="login" class="register-form">
                    
                    <center><h1>SIGN IN</h1></center>
                    <hr class="colorgraph">

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" class="form-control input-lg" id="password" placeholder="Password" tabindex="2">
                        </div>
                    </div>

        
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input type="submit"  id="Login" value="Sign in" class="btn btn-primary btn-block btn-lg" tabindex="3"></div>
                    <div class="col-xs-12 col-md-6">Don't have an account? <a href="{{URL('register')}}">Register</a></div>
                    </form>
                </div>
            </div>

        </div>
</section>

    <footer>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; Barangay Payatas - All Right Reserved</p>
                            <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://www.facebook.com/barangay.payatas.7?lst=100000818143261%3A100007807719818%3A1499692930">Payatas, Quezon City, Philippines</a>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@include('admin.layout.scripts');
<script>
        $(document).ready(function(){
             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#login').validate({
                rules: {
                    username: {
                        required: true
                    },
                    password:{
                        required: true
                    }
                },
                submitHandler: function(form){
                    $.ajax({
                        url: '/loggingin',
                        method: 'POST',
                        data:{
                            username: $('#username').val(),
                            password: $('#password').val(),
                            _token :  CSRF_TOKEN
                        },
                        success: function(response){
                            if(response=="success"){
                                window.location.href = "/incident";
                            }
                            else{
                                alert(response);
                            }
                        }
                    });
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });
        });
    </script>
    
</body>
</html>