@extends('base')

@section('content')

<h1>Dashboard</h1>

<p>
    <strong>Welcome {{auth()->user()->name}} </strong>
</p>

@endsection

<style scoped>

h1{
    position:absolute;
    top: 35%;
    left:43%;
}

p{
    position:absolute;
    top: 25%;
    left:43.5%;

}


</style>