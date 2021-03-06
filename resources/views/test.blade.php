<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Tests</div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:8081/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));//]]>
        </script>
        
        <script type="text/javascript">
            $(function (){
               swal(
                  'Good job!',
                  'You clicked the button!',
                  'success'
                );
            });
        </script>
    </body>
</html>
