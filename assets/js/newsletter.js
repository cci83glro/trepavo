jQuery(document).ready(function ($) { // wait until the document is ready

	$('#subscribe-to-newsletter').click(function(){ // when the button is clicked the code executes
		$('.error').fadeOut('slow'); // reset the error messages (hides them)
		$('.preloader').fadeIn('slow');

		var error = false; // we will set this true if the form isn't valid

		var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
		var email = $('input#newsletter-email').val(); // get the value of the input field
		if (email == "" || email == " ") { // check if the field is empty
			$('#err-email').fadeIn('slow'); // error - empty
			error = true;
		}else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
			$('#err-emailvld').fadeIn('slow'); // error - not right format
			error = true;
		}

		if(error == true) {
			$('#err-form').slideDown('slow');
			return false;
		}

		var data_string = $('#newsletter-form').serialize(); // Collect data from form

		$.ajax({
			type: "POST",
			url: $('#newsletter-form').attr('action'),
			data: data_string,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err-timedout').slideDown('slow');
				}
				else {
					$('#err-state').slideDown('slow');
					$("#err-state").html('An error occurred: ' + error + '');
				}
			},
			success: function(data) {
				$('#newsletter-form').slideUp('slow');
				//$('#newsletter-form-success').html(data['message']);
				$('#newsletter-form-success-message').slideDown('slow');
			}
		});

		$('.preloader').fadeOut('slow');
		return false;
	});
});
