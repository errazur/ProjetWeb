<div class="flex flex-1 flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class="flex flex-1 flex-row">

        <div class="flex flex-1 flex-col">
            <div id="chart" style="height: 300px;" class="m-2"></div>

        </div>
        <div class="flex flex-1 flex-col">

            @if($depense_nom != null)
            <div class="flex flex-1 flex-col m-2">
                {{$depense_desc}} {{$depense_nom}}
            </div>
            @endif

            @if($depense_nom == null)
            <div class="flex flex-1 flex-col m-2">
                Vous avez aucune depense récente
            </div>
            @endif

        </div>
    </div>

    <div class="flex flex-1 flex-row">

        <div class="flex flex-1 flex-col">

        </div>
        <div class="flex flex-1 flex-col">

        </div>
        <div class="flex flex-1 flex-col">

        </div>
    </div>
</div>

<!-- Charting library -->
<script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('finance_chart')",
        hooks: new ChartisanHooks()
            .beginAtZero()
            .colors()
            .borderColors()
            .datasets([{
                type: 'line',
                fill: false
            }, 'bar']),
    });
</script>
