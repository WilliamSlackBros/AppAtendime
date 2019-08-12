function getInstancias(modulo){
  $.ajax({
      type: "POST",
      url: '../controller/ctrlOtimizePesq.php',
      data: {modulo:modulo},
      success: function(data){
          console.log("ok modulo");
        }

      });
}
function getMatricFunc(obj){

  $.ajax({
      type: "POST",
      url: '../controller/ctrlFunc.php',
      dataType: "json",
      data: {funcAction:'getMatriculas'},
      success: function(data){
          var matriculaFuncs = data;
          $( ""+obj+"" ).autocomplete({
            source: matriculaFuncs
          });
        }

      });
}
function getNomeFunc(obj){
  $.ajax({
      type: "POST",
      url: '../controller/ctrlFunc.php',
      dataType: "json",
      data: {funcAction:'getNomesFuncs'},
      success: function(data){
          var nomeFuncs = data;
          $( ""+obj+"" ).autocomplete({
            source: nomeFuncs
          });
          console.log("ok");
        }

      });
}
function getCamposFunc(nrMatricula){
  console.log(nrMatricula);


  $.ajax({
      type: "GET",
      url: '../controller/ctrlFunc.php',
      data: {funcAction:'getDadosFunc', nrMat:nrMatricula},
      contentType: 'application/json; charset=utf-8',
      dataType: 'json',
      success: function(data){
        console.log(nrMatricula);

          console.log(data);
          $('#txtNomeFunc').val(data['NM_USUARIO']);
          $('#txtSetor').val(data['DS_OBSERVACAO']);
          $('#txtFuncao').val(data['CD_PAPEL']);
        }

      });

}
function getProblemaAtendime(obj){

  $.ajax({
      type: "POST",
      url: '../controller/ctrlFunc.php',
      dataType: "json",
      data: {funcAction:'getProblemas'},
      success: function(data){
        var tiposProblemas=data;
          $( ""+obj+"" ).autocomplete({
            source: tiposProblemas
          });
          function split( val ) {
            return val.split( /,\s*/ );
          }
          function extractLast( term ) {
            return split( term ).pop();
          }
          $( ""+obj+"" )

    .on( "keydown", function( event ) {
      if ( event.keyCode === $.ui.keyCode.TAB &&
          $( this ).autocomplete( "instance" ).menu.active ) {
        event.preventDefault();
      }
    })
    .autocomplete({
      minLength: 0,
      source: function( request, response ) {

        response( $.ui.autocomplete.filter(
          tiposProblemas, extractLast( request.term ) ) );
      },
      focus: function() {

        return false;
      },
      select: function( event, ui ) {
        var terms = split( this.value );

        terms.pop();

        terms.push( ui.item.value );

        terms.push( "" );
        this.value = terms.join( ", " );
        return false;
      }
    });

        }

      });


}
function getSolucaoAtendime(obj){
  $.ajax({
      type: "POST",
      url: '../controller/ctrlFunc.php',
      dataType: "json",
      data: {funcAction:'getSolucoes'},
      success: function(data){
        var solucoes=data;
          $( ""+obj+"" ).autocomplete({
            source: solucoes
          });
          function split( val ) {
            return val.split( /,\s*/ );
          }
          function extractLast( term ) {
            return split( term ).pop();
          }
          $( ""+obj+"" )
    .on( "keydown", function( event ) {
      if ( event.keyCode === $.ui.keyCode.TAB &&
          $( this ).autocomplete( "instance" ).menu.active ) {
        event.preventDefault();
      }
    })
    .autocomplete({
      minLength: 0,
      source: function( request, response ) {
        response( $.ui.autocomplete.filter(
          solucoes, extractLast( request.term ) ) );
      },
      focus: function() {
        return false;
      },
      select: function( event, ui ) {
        var terms = split( this.value );
        terms.pop();
        terms.push( ui.item.value );
        terms.push( "" );
        this.value = terms.join( ", " );
        return false;
      }
    });
        }

      });


}
function getFuncOficina(obj){

  $.ajax({
      type: "POST",
      url: '../controller/ctrlFunc.php',
      dataType: "json",
      data: {funcAction:'getFuncOficina'},
      success: function(data){
          var nomeFuncsOficina = data;
          $( ""+obj+"" ).autocomplete({
            source: nomeFuncsOficina
          });

        }

      });
}
function setDadosAtendimeInsert(p_array){
  $.ajax({
     type: "POST",
      url: '../controller/ctrlAtendime.php',
      data: {funcAction:'setDadosAtendimeInsert',p_dados:p_array},
      success: function(data){
        console.log(data);
      }
      });

}
function getTableDetalhe(obj){
  $.ajax({
    type: "POST",
    url: '../controller/ctrlAtendime.php',
    dataType: "json",
    data: {funcAction:'getTabDetalhe'},
    success: function(data){
       let resultados = data;
       let linhas='';
       let countLinhas=1;
       data.forEach(function(item, index){

        linhas += '<tr>'+
           '<th scope="row">'+countLinhas++ +'</th>'+
           '<td hidden>'+data[index][0]+'</td>'+
           '<td>'+data[index][1]+'</td>'+
           '<td>'+data[index][2]+'</td>'+
           '<td>'+data[index][3]+'</td>'+
           '<td>'+data[index][4]+'</td>'+
           '<td>'+data[index][5]+'</td>'+
           '<td>'+data[index][6]+'</td>'+
           '<td>'+data[index][7]+'</td>'+
           '<td>'+data[index][8]+'</td>'+
           '<td>'+data[index][9]+'</td>'+
           '<td>'+data[index][10]+'</td>'+
           '<td>'+data[index][11]+'</td>'+
           '<td>'+data[index][12]+'</td>'+
           '<td>'+data[index][13]+'</td>'+
           '<td>'+data[index][14]+'</td>'+
           '<td>'+
           '<button type="button" class="btn btn-default btn-sm" id="btnModalViewer" data-toggle="modal" data-target="#exampleModal">'+
           '<i class="material-icons">visibility</i>'+
           '</button>'+
           '</td>'+
           '<td>'+
             '<button type="button" class="btn btn-default btn-sm" id="btnModalDelete" data-toggle="modal" data-target="#exampleModal">'+
             '<i class="material-icons">delete_forever</i>'+
             '</button>'+
             '</td>'+
         '</tr>'
       });

let tabela ='<table class="table table-striped">'+
'<thead>'+
  '<tr>'+
     '<th scope="col">#</th>'+
     '<th scope="col" hidden>CD_ATEND</th>'+
     '<th scope="col">Matr_Func_Ofic</th>'+
     '<th scope="col">NM_Func_Ate</th>'+
     '<th scope="col">Matrícula</th>'+
     '<th scope="col">Funcionário</th>'+
     '<th scope="col">Setor</th>'+
     '<th scope="col">Função</th>'+
     '<th scope="col">Ramal</th>'+
     '<th scope="col">NM_ESTAÇÃO</th>'+
     '<th scope="col">NR_IP</th>'+
     '<th scope="col">Problema</th>'+
     '<th scope="col">Solução</th>'+
     '<th scope="col">Tempo Inicial</th>'+
     '<th scope="col">Tempo Final</th>'+
     '<th scope="col">DT_ATEND</th>'+
     '<td colspan="2">'+
       '<i class="material-icons">'+
        'change_history'+
       '</i>'+
     '</td>'+
   '</tr>'+
 '</thead>'+
 '<tbody>'+
linhas
   '</tbody>'+
   '</table>';
     $( ""+obj+"" ).html(tabela);

      }

    });
}
