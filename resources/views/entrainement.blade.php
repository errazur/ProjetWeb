@extends('layouts.app')

@section('content')

<livewire:training :clubuser="$clubuser" :joueurs="$joueurs" />

@endsection
