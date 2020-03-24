<?php header('Content-Type: text/javascript'); ?>
var flag = '<?php echo "theflag"; ?>';
var theOriginalAlert = alert;
window.alert = function(msg){
    if (typeof flag != 'undefined' && msg == 'flag'){
            theOriginalAlert(flag);
    }else if(typeof flag == 'undefined'){
        theOriginalAlert(msg);
    }else{
        theOriginalAlert('Respuesta incorrecta');
    }
};