<!DOCTYPE html>
<html lang="en">

<head>
   <!-- meta -->
   @include('admin.includes.meta')
    <title>  @yield('title')|TC_CSE-infoHub  </title>
    <!-- css -->
@include('admin.includes.style')
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!--  HEADER-->
        @include('admin.includes.header')


    <!--  SIDEBAR-->
        @include('admin.includes.menu')
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('body')

            <!-- END PAGE CONTENT-->
           <!--footer-->
            @include('admin.includes.footer')
        </div>
    </div>


    <!-- js -->
    @include('admin.includes.script')
</body>

</html>
