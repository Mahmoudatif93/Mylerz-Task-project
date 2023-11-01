@extends('layout.app')

@section('title')
Dashboard
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">Simulator</li>
@endsection

@section('contents')
<div class="row">
    <div class="col text-center">
        <div class="card  text-black mb-4">
            <div class="card-body"><strong>Enable / Disable Simulator </strong> </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <div class="btn-group col-12 row" id="toggleButton">
                    <div class="col-6"><button type="button" class="btn btn-primary btn-lg active " onclick="enableDisable('true')">On</button></div>

                    <div class="col-6"><button type="button" class="btn btn-secondary btn-lg" onclick="enableDisable('false')">Off</button></div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body table-responsive"> <!--///////// live wire////////  -->
        @livewireStyles
        <livewire:FetcheiotData />
        @livewireScripts

    </div>
</div>

<div class="row">
    <div class="col text-center">
        <div class="card mb-12">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                <strong>Area Chart For Last Ten temperature and humidity</strong>
            </div>
          
            <canvas id="areaChart"></canvas>

        </div>
    </div>

</div>
@endsection

@push('js')

<script>
    var ctx = document.getElementById('areaChart').getContext('2d');

    var chartData = @json($chartData); // Convert PHP array to JavaScript object

    var data = {
        labels: chartData.map(function(item) {

            return item.humidity;
        }),
        datasets: [{
            label: 'Temperatures',
            data: chartData.map(function(item) {
                return item.temperature;
            }),
            fill: true,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
        }]
    };

    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
    });
</script>




<script>
    $(document).ready(function() {
        $('#toggleButton .btn').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });


    let isReceived = false;
    let xhr = new XMLHttpRequest();

    function enableDisable(type) {
        if (type == 'false') {
            window.stop();
            document.close();
        }
        xhr = $.ajax({
            url: 'simulator/' + type,
            type: "GET",
            dataType: "json"
        });

    }
</script>
@endpush