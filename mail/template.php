
<html style="width:550px">
	<body style="font-family:'Open Sans',Arial;box-sizing:border-box;padding:10px;background-color:#e6e6e6;width:550px">
		<div style="line-height:60px;text-align:center;background-color:#d80303;font-size:23px;color:white">Smart Track</div>
		<div style="background-color:white;padding:50px 0px;">
			<p style="margin:0px;text-align:center;font-size:18px;font-weight:100;color:#676767">Hey There!<br><br>Your package <strong><?php echo($track); ?></strong>  status has been updated.<br><br>Here’s the lastest information</p>
			<br>
			<br>
			<table style="margin:auto;background-color:#f8f8f8;color:#4b4848;width:80%;position:relative;border-collapse:collapse">
				<tr style="background-color:#e0e0e0;color:#4b4848;"><td style="padding:10px"><strong>CARRIER: </strong><?php echo($carrier); ?></td></tr>
				<tr style="line-height:24px;font-size:12px"><td style="padding:10px"><?php echo($message); ?></td></tr>
			</table>
		</div>
		
	</body>
</html>