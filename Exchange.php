<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTER</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="control.css">
	
	<script type="text/javascript">
		
	</script>

	<script language="javascript">
	function fncSubmit()
	{
		if(document.register_f.firstname.value == "")
		{
			alert('Please input ID');
			document.register_f.firstname.focus();
			return false;
		}
		if(document.register_f.lastname.value == "")
		{
			alert('Please input Password');
			document.register_f.lastname.focus();
			return false;
		}
		
		document.form_login.submit();
	}
	</script>

</head>

<body>
	<div class="wapper">
		<div class="con1">
			<div class="box-center">

				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
				<h2>Exchange</h2>
					<div class="wapper3">
						<p>Amount requested</p>
						  	<div class="sum">
						  		
						  	<?php
								echo $sum;
						  	?>
							</div>

						  	<input class="submit" type="submit" value="EXCHANGE">
					</div>

				
			</div>
		</div>			
		</div>
		<div class="cb"></div>
	</div>
</body>
</html>