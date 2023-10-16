<!DOCTYPE html>;

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<title>Promoção web</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<style type="text/css">
     .formulario{
        background-color: #808080;
        color: #fff;
        text-shadow: 2px 2px #000;
        padding: 10px;
        font-size:1.9rem;
        font-weight:bold;
     }
     input{
        font-size: 1.7rem;
        padding: 4px;
     }   
    </style>
</head>
<body>
     
     <header>
     	<h3>Programação web</h3>

        <h4>TDS201 INFORMATICA LTDA</h4>
     </header>
     <br>
     <section>
     	
        <h1>programação PHP</h1><br>

        <?php
        $nomeCliente = $_GET["nome"];
        $salarioCliente = $_GET["salario"];
        echo "ola sr(a) $nomeCliente, seu salario é: $salarioCliente"

        falta a ultima foto

        ?>
        <br><br>

        <a href="index.php"> << voltar a pagina inicial</a>

     </section>
     <br>

     <footter>
     	<h3>TDS201 TREINAMENTO E INFORMATICA LTDA</h3>
     	<h4>programação web co html, css e php</h4>
     	<br>
     	<p class ="texto-rodape">contatos:</p>
     	<p class ="texto-rodape">e-mail: tds.201@gmail.com</p>
     	<p class ="texto-rodape">whattsapp:(47) 00000-0000</p>
     	<br>
     	<p class ="texto-rodape">desenvolvido por tds201 treinamento</p>
     	<p class ="texto-rodape">CNPJ: 00.000.000/0001.00</p>
     </footter>

</body>
</html>


