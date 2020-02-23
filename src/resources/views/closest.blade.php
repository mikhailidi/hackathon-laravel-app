@extends('layout.main')
@section('content')
    <div class="album text-muted" id="main">
        <div class="container">

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Time (min)</th>
                    <th scope="col" class="text-center">Directions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>WCSB</td>
                    <td>Sam Yuk Gu</td>
                    <td>3.98</td>
                    <td>Head northwest on Oudenarder Straße. Go for 56 m.Turn right onto Seestraße. Go for 173 m.Arrive at Seestraße. Your destination is on the right.</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>WCSB</td>
                    <td>Mandi</td>
                    <td>7.20</td>
                    <td>Head northwest on Oudenarder Straße. Go for 56 m.Turn left onto Seestraße. Go for 366 m.Arrive at Seestraße. Your destination is on the right.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>WCSB</td>
                    <td>Stranero</td>
                    <td>7.90</td>
                    <td>Head east on Oudenarder Straße. Go for 151 m.Turn right onto Groninger Straße. Go for 173 m.Turn left onto Liebenwalder Straße. Go for 136 m.Arrive at Liebenwalder Straße. Your destination is on the left.</td>
                </tr>
                </tbody>
            </table>

            <div class="text-center">
                <img id="map-image" width="100%" src="{{ asset('images/closest.png') }}" class="img-thumbnail" alt="all_restaurants">
            </div>
        </div>
    </div>
@endsection

@section('title')
    Closest restaurants
@endsection
@section('description')
    Hungry? Lazy? There're some restaurants that are 10 min away from you.
@endsection
