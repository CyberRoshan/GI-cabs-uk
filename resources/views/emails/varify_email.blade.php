<!DOCTYPE html>
<html>

<head>
    <title>ItsolutionStuff.com</title>
</head>

<body>
    <h1>Hello {{ $mailData['user_name'] }},</h1>
    <p> <?php echo $mailData['message'] ?> </p>
    {!! $mailData['button'] !!}


    <p>Thank you</p>
</body>

</html>