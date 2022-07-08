@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-3">
        <ol class="list-group list-group-numbered">
            @foreach($books as $books)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $books['name'] }}</div>
                    {{ $books['abbrev'] }}
                </div>
                <span class="badge bg-primary rounded-pill">{{ $books['testament'] }}</span>
            </li>
            @endforeach

        </ol>
    </div>
    <div class="col-7 row">
        <div class="">
            <div class="card">
                <div class="card-header">{{ __('Versiculos') }}</div>

                <div class="card-body">
                    @foreach($texto as $texto)
                    <div class="p-2">
                        <p class="p">
                            {{ $texto['text'] }}
                        </p>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                The current link item
            </a>
            @for($capitulos ; $capitulos > 0; $capitulos--)
            <a href="#" class="list-group-item list-group-item-action">{{ $capitulos}}</a>
            @endfor
        </div>
    </div>
</div>
@endsection
