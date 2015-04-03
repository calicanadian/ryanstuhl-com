function landingPadding() {
	var win_height = $(window).height();
   $("#aboutMe, #work").css('padding-top', win_height * 0.16);
   $("#aboutMe").css('padding-bottom', win_height * 0.16);
   $("#experience").css('height', win_height * 0.6);
   $("#aboutMe #contactFormContainer").css('top', win_height * 0.16);
}

function setPageHeight() {
  var page_height = $(window).height();
  $("section.fullheight").css('min-height', page_height);
}


$(window).resize(function() {
	setPageHeight();
  //This is for the overlays on the Experience Page
  var windowHeight = $(window).height();
  var windowWidth = $(window).width();
  $(".experience_overlay").css('height', windowHeight);
});

$(document).ready(function() {
	// cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function

   // sets the padding of the landing page to accommodate the contact form and logo
   landingPadding();
   // sets the height of a page with the class fullheight
   setPageHeight();
   //This is for the overlays on the Experience Page
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    $(".experience_overlay").css('height', windowHeight);

   	
   	

  // Open the overlays

  $("a#learn_more_process").on('click', function(e) {
    e.preventDefault();
    console.log('clicked learn_more_process')
    $("#open_process_overlay").show();
  });

  $("a#learn_more_planning").on('click', function(e) {
    e.preventDefault();
    console.log('clicked learn_more_planning')
    $("#open_planning_overlay").show();
  });

  $("a#learn_more_bolts").on('click', function(e) {
    e.preventDefault();
    console.log('clicked learn_more_bolts')
    $("#open_nutsbolts_overlay").show();
  });

  $("a#learn_more_consistency").on('click', function(e) {
    e.preventDefault();
    console.log('clicked learn_more_consistency')
    $("#open_consistency_overlay").show();
  });

  // Close the overlays
  $(".overlay_close").on('click', function(e) {
    e.preventDefault();
    $(".experience_overlay").hide();
  });

  // Advance to the next slide
  $(".move_to_ux").on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: $("#user_experience").offset().top
    },'slow');
  });
  $(".move_to_dev").on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: $("#development").offset().top
    },'slow');
  });
  $(".move_to_responsive").on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: $("#responsive").offset().top
    },'slow');
  });
  $(".move_to_delivery").on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: $("#delivery").offset().top
    },'slow');
  });

  jQuery.fn.inputtoggle = function() {
        $(this).each(function(index) {
            var myvalue = $(this).attr('value');
            $(this).focusin(function() {
                if($(this).val() == myvalue)
                    $(this).val('');
            });
            $(this).focusout(function() {
                if($(this).val() === '') 
                    $(this).val(myvalue);
            });
        });
    };

  $("a#contactFormClose").on('click', function(e) {
    e.preventDefault();
    $("#contactFormContainer").fadeOut();
  });
  $('#contactUs input.form-input').inputtoggle();
  $('#contact-clear').click(function () {
      $('#contact-firstname').val('First Name');
      $('#contact-lastname').val('Last Name');
      $('#contact-email').val('Email Address');
      $('#contact-message').val('Type your message here');
  });

  $("#contactUs #contact-send").on('click', function() {
    console.log('Send button clicked');
    var honeypot = $("#honey-pot").val();
    var fname = $('#contact-firstname').val();
    var lname = $('#contact-lastname').val();
    var email = $('#contact-email').val();
    var message = $('#contact-message').val();
    var error = 0;

    if (honeypot !== '' || fname === '' || lname === '' || email === '' || message === '') {
        error = 1;
        $('#details-error').fadeIn(200);
    } else {
        $('#details-error').fadeOut(200);
    }

    if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
        $('#details-error').fadeIn(200);
        error = 1;
    }

    var dataString = 'fname=' + fname + '&lname=' + lname + '&email=' + email + '&text=' + message;

    if (error === 0) {
        $.ajax({
            type: "POST",
            url: "/contact",
            data: dataString,
            success: function (response) {
                $('#details-error').fadeOut(1000);
                $('#form-sent').fadeIn(1000);
            }
        });
        return false;
    }
  });
});