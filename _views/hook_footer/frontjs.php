<script>
$(function() {
       $("#btnsignup").on('click',function(){
		
			if(document.getElementById('uname').value == ""){
				alert('Please fill out usernmae!');
				document.getElementById('uname').focus();
				return false
			}

			if(document.getElementById('email').value == ""){
				alert('Please fill out email address!');
				document.getElementById('email').focus();
				return false
			}

			if(document.getElementById('new_password').value == ""){
				alert('Please fill out password!');
				document.getElementById('new_password').focus();
				return false
			}

       		if( document.getElementById("new_password").value != document.getElementById("confirm_password").value )
	         {
	           alert('Password did not match!');
	           document.getElementById("new_password").focus() ;

	           return false;
	         }

			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/front/signup",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
					alert('Success! Your account has been submitted. Please check your email for confirmation!');
					location.reload();
					//setTimeout(function(){ location.reload(); }, 500);
				}else{
					alert('Error! Please Contact System Administrator!');	
				}
			});
			return false;
		 });


});
</script>

 