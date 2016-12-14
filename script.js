$(document).ready(function(){

	getMessages();

	$("#formulaire").submit(function(){
		var name = $("#name").val();
		var message = $("#message").val();
		$.post("send.php",{name:name,message:message},function(datas){
			$(".return").html(datas).slideDown('fast');
			$(".return").slideUp(3000);
			$("#name").val('');
			$("#message").val('');
			getMessages();
		});
	return false;
	});

	function getMessages()
	{
		$.post("request.php",function(data){
			$(".feedback").html(data);
		});
	}
	setInterval(getMessages,1000);

});