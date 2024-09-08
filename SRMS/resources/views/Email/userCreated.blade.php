<!DOCTYPE html>
<html>
<head>
    <title>User Account Created</title>
</head>
<body>
    <h2>Welcome to {{ config('app.name') }}!</h2>

    <p>Dear {{$data['name']}},</p>

    <p>We are pleased to inform you that your account has been successfully created in the {{ config('app.name') }} system.</p>

    <h4>Account Information:</h4>
    <ul>
        <li><strong>Name:</strong>  {{$data['name']}}</li>
        <li><strong>Email:</strong> {{$data['email']}}</li>

    </ul>

    <p>You can log in to your account using the following link:</p>
    <p><a href="{{ url('/login') }}">{{ url('/login') }}</a></p>

    <h4>Next Steps:</h4>
    <ol>
        <li>Log in using the above credentials.</li>
        <li>After logging in, you will be prompted to update your password.</li>
        <li>Explore your personalized dashboard and the available features.</li>
    </ol>

    <!-- <p>If you have any questions or need assistance, feel free to contact our support team at {{ config('app.support_email') }}.</p>

    <p>Welcome aboard!</p> -->

    <p>Best regards,<br>
    {{ config('app.name') }} Team</p>
</body>
</html>
