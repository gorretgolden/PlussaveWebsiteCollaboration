<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Dear {{ $data['name'] }},</h2>
    <p>Thank you for contacting Plussave Financial Solutions. We have received your message:</p>
    <p>{{ $data['message'] }}</p>
    <p>We will get back to you shortly.</p>
</body>
</html>
