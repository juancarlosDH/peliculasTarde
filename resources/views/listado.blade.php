@extends('layout')

@section('main')
    @forelse ($pelis as $peli)
        <div class="">
            {{ $peli }}
        </div>
    @empty
        <div class="">
            No hay ninguna peli
        </div>
    @endforelse
@endsection
