<!-- start uploader -->
<script src="<?php echo SITE_URL ?>/assets/js/jquery.ui.widget.js"></script>
<script src="<?php echo SITE_URL ?>/assets/js/jquery.iframe-transport.js"></script>
<script src="<?php echo SITE_URL ?>/assets/js/jquery.fileupload.js"></script>

<script>
$(function() {
       $("#btnUserUpdate").on('click',function(){
		
			if(document.getElementById('fullname').value == ""){
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<p style='text-align:center;' class='alert alert-danger alert-dismissible'>Alert! Fullname must not be empty!</p>";
					Modal.show($);
				
				return false
			}

            if(document.getElementById('contactno').value == ""){
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<p style='text-align:center;' class='alert alert-danger alert-dismissible'>Alert! Contact number must not be empty!</p>";
					Modal.show($);
				return false
			}

            if(document.getElementById('address').value == ""){
                
				    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<p style='text-align:center;' class='alert alert-danger alert-dismissible'>Alert! Address field must not be empty!</p>";
					Modal.show($);
				return false
			}

			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/admin/user_account/ajax/updateUser",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Success! Your account has been updated!</h1>";
					Modal.show($);
					setTimeout(function(){ location.reload(); }, 1500);
				}else{
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Error! Please contact by sending email to info@runningph.com!</h1>";
					Modal.show($);
					setTimeout(function(){ location.reload(); }, 500);
				}
			});
			return false;
		 });
		 


});
</script>

 