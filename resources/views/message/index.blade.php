<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
</head>
<body>

<h2>All Messages</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    @foreach($messages as $msg)
    <tr>
        <td>{{ $msg->id }}</td>
        <td>{{ $msg->name }}</td>
        <td>{{ $msg->email }}</td>
        <td>{{ $msg->message }}</td>
        <td>{{ $msg->created_at }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
