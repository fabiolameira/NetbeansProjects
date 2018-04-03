/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function init(){
    document.getElementById("button1").addEventListener("click", ShowCurrentDate, false);
    document.getElementById("button2").addEventListener("click", ChangeCSS, false);
    document.getElementById("form1").addEventListener("submit", ConvertCurrency, false);
}

function ShowCurrentDate(){
    var result1 = document.getElementById("result1");
    result1.innerHTML = Date();
}

function ChangeCSS(){
    var paragraph = document.getElementById("p2");
    paragraph.style.color = "blue";
    paragraph.style.fontSize = "35px";
    paragraph.style.fontWeight = "bold";
}

function ConvertCurrency(e){
    e.preventDefault();
    var ratio = 0.8386009585;
    var dolar = document.getElementById("dolar");
    var result2 = document.getElementById("result2");
    
    result2.innerHTML = (dolar.value * ratio).toFixed(2) +"€";
}