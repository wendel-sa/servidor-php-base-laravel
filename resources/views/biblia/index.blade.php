@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul class="nav">
                        @foreach($versoes as $versoes)

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('')}}">{{ $versoes['version'] }}</a>
                        </li>


                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
