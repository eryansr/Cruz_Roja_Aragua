@extends('layout')
<head>
<title></title>

<script src="{{ asset('zingchart.min.js') }}"></script>

<script>
window.onload = function () {

var volmun = parseInt('{{$volmun}}');
var volmun1 = parseInt('{{$volmun1}}');
var volmun2 = parseInt('{{$volmun2}}');
var volmun3 = parseInt('{{$volmun3}}');
var volmun4 = parseInt('{{$volmun4}}');
var volmun5 = parseInt('{{$volmun5}}');
var volmun6 = parseInt('{{$volmun6}}');
var volmun7 = parseInt('{{$volmun7}}');
var volmun8 = parseInt('{{$volmun8}}');
var volmun9 = parseInt('{{$volmun9}}');
var volmun10 = parseInt('{{$volmun10}}');
var volmun11 = parseInt('{{$volmun11}}');
var volmun12 = parseInt('{{$volmun12}}');
var volmun13 = parseInt('{{$volmun13}}');
var volmun14 = parseInt('{{$volmun14}}');
var volmun15 = parseInt('{{$volmun15}}');
var volmun16 = parseInt('{{$volmun16}}');
var volmun17 = parseInt('{{$volmun17}}');

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    
    title:{
        text:"Cantidad de Voluntarios por Municipios"
    },
    axisX:{
        interval: 1
    },
    axisY2:{
        interlacedColor: "#dedddc",
        gridColor: "white",
        title: "Municipios"
    },
    data: [{
        type: "bar",
        name: "companies",
        axisYType: "secondary",
        color: "#AD7114",
        dataPoints: [
            { y: volmun, label: "Atanasio Girardot" },
            { y: volmun1, label: "Bolívar" },
            { y: volmun2, label: "Camatagua" },
            { y: volmun3, label: "Francisco Linares Alcántara" },
            { y: volmun4, label: "José Ángel Lamas" },
            { y: volmun5, label: "José Félix Ribas" },
            { y: volmun6, label: "José Rafael Revenga" },
            { y: volmun7, label: "Libertador" },
            { y: volmun8, label: "Mario Briceño Iragorry" },
            { y: volmun9, label: "Ocumare de la Costa de Oro" },
            { y: volmun10, label: "San Casimiro" },
            { y: volmun11, label: "San Sebastián" },
            { y: volmun12, label: "Santiago Mariño" },
            { y: volmun13, label: "Santos Michelena" },
            { y: volmun14, label: "Sucre" },
            { y: volmun15, label: "Tovar" },
            { y: volmun16, label: "Urdaneta" },
            { y: volmun17, label: "Zamora" }
        ]
    }]
});
chart.render();

}
</script>

    <script src="{{ asset('zingchart.min.js') }}"></script>
    
    <style>

    #centrar{
        display: inline-block;
        margin: 0 auto;
        justify-content: center;
        text-align: center;
    }

       #myChart {
            height: 600px;
            width: 800px;
            min-height: 150px;

        }

        #myChart2 {
            height: 600px;
            width: 1060px;
            min-height: 150px;

        }

        .zc-ref {
            display: none;
        }

        zing-grid[loading] {
            height: 450px;
        }
    </style>
</head>
@section('title', 'Home')

@section('content')

