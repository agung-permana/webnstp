@extends('layouts.master')

@section('content')
    <h2>Selamat Datang {{ Auth::user()->name }}</h2>
@endsection