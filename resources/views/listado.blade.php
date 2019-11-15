@extends('layout')

@section('main')
    @forelse ($pelis as $peli)
        <div class="">
            {{ $peli->title }}
        </div>
    @empty
        <div class="">
            No hay ninguna peli
        </div>
    @endforelse
@endsection
