 $("#btnTransfAtendime").on('click',function(){

let isDisable = $("#btnTransfAtendime").prop('checked');
if (isDisable) {
  $("#txtSolucao").prop( "readonly", true );
  $("#txtFuncOficina").prop( "readonly", false );
}else{
  $("#txtSolucao").prop( "readonly", false );
  $("#txtFuncOficina").prop( "readonly", true );
}
});
