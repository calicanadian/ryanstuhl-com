@extends('layouts.main')

@section('page-tags')

@section('page-styles')

@stop

@section('page-header')

@stop

@section('page-content')

<div id="loader">
	<div id="progress-bar"></div>
</div>

<section id="aboutMe">
<div id="logo"><img src="/img/logo-grey.png" border="0" alt="Crown Logo"></div>
	<div id="aboutText" itemscope itemtype="http://schema.org/Person">
		<h2 itemprop="name">Ryan Stuhl</h2>
		<div class="hr"></div>
		<p itemprop="description">I am Ryan Stuhl, a California based full stack developer and user experience specialist. I have been working in development for about five years, and have been passionately fighting <em>for</em> the user for about three years. I specialize in taking a pixel perfect PSD and converting it into a responsive web experience. My tools of choice include Laravel 4, JQuery and SASS. I have been working with Foundation and Bootstrap grid systems and incorporate such libraries as modernizr, fancybox, and frozennode's administrator. </p>
		<p>Much of my work is done for clients on eBay and Facebook. To see some examples of these and some custom developments, scroll down or click the Work button in the navigation.</p>
		<p>Let’s build things.</p>
	</div>
	<div id="contactFormContainer">
		<a href="" id="contactFormClose">X</a>
		<div id="details-error">
			@foreach($errors->all('<li>:message</li>') as $message)
			{{ $message }}
			@endforeach
		</div>
		<div id="form-sent" style="display:none;">
			<p>Your message has been sent. Thank you.</p>
		</div>
		{{ Form::open(array('action' => 'ContactController@getContactUsForm', 'id' => 'contactUs')) }}
			<p class="col-md-12">
				{{ Form:: hidden('butter', '', array('id' => 'honey-pot')) }}
				<div class="col-md-6">{{ Form::text('first_name', null, array('placeholder' => 'First Name', 'id' => 'contact-firstname', 'class' => 'col-md-12 form-input')) }}</div>
				<div class="col-md-6">{{ Form::text('last_name', null, array('placeholder' => 'Last Name', 'id' => 'contact-lastname', 'class' => 'col-md-12 form-input')) }}</div>
				<div class="clear"></div>
			</p>
			<p class="col-md-12">
				<div class="col-md-12">{{ Form::email('email', null, array('placeholder' => 'Email Address', 'id' => 'contact-email', 'class' => 'col-md-12 form-input')) }}</div>
			</p>
			<p class="col-md-12">
				<div class="col-md-12">{{ Form::textarea('message', null, array('placeholder' => 'Type your message here', 'id' => 'contact-message', 'class' => 'col-md-12 form-input')) }}</div>
			</p>
			<p class="col-md-12">
				{{ Form::reset('Reset', ['class' => 'btn btn-large', 'id' => 'contact-clear']) }}
				{{ Form::button('Send', ['class' => 'btn btn-large', 'id' => 'contact-send']) }}
			</p>
		{{ Form::close() }}
	</div>
</section>
<section id="between1" data-speed="4" data-type="background"></section>
<section id="work">
	<h2><span>Work</span></h2>
	

	@foreach($ebay_examples as $ebay)
		@if($ebay->active)
		{{
		'
		<div class="col-md-4"><a href="#'.$ebay->trigger.'" class="trigger example-thumb"><img src="/img/ebay/main-images/'.$ebay->image.'" border="0" /></a></div>
		'
		}}
		@endif
	@endforeach
	<div class="clear"></div>
	<h2><span>Experience</span></h2>
</section>
<section id="experience">
	<div class="container">
	    <div class="experience-caption">
	      <h1>The Process</h1>
	      <p>The timeline from when a project is first conceived to the delivery of the finished product can be likened to other processes in different industries. Click the learn more button to see the similarities.</p>
	      <button class="btn btn-large learn_more">Learn More</button>
	    </div>
	  </div>
</section>

<!-- Place home page components here -->

@stop

@section('page-overlays')
@foreach($ebay_examples as $ebay)
@if($ebay->active)
{{
'
<div class="work-overlay" id="'.$ebay->trigger.'" style="display:none;">
	<img src="/img/ebay/screenshots-1/'.$ebay->screen1.'" border="0" alt="" class="screen_1">
	<h2>'.$ebay->title.'</h2>
	<p>'.$ebay->definition.'</p>
	<div class="clear"></div>
</div>
'
}}
@endif
@endforeach
@stop

@section('page-footer')

@stop

@section('page-scripts')
<!-- place scripts specific to the home page here -->


<script>
$(document).ready(function() {
	$("a.contact").on('click', function(e) {
   		e.preventDefault();
   		$("#contactFormContainer").fadeIn();
   		$('html, body').animate({
	        scrollTop: $("#aboutMe").offset().top
	    }, 1000);
   	});
   	$("button.learn_more").on('click', function(e) {
   		e.preventDefault();
   		window.location.href = '/process';
   	});
   	$(".navbar a.aboutMe").on('click', function(e) {
   		e.preventDefault();
   		$('html, body').animate({
	        scrollTop: $("#aboutMe").offset().top
	    }, 2000);
   	});
   	$(".navbar a.work").on('click', function(e) {
   		e.preventDefault();
   		$('html, body').animate({
	        scrollTop: $("#work").offset().top
	    }, 2000);
   	});
   	$(".navbar a.experience").on('click', function(e) {
   		e.preventDefault();
   		$('html, body').animate({
	        scrollTop: $("#experience").offset().top
	    }, 2000);
   	});
   	$(".fancybox-inner").css('max-width', '60%');
});

</script>
@stop