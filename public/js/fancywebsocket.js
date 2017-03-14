var FancyWebSocket = function(url)
{
	var callbacks = {};
	var ws_url = url;
	var conn;

	this.bind = function(event_name, callback)
	{
		callbacks[event_name] = callbacks[event_name] || [];
		callbacks[event_name].push(callback);
		return this;
	};

	this.send = function(event_name, event_data)
	{
		this.conn.send( event_data );
		return this;
	};

	this.connect = function()
	{
		if ( typeof(MozWebSocket) == 'function' )
			this.conn = new MozWebSocket(url);
		else
			this.conn = new WebSocket(url);

		this.conn.onmessage = function(evt)
		{
			dispatch('message', evt.data);
		};

		this.conn.onclose = function(){dispatch('close',null)}
		this.conn.onopen = function(){dispatch('open',null)}
	};

	this.disconnect = function()
	{
		this.conn.close();
	};

	var dispatch = function(event_name, message)
	{

		if(!message == null || !message == ""){

			var datos    = JSON.parse(message);
			switch(datos.actualizacion){
				case 1:
					actualiza_mensaje(message);
				break;
				case 2:
					actualiza_solicitud(message);
				break;
				case 3:
					conectado(datos.nombre);
				break;
			}
		}
	}
};

var Server;
function send( text )
{
	Server.send( 'message', text );
}
$(document).ready(function()
{
	Server = new FancyWebSocket('ws://192.168.0.10:12345');
	Server.bind('open', function()
	{
	});
	Server.bind('close', function( data )
	{
	});
	Server.bind('message', function( payload )
	{
	});
	Server.connect();
});



function actualiza_mensaje(message)
{
	var datos       = JSON.parse(message);
	var personas_id = datos.personas_id;
	var mensaje     = datos.mensaje;
	var fecha       = datos.fecha;
	var cant        = datos.cant;

	var tr = '<tr><td>'+mensaje+'</td><td>'+fecha+'</td><tr/>';

	$("#"+personas_id).html(cant);
	$('#persona_'+personas_id).find('tbody').append(tr);
}
function actualiza_solicitud()
{
	alert("tipo de envio 2");
}

function conectado(nombre)
{
	var texto = 'Se ha conectado:<span style="color:red">'+nombre+'</span>';
	$( "div#conectado" ).html(texto).fadeIn( "slow" ).delay(2000).fadeOut('slow');
}
