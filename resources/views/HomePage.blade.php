<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    @foreach ($trains as $train)
        <div class="card">
            <h2>{{ $train->company }}</h2>
            <h3>{{ $train->departure_station }}</h3>
            <p>{{ $train->departure_time }}</p>
            <h3>{{ $train->arrival_station }}</h3>
            <p>{{ $train->arrival_time }}</p>
        </div>
    @endforeach
</body>
</html>









