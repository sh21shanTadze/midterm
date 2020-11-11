@extends('index')
@section('content')
<h1>edit company</h1>
<form action="{{route('comp.update', ['company' => $company->id])}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$company->name}}">
    <input type="text" name="code" value="{{$company->code}}">
    <input type="text" name="address" value="{{$company->address}}">
    <input type="text" name="city" value="{{$company->city}}">
    <input type="text" name="country" value="{{$company->country}}">
    <button type="submit">edit</button>
</form>
@endsection
