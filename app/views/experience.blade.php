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
<div id="main-container" class="experience">
<!--  data-speed="4" data-type="background" -->
	<section class="fullheight" id="process">
		<div class="container">
			<h1>The Process</h1>
	  		<p>The timeline from when a project is first conceived to the delivery of the finished product can be likened to other processes in different industries. Click the learn more button to see the similarities.</p>
	  		<a href="#open_process_overlay" id="learn_more_process" class="btn btn-large readmore">Read More</a>
	  		<a id="next_slide" class="btn btn-large btn-default move_to_ux">Next Slide</a>
	  	</div>
	</section>
	<section id="between_1" data-speed="4" data-type="background">
		
	</section>
	<section class="fullheight" id="user_experience">
		<div class="container">
			<h1>Planning and Blueprints</h1>
			<p>Much like when building a brick and mortar project, a large amount of planning is involved. Rather than using blueprints, we use wireframes. This sets a clear road map for what elements will go where and will help place importance on key items.</p>
			<a href="#open_planning_overlay" id="learn_more_planning" class="btn btn-large readmore">Read More</a>
		  	<a id="next_slide" class="btn btn-large btn-default move_to_dev">Next Slide</a>
	  	</div>
	</section>
	<section id="between_2" data-speed="4" data-type="background">
		
	</section>
	<section class="fullheight" id="development">
		<div class="container">
			<h1>Nuts and Bolts</h1>
			<p>This is the first time the webpage resembles the finished product. By this point revisions should be finalized and all other obstacles should be taken care of. Some minor edits are always going to happen in this phase but the main layout is final. </p>
			<a href="#open_nutsbolts_overlay" id="learn_more_bolts" class="btn btn-large readmore">Read More</a>
		  	<a id="next_slide" class="btn btn-large btn-default move_to_responsive">Next Slide</a>
	  	</div>
	</section>
	<section id="between_3" data-speed="4" data-type="background">
		
	</section>
	<section class="fullheight" id="responsive">
		<div class="container">
			<h1>Consistency is Key</h1>
			<p>Having a great website is, well, great. But having a great website which is user friendly in all user devices is priceless. Giving a consumer the ability to interact with a brand despite the interation promotes positive experiences.</p>
			<a href="#open_consistency_overlay" id="learn_more_consistency" class="btn btn-large readmore">Read More</a>
		  	<a id="next_slide" class="btn btn-large btn-default move_to_delivery">Next Slide</a>
	  	</div>
	</section>
	<section id="between_4" data-speed="4" data-type="background">
		
	</section>
	<section class="fullheight" id="delivery">
		<div class="container">
			<h1>You have reached your Final Destination</h1>
			<p>The project is finished! The development product is now a key part of the branding process. For brands it represents a sense of consistency. For consumers it produces a sense of familiarity. Having a positive web presence is the first step towards brand success.</p>
			<button id="back_to_top" class="btn btn-large">Back to Top</button>
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
</div>
	
@stop

@section('page-overlays')
<style>
	
</style>
<div id="open_process_overlay" class="experience_overlay" style="display:none;">
	<a href="" class="overlay_close">Close Overlay</a>
	<div class="inner"></div>
	<div class="text_block">
		<p>You've a goal in mind and as my client I take it upon myself to make it my goal as well. I'll take you from a concept you have in which your brand is transformed into a reliable online presence. In this journey I'll serve as your guide from inception to fruition. </p>
		<p>Everyone knows that having a strong online presence is important for connecting with your customers, members or demographic. While websites are but a small portion of your digital footprint, a website serves as the hub of all information about your brand and provides an all access pass to your product through desktop, tablet and mobile devices.</p>
		<p>The first step is to lay plans for the journey ahead. By drafting a layout to give shape to a custom design, several rounds of low fidelity prototypes can take a vision to a reality without spending precious time rebuilding a design. This step is called wireframing and it will give your website shape ahead of making a design. Wireframes are to websites what blueprints are to building construction. Before putting up a building an architect will send blueprints for multiple review points resulting in a beautiful finished product. </p>
		<p>Now of course you wouldn't expect a plumber to also be a painter, so why expect a developer to create a beautiful design? Once a set of wireframes has been approved, they will be sent to a competent designer who I trust to give your website the beauty you need to make your product the most attractive in the space you occupy. Just as with the wireframing stage, a set of design composites will be sent to you for feedback and approval. After a design has been settled upon, I will go to work making the design come to life. But the way a site looks is not the final product. </p>
		<p>To keep your brand loyalty and retaining your customers, the user needs a positive experience. By making interactions seem natural and not obvious, the user is engaged to a level which reminds them why you are their favorite. When the user spends too much time figuring out how to connect with you, they spend less time supporting you and making your brand a success.</p>
	</div>
