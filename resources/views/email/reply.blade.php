<!-- resources/views/emails/contact-us.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Us Message</title>
</head>
<body>
    <h2>New Contact Us Message</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>
</body>
</html>
