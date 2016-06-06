@extends('layouts.mainLayout')

@include('layouts.headerLayout')

@section('content')

     <header>
        <div class="header-content" >
            <div class="header-content-inner btn-group" role="group" align="left">
                <h1>PEDIX</h1><br><br>
                <p >Transforming the Doctor-Patient experience through cloud-based electronic
medical records accessible anytime, anywhere.</p>
                <div>
                <a id="sign_in" href="#about" class="btn btn-primary btn-xl page-scroll">Get Started</a>
                </div>
            </div>
        </div>
    </header>


    <section class="bg-primary" id="about">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-8 col-lg-offset-2 text-center">
                <br><br><br>
                    <h2 class="section-heading" style="color: black"><span class="glyphicon glyphicon-user"></span>  Login Your Account</h2>
                    <hr class="">
                    
                    <form role="form" method="post" action="/medix">
                        {!! csrf_field() !!}


                        <div class="form-group form-inline" >
                     @if(session('message'))
                            <p style="padding-top: 5px;color: white;background-color: red;font-style: italic;" class="alert alert-{{session ('message.type')}} form-control" >
                                    {{session('message.text')}}
                            </p>

                        @endif
                    </div>   
                        <div class="form-group form-inline" align="center">
                            <input  style="width: 59%" class="form-control" type="text" name="email" placeholder="Email Address / Username">
                        </div>
                        <div id="psw" class="form-group form-inline" align="center">
                            <input placeholder="Password" type="password" name="password" class="password form-control" >
                            <a style="display: absolute" class="showHide btn btn-primary " for="showHide" id="showHideLabel" >Show</a>
                            <a style="display: none" class="showHide btn btn-success" for="showHide" id="showHideLabel1" >Hide</a>
                        </div>
                        <div id="chk" class="form-group form-inline" align="center">
                        </div>
                        <div class="form-group" >
                            <button  align="center" class="btn btn-default btn-xl wow tada">Sign In</button> 
                        </div>

                        

                    </form>

                    
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <h4 style="color: black;float: right">Copyright © 2016 Pedix™ All 
        rights reserved. </h4>
        
    </section>

    
   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>






@endsection