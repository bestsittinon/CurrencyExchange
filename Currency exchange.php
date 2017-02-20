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
		if(document.register_f.moneyt.value == "")
		{
			alert('Please input Money');
			document.register_f.moneyt.focus();
			return false;
		}
		
		document.form_login.submit();
	}
	</script>

	<script language="JavaScript">
		function chkNumber(ele)

			{

				var vchar = String.fromCharCode(event.keyCode);

			if ((vchar<'0' || vchar>'9') && (vchar != '.')) {
				alert('Please input Number');
				return false;
			}
			ele.onKeyPress=vchar;

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
				<h2>Currency exchange</h2>
					<div class="wapper3">

						<p>Select a currency</p>
						<form action="Currency_api.php" name="register_f" onSubmit="JavaScript:return fncSubmit();" method="POST" id="register_f">

							<div class="C_ex"><input class="currency1" type="radio" name="money" value="SGD" checked><img src="img/flagSGD.png"><p>SGD</p></div>

							<div class="C_ex"><input class="currency1" type="radio" name="money" value="NZD"><img src="img/flagNZD.png"><p>NZD</p></div>

							<div class="C_ex"><input class="currency1" type="radio" name="money" value="CNY"><img src="img/flagCNY.png"><p>CNY</p></div>

						<p>Amount requested</p>
						  	<input class="text" type="number" name="money-thai" placeholder="0.00" id="moneyt" OnKeyPress="return chkNumber(this)">
						  <br>
						  <br>
						  	<input class="submit" type="submit" value="EXCHANGE">
						 </form>
					</div>

				
			</div>
		</div>			
		</div>
		<div class="cb"></div>
	</div>
</body>
</html>