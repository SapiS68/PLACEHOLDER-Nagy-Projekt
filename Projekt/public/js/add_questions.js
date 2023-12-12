var auth_token;
var name_input;

var autocomplete_timeout;
var autocomplete_div;

async function init() {
    let meta_tag = document.querySelector('meta[name="auth_token"]');
    if(meta_tag != null) {
        auth_token = meta_tag.content;
        meta_tag.remove();
    }

    name_input = document.getElementById('name_input');
    name_input.addEventListener("input", e => {
        autocomplete();
    });

    autocomplete_div = document.createElement("div");
    autocomplete_div.classList = "flex-row";
    autocomplete_div.style.position = "fixed";
    autocomplete_div.style.zIndex = "1";
    autocomplete_div.style.backgroundColor = "rgb(71 85 105)";
    document.body.appendChild(autocomplete_div);
}

function autocomplete() {
    if(autocomplete_timeout != null)
        clearTimeout(autocomplete_timeout);
    autocomplete_timeout = setTimeout(autocomplete_action, 500);
}
async function autocomplete_action() {
    let input = name_input.value;
    let data = await fetch('http://' + window.location.host + '/api/autocomplete/' + input, {
        headers: {
            "Authorization": "Bearer "+auth_token,
            "Content-type": "application/json; charset=UTF-8"
        }
    }).then((res) => res.json());

    
    while(autocomplete_div.firstChild) {
        autocomplete_div.removeChild(autocomplete_div.lastChild);
    }

    if(data.length == 0)
        return;

    let pos = name_input.getBoundingClientRect();
    autocomplete_div.style.left = pos.left;
    autocomplete_div.style.top = pos.bottom;

    data.forEach(game => {
        let element = document.createElement("p");
        element.classList = "text-white";

        let regex = new RegExp('('+input+')', 'gi');
        element.innerHTML = game.name.replace(regex, "<b>$1</b>");
        
        autocomplete_div.appendChild(element);
    });

}

async function confirm_replace() {
    let date = document.querySelector('input[type="date"]').value;
    if(!date) {alert('Először adj meg egy dátumot.'); return;}

    let question_form = document.getElementById("question_form");

    let data = await fetch('http://' + window.location.host + '/api/gamename/', {
        method: "POST",
        body: JSON.stringify({
            date: date
        }),
        headers: {
            "Authorization": "Bearer "+auth_token,
            "Content-type": "application/json; charset=UTF-8"
        }
    }).then((res) => res.json());

    if(!data.nogame) {
        if(window.confirm("Az adott dátumra már van kérdőív beírva ('"+data.game_name+"'). Cseréli a megadottakat?")) {question_form.submit();}
    }
    else {question_form.submit();}
}