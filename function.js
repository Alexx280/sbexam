function clock() {
    var d = new Date();
    var month_num = d.getMonth()
    var day = d.getDate();
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var seconds = d.getSeconds();

    month=new Array("января", "февраля", "марта", "апреля", "мая", "июня",
        "июля", "августа", "сентября", "октября", "ноября", "декабря");

    if (day <= 9) day = "0" + day;
    if (hours <= 9) hours = "0" + hours;
    if (minutes <= 9) minutes = "0" + minutes;
    if (seconds <= 9) seconds = "0" + seconds;

    date_time = "Сегодня - " + day + " " + month[month_num] + " " + d.getFullYear() +
    " г.&nbsp;&nbsp;&nbsp;Текущее время - "+ hours + ":" + minutes + ":" + seconds;
    if (document.layers) {
        document.layers.doc_time.document.write(date_time);
        document.layers.doc_time.document.close();
    }
    else document.getElementById("doc_time").innerHTML = date_time;
    setTimeout("clock()", 1000);
}


function createMessage(title, body) {
    var container = document.createElement('div')

    container.innerHTML = '<div class="my-message"> \
    <div class="my-message-title">'+title+'</div> \
    <div class="my-message-body">'+body+'</div> \
    <input class="my-message-ok" type="button" value="OK"/> \
  </div>'

    return container.firstChild
}

function positionMessage(elem) {
    elem.style.position = 'absolute'

    var scroll = document.documentElement.scrollTop || document.body.scrollTop
    elem.style.top = scroll + 500 + 'px'

    elem.style.left = Math.floor(document.body.clientWidth/2) - 150 + 'px'
}

function addCloseOnClick(messageElem) {
    var input = messageElem.getElementsByTagName('INPUT')[0]
    input.onclick = function() {
        messageElem.parentNode.removeChild(messageElem)
    }
}


function setupMessageButton(title, body) {
    var messageElem = createMessage(title, body)
    positionMessage(messageElem)
    addCloseOnClick(messageElem)
    document.body.appendChild(messageElem)
}
