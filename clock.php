<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	<link href="https://fonts.cdnfonts.com/css/digital-7-mono" rel="stylesheet">
    <style>
        @import url('https://fonts.cdnfonts.com/css/digital-7-mono');
         
         .div-clock{
         	background: #000;
        	border: 3px solid;
        	padding: 10px;

        }
        .tb-clock{
        	background: #000;
        	color: red;
        	padding: 18px;
        	border: 3px solid #5a6163;
        	border-radius: 30px;
        }
        .second-div{
        	border: 3px solid #5a6163;
        	padding: 16px;
        	border-radius: 15px;
        	width: 32%;
        	background: black;

        }
        .dmy-clock{
        	font-size: 30px;
        	color: white;
        }
        .dmy-font{
        	font-size: 50px;
            box-shadow: 0 0 0 3px #5a6163;
            border-radius: 10px;
            
        }
        .dmy-font td{
        	font-family: 'Digital-7', sans-serif;

        }
        .hours{
        	box-shadow: 0 0 0 3px #5a6163;
            border-radius: 10px;

        }
        .hours td{
        	font-size: 50px;
        	font-family: 'Digital-7', sans-serif;
        }
        .radio-c{
        color: white;	
        }
        .nm{
        	color: white;
        	
        }
        .am{
        	padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        	color: red;
        }
        .pm{
        	display: flex;
            justify-content: center;
            align-items: center;
        	color: red;
        }

    </style>
</head>
<body>
	<div class="div-clock" align="center">
		<div class="second-div">
		<table class="tb-clock" align="center" width="50%">
			<tr align="center" class="dmy-clock">
				<th colspan="3">DATE</th>
				<th colspan="4">MONTH</th>
				<th colspan="3">YEAR</th>
			</tr>
			<tr class="dmy-font" align="center">
				<td colspan="3"><?php echo date("d"); ?></td>
				<td colspan="4"><?php echo date("m"); ?></td>
				<td colspan="3"><?php echo date("y"); ?></td>
			</tr>
			<tr class="dmy-clock">
				<th colspan="3"> HOUR</th>
				<th colspan="4">MINITE</th>
				<th colspan="3">SECOND</th>
			</tr>
			<tr class="hours" align="center">
				<td colspan="3"><?php date_default_timezone_set("Asia/Kolkata"); echo date("h"); ?></td>
				<td colspan="4"><?php echo date("i"); ?></td>
				<td colspan="3"><?php echo date("s"); ?>
			</tr>
			<tr class="radio-c">
				<td><input type="radio" name="week"<?php if(date('D')=='Sun') echo 'checked' ;?>>SUN</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Mon') echo 'checked';?>>MON</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Tue') echo 'checked';?>>TUE</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Wed') echo 'checked';?>>WED</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Thu') echo 'checked';?>>THU</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Fri') echo 'checked';?>>FRI</td>
				<td><input type="radio" name="week"<?php if(date('D')=='Sat') echo 'checked';?>>SAT</td>
				<td class="am"><input type="radio" name="ampm" <?php if(date('a')=='am') echo 'checked';?>>AM</td>
				<td class="pm"><input type="radio" name="ampm" <?php if(date('a')=='pm') echo 'checked';?>>PM</td>

			</tr>
			
			<tr>
				<td class="nm" colspan="7">Nimesh</td>
			</tr>


		</table>
		
	  
	</div>
</div>
</body>
</html>