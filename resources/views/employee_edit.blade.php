<h1>edit company</h1>
<form action="{{route('emp.update', ['employee' => $employee->id])}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$employee->name}}">
    <input type="text" name="lastname" value="{{$employee->lastname}}">
    <input type="date" name="birth" value="{{$employee->birth}}">
    <input type="text" name="personal_id" value="{{$employee->personal_id}}">
    <input type="text" name="salary" value="{{$employee->salary}}">
    <button type="submit">edit</button>
</form>

