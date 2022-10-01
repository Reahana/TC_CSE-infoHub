<!DOCTYPE html>
<html lang="en">

<head>
   <!-- meta -->
   @include('front.includes.meta')
    <title> @yield('title')|TC_CSE-infoHub </title>
    <!-- css -->
    @include('front.includes.style')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        @include('front.includes.header') <!--  HEADER-->
        @include('front.includes.menu')<!--  SIDEBAR-->
        <div class="content-wrapper">
            @yield('body')

            @include('front.includes.footer')  <!--footer-->
        </div>
    </div>

    @include('front.includes.script')
</body>

</html>