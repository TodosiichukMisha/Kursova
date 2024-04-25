@extends('layouts.admin')

@section('content')
    <div class="info-box-content">
        <canvas id="myChart" width="600" height="400"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        var MyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {{$labels}},
                datasets: [{
                    label: 'Кількість переглядів',
                    data: {{$count}},
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
@endsection
