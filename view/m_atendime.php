
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo</title>
    <style media="screen">
    body{
      background-image: linear-gradient(to right top, #284673, #3b6c96, #5593b6, #77bcd6, #9ee5f4)!important;
      background-size: auto!important;
      background-repeat: no-repeat;
      height: 100%!important;
    }
      .nav-item{
          padding:0 0  0 30px;

      }
      .nav-link{
        color:white!important;
      }
      .jumbotron-main{
        background:rgba( 44, 59, 53, 0.1 )!important;
      /*  width: 100% !important;*/
        /*height:86% !important;*/
        height:auto !important;
        border-radius: 5px!important;

      }
      #myTabContent{
        height: auto !important;
      }
      /*
      .painelLogin{
        background-image: url("imagens/Star-Trek-Logo-Login-t.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: -10px;
        width: 100%;
        height: 270px!important;
        text-align: left;
        color: white;
        display: flex;
        position: static;
        z-index: -1!important;
      }
      */
      .link-login{
        color: white !important;
      }
      .tabsModulo{
        z-index: 999;
        margin-top: -45px;
        height: 100%!important;
      }
      .nav-link.active{
        color: rgb(23, 162, 184)!important;
      }
      .tab-content{
        background: rgba(255, 255, 255, 0.8); !important;
        width: 100%!important;
        z-index: 999 !important;
        padding: 10px;
        height: 500px!important;
      }
      /*
      .form-inline{
        padding:  20px!important;
      }
      .form-inline label{
        padding:  20px!important;
      }*/
      .align-items-lefts{
        text-align:left!important;
      }
      .align-items-margin-left input{
        margin-left:  20px!important;
      }
      .align-items-center{
        margin-left: auto!important;
        margin-right: auto!important;
      }
      .align-items-top{
        margin-top: 10px!important;
      }
      .formTableAtendime{
        background: rgba(255,255,255, 1);
        padding: 15px!important;
        border: 1px solid rgba(0,0,0, .15);
        z-index: 999;
        position: relative;
      }
      .tableOverFlow{
        overflow-x: auto!important;
        overflow-y: scroll!important;
        max-height: 250px!important;
        max-width: auto!important;
        z-index: -1;
        position: relative;
      }
    </style>
    <?php
    require_once("libs.php");
    ?>
    <script defer src="../controller/ctrlModalTab.js"></script>
    <script defer src="../controller/ctrlAutoComplete.js"></script>
    <script defer src="../controller/ctrlFuncoesAtendime.js"></script>
  </head>
<body class="container-fluid">
<div class="row">
<div class="col">

<main class=" jumbotron text-center jumbotron-main" style="margin-top:10px;margin-left: 10px; margin-right: 10px; margin-bottom:0;height:95%!important;">
    <form class="tabsModulo">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#atendimento" role="tab" aria-controls="atendimento" aria-selected="true">Atedimento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#historico" role="tab" aria-controls="historico" aria-selected="false">Histórico</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#grafico" role="tab" aria-controls="grafico" aria-selected="false">Gráfico</a>
      </li>
      <li class="nav-item text-right" >
      <div style="margin-right: -150%;">
        <label >Usuário:</label> <label ><span id="lblUsuario">UsuarioTeste</span></labe> <span> | </span> <label>Matrícula:</label><label ><span id="lblMatricula">MatriculaTeste</span></label>
      </div>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="atendimento" role="tabpanel" aria-labelledby="home-tab">
        <form  action="/action_page.php">

        <div class="form-row align-items-lefts" >
          <div class="form-group col-3">
            <label  class="mr-sm-2" for="matricula">Matricula:</label>
            <input type="text" class="form-control" id="txtMatricula" placeholder="Matrícula" name="matricula">
          </div>
            <div class="form-group col">
              <label for="txtFunc">Funcionário:</label>
              <input type="text" class="form-control" id="txtNomeFunc" placeholder="Funcionário" name="txtNomeFunc" ><!--readonly-->
            </div>
        </div>
        <div class="form-row align-items-lefts" style="">
          <div class="form-group col-3">
              <label  class="" for="estacao">Estação:</label>
              <input type="text" class="form-control mb-2" id="txtEstacao" placeholder="Estação" name="estacao" >
          </div>
          <div class="form-group col-3">
              <label  class="" for="ip">Ip:</label>
              <input type="text" class="form-control mb-2" id="txtIp" placeholder="Ip" name="ip" >
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
              <input type="text" class="form-control" id="txtSolucao" placeholder="Solução" name="solucao" ><!--disabled-->
            </div>
          </div>

          <div class="form-row align-items-center" >
            <div class="form-group form-check col-6 offset-3"><!--form-inline-->
              <label class="form-check-label ">
                <input id="btnTransfAtendime" class="form-check-input" type="checkbox" name="remember" > <span >Transferência</span>
              </label>
              <input type="text" class="form-control " id="txtFuncOficina" placeholder="Funcionário" name="txtFuncOficina" style="text-align:center;" readonly/>
            </div>
          </div>


          <div class="form-row align-items-top" >
            <div class="form-group  col-12">
            <label for="txtTpInicial">Start: <i id="startTempo">min seg</i></label>
            <span> >> </span>
            <label for="txtTpFinal">Final: <i id="stopTempo">min seg</i></label>
          </div>
            <div class="form-group  col">
            <button type="button" id="btnIniciar" class="btn btn-primary">Iniciar</button>
            <button type="button" id="btnFinalizar" class="btn btn-danger">Finalizar</button>
          </div>
          </div>

          </form>

          <form class="formTableAtendime ">
            <div class="form-row " >
            <div class="input-group input-group-sm mb-3 col-6 offset-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="material-icons" style="padding:0!important;" >search</i></span>
              </div>
              <input type="text" class="form-control" style="height:auto;" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Pesquisar" >
            </div>
          </div>
          <div class="tableOverFlow" id="tbDetalheAtendime">


          <table class="table table-striped" >
            <thead>
              <tr>
   <th scope="col">#</th>
   <th scope="col" hidden>CD_ATEND</th>
   <th scope="col">Matr_Func_Ofic</th>
   <th scope="col">NM_Func_Ate</th>
   <th scope="col">Matrícula</th>
   <th scope="col">Funcionário</th>
   <th scope="col">Setor</th>
   <th scope="col">Função</th>
   <th scope="col">Ramal</th>
   <th scope="col">NM_ESTAÇÃO</th>
   <th scope="col">NR_IP</th>
   <th scope="col">Problema</th>
   <th scope="col">Solução</th>
   <th scope="col">Tempo Inicial</th>
   <th scope="col">Tempo Final</th>
   <th scope="col">DT_ATEND</th>
   <td colspan="2">
         <i class="material-icons">
          change_history
         </i>
       </td>
     </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModalViewer" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModalDelete" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModalViewer" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModalDelete" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModalViewer" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModalDelete" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td >@Matr_Func_Ofic</td>
                <td >@NM_Func_Ate</td>
                <td>@Matrícula</td>
                <td >@Funcionário</td>
                <td>@Setor</td>
                <td>@Função</td>
                <td>@Ramal</td>
                <td>@NM_ESTAÇÃO</td>
                <td>@NR_IP</td>
                <td>@Problema</td>
                <td>@Solução</td>
                <td>@Tempo Inicial</td>
                <td>@Tempo Final</td>
                <td >@DT_ATEND</td>
                <td>
                <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                <i class="material-icons">visibility</i>
                </button>
                </td>
                <td>
                  <button type="button" class="btn btn-default btn-sm" id="btnModal" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">delete_forever</i>
                  </button>
                  </td>
              </tr>
            </tbody>
          </table>
        </div><!--overflow -->
        </form>
      </div>
      <div class="tab-pane fade" id="historico" role="tabpanel" aria-labelledby="profile-tab">
        <?php
        require_once('r_historico_atendime.php');
        ?>
      </div>
      <div class="tab-pane fade" id="grafico" role="tabpanel" aria-labelledby="contact-tab">
Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
      </div>
    </div>
  </form>
  <div class="painelLogin">
  </div>
