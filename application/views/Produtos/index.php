<html>

<head>
<link rel="stylesheet" type="text/css" href = "arquivo_Css.css">
  
</head>
<title>Produtos</title>

<body>
<style>
.corBorda {
    border: 1px solid lightgray;
    width: 50%;
    height: 30%;
    
}
.cor {
    font color : gray;
}
.texto {
    font-size: 25;
    color: gray;
    font-style: Italic;
    
}



</style>

<h1 class = "texto">Produtos</h1>

<table class = "corBorda" border = "1">

<thead>
<tr >
<th><font color = "gray">ID</th>
<th><font color = "gray">nome_Produto</th>
<th><font color = "gray">quantidade</th>
<th><font color = "gray">valor</th>

</tr>
</thead>
<tbody>
</div>
<?php foreach($produtos as $produtos):?>
    <tr>
         <td> <?= $produtos['ID'] ?> </td>
         <td> <?= $produtos['nome_Produto'] ?> </td>
         <td> <?= $produtos['quantidade'] ?> </td>
         <td> <?= $produtos['valor'] ?> </td>
       
         </tr>
<?php endforeach ?>

</tbody>
</table>

</body>
</html>