<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h3>Property Enquiry</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>Name</th>
			<td>{{ $ContactDetails['name'] }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $ContactDetails['email'] }}</td>
		</tr>
		<tr>
			<th>Phone</th>
			<td>{{ $ContactDetails['phone'] }}</td>
		</tr>
		<tr>
			<th>Message</th>
			<td>{{ $ContactDetails['message'] }}</td>
		</tr>
	</table>
</body>
</html>