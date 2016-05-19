<!DOCTYPE html>
<html>
<head>
	<title> Welcome to Patient Files</title>
	
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


<!---------BOOTSTRAP STYLE SHEET------------------ -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
     <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
  	 <link rel="stylesheet" href="/css/bootstrap.min.css">


	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/creative.css">

  
</head>
<body>



@yield('content')





    <script>
            $(document).ready(function() 
            {
                $(".showHide").click(function() 
                {
                    if ($(".password").attr("type") == "password") {
                            $(".password").attr("type", "text");
                            $("#showHideLabel").attr("style", "display:none");
                            $("#showHideLabel1").attr("style", "display:absolute");

                    } else {
                            $(".password").attr("type", "password");
                            $("#showHideLabel1").attr("style", "display:none");
                            $("#showHideLabel").attr("style", "display:absolute");
                    }
                });
            });
    </script>

 	<script src="/js/npm.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>