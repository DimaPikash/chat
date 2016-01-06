
window.onload = function() {
    var message = document.getElementById('message');
    var btnSend = document.getElementById('send');
    var input = document.getElementById('input');
    var btnExit = document.getElementById('exit');
    var status = document.getElementById('status');
    var color = 'OrangeRed';

    var webSocket = new WebSocket('ws://localhost:8080');

    btnSend.onclick = function ()
    {
        var toSend = {
            'user': user,
            'color': color,
            'msg': message.value
        };
        webSocket.send( JSON.stringify( toSend ) );
        message.value = "";
    }

    btnExit.onclick = function () {
        webSocket.close();
    }

    webSocket.onopen = function(event)
    {
        status.innerHTML = 'Соединение установлено...';
    }

    webSocket.onmessage = function (event)
    {
        var toRead =  JSON.parse( event.data );
        input.innerHTML += "<p style='color:"+toRead.color+";'>"+toRead.user+': '+toRead.msg;
    };

    webSocket.onclose = function ()
    {
        status.innerHTML = 'Соединение разорвано';
    };
}
