<!-- start uploader -->
<script src="<?php echo SITE_URL ?>/assets/js/jquery.ui.widget.js"></script>
<script src="<?php echo SITE_URL ?>/assets/js/jquery.iframe-transport.js"></script>
<script src="<?php echo SITE_URL ?>/assets/js/jquery.fileupload.js"></script>

<script>
$(function() {

    var url = '<?php echo SITE_URL ?>/vendor/uploader/';

	    // FOR PHOTO UPLOAD
	    $('#btnphoto').fileupload({
	        url: url,
	        dataType: 'json',
	        done: function (e, data) {
	        	$("#eventphoto").val( data.result.file['0'].name );
	            var reader = new FileReader();
	            reader.readAsDataURL(data.files['0']);
	            reader.onload = function (e) {
	                $('#eventphoto').parent().show().parent().find(".upload_prev").attr('src', e.target.result);                
	            };
	            
	        },
	        progressall: function (e, data) {
	            var progress = parseInt(data.loaded / data.total * 100, 10);
	            $('#progress .progress-bar').css(
	                'width',
	                progress + '%'
	            );
	        }
	    });


       $("#btnSubmitEvent").on('click',function(){
         //alert('The button is working');
		 	if (document.getElementById("eventtitle").value == "" || document.getElementById("eventDesc").value == "" ){
				 alert('Please provide details');
				 return false;
        	}

			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/admin/events_form/ajax/saveEvent",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Success! Your event has been successfully save!</h1>";
					Modal.show($);
					setTimeout(function(){ location.reload(); }, 1500);
				}else{
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Error! Please contact by sending email to info@runningph.com!</h1>";
					Modal.show($);
					//setTimeout(function(){ location.reload(); }, 1500);
				}
			});
			return false;
		 });

		 $("#btnEventVerify").on('click',function(){
         //alert('The button is working');
			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/admin/events/ajax/verifyEvent",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Success! Your event has been verified!</h1>";
					Modal.show($);
					setTimeout(function(){ location.reload(); }, 1500);
				}else{
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>No Changes!</h1>";
					Modal.show($);
					//setTimeout(function(){ location.reload(); }, 1500);
				}
			});
			return false;
		 });

		 $('#btnDeleteEvent').on('click',function(){
			Modal.hasHeader = 
			Modal.hasButton = false;
			Modal.addId = "modal";
			Modal.contents = "<h1 style='text-align:center;'><i class='fa fa-trash' aria-hidden='true'></i>  Delete Function is under development!";
			Modal.show($);
		 });


		$('#btnPaymentVerify').on('click',function(){
			var _data = $('form').serialize();
			$.post("<?php echo SITE_URL ?>/admin/participants/ajax/verifyPayment",_data, function(data){
				data = $.trim(data);
				console.log(data);
				if(data=="1"){		
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Success! Payment has been successfully verified!</h1>";
					Modal.show($);
					setTimeout(function(){ location.reload(); }, 1500);
				}else{
                    Modal.hasHeader = 
					Modal.hasButton = false;
					Modal.addId = "modal";
					Modal.contents = "<h1 style='text-align:center;'>Payment is already verified!</h1>";
					Modal.show($);
					//setTimeout(function(){ location.reload(); }, 1500);
				}
			});
			return false;
		});


});
</script>
                                