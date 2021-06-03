<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 all">
                    <h1><span>dipole</span>DIAMOND</h1>
                    <h3>Simple Calculator</h3>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <input type="text" id="result" class="screen">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('9')" value="9">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('8')" value="8">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="number" onclick="displayNum('7')" value="7">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="operator" onclick="displayNum('/')" value="/">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('6')" value="6">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('5')" value="5">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="number" onclick="displayNum('4')" value="4">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="operator" onclick="displayNum('*')" value="X">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('3')" value="3">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('2')" value="2">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="number" onclick="displayNum('1')" value="1">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="operator" onclick="displayNum('-')" value="&minus;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button" class="number" onclick="displayNum('.')" value="&sdot;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="number" onclick="displayNum('0')" value="0">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <input type="button"  class="operator" onclick="displayNum('+')" value="+">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="clear" onclick="clearFun()" value="C">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="equal" onclick="solve()" value="=">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="app.js" async defer></script>
    </body>
</html>