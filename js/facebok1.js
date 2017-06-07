$(document).ready(function()
{

	$("#login").click(function(event)
	{

		event.preventDefault();
		
		var username=$("#username").val();
		var pswd=$("#password").val();
	//  console.log(username);
	// console.log(pswd);
	// alert("ghgg");
		$.ajax({
			'url':'http://services.trainees.baabtra.com/LoginService/login.php',
			'DataType':'jsonp',
			'data':{email:username,password:pswd},
			success:function(data)
			{
				var json=$.parseJSON(data);
				console.log(json[0].ResponseCode);
				if(json[0].ResponseCode=="200")
				{
					window.location.href="login.php?name="+json[0].vchr_first_name+"&&last="+json[0].vchr_last_name+"&&pic="+json[0].vchr_prof_pic;
				}
				else if(json[0].ResponseCode=="500")
				{
					window.location.href="error1.php?name="+json[0].vchr_first_name+"&&pic="+json[0].vchr_prof_pic+"&&last="+json[0].vchr_last_name+"&&mailid="+json[0].vchr_user_name;

				}
				else 
				{
					window.location.href="error.php?name="+json[0].vchr_first_name+"&&pic="+json[0].vchr_prof_pic;
				}
			},
			error:function( event, jqxhr, settings, thrownError )
			{
				console.log( event);
				console.log( jqxhr, settings, thrownError );
				console.log( event, jqxhr, settings, thrownError );
				console.log( event, jqxhr, settings, thrownError );
			}
		});

	 });
});