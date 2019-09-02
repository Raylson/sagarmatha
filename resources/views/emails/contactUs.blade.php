<!DOCTYPE html>
<html>
<head>
    <title>Contact Us email from - {{ setting('site.title') }}</title>
</head>
 
<body>
	<h4>Dear Admin,</h4>

	<p>You have received new contact us email from {{ setting('site.title') }}</p>
	<p>Following are the details</p>
	<p>
		<strong>Full Name: </strong>{{ $request->full_name }}<br/>
		<strong>Email: </strong>{{ $request->email }}<br/>
		<strong>Phone: </strong>{{ $request->phone }}<br/>
		<strong>Message: </strong>{{ $request->message }}<br/>
	</p>

	<p>{{ setting('site.title') }}</p>
</body>
 
</html>
 