/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





/*Script 1 de expansão-Expande Para o Lado- e recolhimento da barra de navegação*/
/*id--> elemento que sofre mudança/alteração. Ele SURGEEE*/
/*id2--> muda a largura*/
function expande(id, id2, id3) {
    document.getElementById(id).style.display = "block";
    document.getElementById(id2).style.width = "300px";
    document.getElementById(id3).style.background = "#303598";

}


function recolhe(id, id2, id3) {
    document.getElementById(id).style.display = "none";
    document.getElementById(id2).style.width = "120px";
    document.getElementById(id3).style.background = "none";
}


/*Script 2 de expansão- Expande Para Baixo*/
function exprec(variavel, icon) {
    gatinho = document.getElementById(variavel).style.display;

    if (gatinho === "none") {
        document.getElementById(variavel).style.display = "block";
        document.getElementById(icon).style.color = "#FFD100";
    } else {
        document.getElementById(variavel).style.display = "none";
        document.getElementById(icon).style.color = "#e1e1d0";

    }
}

