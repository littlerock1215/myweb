<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?=$subject?></title>
	<meta name="viewport" content="width=device-width" />
	<style type="text/css">
		body {
			font-family: "微軟正黑體", "Microsoft JhengHei", "Adobe 繁黑體 Std B", "儷黑 Pro";
		}

		@media only screen and (max-width: 550px),
		screen and (max-device-width: 550px) {
			body[yahoo] .buttonwrapper {
				background-color: transparent !important;
			}

			body[yahoo] .button {
				padding: 0 !important;
			}

			body[yahoo] .button a {
				background-color: #148e81;
				padding: 15px 25px !important;
			}
		}

		@media only screen and (min-device-width: 601px) {
			.content {
				width: 600px !important;
			}

			.col387 {
				width: 387px !important;
			}
		}
		.footer_link{
			color:white;
			text-decoration:none;
		}
		.activate_btn{
			display:block;
			margin:0 auto;
			color:white;
			width:250px;
            height:58px;
            line-height:58px;
			text-align:center;
			padding:0;			
			text-decoration:none;
			background: #34d0b6;
            font-weight:bold;
            letter-spacing:1px;
            border-radius:30px;
            font-size:22px;
            font-family: "微軟正黑體", "Microsoft JhengHei", "Adobe 繁黑體 Std B", "儷黑 Pro";
		}
	</style>
</head>
<?php
$url = 'https://ava-ico.com/';
?>


<body bgcolor="#ffffff" style="margin: 0; padding: 20px 0;font-family: '微軟正黑體', 'Microsoft JhengHei', 'Adobe 繁黑體 Std B', '儷黑 Pro'" yahoo="fix">
	<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
<![endif]-->
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;border:1px solid #efefef" class="content">
		<tr>
			<td bgcolor="#0674e9" style="padding: 10px 20px; text-align:center;color: white; font-family: Arial, '微軟正黑體', 'Microsoft JhengHei', 'Adobe 繁黑體 Std B', '儷黑 Pro'; font-size: 20px; line-height: 20px;    background-color: white;border-bottom: 1px solid #ccc;">
                <!-- <img src="<?=$url?>images/logo.png" style="display:inline-block;width:100px;margin-top:20px;margin-bottom:20px"> -->
				<img src="https://www.tradecoin4u.com/images/logo.png" style="display:inline-block;width:495px;margin-top:20px;margin-bottom:20px;background-color:white">
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" style="width:100%;padding: 0 20px 20px 20px; color: #555555; font-family: Arial,'微軟正黑體', 'Microsoft JhengHei', 'Adobe 繁黑體 Std B', '儷黑 Pro'; font-size: 15px; line-height: 24px; border-bottom: 1px solid #f6f6f6;">
				<table style="width:100%;">

					<tr>						
                        <td style="font-family: '微軟正黑體', 'Microsoft JhengHei', 'Adobe 繁黑體 Std B', '儷黑 Pro'">
                            <br />
							
							<!-- <p>線上換匯所<br/>OTC trading service </p> -->

							<p>客戶姓名：&nbsp;<?=$name?></p>
							<p>客戶手機：&nbsp;<?=$mobile?></p>

							<p>購買幣種：&nbsp;<?=$currency_tobuy?></p>
							<p style="color:blue">幣種現值：&nbsp;<?=$price_data[$currency_tobuy]?></p>

							<!-- <p>自上述時間起，此購買價格為15分鐘內有效。</p> -->
							<!-- <p>轉帳資料如下</p> -->
							<p>購買數量：&nbsp;<?=$amount?></p>

							<p>應付真實總金額：&nbsp;<?=$price_data[$currency_tobuy]*$amount?>美金</p>
							
							<p>支付幣種：&nbsp;<?=$currency_topay?></p>

							<p>客戶備註：&nbsp;<?=$note?></p>

						</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>
	<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</body>
</html>