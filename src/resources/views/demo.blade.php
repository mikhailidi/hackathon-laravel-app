@extends('layout.main')
@section('content')
    <div class="album text-muted" id="main">

        <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Restaurant</label>
                        <input type="text" class="form-control" placeholder="Search for restaurant..." id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="continents">Continent</label>
                        <select id="continents" class="form-control">
                            <option value="all_continents">All continents</option>
{{--                            <option value="asian_restaurants">Asia</option>--}}
{{--                            <option value="african_restaurants">Africa</option>--}}
{{--                            <option value="european_restaurants">Europe</option>--}}
{{--                            <option value="north_american_restaurants">North America</option>--}}
{{--                            <option value="south_american_restaurants">South America</option>--}}
{{--                            <option value="oceania_restaurants">Oceania</option>--}}
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="countries">Country</label>
                        <select id="countries" class="form-control">
                            <option>Choose the country...</option>
                        </select>
                    </div>
                </div>
            </form>

            <div class="text-center">
                <img id="map-image" width="100%" src="{{ asset('images/all_continents.png') }}" class="img-thumbnail" alt="all_restaurants">
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')
    <script>

        let countryContinent = [
            {
                "name": "Europe",
                "value": "european_restaurants",
                "countries": [
                    "Spain", "Italy", "Poland", "Germany"
                ]
            },
            {
                "name": "Asia",
                "value": "asian_restaurants",
                "countries": [
                    "Korea", "India", "China", "Japan"
                ]
            },
            {
                "name": "Africa",
                "value": "african_restaurants",
                "countries": [
                    "Sudan", "Morocco", "Egypt", "Ethiopia"
                ]
            },
        ];

        $('#lets-travel').on('click', function (e) {
            e.preventDefault();
            $('#main').toggle(2000);
        });

        function loadContinentsAndCountries() {
            countryContinent.forEach(function (continent) {

                $('#continents').append(
                    '<option value="' + continent.value +'"> ' + continent.name + '</option>'
                );

                let countrySelectObject = $('#countries');
                continent.countries.forEach(function (country) {
                    countrySelectObject.append(
                        '<option value="' + country + '"> ' + country + '</option>'
                    );
                });
            });
        }

        function loadContinentCountries(continent) {
            let countrySelectObject = $('#countries');
            countrySelectObject.find('option').remove();
            countrySelectObject.append(
                '<option >Choose the country...</option>'
            );
            continent.countries.forEach(function (country) {
                countrySelectObject.append(
                    '<option value="' + country + '"> ' + country + '</option>'
                );
            });
        }

        function getContinentByValue(value){
            for (let i=0; i < countryContinent.length; i++) {
                if (countryContinent[i].value === value) {
                    return countryContinent[i];
                }
            }
        }

        $('#continents').change(function () {
            let value = $(this).children("option:selected").val();
            let continent = getContinentByValue(value);
            loadContinentCountries(continent);
            $('#map-image').attr('src', 'http://localhost:8080/images/' + value +'.png');
        });

        $('#countries').change(function () {
            let value = $(this).children("option:selected").val();
            $('#map-image').attr('src', 'http://localhost:8080/images/' + value +'.png');
        });

        loadContinentsAndCountries();
    </script>
@endsection

@section('title')
    Our demo example, very basic example!
@endsection
@section('description')
    Live in Berlin? Love the food? And what about traveling?
@endsection
