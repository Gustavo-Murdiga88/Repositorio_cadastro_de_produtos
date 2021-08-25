<?php
include_once('conexao.php');
?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Cadastro de Produtos</title>
    <!--
        <link rel="stylesheet" href="css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <table class="striped">
        <div class="row">
            <div class="col s12 m8 push-2">
                <h3 class="light"> Produtos Cadastrados</h3>
                
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Imagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('conexao.php');
                        $sql = "SELECT * FROM tabelaimg order by produto";
                        $resultado = mysqli_query($conexao, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($dados = mysqli_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td align='center'>" . $dados['id'] . "</td>";
                                echo "<td>" . $dados['codigo'] . "</td>";
                                echo "<td>" . $dados['produto'] . "</td>";
                                echo "<td>" . $dados['descricao'] . "</td>";
                                echo "<td align='right'> R$ " . $dados['valor'] . "</td>";

                                //buscando informações na pasta imagens
                                if (empty($dados['imagem'])) {
                                    $imagem = 'SemImagem.png';
                                } else {
                                    $imagem = $dados['imagem'];
                                }
                                $id = $dados['id'];
                                echo "<td align ='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem'width='50px' height='50px'></a>";
                                echo "</tr>";
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        mysqli_close($conexao);
                        ?>
                        <br>
                        <input type="button" class="btn btn-success btn-lg" onclick="window.location=
                        '_index.php';" value="Voltar">
                    </div>
            </div>
    </table>
        <!--<input type="button" onclick="window.location='form_incluir.html';" value="Voltar"> -->

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>