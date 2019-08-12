
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo Mensagens</title>
    <style media="screen">

      #modalMessage{
        margin-top: 150px!important;
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
<!--
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
-->

<div id="modalMessage" class="modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mensagem de $varaivel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Mensagens de acordo com açao.Sucesso ou Erro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modalMessage">Ok</button>
      </div>
    </div>
  </div>
</div>
<!--
<script>
$("#btnModal").on('click',function(){
$('#modalMessage').modal('toggle');
});
</script>
-->
</body>
</html>
