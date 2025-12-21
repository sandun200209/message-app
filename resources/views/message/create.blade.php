<!DOCTYPE html>
<html>
<head>
    <title>Send Message</title>
</head>
<body>

<h2>Send Message</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/send-message">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <textarea name="message" placeholder="Message"></textarea><br><br>

    <button type="submit">Send</button>
</form>

</body>
</html>