<!--  <img src="imagens/Star-Trek-Logo-Login-t.png"  width="250" height="250" class="d-inline-block align-top" alt="">-->
<!--<h1 class="display-4">Start</h1>-->
 <!--<p class="lead">Conectar</p>-->
</main>
</div><!-- col do jumbotron -->

<?php
require_once("modal_tab_atendime.php");
require_once("modal_message.php");
require_once("modal_tab_atendime_confirm.php");
 ?>

 <script>

 $('#btnIniciar').on('click',function(){
   let data = new Date()
   let horaInicial=data.getHours()+':'+data.getMinutes()+':'+data.getMilliseconds();
   $('#startTempo').text(horaInicial);
});

 $('#btnFinalizar').on('click',function(){
   let data = new Date()
   let horaFinal=data.getHours()+':'+data.getMinutes()+':'+data.getMilliseconds();

   $('#stopTempo').text(horaFinal);
   console.log($('#txtMatricula').val());
   console.log($('#stopTempo').text());

   let P_Dados={'Nr_func_ate' : $('#lblMatricula').text(),
                'Nm_func_ate' : $('#lblUsuario').text(),
                'matricula' : $('#txtMatricula').val(),
                'NomeFunc' : $('#txtNomeFunc').val(),
                'Estacao' : $('#txtEstacao').val(),
                'Ip' : $('#txtIp').val(),
                'Setor' : $('#txtSetor').val(),
                'Funcao' : $('#txtFuncao').val(),
                'Ramal' : $('#txtRamal').val(),
                'Problema' : $('#txtProblema').val(),
                'Solucao' : $('#txtSolucao').val(),
                'startTempo' : $('#startTempo').text(),
                'stopTempo' : $('#stopTempo').text(),
                'dt_ate'  : data.getDate()+'/'+data.getMonth()+'/'+data.getFullYear()
               };
 setDadosAtendimeInsert(P_Dados);
});
 $(document).ready(function(){

   $(function(){

     getProblemaAtendime('#txtProblema');
     getSolucaoAtendime('#txtSolucao');
     getFuncOficina('#txtFuncOficina');
     getTableDetalhe('#tbDetalheAtendime');

   });
   document.querySelector('#txtFuncOficina').addEventListener('blur', function(e) {

    document.querySelector('#txtSolucao').value = 'Transferido para '+document.querySelector('#txtFuncOficina').value ;
  });
  document.querySelector('#txtMatricula').addEventListener('blur', function(e) {

   getCamposFunc(document.querySelector('#txtMatricula').value);
 });


});
 </script>
</body>
</html>
