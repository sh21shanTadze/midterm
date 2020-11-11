<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<h1>add company</h1>
<form action="{{route('comp.create')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name">
    <input type="text" name="code" placeholder="enter code">
    <input type="text" name="address" placeholder="enter address">
    <input type="text" name="city" placeholder="enter city">
    <input type="text" name="country" placeholder="enter country">
    <button type="submit">create</button>
</form>
<br><br>
<hr>
<h1>companies</h1>
<table id="customers">
    <tr>
        <th>name</th>
        <th>code</th>
        <th>address</th>
        <th>city</th>
        <th>country</th>
    </tr>
    @foreach($companies as $comp)
    <tr>
        <td>{{$comp->name}}</td>
        <td>{{$comp->code}}</td>
        <td>{{$comp->address}}</td>
        <td>{{$comp->city}}</td>
        <td>{{$comp->country}}</td>
        <td><a href="{{route('comp.edit', ['company' => $comp->id])}}">edit</a></td>
        <td>
            <form action="{{route('comp.delete', ['company' => $comp->id])}}" method="POST">
                @csrf
                <button type="submit">delete</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
<hr>
<h1>add employee</h1>
<form action="{{route('emp.create')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name">
    <input type="text" name="lastname" placeholder="enter lastname">
    <input type="date" name="birth" placeholder="enter birth">
    <input type="text" name="personal_id" placeholder="personal_id">
    <input type="text" name="salary" placeholder="enter salary">
    <button type="submit">create</button>
</form>
<br><br>
<hr>
<h1>employees</h1>
<table id="customers">
    <tr>
        <th>name</th>
        <th>lastname</th>
        <th>birth</th>
        <th>personal_id</th>
        <th>salary</th>
    </tr>
    @foreach($employee as $emp)
        <tr>
            <td>{{$emp->name}}</td>
            <td>{{$emp->lastname}}</td>
            <td>{{$emp->birth}}</td>
            <td>{{$emp->personal_id}}</td>
            <td>{{$emp->salary}}</td>
            <td><a href="{{route('emp.edit', ['employee' => $emp->id])}}">edit</a></td>
            <td>
                <form action="{{route('emp.delete', ['employee' => $emp->id])}}" method="POST">
                    @csrf
                    <button type="submit">delete</button>
                </form>
            </td>

        </tr>
    @endforeach
</table>
</body>
</html>