</div>
<div id="open_planning_overlay" class="experience_overlay" style="display:none;">
	<a href="" class="overlay_close">Close Overlay</a>
	<div class="inner"></div>
	<div class="text_block">
	<p>If you haven't had any exposure to wireframing in the past it might seem like a foreign concept when planning a website. It is important to keep in mind that wireframing is an excellent way to properly plan a website layout in ways that flowcharts cannot illustrate and in ways which design composites may miss the most important part of your website -- the user.</p>
	<p>Wireframes can provide a quick iteration prototyping process in which low fidelity prototypes of your website are provided over several rounds of revision to allow one to see the forest for the trees. Placing ambiguous boxes, lines and icons on a page gives the client a clear understanding of where data will be placed and what data should be placed together.</p>
	<p>I like to compare wireframes to blueprints for a house since both are preliminary planning points in which the architect is able to visualize and communicate the structure of the project without using resources such as time and materials. As wise carpenters always say, "Measure twice, cut once" or plan the site properly and implement wisely.</p>
	</div>
</div>
<div id="open_nutsbolts_overlay" class="experience_overlay" style="display:none;">
	<a href="" class="overlay_close">Close Overlay</a>
	<div class="inner"></div>
	<div class="text_block">
	<p>After the site has been planned out and a layout has been decided the site can begin to take shape and start functioning as intended. Color palates are chosen and typefaces assigned to page elements. This is also the stage when a designer presents composites of the site for a "look and feel" to represent your brand. It is also the stage when interactions are put in place to enhance the user experience of the website. </p>
	<p>When choosing a color palate, it is not always the correct choice to take "corporate colors" or the colors of your logo and paint the site as such. Colors can set moods and moods can help users make a choice between Brand X or Brand Y. For instance if a page has a lot of content which loads in multiple libraries of code, it may bog down your performance for some users and make them have a negative association with your brand.</p>
	<p>Choosing a font can be similarly important to how a user perceives your brand. Using a clean crisp display font for your headers clearly communicates the product and helps the user understand your modern culture, where as using Comic Sans liberally on your page makes the user think you are out of touch. Many times a typeface will already be in use for your brand, but only for display purposes. Using an ALL CAPS FONT for regular body copy can make the user think you are yelling at them.</p>
	<p>Finally I had briefly touched on what not to do with external libraries. That is not to say, never use them, but rather use them with caution. Making cool whiz-bang interactions is a great way to captivate an audience, but the key is, know your user. If most of your users are on mobile devices, a hover state on buttons will be missed or a slide show may not be compatible with swipe navigation. Understanding with whom you are trying to communicate will help you better understand what is necessary for your website.</p>
	<p>Lastly you will need to consider imagery and other media types. Imagery isn't just pictures of your product, it can apply to iconography as well. When used correctly iconography can help the user better navigate your page. Just be cautious when using icons and remember that what looks like the correct icon to you might not communicate well with your audience. But you also need to take into consideration videos and other viral media outlets such as Instagram, Vine and SoundCloud. Again, know thy user; if your users are on mobile devices, using auto-play videos to communicate your message might not get through to your users if they are conscientious of their data usage.</p>
	</div>
</div>
<div id="open_consistency_overlay" class="experience_overlay" style="display:none;">
	<a href="" class="overlay_close">Close Overlay</a>
	<div class="inner"></div>
	<div class="text_block">
	<p>Have you ever asked yourself why people enjoy shopping at chain stores or big box stores? I don't know about you, but I like the fact that no matter what city I am in I can always go to a Target or a Costco or a Macy's and find my way around their store because I have been to a similar experience before. When I walk into a Target I always know where to find men's hygiene, men's clothing, electronics and grocery items. If each and every time I went to a new location, I had to re-learn everything about their store I don't think I would be a very loyal customer any longer. Same holds true for your website.</p>
	<p>When I am on a Desktop I am able to see 100% of the features 100% of the time on my favorite website. When I am on a tablet I either expect the same experience or one slightly customized for my touch screen interface and shrunken layout. When I am on my mobile, I want to get the most important information quickly and I want buttons which I can actually use with my fingers. If I have to pinch-zoom to see your menu or read your product guide, I will most likely give up and end the experience. But if there is a mobile optimized menu with larger fonts and no filler or fluff to get in my way, I am going to get what I need and get out. No clogging up the checkout lines here. </p>
	<p>Giving your user a consistent experience across all of your devices to help garner a positive experience. Happy users are return users. Give them something to talk about and they will tell all of their friends why they love your product.</p>
	</div>
</div>
@stop

@section('page-footer')

@stop

@section('page-scripts')
<script>
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
       $("#contactFormContainer").fadeIn();
   }
});
var windowHeight = $(window).height();
var windowWidth = $(window).width();
$(document).ready(function() {
	$("a.contact").on('click', function(e) {
   		e.preventDefault();
   		$("#contactFormContainer").fadeIn();
   		$('html, body').animate({
	        scrollTop: $("#contactFormContainer").offset().top
	    }, 2000);
   	});
   	$("button#back_to_top").click(function(e) {
   		e.preventDefault();
   		$("html, body").animate({scrollTop: 0}, "slow");
   		return false;
   	});
});

</script>
@stop