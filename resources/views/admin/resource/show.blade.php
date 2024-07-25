@extends('dashboard.admin')

@section('admin-content')
<head>
    <style>
        /* Add some basic CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        p {
            font-size: 18px;
            font-weight: bold;
        }
        hr {
            border: 1px solid #ccc;
        }
        a {
            text-decoration: none;
            color: #337ab7;
        }
        a:hover {
            color: #23527c;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #3e8e41;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<p><b>Projects List</b></p>
<hr/>
<a href="{{url('/task/add')}}">
    <button>
        Add Resource
    </button>
</a>
<br/><br/>
<table border="1" rules="all">
    <thead>
        <tr>
            <th>#</th>
            <th>Project Name</th>
            <th>Status</th>
            <th>Manager</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Task 1</td>
            <td>Pending</td>
            <td>Complete/Pending</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </tbody>
</table>

</center>
@endsection
