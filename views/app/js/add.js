function goAdd(){
  var connect, form, response, result, pais, grupo, flag;
  pais = __('pais').value;
  grupo = __('grupo').value;
  flag = __('flag').value;
  form = 'pais=' + pais + '&grupo=' + grupo + '&flag=' + flag;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function(){
    if(connect.readyState == 4 && connect.status == 200){
      if (connect.responseText == 1) {
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado</h4>';
        result += '<p><strong>Estamos redireccionando</strong></p>';
        result += '</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
        location.reload();
      }else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    }else if(connect.readyState != 4){
      result = '<div class="alert alert-dismissible alert-warning">';
      result += 'button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando</h4>';
      result += '<p><strong estamos intentando logearte></strong></p>';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=add',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}

function runScriptAdd(e) {
  if(e.keyCode == 13){
    goAdd();
  }
}
