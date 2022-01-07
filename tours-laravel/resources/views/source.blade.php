<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/sources/assets/img/favicon.png" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/sources/assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/sources/assets/css/styles.css">
    <link rel="stylesheet" href="/sources/assets/css/details-styles.css">

    <title>Responsive Website Travel</title>
</head>
<body>
    @include ('header')

    @yield('content')					

    @include ('footer')

    <!-- include js files -->
	@include ('script')
</body>