
function init() {
    var form = document.getElementById("form");
    form.addEventListener("submit", informar, false);
    document.getElementById("button2").addEventListener("click", changeCSS, false);
}
function informar(e) {
    e.preventDefault();
    var nome = document.getElementById("name");
    var telemovel = document.getElementById("phone");
    var email = document.getElementById("email");
    var password = document.getElementById("pwd");
    var result1 = document.getElementById("result1");
    var result2 = document.getElementById("result2");
    var result3 = document.getElementById("result3");
    var result4 = document.getElementById("result4");
    result1.innerHTML = nome.value;
    result2.innerHTML = telemovel.value;
    result3.innerHTML = email.value;
    result4.innerHTML = password.value;
}

function changeCSS() {
    var alert = document.getElementById("id2");

    alert.style.visibility = "visible";
}
