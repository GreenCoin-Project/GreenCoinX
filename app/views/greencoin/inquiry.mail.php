<!DOCTYPE html>
<html lang="en">
<head>
<style>
th{text-align:left;}
</style>
<link href="https://greencoinx.com/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div style="background-color:black;color:white">
	<img src="https://greencoinx.com/img/greencoin.png" alt="GreenCoinX">&nbsp;<sup style="color:red;font-weight:bold">XGC</sup> <font style="font-weight:700;letter-spacing:1px;color:white">an Identifiable Digital Currency</font>
</div>
<p>Hi <?=$compact['user']['data']['name']?>,</p>
<p>You have contacted us through <a href="https://greencoinx.com">https://greencoinx.com</a> for integrating GreenCoinX.</p>
<blockquote>
	<h4>Register with us</h4>
	<p>Register your department with XGC. Collect fees, payments, automated regular transactions. Your department will be verified and users will be able to send you transactions via your email, contact number, or through the standard long code.</p>
</blockquote>
<blockquote>
	<h4>Know your nations users</h4>
	<p>Account for all the identified users on XGC within your nation. Formulate economic plans, account for businesses and individuals, un-thought of analytical possibilities for financial departments.</p>
</blockquote>
<blockquote>
	<h4>Set financial guidelines</h4>
	<p>Enable automated financial sanctions. Design specific guidelines for your nations financial planning that our developers can integrate for your country.</p>
</blockquote>
<blockquote>
	<h4>Collect automated taxes</h4>
	<p>Set taxation levels for individuals and businesses. Allow your department (if authorized) to collect automated financial taxes. All tax collection can be viewed via the public XGC block chain for verification by individuals, businesses or government.</p>
</blockquote>
<blockquote>
	<h4>Digital law enforcement</h4>
	<p>Identified recipients are easy to trace via email, phone, or IP address. The ability to easily track financial crime through the XGC network will assist your law enforcement like nothing before.</p>
</blockquote>
<blockquote>
	<h4>Your information</h4>
		<table class="table table-condensed table-striped table-hover" style="background-color:white;">
			<tr>
				<th>Country</th>
				<td><?=$compact['user']['data']['country']?></td>
			</tr>
			<tr>
				<th>Department</th>
				<td><?=$compact['user']['data']['department']?></td>
			</tr>
			<tr>
				<th>Sub Department</th>
				<td><?=$compact['user']['data']['subdepartment']?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?=$compact['user']['data']['address']?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?=$compact['user']['data']['name']?></td>
			</tr>
			<tr>
				<th>Your position</th>
				<td><?=$compact['user']['data']['position']?></td>
			</tr>
			<tr>
				<th>Email address</th>
				<td><?=$compact['user']['data']['email']?></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><?=$compact['user']['data']['phone']?></td>
			</tr>
			<tr>
				<th>Appropriate contact day/time</th>
				<td><?=$compact['user']['data']['time']?></td>
			</tr>
			<tr>
				<th>Your Superior Department</th>
				<td><?=$compact['user']['data']['supdepartment']?></td>
			</tr>
			<tr>
				<th>Superior Name</th>
				<td><?=$compact['user']['data']['supname']?></td>
			</tr>
			<tr>
				<th>Superior position</th>
				<td><?=$compact['user']['data']['supposition']?></td>
			</tr>
			<tr>
				<th>Superior email address</th>
				<td><?=$compact['user']['data']['supemail']?></td>
			</tr>
			<tr>
				<th>Superior phone</th>
				<td><?=$compact['user']['data']['supphone']?></td>
			</tr>
			<tr>
				<th>Superior contact day/time</th>
				<td><?=$compact['user']['data']['suptime']?></td>
			</tr>
			<tr>
				<th>Additional Info</th>
				<td><?=$compact['user']['data']['addinfo']?></td>
			</tr>
			<tr>
				<th>IP</th>
				<td><?=$compact['user']['IP']?></td>
			</tr>
			<tr>
				<th>Date / Time</th>
				<td><?=gmdate(DATE_RFC850,$compact['user']['DateTime']->sec)?></td>
			</tr>
		</table>
</blockquote>

<p>Sincerely,<br>
GreenCoinX Team</p>

<p><small>This email communication is CONFIDENTIAL AND LEGALLY PRIVILEGED and the information detailed in it may be deemed price sensitive information according to the securities laws of the USA and Canada. If you are not the intended recipient, please notify the sender at 647.931.9768 or by return email to admin@greencoinx.com and delete this communication and any attachments and copies associated therewith from your computer immediately. Any dissemination or use of this information by a person other than the intended recipient is unauthorized and may be illegal. Thank you for your assistance and co-operation.</small></p>
</body>
</html>