<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <style>
        table {
            width: 50%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        th{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>User Information</h1>
    <table border="1px">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
            <td>{{$user->email_address}}</td>
        </tr>
    </table>
</body>
</html>
