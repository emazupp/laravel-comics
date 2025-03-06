@extends('layouts.master')

@section('title')
Laravel comics
@endsection

@php
    $comics = config("comics")
@endphp

@section("outlet")
    <main>
        <div class="jumbo-container">
            <img src="{{Vite::asset("resources/img/jumbotron.jpg")}}" alt="comics-jumbo" class="comics-jumbo-img">
        </div>
        <div class="container">
            <h1>CURRENT SERIES</h1>
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        <x-card>
                            <x-slot:imgPath>{{$comic["thumb"]}}</x-slot:imgPath>
                            <x-slot:title>{{$comic["title"]}}</x-slot:title>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection