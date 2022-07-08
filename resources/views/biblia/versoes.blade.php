@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @foreach($versoes as $versoes)
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="{{ $versoes['version'] }}" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $versoes['version'] }}
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
