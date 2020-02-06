<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        `
        <!-- Styles -->
        <style>
            .btn-danger {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
                width: 70px;
            }
            .col-md-6{
                background-color:lightgray;
                padding:20px;
            }
            .btn btn-primary{

            }
        </style>
    </head>
    <body>
 
        <center>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <select class="browser-default custom-select">
                        Select name:
                        @foreach($names as $name)
                            <option >{{$name->name}}</option>
                        @endforeach          
                        </select>
                        <br>
                        <a href = "#" class="btn btn-primary" id="clockin">CLOCK IN</a><br>

                        <input type="text" class="form-control" value="" id ="inputclockin">
                        <br>
                        Break:
                        <table>
                            <tr >
                                <td>
                                <button type="button" class="btn btn-success" id="start">START</button>
                                </td>
                                <td>
                                <input type="text" class="form-control" id="startinput">                         
                            </td>
                            </tr>
                            <tr >
                                <td>
                                    <button type="button"  class="btn btn-danger" id="endinput">END</button>
                                </td>
                                <td>
                                    <input type="password" class="form-control" id="end">
                                </td> 
                            </tr>

                        </table>
                        <br>
                       <br>
                        <button type="button" class="btn btn-primary">CLOCK OUT</button><br><br>
                        <input type="text" class="form-control" value="" id ="inputclockout">
                        <table>
                            <tr >
                                <td>
                                    Total time work:
                                </td>
                                <td>
                                <input type="text" class="form-control" id="Total">                         
                            </td>
                            </tr>
                            <tr >
                                <td>
                                    Hours left before timeout:
                                </td>
                                <td>
                                    <input type="password" class="form-control" id="Hoursleft">
                                </td> 
                            </tr>
                            <tr >
                                <td>
                                    Total breaks Used:
                                </td>
                                <td>
                                    <input type="password" class="form-control" id="Totalbreaks">
                                </td> 
                            </tr>

                        </table>
                        
                    </div>
                </div>
            </div>    
        </center>
    </body>
    <script>
        $("#end").attr("disabled", true);
        $("#clockin").click(function(){ 
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() 
            $("#clockin").attr("disabled", true);
            $("#inputclockin").val(time);
        })
        $("#clockout").click(function(){ 
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() 
            $("#clockin").attr("disabled", false);
            $("#inputclockout").val(time);
        })
        $("#start").click(function(){ 
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() 
            $("#start").attr("disabled", true);
            $("#startinput").val(time);
        })
        $("#end").click(function(){ 
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() 
            $("#end").attr("disabled", true);
            $("#start").attr("disabled", false);
            $("#endinput").val(time);
        })


    </script>
</html>
