

<!-- Begin footer content -->
@yield('page-footer', '')
<div class="col-md-12 columns text-center">
	<span class="copyright">&copy; {{ date('Y') }} RyanStuhl.com</span>
</div>
<!-- Begin footer scripts -->
@include('core.scripts')
<!-- End footer scripts -->

<!-- Begin page specific scripts -->
@yield('page-scripts', '')
<!-- End page specific scripts -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60797014-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
function getWindowHeight() {
	var winHeight = $(window).height();
	$("#content").css('min-height', winHeight);
	$("#main-container").css('min-height', winHeight * 0.99);
}

$(window).resize(function() {
	getWindowHeight();
});
$(document).ready(function() {
	getWindowHeight();
});


var d = new Date();
var h = d.getHours();
var m = d.getMinutes();
var s = d.getSeconds();
$(document).ready(function() {
	$("#main-container").css('min-height', $(window).height());
	if(h >= 18 || h <= 23) {
		$("#aboutMe").addClass('evening');
		$("#aboutMe").removeClass('night');
		$("#aboutMe").removeClass('afternoon');
		$("#aboutMe").removeClass('morning');
		$(".navbar").addClass('nav-evening');
		$(".navbar").removeClass('nav-morning');
		$(".navbar").removeClass('nav-afternoon');
		$(".navbar").removeClass('nav-night');
		$(".experience").addClass('exp-evening');
		$(".experience").removeClass('exp-night');
		$(".experience").removeClass('exp-afternoon');
		$(".experience").removeClass('exp-morning');
	} 

	if(h >= 0 && h <= 5) {
		$("#aboutMe").addClass('night');
		$("#aboutMe").removeClass('night');
		$("#aboutMe").removeClass('afternoon');
		$("#aboutMe").removeClass('evening');
		$(".navbar").addClass('nav-night');
		$(".navbar").removeClass('nav-evening');
		$(".navbar").removeClass('nav-morning');
		$(".navbar").removeClass('nav-afternoon');
		$(".experience").addClass('exp-night');
		$(".experience").removeClass('exp-evening');
		$(".experience").removeClass('exp-afternoon');
		$(".experience").removeClass('exp-morning');
	}

	if(h >= 5 && h <= 12) {
		$("#aboutMe").addClass('morning');
		$("#aboutMe").removeClass('night');
		$("#aboutMe").removeClass('afternoon');
		$("#aboutMe").removeClass('evening');
		$(".navbar").addClass('nav-morning');
		$(".navbar").removeClass('nav-evening');
		$(".navbar").removeClass('nav-night');
		$(".navbar").removeClass('nav-afternoon');
		$(".experience").addClass('exp-morning');
		$(".experience").removeClass('exp-night');
		$(".experience").removeClass('exp-afternoon');
		$(".experience").removeClass('exp-evening');
	}

	if(h >= 12 && h <= 18) {
		$("#aboutMe").addClass('afternoon');
		$("#aboutMe").removeClass('night');
		$("#aboutMe").removeClass('morning');
		$("#aboutMe").removeClass('evening');
		$(".navbar").addClass('nav-afternoon');
		$(".navbar").removeClass('nav-evening');
		$(".navbar").removeClass('nav-night');
		$(".navbar").removeClass('nav-morning');
		$(".experience").addClass('exp-afternoon');
		$(".experience").removeClass('exp-night');
		$(".experience").removeClass('exp-morning');
		$(".experience").removeClass('exp-evening');
	}
});
</script>
<!-- End footer content -->

