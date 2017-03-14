
var base_url = function(path) {

    var pathArray = window.location.pathname.split( '/' );
    var protocolo = location.protocol;
    var base = window.location.host;
    if(base == 'josue-debian.ddns.net:8080' || base == 'localhost'){
        base += '/'+pathArray[1];
    }
    var url  = base;
    if(path !== undefined){
        url = url+path;
    }
    url = protocolo+'//'+url
    return url;
};
var public_url = function(path){
    var url  = (path !== undefined)? base_url('/public/')+path:base_url('/public/') ;
    return url;
};