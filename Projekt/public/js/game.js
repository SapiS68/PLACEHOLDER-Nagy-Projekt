// szükséges később: <meta name="auth_token" content="<?= auth()->user()->api_token ?>">
// szükséges id-k: attempts_made, attempts_left, attempt_input, clue_image, time_label

// warning: nagyon sok a jank
var attempts_made, attempts_left, attempt_input, time_label;
var token;
var pics, pic_ind = 0;
var time;

var auth_token;
var autocomplete_div;
var autocomplete_timeout;


async function init() {
    let meta_tag = document.querySelector('meta[name="auth_token"]');
    if(meta_tag != null) {
        auth_token = meta_tag.content;
        meta_tag.remove();
    }

    attempts_made = document.getElementById('attempts_made');
    attempts_left = document.getElementById('attempts_left');
    attempt_input = document.getElementById('attempt_input');
    time_label = document.getElementById('time_label');

    attempt_input.addEventListener("keypress", e => {
        if(e.code === "Enter")
            send();
    });
    attempt_input.addEventListener("input", e => {
        autocomplete();
    });

    // autocomplete div
    autocomplete_div = document.createElement("div");
    autocomplete_div.id = "autocomplete_list";

    autocomplete_div.classList = "flex-row" /*"bg-slate-500"*/;

    autocomplete_div.style.position = "fixed";
    autocomplete_div.style.zIndex = "1";

    autocomplete_div.style.backgroundColor = "rgb(71 85 105)";
    document.body.appendChild(autocomplete_div);


    await load_data();

    start_timer();
}

async function load_data() {
    if(auth_token == null) {
        alert('Nincs felhasználó token megadva');
        return;
    }

    while(attempts_made.firstChild) {
        attempts_made.removeChild(attempts_made.lastChild);
    }
    let previous_attempts = load_attempts();
    for (let i = 0; i < previous_attempts.length; i++) {
        let element = document.createElement('p');
        element.classList = "flex justify-center text-red-500";
        element.innerText = previous_attempts[i];
        attempts_made.appendChild(element);
    }

    let data = await fetch('http://' + window.location.host + '/api/guess?' + new URLSearchParams({api_token: auth_token})).then((res) => res.json());

    if(data.nogame != null) {
        alert('Nincs játék a mai napon, térjen át egy üres oldalra, üzenettel');
        return;
    }
    if(data.finished) {
        alert('A mai játék már be lett fejezve, később ide refresh/redirect és hozzátartozó session adat törlése');
        save_attempts([]);
        return;
    }

    attempts_left.innerText = 5 - data.attempts_made;
    pics = data.images;
    clue_image.src = data.images[pic_ind];
    time = data.time_in_secs;
}
async function start_timer() {
    while(true) {
        let time_remain = time;
        let time_in_array = [0, 0, 0];
        for (let index = 0; index < 2; index++) {
            time_in_array[index] = time_remain % 60;
            time_remain = Math.floor(time_remain / 60);
        }
        time_in_array[2] = time_remain;

        time_label.innerText = 
            time_in_array[2].toString().padStart(2, '0') + ":" +
            time_in_array[1].toString().padStart(2, '0') + ":" +
            time_in_array[0].toString().padStart(2, '0');

        await new Promise(r => setTimeout(r, 1000));
        time++;
    }
}
async function send() {
    if(auth_token == null) {
        alert('Nincs felhasználó token megadva');
        return;
    }

    let input = attempt_input.value;
    if(input == "")
        input = "ATLEPVE";
    
    attempt_input.value = "";
    while(autocomplete_div.firstChild) {
        autocomplete_div.removeChild(autocomplete_div.lastChild);
    }

    list = load_attempts();

    list.push(input);
    save_attempts(list);

    await fetch('http://' + window.location.host + '/api/guess', {
        method: "POST",
        body: JSON.stringify({
            guess: input
        }),
        headers: {
            "Authorization": "Bearer "+auth_token,
            "Content-type": "application/json; charset=UTF-8"
        }
    });

    await load_data();
}

function autocomplete() {
    if(autocomplete_timeout != null)
        clearTimeout(autocomplete_timeout);
    autocomplete_timeout = setTimeout(autocomplete_action, 500);
}
async function autocomplete_action() {
    let input = attempt_input.value;
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

    let pos = attempt_input.getBoundingClientRect();
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
function nextpic() {
    pic_ind = (pic_ind + 1) % pics.length;
    clue_image.src = pics[pic_ind];
}
function prevpic() {
    pic_ind = (pics.length + (pic_ind - 1)) % pics.length;
    clue_image.src = pics[pic_ind];
}

function load_attempts() {
    data = JSON.parse(sessionStorage.getItem('attempts_string'));

    if(!Array.isArray(data))
        return [];
    return JSON.parse(sessionStorage.getItem('attempts_string'));
}
function save_attempts(data) {
    sessionStorage.setItem('attempts_string', JSON.stringify(data));
}