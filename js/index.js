
var username = "";
function send_message(conv,message){
	if (conv.length > 4) {
			conv = conv + "<br>"+"<div class='clear'></div>"+"<br>";
	}
	$("#converse").html(conv +"<span class='current-msg' style='border: 3px solid #dedede;background-color:#f1f1f1;padding:5px;border-radius:5px;display:inline-block;'>" + "<span id='chat-bot'>Ganymede Bot:"+"<span id='bot-arrow'></span>"+" </span>" + message + "</span>");
	$(".current-msg").hide();
	$(".current-msg").delay(500).fadeIn();
	$(".current-msg").removeClass("current-msg");
}

function get_username(conv){
	send_message(conv,"Hi, what's your name?");
}

function ai(conv,message){
	if (username<4) {
		if (message=='hi' || message=='Hi' || message=='HI') {send_message(conv,"I'm good. You didn't tell me your name.");
			} else {
				username = message;
		send_message(conv,"Hi, "+ username + ". How are you?");} ;
	}
	else{
		// $("#send").click(function(){
		    $.get("getresponse.php", {q:message}, function(data, status){
		        // alert("Data: " + data + "\nStatus: " + status);
		        send_message(conv,data);
		    });
		// }); 		 
	}
}
$(function(){
	var open = false;
	var conv = $("#converse").html();
	get_username(conv);

	$("#textbox").keypress(function (keyPress){
		if (keyPress.keyCode==13){
			var usermsg = $("#textbox").val().replace(/\r?\n|\r/g, "");
		conv = $("#converse").html();
		console.log(conv.length);
		if (usermsg != "") {
			$("#textbox").val("");
			if (conv.length > 4) {
				conv = conv + "<br>"+"<div class='clear'></div>"+"<br>";
			}
			$("#converse").html(conv +"<span style=''></span>"+ "<span id='chat-user'>You: "+"<span id='user-arrow'></span>"+ usermsg+"</span>");
			$("#converse").scrollTop($("#converse").prop("scrollHeight"));
			conv = $("#converse").html();
			ai(conv,usermsg);
			}
		}
	})
	// function(){
		
	// }


	$("#send").click(function(){
		var usermsg = $("#textbox").val();
		conv = $("#converse").html();
		console.log(conv.length);
		if (usermsg != "") {
			$("#textbox").val("");
			if (conv.length > 4) {
				conv = conv + "<br>"+"<div class='clear'></div>"+"<br>";
			}
			$("#converse").html(conv +"<span style=''></span>"+ "<span id='chat-user'>You: "+"<span id='user-arrow'></span>"+ usermsg+"</span>");
			$("#converse").scrollTop($("#converse").prop("scrollHeight"));
			conv = $("#converse").html();
			ai(conv,usermsg);
		}
	});
	$("#chat-button").click(function(){
		$("#chat-box").animate({"right":"0px"});	
	});
	$("#cancel").click(function(){
		$("#chat-box").animate({"right":"-300px"});
	});
});


// document.querySelector('#text-box').addEventListener('keypress', function (keyPress){
// 	let key = keyPress.which || keyPress.keyCode;
// 	if (key===13){

// 	}
// })