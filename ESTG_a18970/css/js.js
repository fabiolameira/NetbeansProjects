function init() {
    var form = document.getElementById("form");
    form.addEventListener("submit", informar, false);
    document.getElementById("buttoncontact").addEventListener("click", changeCSS, false);
}
function informar(e) {
    e.preventDefault();
    var email = document.getElementById("email");
    var nome = document.getElementById("name");
    var comment = document.getElementById("comment");
    var result1 = document.getElementById("result1");
    var result2 = document.getElementById("result2");
    var result3 = document.getElementById("result3");
    result1.innerHTML = email.value;
    result2.innerHTML = nome.value;
    result3.innerHTML = comment.value;
}

function changeCSS() {
    var alert = document.getElementById("id2");

    alert.style.visibility = "visible";
}
