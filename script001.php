<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Procurar palavras em arquivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head> -->
<!-- <style type="text/css">
      body {
        margin: 0px
    }
    .container {
        width: 50vw;
        height: 50vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center
    }
    .box {
        width: 950px;
        height: 300px;
        background: #fff;
    }

</style> -->
<!-- <body> -->
<div style=" margin-top: 20px; text-align:center; margin-left: 5px; ">
  

<div style="" class="container">
   <div class="box">

   <div class="form-group row">
  <label for="example-text-input" class=" col-4 col-form-label">Pasta a ser procurada:</label>
  <div class="col-8">
    <input class="form-control form-control-sm" type="text"  id="pasta">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-4 col-form-label">Palavra a ser procurada:</label>
  <div class="col-8">
    <input class="form-control form-control-sm" type="search"  id="palavra" placeholder="Se houver mais de uma palavra separar por virgula">
  </div>
</div>

<div class="form-group row">
  <label for="example-search-input" class="col-4 col-form-label">Expressão:</label>
  <div class="col-8">
    <input class="form-control form-control-sm" type="search"  id="expresao" placeholder="Forme o termo de pesquisa nesse sentido /expresão/">
  </div>
</div>

<div class="form-group row">
  <label for="example-search-input" class="col-4">Case insentive:</label>

  <div class="form-check col-1">
      <input class="form-check-input" type="checkbox" id="gridCheck">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-4">Copiar arquivos com ocorrencias:</label>

  <div class="form-check col-1">
      <input class="form-check-input" type="checkbox" id="gridCheckcopia">
  </div>
</div>

 <!--  <div class="form-group">
  <label class="form-check-label" for="gridCheck">
       Case insentive:
      </label>
    <div class="form-check">

      <input class="form-check-input" type="checkbox" id="gridCheck">

    </div>
  </div> -->

<div style="margin-left:100px;" class="form-group row col-12">
  <!--  <label for="example-search-input" class="col-10 col-form-label"></label>  -->
  <div class="col-12">
   <button type="submit" class="btn btn-primary  form-control-sm col-4 " onclick="enviar();">Procurar</button>
  
  </div>
</div>


</div>
</div>
 </div>
<!-- </body>
</html> -->
<script type="text/javascript">
  
function  enviar(){
    location.href="script002.php?Pasta="+document.getElementById("pasta").value+"&Palavra="+document.getElementById('palavra').value+"&Expressao="+document.getElementById("expresao").value+"&sensintive="+document.getElementById('gridCheck').checked+"&Copy="+document.getElementById('gridCheckcopia').checked;

  }

</script>