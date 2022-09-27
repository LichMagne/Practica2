<div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <div class="container">

        <div class="row">
            <div class="card">
                <div class="card-body">
            <div class="col-lg">
                <button class="btn btn-danger" wire:click='refresh'><i class="bi bi-arrow-clockwise"></i></button>
                <hr>
                <figure class="highcharts-figure">
                    <div id="c"></div>
                </figure>
            </div>
            <br>
            <br>
            <div class="col-lg">
                <figure class="highcharts-figure">
                    <div id="cont"></div>
                </figure>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <script>
        let data1;

        function drawChart(us, date) {

            var options = {
                chart: {
                    renderTo: 'c',
                    backgroundColor: {
            linearGradient: [0, 0, 500, 500],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)']
            ],
            borderWidth: 1,
    plotBorderWidth: 1,
    marginBottom: 100
        },
                },
                title: {
                    text: 'CO2 de los 50 dias'
                },
                yAxis: {
                    title: {
                        text: 'CO2 en el aire'
                    }
                },

                xAxis: {
                    title: {
                        text: 'Año de CO2 en el aire'
                    }
                },
                credits:{
                    enabled:false
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {

      borderColor: 'black',
      animation: false,

                        label: {
                            connectorAllowed: true
                        },
                        pointStart: 2000,
                    }
                },

                series: [{
                    name: 'CO2',
                    data: us,
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            };

            data1 = Highcharts.chart(options);
            data1.redraw();
        }









        window.addEventListener('livewire:load', event => {
            drawPieChart(@this.brow);
            drawChart(@this.us, @this.date);
        });


        window.addEventListener('livewire:refresh', event => {
            drawPieChart(@this.brow);
            drawChart(@this.us, @this.date);
        });


        function drawPieChart(brow) {

            var options = {
                chart: {
                    renderTo: 'cont',
                    type: 'pie',
                    backgroundColor: {
            linearGradient: [0, 0, 500, 500],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)'],
            ],
              borderWidth: 2,
    plotBorderWidth: 2,
    marginBottom: 100
        },

                },
                title: {
                    text: 'Browser market shares in May, 2020'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: brow,
                }]
            };
            data1 = Highcharts.chart(options)
            data1.series;
            data1.redraw();

            console.log(data1);


        }

        












    </script>



</div>
