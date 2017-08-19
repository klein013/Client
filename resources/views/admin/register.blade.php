<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Barangay Payatas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />

@include('admin.layout.head')
</head>
<body>
<div id="wrapper">
@include('admin.layout.aside3')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li><a href="#">Incident</a><i class="icon-angle-right"></i></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </div>
</section>
  
<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        
            <center><h1>SIGN UP</h1></center>
            <hr class="colorgraph">
            <div class="row">
                <ul class="nav nav-tabs">
                            <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> USING RESIDENT ID </a></li>
                            <li><a href="#two" data-toggle="tab"> USING RESIDENT DETAILS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="one">
                                    <center><label><h4>Register using Resident ID</h4></label></center>
                                    <br>
                                    <form id="regid">
                                    <label>Resident ID</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="residentid" id="residentid" class="form-control input-lg"  tabindex="1">
                                        </div>
                                    </div>

                                    <label>Username</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="usernameid" id="usernameid" class="form-control input-lg" tabindex="2">
                                        </div>
                                    </div>

                                    <label>Password</label>
                                    <div class="form-group">
                                        <div class="form-line">                                    
                                            <input type="password" name="passwordid" id="passwordid" class="form-control input-lg" tabindex="3">
                                        </div>
                                    </div>

                                    <label>Confirm Password</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="passwordid2" id="passwordid2" class="form-control input-lg" tabindex="4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <center><span><label id="error" style="color: red;"></label></span></center>
                                    </div>


                                    <div class="row">
                                            <div class="col-sm-7"></div>
                                            <div class="col-sm-5 pull-right">
                                            <button type="submit" class="btn btn-primary" >Register</button>
                                            <button class="back btn btn-primary pull-right" type="button">Back</button>
                                            </div>
                                    </div>
                                    </form>
                            </div>
                            

                            <div class="tab-pane" id="two">
                                    <form id="regdetails">
                                    <center><label><h4>Register using Resident Detail</h4></label></center>
                                    <br>
                                    <label>Resident Name</label>

                                    <div class="row">
                                    
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="First Name" tabindex="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="lname" id="lname" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <label>Birthdate</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="bdate" id="bdate" class="form-control input-lg" tabindex="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Contact No.</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="contact" id="contact" class="form-control input-lg" tabindex="4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <label>Username</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" id="username" class="form-control input-lg" tabindex="5">
                                        </div>
                                    </div>

                                    <label>Password</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control input-lg" tabindex="6">
                                        </div>
                                    </div>

                                    <label>Confirm Password</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password2" id="password2" class="form-control input-lg" tabindex="7">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <center><span><label id="error1" style="color: red;"></label></span></center>
                                    </div>

                                    <div class="row">
                                            <div class="col-sm-5 col-sm-offset-7 pull-right">
                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <button class="back btn btn-primary pull-right" type="button">Back</button>
                                            </div>
                                    </div>
                                    </form>
                            </div>



                
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

        $.validator.addMethod("uservalid", function(value, element) {
                return this.optional(element) || value.trim() == value.match(/^[a-zA-Z0-9._]*$/);
            },"Letters, numbers, period and underscore only");

        $.validator.addMethod("alpha", function(value, element) {
                return this.optional(element) || value.trim() == value.match(/^[a-zA-Z .,]*$/);
            },"Letters, spaces, period and comma only");

        $.validator.addMethod("cellno", function(value, element){
                return this.optional(element) || value.trim() == value.match(/\+639.[0-9]{8}/);
            }, "Must start +639 and followed by 9 digits");

        $.validator.addMethod("dateISOF", function (value, element)
            {
                if (this.optional(element))
                {
                    return true;
                }
                if (!(/^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value)))
                {
                    return false;
                }
                var split = value.replace(/\//g, "-").split("-");
                var year = parseInt(split[0]);
                var month = parseInt(split[1]) - 1;
                var date = parseInt(split[2]);
                var dateObj = new Date(year, month, date, 0, 0, 0, 0);
                return dateObj.getFullYear() == year && dateObj.getMonth() == month && dateObj.getDate() == date;
            }, "Please enter a valid date.");

        $('#regdetails').validate({
            rules:{
                fname: {
                    required: true,
                    alpha: true,
                    maxlength: 50,
                },
                lname:{
                    required: true,
                    alpha: true,
                    maxlength: 50,
                },
                contact:{
                    required: true,
                    maxlength: 15,
                    cellno: true,
                },
                bdate: {
                    required: true,
                },
                username: {
                    required: true,
                    uservalid: true,
                    minlength: 6,
                    maxlength: 30,
                },
                password:{
                    required: true,
                    minlength: 6,
                    maxlength: 30,
                },
                password2: {
                    required: true,
                    equalTo: password,
                    minlength: 6,
                    maxlength: 30,
                }
            },
            submitHandler:  function(form){
                $.ajax({
                    url : '/register_details',
                    method: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        fname: $('#fname').val(),
                        lname: $('#lname').val(),
                        bdate: $('#bdate').val(),
                        contact: $('#contact').val(),
                        username: $('#username').val(),
                        password: $('#password').val()
                    },
                    success: function(response){
                        if(response=="success"){
                            $('#error1').text("Registration Successful");
                            $('#error1').css('color', 'blue');
                        }
                        else{
                            $('#error1').text(response);
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

        $('#regid').validate({
            rules:{
                residentid: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                usernameid: {
                    required: true,
                    uservalid: true,
                    minlength: 6,
                    maxlength: 30,
                },
                passwordid:{
                    required: true,
                    minlength: 6,
                    maxlength: 30,
                },
                passwordid2: {
                    required: true,
                    equalTo: passwordid,
                    minlength: 6,
                    maxlength: 30,
                }
            },
            submitHandler: function(form){
                $.ajax({
                    url : '/register_id',
                    method: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        resid: $('#residentid').val(),
                        username: $('#usernameid').val(),
                        password: $('#passwordid').val()
                    },
                    success: function(response){
                        if(response=="success"){
                            $('#error').text("Registration Successful");
                            $('#error').css('color', 'blue');
                        }
                        else{
                            $('#error').text(response);
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
        })

        $('.back').on('click', function(){
            window.location.href = '/login';
        })
    });
</script>
    
</body>
</html>