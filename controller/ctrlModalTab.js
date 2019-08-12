$(function(){

});
$(document).on('click', '#btnModalViewer', function(e){
  e.preventDefault;
$('#modalTabAtendime').modal('toggle');
let dadosLinha = $(this).closest('tr').find('td');
let setDados= new Array();
$( dadosLinha ).each(function( index ) {
  setDados[index]=$( this ).text();
});
console.log(setDados);
console.log(setDados[3]);
document.querySelector("#txtCodigo").value=setDados[0].trim();
document.querySelector("#txtMatricula").value=setDados[3].trim();
document.querySelector("#txtFunc").value=setDados[4].trim();
document.querySelector("#txtSetor").value=setDados[5].trim();
document.querySelector("#txtFuncao").value=setDados[6].trim();
document.querySelector("#txtRamal").value=setDados[7].trim();
document.querySelector("#txtProblema").value=setDados[10].trim();
document.querySelector("#txtSolucao").value=setDados[11].trim();
});
$(document).on('click', '#btnModalDelete', function(e){
    e.preventDefault;
$('#modalConfirmacao').modal('toggle');
});
$(document).on('click', '#btnConfirmarAcaoSalvar', function(e){
  $('#modalTabAtendime').modal('hide');
$('#modalMessage').modal('show');
});
$(document).on('click', '#btnConfirmarAcaoDeletar', function(e){
  $('#modalConfirmacao').modal('hide');
$('#modalMessage').modal('show');
});
