@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    Welcome to my First Laravel Application Dashboard
@endsection

@section('footerScript')
    @parent
    <script src="dashboard.js"></script>
@endsection