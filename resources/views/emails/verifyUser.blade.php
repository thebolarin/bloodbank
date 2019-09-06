<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{$name}}</h2>
<br/>
Your registered email-id is {{$email}} , Please click on the below link to verify your email account
<br/>
<a class="btn btn-success" href="{{url('donor/verify', $link)}}">Verify Email</a>
</body>

</html>