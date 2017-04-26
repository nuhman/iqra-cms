
	function foo(){
		var chat_id = $('#chat_id').html();
		var message = $('#message').val();
		var username = $('#name').val();
		if (username.length === 0 || message.length === 0){
			return false;
		}
		$.ajax({
			url: "http://localhost:80/chatbox/server.php",
			type : "POST",
			data : "chat_id="+chat_id+"&username="+username+"&message="+message,
			dataType : "json",
			success : function(response,status,http){
				$.each(response , function(index,item){
					$('#chat_box').html($('#chat_box').html()+ item.username+ " : " + item.message+"<br>");
					$('#chat_id').html(item.chat_id);
				});
				//console.log(response);
			},
			error : function(http,status,error){
				alert("Sorry: "+error);
			}

		});
		return false;
	}




	//http://localhost/chatbox/client.html#

		function run(){
		var chat_id = $('#chat_id').html();

		$.ajax({
			url: "http://localhost:80/chatbox/server.php",
			type : "get",
			data : "chat_id="+chat_id,
			dataType : "json",
			success : function(response,status,http){
				//console.log(response);

				$.each(response , function(index,item){
					$('#chat_box').html($('#chat_box').html()+ item.username+ " : " + item.message+"<br>");
					$('#chat_id').html(item.chat_id);
				});

			},
			error : function(http,status,error){
				alert("Sorry: "+error);
			}

		});
	}

	setInterval(run , 4000);
