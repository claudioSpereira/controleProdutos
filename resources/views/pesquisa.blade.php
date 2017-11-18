@extends('Admin.index')

@section('content')

    @searchableform

    @foreach($users as $user)
                {{ $user->name }}<br>
    @endforeach

     {!! $users->appends(\Request::except('page'))->render() !!}  

@endsection
