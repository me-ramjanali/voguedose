<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Voguedose Styler Panel</title>
    <!-- Icon -->
    <link rel="icon" href="{{ URL::asset('images/favicon.png') }}">
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bootstrap-multiselect-master/dist/css/bootstrap-multiselect.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/animate.css-master/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/media-query.css') }}">

    <!-- Page Level css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/DataTables-1.10.12/media/css/dataTables.bootstrap.css') }}">
    <!-- Bootstrap-table CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap-table-develop/src/bootstrap-table.css') }}">
    <!-- Table CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tables.css') }}">

    <!-- Summernote-master -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/summernote-master/dist/summernote.css') }}">


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/csk.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ URL::asset('assets/jquery-1.12.4/jquery-1.12.4.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script>
        var site_url = '{{ URL::to("/") }}';
    </script>
</head>
<body>