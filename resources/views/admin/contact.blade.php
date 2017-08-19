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
@include('admin.layout.aside4')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <footer>
    <div class="container">
                                <center><h1><a href="#">Get in touch with us</a></h1></center>
        <div class="row">

            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h1>Address</h1>
                    <address>
                    <strong>Barangay Payatas</strong><br>
                    District II, Quezon City, Metro Manila </address>
                    <p>
                        E-mail: brgypayatas@gmail.com <br>
                    </p>
                </div>
            </div>
            <h1>Barangay Emergency Hotlines</h1>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <strong>Barangay Payatas Hall</strong><br>
                    <ul class="link-list">
                        <li>Tel. No. 4289420/4308584/4312544</li>
                        <li>Text Hotline 0908 681 2980</li>
                    </ul>
                </div>

                    <br>
                    <strong>Station 6 QCPD</strong><br>
                    <ul class="link-list">
                        <li>9316470/ 9316479</li>
                        <li>9510466/ 431-0422</li>
                    </ul>
            </div>

            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <strong>QC BFP</strong><br>
                    <ul class="link-list">
                        <li>9381729</li>
                    </ul>
                    <br>
                    <strong>Emergency</strong><br>
                    <ul class="link-list">
                        <li>117/ 136/ 143</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    
                    <strong>Fire Department</strong><br>
                    <ul class="link-list">
                        <li>117</li>
                    </ul>
                    <strong>Barangay Payatas (EFR)</strong><br>
                    <ul class="link-list">
                        <li>428 9420</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@include('admin.layout.scripts');
<script>
jQuery(document).ready(function( $ ) {
    
    //Google Map
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);
    
});
</script>

    
</body>
</html>