var theOriginalAlert = alert;
window.alert = function(msg){
    if (typeof flag != 'undefined'){
        if (msg == 'flag'){
            theOriginalAlert(flag);
        }
    }else{
        theOriginalAlert(msg);
    }
};