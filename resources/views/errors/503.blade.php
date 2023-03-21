
@extends('errors::illustrated-layout')


@section('code', '503')
@section('title', __('Modo Mantenimiento'))
@section('image')
<div style="background-image: url('/svg/404.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>

@endsection

@section('message', __($exception->getMessage() ?: 'En este momento nos encontramos en modo de construccion.'))

