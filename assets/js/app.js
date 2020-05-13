
$(document).ready(function(){
	WebFont.load({
		google: {
			families: ['Lato:400,700']
		}
	});

	// Number only
	$(".txt-only-number").keydown(function (e) {
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			(e.keyCode >= 35 && e.keyCode <= 40)) {
			return;
		}
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	$("#contact-form").validate({
	      //specify the validation rules
	      rules: {
	        name: "required",
	        // message:"required",
	        contact: {
	          required: true
	        },
	        email: {
	          required: true,
	          email: true //email is required AND must be in the form of a valid email address
	          }
	      },
	       
	      //specify validation error messages
	      messages: {
	        name: "Name is required.",
	        // message: "Any massage Do you want give",
	        email: "Email Address  is required.",
	        contact: "Contact Number is required."
	      },
	       
	  });
	$("#btn_submit").click(function(e){
	e.preventDefault();
	//console.log($("#orderNowForm").valid());
	if($("#contact-form").valid())
		{
		  $.ajax({
			  type:"post",
			  url:"contact_us.php",
			  data:$("#contact-form").serialize(),
			  success:function(data)
			  {
				console.log(data);
				$('.success_message').removeClass("d-none");
				$("#contact-form")[0].reset() 
				setInterval(function(){ 
					$('.success_message').addClass("d-none");
				}, 5000);
			  }
		 });
	}

  });

});


