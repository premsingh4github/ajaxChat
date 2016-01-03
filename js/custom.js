function changeLogin () {
	if( document.getElementById('login').style.display == 'none'){
		document.getElementById('login').style.display = 'block';
		document.getElementById('register').style.display = 'none';
	}
	else{
		document.getElementById('login').style.display = 'none';
		document.getElementById('register').style.display = 'block';
	}
	
}
function messageEdit(ev){
	var messageTime = new Date(ev.target.attributes['data-time'].value);
	var now = new Date();
	if(messageTime.getYear() == now.getYear() && now.getMonth() == messageTime.getMonth() && now.getDate() == messageTime.getDate()){
		var dif = now.getHours()*60 + now.getMinutes() - messageTime.getHours()*60 - messageTime.getMinutes();
		var id = ev.target.attributes['id'].value;
		document.getElementById(id).style.display = 'none';
		document.getElementById('editMessage_'+id ).style.display = "block";
	}
		//var dif = messageTime.get
	
}
function updateMessage(ev){

	var message_id = ev.target.attributes['data-id'].value;
	var receiver_id = ev.target.attributes['data-receiver'].value;
	if(document.getElementById(message_id).innerHTML === $('textarea#message_' + message_id).val()){
	}
	else{
		var URL = $.base_url + 'ajax/update_message.php'; 
		var user = ev.target.attributes['data-user'].value;
		$.ajax({
			type: "POST",
			url: URL,
			data: {ID: receiver_id, message_id :message_id, message: $('textarea#message_' + message_id).val()},
			cache: false,
			beforeSend: function() {
			 $('#loadingDiv').show();
			},
			error: function() { $('#loadingDiv').hide(); $('#errorDiv').html('<p>'+$.ajaxError+'</p>'); },
			success: function(html) {
				$('#loadingDiv').hide();
				$("p.no-messages").remove();
				$("#text-messages-request").html(html);
				//$("#text-messages").attr("rel", user);
				//stop_type_status();
			}
		});
	}
	document.getElementById(message_id).innerHTML = $('textarea#message_' + message_id).val();
	document.getElementById(message_id).style.display = 'block';
	document.getElementById('editMessage_'+message_id ).style.display = "none";


}