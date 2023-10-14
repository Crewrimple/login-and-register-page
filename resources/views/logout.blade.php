@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Выход') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <p>Вы уверены, что хотите выйти?</p>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Выйти') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
