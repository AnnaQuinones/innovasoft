@extends('layouts.app')

@section('content')
<div class="container">
          
    <form action="{{ url('/favorito') }}" method="post">
        @csrf
        @include('favorito.list')
    </form>
</div>
@endsection