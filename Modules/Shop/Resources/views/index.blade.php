@extends('shop::layouts.shop')

@section('content')
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <p>
        This view is loaded from module: {!! config('shop.name') !!}
    </p>
@endsection
