/*Script do relógio da página inicial*/
function horarioHome() {
    data = new Date();
    hora = data.getHours();
    if (hora < 10) {
        hora = '0' + hora;
    }
    min = data.getMinutes();
    if (min < 10) {
        min = '0' + min;
    }
    document.getElementById('relogio').innerHTML = hora + ":" + min;
    setTimeout('horarioHome()', 500);

    /* data */
    hoje = new Date();
    dia = hoje.getDate();
    dias = hoje.getDay();
    mes = hoje.getMonth();
    ano = hoje.getYear();
    if (dia < 10)
        dia = "0" + dia;
    if (ano < 2000)
        ano = 1900 + ano;
    function NArray(n)
    {
        this.length = n;
    }
    NomeDiaWMOnline = new NArray(7);
    NomeDiaWMOnline[0] = "domingo";
    NomeDiaWMOnline[1] = "segunda-feira";
    NomeDiaWMOnline[2] = "terça-feira";
    NomeDiaWMOnline[3] = "quarta-feira";
    NomeDiaWMOnline[4] = "quinta-feira";
    NomeDiaWMOnline[5] = "sexta-feira";
    NomeDiaWMOnline[6] = "sábado";
    NomeMesWMOnline = new NArray(12);
    NomeMesWMOnline[0] = "janeiro";
    NomeMesWMOnline[1] = "fevereiro";
    NomeMesWMOnline[2] = "março";
    NomeMesWMOnline[3] = "abril";
    NomeMesWMOnline[4] = "maio";
    NomeMesWMOnline[5] = "junho";
    NomeMesWMOnline[6] = "julho";
    NomeMesWMOnline[7] = "agosto";
    NomeMesWMOnline[8] = "setembro";
    NomeMesWMOnline[9] = "outubro";
    NomeMesWMOnline[10] = "novembro";
    NomeMesWMOnline[11] = "dezembro";
    document.getElementById('data').innerHTML = "Hoje é " + NomeDiaWMOnline[dias] + ", " + dia + " de " + NomeMesWMOnline[mes] + " de " + ano + ".";
}

/* Script do relógio do rodapé */
function horarioRodape() {
    data = new Date();
    hora = data.getHours();
    if (hora < 10) {
        hora = '0' + hora;
    }
    min = data.getMinutes();
    if (min < 10) {
        min = '0' + min;
    }
    document.getElementById('relogioRodape').innerHTML = hora + "h" + min;
    setTimeout('horarioRodape()', 500);

    /* data */
    hoje = new Date();
    dia = hoje.getDate();
    dias = hoje.getDay();
    mes = hoje.getMonth();
    ano = hoje.getYear();
    if (dia < 10)
        dia = "0" + dia;
    if (ano < 2000)
        ano = 1900 + ano;
    function NArray(n)
    {
        this.length = n;
    }
    NomeDiaWMOnline = new NArray(7);
    NomeDiaWMOnline[0] = "domingo";
    NomeDiaWMOnline[1] = "segunda-feira";
    NomeDiaWMOnline[2] = "terça-feira";
    NomeDiaWMOnline[3] = "quarta-feira";
    NomeDiaWMOnline[4] = "quinta-feira";
    NomeDiaWMOnline[5] = "sexta-feira";
    NomeDiaWMOnline[6] = "sábado";
    NomeMesWMOnline = new NArray(12);
    NomeMesWMOnline[0] = "janeiro";
    NomeMesWMOnline[1] = "fevereiro";
    NomeMesWMOnline[2] = "março";
    NomeMesWMOnline[3] = "abril";
    NomeMesWMOnline[4] = "maio";
    NomeMesWMOnline[5] = "junho";
    NomeMesWMOnline[6] = "julho";
    NomeMesWMOnline[7] = "agosto";
    NomeMesWMOnline[8] = "setembro";
    NomeMesWMOnline[9] = "outubro";
    NomeMesWMOnline[10] = "novembro";
    NomeMesWMOnline[11] = "dezembro";
    document.getElementById('dataRodape').innerHTML = NomeDiaWMOnline[dias] + ", " + dia + " de " + NomeMesWMOnline[mes] + " de " + ano;
}

