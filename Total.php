<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Total</title>
</head>
<body>

<div class="container border m-3">

 <?php
   extract($_REQUEST,EXTR_OVERWRITE);
   echo("<p>Produto: $produto</p>");
   echo("<p>Valor: $valor</p>");
   echo("<p>Quantidade: $quantidade</p>");

   $total = $valor * $quantidade;
   echo("<p>Total: $total</p>");

   if($pagamento == "avista"){
$vista = $total * 0.9;
    echo("<p>Total com desconto À vista: $vista</p>");
   }else{
$parcela = $total / 2;
echo("<p>Total parcelado: 2x de $parcela</p>");
   }
   
    
?>

<p class="p-3">
<button class="btn btn-primary" onclick="history.go(-1)">Voltar</button>
</p>   

</div>
</body>
</html>