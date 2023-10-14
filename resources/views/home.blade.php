@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="background-color: #333; color: #fff;"> <!-- Обновляем стили для card -->
                    <div class="card-header bg-primary text-white"> 
                        {{ __('Dashboard') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>{{ __('Welcome to dashboard!') }}</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
