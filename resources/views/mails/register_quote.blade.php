<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h3>Property Details</h3>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr>
			<th>First Name</th>
			<td>{{ $propertyDetails['first_name'] }}</td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td>{{ $propertyDetails['last_name'] }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $propertyDetails['email'] }}</td>
		</tr>
		<tr>
			<th>Phone</th>
			<td>{{ $propertyDetails['phone'] }}</td>
		</tr>
		<tr>
			<th>Property Name</th>
			<td>{{ $propertyDetails['property_name'] }}</td>
		</tr>
		<tr>
			<th>Short Desc</th>
			<td>{{ $propertyDetails['short_desc'] }}</td>
		</tr>
		<tr>
			<th>Location</th>
			<td>{{ $propertyDetails['place'] }}</td>
		</tr>
		<tr>
			<th>Price</th>
			<td>{{ $propertyDetails['price'] }}</td>
		</tr>
		<tr>
			<th>Floor</th>
			<td>{{ $propertyDetails['floor'] }}</td>
		</tr>
		<tr>
			<th>Total area interior</th>
			<td>{{ $propertyDetails['total_area_int'] }}</td>
		</tr>
		<tr>
			<th>Total area Exterior</th>
			<td>{{ $propertyDetails['total_area_ext'] }}</td>
		</tr>
		<tr>
			<th>Year Built</th>
			<td>{{ $propertyDetails['year_built'] }}</td>
		</tr>
		<tr>
			<th>Year Of Renovation</th>
			<td>{{ $propertyDetails['year_reno'] }}</td>
		</tr>
		<tr>
			<th>No of Garages</th>
			<td>{{ $propertyDetails['garage_no'] }}</td>
		</tr>
		<tr>
			<th>No of Bathrooms</th>
			<td>{{ $propertyDetails['no_bath'] }}</td>
		</tr>
		<tr>
			<th>No of Bedrooms</th>
			<td>{{ $propertyDetails['no_bedrooms'] }}</td>
		</tr>
		<tr>
			<th>Key Feature 1</th>
			<td>{{ $propertyDetails['key_feature_1'] }}</td>
		</tr>
		<tr>
			<th>Key Feature 2</th>
			<td>{{ $propertyDetails['key_feature_2'] }}</td>
		</tr>
		<tr>
			<th>Key Feature 3</th>
			<td>{{ $propertyDetails['key_feature_3'] }}</td>
		</tr>
		<tr>
			<th>Kitchen Type</th>
			<td>{{ $propertyDetails['kitchen_type'] }}</td>
		</tr>
	</table>
</body>
</html>