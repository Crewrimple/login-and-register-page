@extends('layouts.app')

@section('content')
<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        font-size: 1.25rem;
    }

    .card-body {
        padding: 20px;
    }

    .card-body p {
        margin-bottom: 10px;
    }

    .card-body p:last-child {
        margin-bottom: 0;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <p>{{ __('Welcome to your profile page.') }}</p>
                    <p>{{ __('Email Address: ') }} {{ $user->email }}</p>
                    <p>{{ __('Phone Number: ') }} {{ $user->phone_number }}</p>
                    <p>{{ __('Name: ') }} {{ $user->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

