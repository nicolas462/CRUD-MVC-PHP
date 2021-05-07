document.getElementById('email').addEventListener("input", function(){
    var email = document.getElementById('email').value;
    var text = document.getElementById('emailValidacion');
    var btn = document.getElementById('buttonSubmit');

    if(email.match('@') && email.includes("."))
    {
        text.innerHTML = "";
        btn.classList.remove("disabled");
    }
    else
    {
        text.innerHTML = "Ingrese un email válido.";
        btn.classList.add("disabled");
    }
});


