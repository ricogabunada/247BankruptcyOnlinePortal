//ADMIN REGISTRATION
$('#registeradmin').on('submit', function(event){

	event.preventDefault();
	var serial_cont = $('#registeradmin').serialize();
	$('#registeradmin input, #registeradmin select, #registeradmin button, #registeradmin textarea').prop('disabled', true);
	$('#registeradmin .fa-spin').show();

	$.post('./admin', serial_cont, function(e){

		console.log(e);

		if(e.error.length == 0){

			$('#registeradmin .fa-spin').hide();
			alert('Admin Details Saved Successfully');

		} else {

			alert(e.error);
			$('#registeradmin input, #registeradmin select, #registeradmin button, #registeradmin textarea').prop('disabled', false);
			$('#registeradmin .fa-spin').hide();
		}

	});

})

//ADMIN EDIT PROFILE
$('#editprofile').on('submit', function(event){

	event.preventDefault();
	var serial_cont = $('#editprofile').serialize();
	$('#editprofile input, #editprofile select, #editprofile button, #editprofile textarea').prop('disabled', true);
	$('#editprofile .fa-spin').show();
	$('#editprofile button').addClass("hidden");
	$('#canceledit i').addClass("hidden");

	$.post('./editprofile', serial_cont, function(e){
		console.log(e);
		alert('Profile Updated!');

		$('#editprofile .fa-spin').hide();

		location.reload();
	});

})

$('#editbtnprofile').click(function (){
  $('#editprofile input').prop("disabled", false);
  $('#canceledit i').removeClass("hidden");
  $('#editprofile button').removeClass("hidden");
})

$('#canceledit').click(function (){
  $('#editprofile input').prop("disabled", true);
  $('#editprofile button').addClass("hidden");
  $('#canceledit i').addClass("hidden");
})

$('#function').on('change', function(){
	$('.selectfunction').on('click', function(){
		$(".functionsonchange").css("display", "none");
		var funval = $('#function').val();
		if(funval == 1){
		 $("#registeradmin").css("display", "block");
		} else if(funval == 2){
		 $("#createemailid").css("display", "block");
		} else if(funval == 3){
		 $("#createnewcity").css("display", "block");
		} else if(funval == 4){
		 $("#createnewskillcategory").css("display", "block");
		} else if(funval == 5){
		 $("#createnewskill").css("display", "block");
		} else if(funval == 6){
		 $("#createexperience").css("display", "block");
		}
	})
});

$(".functionsonchange .cancel-btn").on('click', function(){
  $(".functionsonchange").css("display", "none");
});

$('#selectsearchfunction').on('change', function(){
	$('.selectsearchfunction').on('click', function(){
		$(".searchfunctiononchange").css("display", "none");
		var funval = $('#selectsearchfunction').val();
		if(funval == 1){
		 $("#loginuseraccounts").css("display", "block");
		} else if(funval == 2){
		 $("#emailaddress").css("display", "block");
		} else if(funval == 3){
		 $("#cities").css("display", "block");
		} else if(funval == 4){
		 $("#experience").css("display", "block");
		} else if(funval == 5){
		 $("#jobdepartment").css("display", "block");
		} else if(funval == 6){
		 $("#skillposition").css("display", "block");
		}
	})
});

$(".searchfunctionsonchange .cancel-btn").on('click', function(){
  $(".searchfunctionsonchange").css("display", "none");
});