<div class="container">

    <div class="row">
        <div class="card" id="piechart" style="border:0px;">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            var hombre = parseInt('{{$volmacho}}');
            var mujer = parseInt('{{$volmacha}}');

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Hombres', hombre],
              ['Mujeres', mujer],

            ]);

              var options = {'title':'Grafica de Voluntarios por sexo', 'width':500, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
            </script>
        </div>
    </div>

    <div class="row"></div>

    <div class="row">
        <div id='myChart' class="card" style="border:0px; background-color: rgb(248, 250, 252);"><a class="zc-ref" href=""></a></div>
            <script>
                var volage = parseInt('{{ $volage }}');
                var volage1 = parseInt('{{$volage1}}');
                var volage2 = parseInt('{{$volage2}}');
                var volage3 = parseInt('{{$volage3}}');
                var volage4 = parseInt('{{$volage4}}');
                var volage5 = parseInt('{{$volage5}}');
                var volage6 = parseInt('{{$volage6}}');
                var volage7 = parseInt('{{$volage7}}');
                var max = parseInt('{{$voluntario}}');


                ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
                var myConfig = {
                    "graphset": [{
                        "type": "bar",
                        "background-color": "rgb(248, 250, 252)",
                        "title": {
                            "text": "Grupos por edad",
                            "font-color": "#7E7E7E",
                            "backgroundColor": "none",
                            "font-size": "22px",
                            "alpha": 1,
                            "adjust-layout": true,
                        },
                        "plotarea": {
                            "margin": "dynamic"
                        },
                        "legend": {
                            "layout": "x3",
                            "overflow": "page",
                            "alpha": 0.05,
                            "shadow": false,
                            "align": "center",
                            "adjust-layout": true,
                            "marker": {
                                "type": "circle",
                                "border-color": "none",
                                "size": "10px"
                            },
                            "border-width": 0,
                            "maxItems": 3,
                            "toggle-action": "hide",
                            "pageOn": {
                                "backgroundColor": "#000",
                                "size": "10px",
                                "alpha": 0.65
                            },
                            "pageOff": {
                                "backgroundColor": "rgb(248, 250, 252)",
                                "size": "10px",
                                "alpha": 0.65
                            },
                            "pageStatus": {
                                "color": "black"
                            }
                        },
                        "plot": {
                            "bars-space-left": 0.15,
                            "bars-space-right": 0.15,
                            "animation": {
                                "effect": "ANIMATION_SLIDE_BOTTOM",
                                "sequence": 0,
                                "speed": 800,
                                "delay": 800
                            }
                        },
                        "scale-y": {
                            "line-color": "#7E7E7E",
                            "item": {
                                "font-color": "#7e7e7e"
                            },
                            "values": "0:"+max+":0",
                            "guide": {
                                "visible": true
                            },
                            "label": {
                                "text": "Cantidad de personas",
                                "font-family": "arial",
                                "bold": true,
                                "font-size": "14px",
                                "font-color": "#7E7E7E",
                            },
                        },
                        "scaleX": {
                            "values": [
                                "7-12 años",
                                "13-17 años",
                                "18-30 años",
                                "31-40 años",
                                "41-50 años",
                                "51-60 años",
                                "61-70 años",
                                "71 ++"


                            ],
                            "placement": "default",
                            "tick": {
                                "size": 58,
                                "placement": "cross"
                            },
                            "itemsOverlap": true,
                            "item": {
                                "offsetY": -55
                            }
                        },
                        "scaleX2": {
                            "values": ["Rango de edades"],
                            "placement": "default",
                            "tick": {
                                "size": 20,
                            },
                            "item": {
                                "offsetY": -15
                            }
                        },
                        "tooltip": {
                            "visible": false
                        },
                        "crosshair-x": {
                            "line-width": "100%",
                            "alpha": 0.18,
                            "plot-label": {
                                "header-text": "%kv"
                            }
                        },
                        "series": [{
                                "values": [
                                    volage,
                                    volage1,
                                    volage2,
                                    volage3,
                                    volage4,
                                    volage5,
                                    volage6,
                                    volage7,

                                ],
                                "alpha": 0.95,
                                "borderRadiusTopLeft": 7,
                                "background-color": "#8993c7",
                                "text": "Edades",
                            }

                        ]
                    }]
                };

                zingchart.render({
                    id: 'myChart',
                    data: myConfig,
                    height: '100%',
                    width: '100%'
                });
            </script>
    </div>

    <div class="row" style="padding: 50px;"></div>

    <div class="row">
        <div class="card" id="chartContainer" style="height: 480px; width: 90%; border: 0px;"> 
            <script src="{{ asset('canvasjs.min.js') }}"></script>
        </div>
    </div>

@endsection
