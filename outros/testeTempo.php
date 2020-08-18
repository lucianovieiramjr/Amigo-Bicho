<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>teste tempo</title>
        
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>  
        <script>
            $(document).ready(function () {
                $.get("http://apidev.accuweather.com/currentconditions/v1/40613.json?language=pt&apikey=hoArfRosT1215", function (data) {
                    $('#temperatura').html(data[0].Temperature.Metric.Value.toFixed(0));
                    $('#A').html(data[0].WeatherText);       
                    document.getElementById("iconeClima").title = document.getElementById("A").value; 
                    $('#iconeClima').attr('src', 'https://vortex.accuweather.com/adc2010/images/slate/icons/' + data[0].WeatherIcon + '.svg');
                });
            });
        </script>
    </head>
    <body>
        <img src='' id="iconeClima" height="50px" width="50px" title="">
        <br/>
        <strong>São Pedro da Aldeia</strong><br/>
        <span id="temperatura"></span><br/>
        <span id="A"></span>

    <marquee>Este texto vai "rolar" da direita para esquerda</marquee>

    <marquee direction="up">Este texto vai rolar de baixo para cima.</marquee>

    <marquee direction="down" width="250" height="200" behavior="alternate" style="border:solid">
        <marquee behavior="alternate">
            Este texto vai pular
        </marquee>
    </marquee>
    
</body>
</html>
