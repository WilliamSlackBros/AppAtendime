
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo Mensagem de Confirmação</title>
    <style media="screen">
      #modalConfirmacao{
        margin-top:  150px!important;
      }
    </style>
    <?php
    //require_once("libs.php");
    ?>
<body class="container-fluid">

  <!-- Button trigger modal -->
  <!--
  <button type="button" class="btn btn-primary" id="btnModal" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
  </button>
-->

<div id="modalConfirmacao" class="modal" tabindex="-2" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar $variavel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja deletar $variavel?</p>
        <p>Tem certeza que deseja alterar  $variavel!</p>
      </div>
      <div class="modal-footer">
        <button id="btnConfirmarAcaoDeletar" type="button" class="btn btn-secondary" >Confirmar</button><!--data-dismiss="modalConfirmacao"-->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!--
<script>
$("#btnModal").on('click',function(){
$('#modalConfirmacao').modal('toggle');
});
</script>
-->
</body>
</html>
