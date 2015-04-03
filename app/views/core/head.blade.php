<title>@yield('title', 'RyanStuhl.com')</title>

<!-- Begin Meta Tags -->
@include('core.tags')
@yield('page-tags', '')
<!-- End Meta Tags -->

<!-- Begin HEAD scripts -->
<script src="/js/jquery-1.8.3.js"></script>

<script src="/js/vendor/modernizr.custom.js"></script>
<!-- End HEAD scripts -->

<!-- Begin styles -->
@include ('core.styles')
@yield('page-styles', '')
<!-- End styles -->