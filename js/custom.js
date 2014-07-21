
$(document).ready(function() {

  // Scrolling navigation
  $('ul.nav').onePageNav ({
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    scrollOffset: 50,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
    //I get fired when the animation is starting
    },
    end: function() {
    //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
    // Do something
    }
  });

	// Sticky navigation
	$(".navbar").sticky ({ topSpacing: 0 });

	// Adds style to sticky navigation
	$('.navbar').waypoint(function() {
		$('.navbar').addClass('navBg');
	});

  // Auto hides navigation for mobile screen after list is selected
  if ($(window).width()<=767) {
    // Fixes scroll offset for mobile screens
    $('ul.nav').onePageNav ({
      scrollOffset: 0
    });
    // Hides navigation menu after an list item is seleted
    $('.navbar-collapse').click('li', function() {
      $('.navbar-collapse').collapse('hide');
    });
  }
	
  // Tooltip
  $('.example').tooltip();


  // Enables link to tab
  var hash = document.location.hash;
  var prefix = "tab_";
  if (hash) {
      $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
  }
   
  // Change hash for page-reload
  $('.nav-tabs a').on('shown', function (e) {
      window.location.hash = e.target.hash.replace("#", "#" + prefix);
  });
  
  // Google maps
  // -----------------------------------------
  // Enable the viual refresh
  google.maps.visualRefresh = true;
  var myLatlng = new google.maps.LatLng(37.788149,-122.4071);
  var map;
  var grayStyles = [
      {
      featureType: "all",
      stylers: [
    // Change map sytles here
          { saturation: -30 },
          { lightness: 30 }
      ]
      },
   ];
  function initialize() {
    var mapOptions = {
      zoom: 13,
      center: new google.maps.LatLng(37.788149,-122.4071),
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    zoomControl: true,
    scrollwheel: false,
    panControl: false,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL
      },
      styles: grayStyles,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Name of Location"
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);




  // Contact Form Validations
  // ----------------------------------------- 

  // Validation Form with AJAX while typing for inputs
  $('input').bind('input propertychange', function() {
    $(this).parent().find('.error').remove();
    $(this).parent().find('.valid').remove();
      if( $(this).attr('id') === 'email' ){
      var checkEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if ($(this).val() === "" || $(this).val() === " ") {
        $(this).after("<span class='error'></span>");
        $(this).parent().find('.error').fadeIn('slow');
      } else if (!checkEmail.test($(this).val())) {
        $(this).after("<span class='error'></span>");
        $(this).parent().find('.error').fadeIn('slow');
      } else {
        $(this).after("<span class='valid'></span>");
        $(this).parent().find('.valid').fadeIn('slow');
      }
      } else {
      if($(this).val() === "" || $(this).val() === " "){
        $(this).after("<span class='error'></span>");
        $(this).parent().find('.error').fadeIn('slow');
      } else {
        $(this).after("<span class='valid'></span>");
        $(this).parent().find('.valid').fadeIn('slow');
      }
      }
  });
  
  // Uncomment if you want to you validation for the message textbox
  // // Validation Form with AJAX while typing for textarea 
  // $('textarea').bind('input propertychange', function() {
  //   $(this).parent().find('.error').remove();
  //   $(this).parent().find('.valid').remove();
  //   if($(this).val() === "" || $(this).val() === " "){
  //     $(this).after("<span class='error'></span>");
  //     $(this).parent().find('.error').fadeIn('slow');
  //   } else {
  //     $(this).after("<span class='valid'></span>");
  //     $(this).parent().find('.valid').fadeIn('slow');
  //   }
  // });
  
  
  // Validation Form with AJAX on Submit 
  $('#submit').click(function(){
    $('span.error').fadeOut('slow');
    $('span.valid').fadeOut('slow');
    $('#thanks').hide();
    $('#error').hide();
    $('#timedout').hide();
    $('#state').hide();
    
    var error = false;
    
    var name = $('#name').val();
    if(name === "" || name === " ") {
      $('#name').after("<span class='error'></span>");
      $('#name').parent().find('.error').fadeIn('slow');
      error = true;
    } else {
      $('#name').after("<span class='valid'></span>");
      $('#name').parent().find('.valid').fadeIn('slow');
    }
    
    var checkEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    if (email === "" || email === " ") {
      $('#email').after("<span class='error'></span>");
      $('#email').parent().find('.error').fadeIn('slow');
      error = true;
    } else if (!checkEmail.test(email)) {
      $('#email').after("<span class='error'></span>");
      $('#email').parent().find('.error').fadeIn('slow');
      error = true;
    } else {
      $('#email').after("<span class='valid'></span>");
      $('#email').parent().find('.valid').fadeIn('slow');
    }
    
    var message = $('#message').val();
    if(message === "" || message === " ") {
      $('#message').after("<span class='error'></span>");
      $('#message').parent().find('.error').fadeIn('slow');
      error = true;
    } else {
      $('#message').after("<span class='valid'></span>");
      $('#message').parent().find('.valid').fadeIn('slow');
    }
    
    if(error === true) {
      $('#error').fadeIn('slow');
      setTimeout(function() {
          $('#error').fadeOut('slow');
      }, 3000);
      return false;
    }
    
    var data_string = $('#contact-form').serialize();
    
    $.ajax({
      type: "POST",
      url: "../sendMail.php",
      data: {name:name,email:email,message:message},
      timeout: 6000,
      error: function(request,error) {
        if (error === "timeout") {
          $('#timedout').fadeIn('slow');
          setTimeout(function() {
              $('#timedout').fadeOut('slow');
          }, 3000);
        }
        else {
          $('#state').fadeIn('slow');
          $("#state").html('The following error occured: ' + error + '');
          setTimeout(function() {
              $('#state').fadeOut('slow');
          }, 3000);
        }
      },
      success: function() {
        $('span.valid').remove();
        $('#thanks').fadeIn('slow');
        $('input').val('');
        $('textarea').val('');
        setTimeout(function() {
            $('#thanks').fadeOut('slow');
        }, 3000);
      }
    });
    
    return false;
  });
});


