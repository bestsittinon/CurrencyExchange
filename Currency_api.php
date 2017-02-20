<?php 
	$money = $_POST['money'];
	$money_thai = $_POST['money-thai'];

	if($money == "SGD"){
		$xmoney = 24.3294;
	}else if($money == "NZD"){
		$xmoney = 24.7044;
	}else if($money == "CNY"){
		$xmoney = 5.0170;
	}

	$sum = $money_thai/$xmoney;
	$english_format_number = number_format($sum, 2, '.', '');


 ?>

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
								echo $english_format_number;
						  	?>
							
							<div class="name mouny">
								<p><?php echo $money ?></p>
							</div>
						
						  	<a href="Currency exchange.php" class="submit" type="submit" value="EXCHANGE">Back</a>
							</div>

				
			</div>
		</div>			
		</div>
		<div class="cb"></div>
	</div>
</body>
</html>