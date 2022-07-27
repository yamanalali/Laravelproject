<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield("title")</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/admin/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/admin/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/admin/vendors/styles/style.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
        @yield("head")
    </script>
</head>

<body>
@include("admin.header")

@yield('content')

@include("admin.Footer")
@yield('foot')


</body>
