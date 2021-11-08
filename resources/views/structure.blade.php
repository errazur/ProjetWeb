@extends('layouts.app')


@section('content')

    <livewire:parc :clubuser="$clubuser" :stade="$stade" :centre_entrainement="$centre_entrainement" :centre_jeune="$centre_jeune" />

@endsection
