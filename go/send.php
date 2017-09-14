
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


</head>
<body>

						<div id="frmContact">
						
							<div>
							
							<span id="userName-info" class="info"></span><br/>
							<input type="text" placeholder="Your name" name="userName" id="userName" class="demoInputBox">
							</div>
							
							<div>
							<label></label> 
							<span id="subject-info" class="info"></span><br/>
							<input placeholder="Phone number" type="text" name="subject" id="subject" class="demoInputBox">
							</div>
							<div>
							<label></label>
							<span id="userEmail-info" class="info"></span><br/>
							<input placeholder="Email"  type="text" name="userEmail" id="userEmail" class="demoInputBox">
							</div>
							<div>
							<label></label> 
							<span id="content-info" class="info"></span><br/>
							<textarea placeholder="Comment" type="text" name="content" id="content" class="demoInputBox"></textarea>
							</div>
							<div id="mail-status"></div>
							<div>
							<button name="submit" id="submit_btn" class="btnAction" onClick="sendContact();">ENTER</button>
							</div>
							
						</div>

				
			
	<script>
					function sendContact() {
						var valid;	
						valid = validateContact();
						if(valid) {
							jQuery.ajax({
							url: "contact_mail.php",
							data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
							type: "POST",
							success:function(data){
							$("#mail-status").html(data);
							},
							error:function (){}
							});
						}
					}

					function validateContact() {
						var valid = true;	
						$(".demoInputBox").css('background-color','');
						$(".info").html('');
						
						if(!$("#userName").val()) {
							$("#userName-info").html("(required)");
							$("#userName").addClass('rp');
							valid = false;
						}
						if(!$("#userEmail").val()) {
							$("#userEmail-info").html("(required)");
							$("#userEmail").addClass('rp');
							valid = false;
						}
						if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
							$("#userEmail-info").html("(invalid)");
							$("#userEmail").addClass('rp');
							valid = false;
						}
						if(!$("#subject").val()) {
							$("#subject-info").html("(required)");
							$("#subject").addClass('rp');
							valid = false;
						}
						if(!$("#content").val()) {
							$("#content-info").html("(required)");
							$("#content").addClass('rp');
							valid = false;
						}
						
						return valid;
					}
				</script>

<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>	 -->
<script src="js/jquery.easyparallax-1.0.0.min.js"></script>
<script type="text/javascript">
	$('.js-example3').easyParallax({
		isReady : function(){
			this.find('img').css('opacity', '1');
			this.css('bottom:-100px;', '');
		}
			});
</script> 

<script src="js/bootstrap.js"></script>
<!-- <script src="js/jquery.smoothscroll.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/main.js"></script>

</body>
</html>

