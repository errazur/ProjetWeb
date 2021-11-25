@extends('layouts.app')


@section('content')

<livewire:tactique :clubuser="$clubuser" :joueurs="$joueurs"/>

@endsection
