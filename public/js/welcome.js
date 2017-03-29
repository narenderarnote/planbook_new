$(document).ready(function() {

	$.smartbanner({
		title : 'Planbook.com',
		author : 'Teacher Innovations, Inc.',
		icon : 'images/120.png'
	});
	
	$(this).click(function(e) {
		var $target = $(e.target);
		if($target.is('.modalDialog')) {
			$('.modalDialog').hide();
			if ($target.is('#overview')) {
				$('#closeVideoBox').click();
			}
		}
	});

	$.ajaxSetup({ cache:false });

	$('#loadingMsg').hide();
	$('#newEmail').focus();
	$('#emailSending').hide();
	$('.screenShot').hide();
	$('#weekShot').show();
	$('.imageTab').show();
	$('#weekTab').hide();

	if ($.cookie('email') != null) {
			$('#loginEmail').val($.cookie('email'));
			$('#loginPW').focus();
		} else {
			$('#loginEmail').focus();
		}			
		 
	$('#applyLogin').click(function() {

		var eAddress = $('#loginEmail').val();
		var newPW = $('#loginPW').val();
		var valError = false;
			
		$('#loginErrorMsg').html('&nbsp;');

		if (eAddress == "") {
			valError = true;
			$('#loginErrorMsg').html('Please enter your Email Address');
			$('#loginEmail').focus();
		} else {
			if (valEmail(eAddress) == false) {
				valError = true;
				$('#loginErrorMsg').html('Not a valid Email Address');
				$('#loginEmail').focus();
			}
		}

		if (valError == false) {
			if (newPW == "") {
				valError = true;
				$('#loginErrorMsg').html('Please enter your Password');
				$('#loginPW').focus();
			}
		}

		if (valError == false) {
	
			userLogin = new Object();
			userLogin.emailAddress = eAddress;
			userLogin.userPassword = newPW;
			userLogin.noCache = new Date().getTime();

			$('#loadingMsg').show();
			$('#applyLogin').hide();
			$('#forgotPW').hide();
			$('#viewPlans').hide();
			
			$.post('login', userLogin, loginResult, "json");

		}		
		
		return false;
		
	});	
	
	function loginResult(data) {

		$('#loadingMsg').hide();
		$('#applyLogin').show();
		$('#forgotPW').show();
		$('#viewPlans').show();
	
		if (data.invalidLogin == "true") {
			$('#loginErrorMsg').html('Email Address or Password is incorrect.');
			$('#loginEmail').focus();
		} else if (data.systemDown == "true") {
			$('#loginErrorMsg').html('System down for maintenance. Please try again later.');
		} else if (data.error == "true") {
			$('#loginErrorMsg').html('Unable to connect to server. Please try again later.');
		} else {

//			var isiPad = navigator.userAgent.match(/iPad/i) != null;
			
			$.cookie('email',$('#loginEmail').val(),{expires:14});
			window.location="planbook.html";
		}
			
	}
	
	$('#applyNewUser').click(function() {

		var eAddress = $('#newEmail').val();
		var newPW = $('#newPW').val();
		var confirmPW = $('#confirmPW').val();
		var valError = false;
		
		clearNotification('#newUserErrorMsg');

		if (eAddress == "") {
			valError = true;
			showNotification('#newUserErrorMsg', 'Please enter an Email Address');
			$('#newEmail').focus();
		} else {
			if (valEmail(eAddress) == false) {
				valError = true;
				showNotification('#newUserErrorMsg', 'Please enter a valid Email Address');
				$('#newEmail').focus();
			}
		}

		if (valError == false) {
			
			if (newPW == "") {
				valError = true;
				showNotification('#newUserErrorMsg', 'Please enter a Password');
				$('#newPW').focus();
			} else {
				if (confirmPW == "") {
					valError = true;
					showNotification('#newUserErrorMsg', 'Please confirm your Password');
					$('#confirmPW').focus();
				} else {
					if (newPW != confirmPW) {
						valError = true;
						showNotification('#newUserErrorMsg', 'Passwords do not match');
						$('#newPW').focus();
					}
				}
			}
		}

		if (valError == false) {
		
			userInfo = new Object();
			
			userInfo.emailAddress = eAddress;
			userInfo.userPassword = newPW;	

			$('#regNewUser').show();
			$('#cancelNewUser').hide();
			$('#applyNewUser').hide();

			$.getJSON('register', userInfo, registerDone);
		
		}		

		return false;
		
	});

	$('#applyStudent').click(function() {
		
		clearNotification('#studentErrorMsg');
		studentData = new Object();
		studentData.teacherEmail = $.trim($('#shareEmail').val());
		studentData.studentKey = $.trim($('#shareKey').val());

		if (studentData.teacherEmail == "") {
			showNotification('#studentErrorMsg', 'Please enter an Email Address or Student ID');
		} else {
			if (studentData.studentKey == "") {
				showNotification('#studentErrorMsg', 'Please enter a Student Key');
			} else {
				$.getJSON('loginStudent', studentData, studentDone);
			}
		}

		return false;
		
	});	

	function studentDone(data) {
		
		if (data.invalidTeacherData == "true" || data.invalidLogin == "true") {
			showNotification('#studentErrorMsg', 'Email Address or Student Key is incorrect');
			$('#shareEmail').focus();
		} else {
			if (data.studentId == null) {data.studentId = 0;}
			if (data.teacherId == null) {data.teacherId = 0;}
			if (data.studentId == 0) {
				window.location = "planbook.html?t=" + data.teacherId + "&k=" + encodeURIComponent($.trim($('#shareKey').val())) + "&y=0&c=0";
			} else {
				window.location = "planbook.html?s=" + data.studentId;
			}
			
		}	
	}
	
	function registerDone(data) {
	
		$('#regNewUser').hide();
		$('#cancelNewUser').show();
		$('#applyNewUser').show();
		
		if (data.existingEmail == "true") {
			showNotification('#newUserErrorMsg', 'Email address is already registered');
			$('#newEmail').focus();
		} else if (data.systemDown == "true") {
			showNotification('#newUserErrorMsg', 'System down for maintenance. Please try again later.');
		} else if (data.error == "true") {
			showNotification('#newUserErrorMsg', 'Unable to connect to server. Please try again later.');
		} else {
			hideBox('#newUserBox', 10);
			$('#sendEmail').html($('#newEmail').val());
			window.location="planbook.html";
		}	
	}
	
	$('#forgotPW').click(function() {
		showBox('#retrievePW', 10);
		$('#emailSending').hide();
		$('#mailPW').show();
		$('#cancelRetrieve').show();
		$('#retrieveEmail').val($('#loginEmail').val());
		$('#retrieveEmail').focus();
		$('#retrievePWErrorMsg').html('&nbsp;');
		return false;
	});	

	$('#mailPW').click(function() {
		
		var eAddress = $('#retrieveEmail').val();
			
		$('#retrievePWErrorMsg').html('&nbsp;');

		if (eAddress == "") {
			$('#retrievePWErrorMsg').html('Please enter your Email Address');
		} else {
			if (valEmail(eAddress) == false) {
				$('#retrievePWErrorMsg').html('Invalid Email Address');
			} else {
				$('#emailSending').show();
				$('#mailPW').hide();
				$('#cancelRetrieve').hide();
				$.getJSON('forgotPassword', 'emailAddress='+eAddress, retrieveResult);
			}
		}

		return false;
		
	});	
	
	function retrieveResult(data) {
	
		$('#emailSending').hide();
		$('#mailPW').show();
		$('#cancelRetrieve').show();
		
		if (data.emailNotFound == "true") {
			$('#retrievePWErrorMsg').html('Email Address not found');
		} else {
			hideBox('#retrievePW', 10);
			alert('Your password has been sent to your email address.');
		}

	}

	$('#cancelRetrieve').click(function() {
		hideBox('#retrievePW', 10);
		return false;
	});	

	$('#cancelStudent').click(function() {
		hideBox('#studentLoginBox', 10);
		return false;
	});	

	$('#viewPlans').click(function() {
		showBox('#studentLoginBox', 10);
		$('#shareEmail').focus();
		clearNotification('#studentErrorMsg');
		return false;
	});	

	$('#cancelNewUser').click(function() {
		hideBox('#newUserBox', 10);
		return false;
	});	

	$('.signup').click(function() {
		showBox('#newUserBox', 10);
		$('#regNewUser').hide();
		$('#newEmail').html('');
		$('#newPW').html('');
		$('#confirmPW').html('');
		clearNotification('#newUserErrorMsg');
		$('#newEmail').focus();
		return false;
	});	
	
	$('#watchoverview').click(function() {
		window.location.hash = '#overview';
		$('#overview').show();
		$('#overview').find('video').get(0).play();
		return false;
	});	
	
	$(document).keyup(function(e) {
		var code = (e.keyCode ? e.keyCode : e.which);
		if (code == 27) { 
			$('#closeVideoBox').click();
		}
	});
	
	$('#closeVideoBox').click(function() {
		$('#overview').hide();
		var video = $('#overview').find('video').get(0);
		video.currentTime = 0;
		video.pause();
		return false;
	});	
	
	$('#weekTab').click(function() {
		$('.screenShot').hide();
		$('#weekShot').show();
		$('.imageTab').show();
		$('#weekTab').hide();
		return false;
	});

	$('#dayTab').click(function() {
		$('.screenShot').hide();
		$('#dayShot').show();
		$('.imageTab').show();
		$('#dayTab').hide();
		return false;
	});

	$('#classTab').click(function() {
		$('.screenShot').hide();
		$('#classShot').show();
		$('.imageTab').show();
		$('#classTab').hide();
		return false;
	});

	$('#eventTab').click(function() {
		$('.screenShot').hide();
		$('#eventShot').show();
		$('.imageTab').show();
		$('#eventTab').hide();
		return false;
	});

	$('#schoolTab').click(function() {
		$('.screenShot').hide();
		$('#schoolShot').show();
		$('.imageTab').show();
		$('#schoolTab').hide();
		return false;
	});

	$('#lessonTab').click(function() {
		$('.screenShot').hide();
		$('#lessonShot').show();
		$('.imageTab').show();
		$('#lessonTab').hide();
		return false;
	});

	function isiPhone() {
	    return (
	        (navigator.platform.indexOf("iPhone") != -1) ||
	        (navigator.platform.indexOf("iPod") != -1)
	    );
	}
	
	function showNotification(selector, message) {
		$(selector).html(message);
		$(selector).closest('.alertContainer').fadeIn(500);
	}
	
	function clearNotification(selector) {
		$(selector).html('');
		$(selector).closest('.alertContainer').hide();
	}
	
	function showBox(boxName, boxZindex) {
		
		if (boxZindex == 10) {
			$('#editBackground').show();
		} else if (boxZindex == 30) {
			$('#msgBackground').show();
		}

		var windowHt = parseInt($(window).height(),10);
		var boxHt = parseInt($(boxName).height(),10);
		var newTop = parseInt($(document).scrollTop(),10);
		if (windowHt < boxHt) {
			newTop = newTop + 5;
		} else {
			newTop = newTop + ((windowHt-boxHt)/2);
		}

		var windowWidth = parseInt($(document).width(),10);
		var boxWidth = parseInt($(boxName).width(),10);
		var newLeft = 0;
		if (windowWidth < boxWidth) {
			newLeft = newLeft + 5;
		} else {
			newLeft = newLeft + ((windowWidth - boxWidth)/2);
		}
		
		$(boxName).css({top:newTop+'px', left:newLeft+'px'}).show();

	}
	
	function hideBox(boxName, boxZindex) {
		
		if (boxZindex == 10) {
			$('#editBackground').hide();
		} else if (boxZindex == 30) {
			$('#msgBackground').hide();
		}

		$(boxName).hide();
		
	}
	
	function showLoading() {
		
		if ($('#loadBackground').length == 0) {
			
			var width = parseInt($(document).width()),
				height = parseInt($(document).height());
			$('body').append('<div id="loadBackground" class="load_background" style="width:'+width+'px;height:'+height+'px;"></div>');
		}
		
		showBox('#load', 50);

	}
	
	function hideLoading() {
		if ($('#loadBackground').length > 0) {
			$('#loadBackground').remove();
		}
		$('#load').hide();		
	}
		
});