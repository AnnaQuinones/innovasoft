@extends('layouts.app')

@section('content')
<div class="container">
          
    <form action="{{ url('/categoria') }}" method="post">
        @csrf
        @include('categoria.list')
    </form>
</div>
@endsection