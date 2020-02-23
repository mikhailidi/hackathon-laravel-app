@extends('layout.main')
@section('content')
    <div class="album text-muted" id="main">
        <div class="container">
            <div class="text-center">
                <img id="map-image" width="100%" src="{{ asset('images/travel.png') }}" class="img-thumbnail" alt="all_restaurants">
            </div>

            <table class="table" id="directions">
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
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('title')
    Let's travel
@endsection
@section('description')
    If you wanna try all available cousins in Berlin, follow the map.
@endsection

@section('extra-scripts')
{{--    <script type="text/javascript" src="{{asset('all_directions.json')}}"></script>--}}
    <script>
        $.getJSON("{{asset('all_directions.json')}}", function (data) {
            $.each(data, function (index, object) {
                $('#directions > tbody').append(
                    '<tr>' +
                        '<th scope="row">' + ++index +'</th>\n' +
                        '<td>' + object.from + '</td>\n' +
                        '<td>' + object.to +'</td>\n' +
                        '<td>' + parseFloat(object.time).toFixed(2) +'</td>\n' +
                        '<td>' + object.directions +'</td>\n' +
                    '</tr>'
                );
            });
        });

    </script>
@endsection
