/* Script do clima, isto é, condições climáticas em tempo real de São Pedro da Aldeia/RJ */
function clima() {
    $.get("http://apidev.accuweather.com/currentconditions/v1/40613.json?language=pt&apikey=hoArfRosT1215", function (data) {
        $('#temperatura').html(data[0].Temperature.Metric.Value.toFixed(0));
        
        $('#iconeClima').attr('src', 'https://vortex.accuweather.com/adc2010/images/slate/icons/' + data[0].WeatherIcon + '.svg');
    });
}