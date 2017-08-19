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
                    <li class="active">Incident</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Report Incident </h2>
                <h4>Get in touch with us by reporting an incident around Barangay Payatas</h4>
                <hr class="colorgraph">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form id="incident">
                    <div class="form-group">
                        <label>Incident Type</label>
                        <div class="form-line">
                            <select class="form-control show tick" id="cat">
                                <option value="" disabled selected>Choose Type</option>
                                @foreach($incidentcats as $incidentcat)
                                    <option value="{{$incidentcat->incidentcat_id}}">{{$incidentcat->incidentcat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label for="res_address">Incident Place</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street/ Road</label>
                                        <div class="form-line"> 
                                            <select class="form-control show tick" name="street" id="street">
                                                <option value="" disabled selected>Choose Street</option>
                                                @foreach($streets as $street)
                                                    <option value ="{{$street->street_id}}">{{$street->street_name}}</option>
                                                @endforeach
                                            </select>    
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <div class="form-line">
                                            <select class="form-control show tick" name="area" id="area">
                                                <option value="" disabled selected>Choose Area</option>
                                                @foreach($areas as $street)
                                                    <option value ="{{$street->area_id}}">{{$street->area_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>




                    <div class="form-group">
                        <label>Incident Date and Time</label>
                        <input type="datetime" class="form-control" name="dt" id="dt" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label>Incident Description</label>
                        <div class="form-line">
                            <textarea class="form-control" name="desc" id="desc" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"></textarea>
                        </div>
                    </div>
                    </div>

                    
                    
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><button type="submit" class="btn btn-primary btn-block btn-md">Submit</button></div>
                    
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

        var streets = [
            @foreach($streets as $street)
                [{{$street->street_id}}, {{$street->area_id}}],
            @endforeach
        ];

        $('#dt').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            locale: {
                format: 'YYYY-MM-DD h:mm:ss'
            },
            minDate: moment().subtract(1,'months'),
            maxDate: moment()
        });

        $('#street').change(function(){
            var street = $('#street').val();
            if($('#area').val()==""||$('#area').val()==null){
            $.each(streets, function(index, value){
                if(street==value[0]){
                    $('#area').val(streets[index][1]).change();
                    console.log(streets[index][1]);
                }
            });
            }
        });

        $('#area').change(function(){

            var area = $('#area').val();
            if(area==""){
                var newOptions = [
                    @foreach($streets as $street)
                        [{{$street->street_id}}, "{{$street->street_name}}"],
                    @endforeach
                ];
                var $el= $('#street');
                $el.empty();
                $el.html('');
                $.each(newOptions, function(index, value){
                    $el.append($("<option></option>").attr("value", value[0]).text(value[1]));
                });
            }
            else{
                console.log("dasdasd");
                var newOptions = [
                    @foreach($streets as $street)
                        [{{$street->street_id}}, "{{$street->street_name}}", {{$street->area_id}}],
                    @endforeach
                ];
                var $el= $('#street');
                $el.empty();
                $el.html('');
                $.each(newOptions, function(index, value){
                    if(value[2]==area){
                        $el.append($("<option></option>").attr("value", value[0]).text(value[1]));
                    }
                });
            }
            $('#street').val("");
        });

        $.validator.addMethod("alpha", function(value, element) {
                return this.optional(element) || value.trim() == value.match(/^[a-zA-Z .,]*$/);
            },"Letters, spaces, period and comma only");

            $.validator.addMethod("letterwithbasicpunc", function(value, element) {
                return this.optional(element) || value.trim() == value.match(/^[a-zA-Z0-9 !()?.,]*$/);
            },"Letters and numbers with basic punctuations only"); 

        $('#incident').validate({
            rules: {
                street:{
                    required: true
                },  
                area:{
                    required: true
                },
                datetime:{
                    required: true
                },
                cat:{
                    required: true
                },   
                desc:{
                    required: true,
                    maxlength: 300,
                    letterwithbasicpunc: true
                }
            },
            submitHandler: function(form){
                $.ajax({
                    url: 'storeIncident',
                    method : 'POST',
                    data : {
                        _token : CSRF_TOKEN,
                        street_id: $('#street').val(),
                        street_name: $('#street option:selected').text(),
                        datetime: $('#dt').val(),
                        cat: $('#cat').val(),
                        desc: $('#desc').val()
                    },
                    success : function(response){
                       if(response=="success"){
                            $('#sendmessage').toggle();
                       }
                       else{
                            $('#errormessage').toggle();
                       }
                    }
                })
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