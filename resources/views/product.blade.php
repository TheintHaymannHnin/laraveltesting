@extends('mycreatefolder/home')
@section('content')
<h1>Brand Detail</h1>
<p>
    @if (count($item))
    @foreach($item as $data)
    <li>{{$data}}</li>
    @endforeach
    @endif

</p>
@endsection