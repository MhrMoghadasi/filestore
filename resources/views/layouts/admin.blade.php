<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FileStore Admin Panel</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/admin-custom.css" rel="stylesheet">
</head>
<body>
@include('Admin.Partials.nav')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ isset($panel_title)?$panel_title:''}}</div>
                <div class="panel-body">
                    @yield('adContent')
                </div>
            </div>

        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
