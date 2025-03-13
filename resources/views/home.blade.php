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
        <div class="container section-wrapper">
            <div class="section-title"><span>CURRENT SERIES</span></div>
            
            <div class="mt-5 row row-cols-lg-6 row-cols-md-4 row-cols-2">
                @foreach ($comics as $comic)
                    <div class="col">
                        <x-card>
                            <x-slot:imgPath>{{$comic["thumb"]}}</x-slot:imgPath>
                            <x-slot:title>{{$comic["title"]}}</x-slot:title>
                        </x-card>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <x-button>
                    <x-slot:text>load more</x-slot:text>
                </x-button>
            </div>
           
        </div>
    </main>

@endsection