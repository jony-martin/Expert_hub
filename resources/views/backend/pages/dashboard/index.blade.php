@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')

    @if (auth()->user()->role == 'admin')
        @include('backend.pages.dashboard.admin')
    @elseif (auth()->user()->role == 'user')
        @include('backend.pages.dashboard.user')
    @endif

@endsection