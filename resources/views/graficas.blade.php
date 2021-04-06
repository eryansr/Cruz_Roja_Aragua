@extends('layout')
<head>
    <title></title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Simple Column Chart with Index Labels"
    },
    data: [{
        type: "column", //change type to bar, line, area, pie, etc
        //indexLabel: "{y}", //Shows y value on all Data Points
        indexLabelFontColor: "#5A5757",
        indexLabelPlacement: "outside",
        dataPoints: [
            {  y: 2 },
            {  y: "{{ $volmacha }}" },
       
        ]
    }]
});
chart.render();

}
</script>
@section('title', 'Home')


@section('content')
<div id="chartContainer" style="height: 300px; width:500px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</script>

@endsection