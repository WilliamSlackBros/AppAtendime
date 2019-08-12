
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo</title>
    <style media="screen">

      .tableOverFlow{
        overflow-x: auto!important;
        overflow-y: auto!important;
        max-height: 250px!important;
        max-width: auto!important;
        z-index: -1;
        position: relative;
      }
      .modalCorpoTabAtendime{
        overflow-x: hidden!important;
        overflow-y: scroll!important;
        max-height: 300px!important;
        padding-right: 10px!important;
      }
      #modalTabAtendime{
        height: 80%!important;
      }
    </style>

    <?php
    require_once("libs.php");
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
<div id="modalTabAtendime" class="modal" tabindex="-1" role="dialog" style="margin-top:1rem!important; ">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Informação Atendimento</h5>

    </div>
    <div class="modal-body ">
      <!--
      <main class=" jumbotron text-center jumbotron-modal-atendime" style="margin-top:10px;margin-left: 10px; margin-right: 10px; margin-bottom:0;height:95%!important;">
          <form class="tabsModulo">
-->
          <div class="modalCorpoTabAtendime"><!--tab-content  id="myTabContent"-->
              <form  action="/action_page.php">
                <div class="form-row align-items-lefts" style="">
                  <div class="form-group col-3">
                      <label  class="" for="codigo">Código:</label>
                      <input type="text" class="form-control mb-2" id="txtCodigo" placeholder="Código" name="codigo" readonly>
                  </div>
                </div>

              <div class="form-row align-items-lefts" >
                <div class="form-group col-3">
                  <label  class="mr-sm-2" for="matricula">Matricula:</label>
                  <input type="text" class="form-control" id="txtMatricula" placeholder="Matrícula" name="matricula" readonly>
                </div>
                  <div class="form-group col">
                    <label for="txtFunc">Funcionário:</label>
                    <input type="text" class="form-control" id="txtFunc" placeholder="Funcionário" name="func" readonly>
                  </div>
                  </div>

                  <div class="form-row align-items-lefts" >
                  <div class="form-group col"><!--form-inline -->
                    <label for="txtSetor">Setor:</label>
                    <input type="text" class="form-control" id="txtSetor" placeholder="Setor" name="setor" readonly>
                    <label for="txtFuncao">Função:</label>
                    <input type="text" class="form-control" id="txtFuncao" placeholder="Função" name="funcao" readonly>
                  </div>
                  <div class="form-group col-3">
                    <label for="txtRamal">Ramal:</label>
                    <input type="text" class="form-control" id="txtRamal" placeholder="Ramal" name="ramal">
                  </div>
                </div>

                <div class="form-row align-items-lefts" >
                  <div class="form-group col">
                    <label for="txtProblema">Problema:</label>
                    <input type="text" class="form-control" id="txtProblema" placeholder="Problema" name="problema">
                    <label for="txtSolucao">Solução:</label>
                    <input type="text" class="form-control" id="txtSolucao" placeholder="Solução" name="solucao" disabled>
                  </div>
                </div>

                <div class="form-row align-items-center" >
                  <div class="form-group form-check col-6 offset-3"><!--form-inline-->
                    <label class="form-check-label ">
                      <input   class="form-check-input" type="checkbox" name="remember"> <span >Transferência</span>
                    </label>
                    <input type="text" class="form-control " id="txtFuncOficina" placeholder="Funcionário" name="pswd" style="text-align:center;" disabled>
                  </div>
                </div>


                <div class="form-row align-items-top" >
                  <div class="form-group  col-12">
                  <label for="txtTpInicial">Start: <i>min seg</i></label>
                  <span> >> </span>
                  <label for="txtTpFinal">Final: <i>min seg</i></label>
                </div>
                </div>

                </form>

        <!--
              </main>
-->

    </div>
    <div class="modal-footer">
      <button id="btnConfirmarAcaoSalvar" type="button" class="btn btn-primary">Salve</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    </div>
  </div>
</div>
</div>
</div>
<!--
<script >
$(function(){
$('#modalTabAtendime').modal('show');
  });

$("#btnModal").on('click',function(){
$('#modalTabAtendime').modal('toggle');
});
-->
</script>

</body>
</html>
