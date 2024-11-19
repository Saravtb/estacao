<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estação do Ano</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="titu">
        <br>
        <h2>Descubra a estação do ano</h2>
    </div>
    <!-- Formulário para o usuário escolher o dia e mês -->
    <form method="POST" action="">
        <label for="data">Escolha a data:</label>
        <input type="date" id="data" name="data" required>
        <input type="submit" value="Ver Estação">
    </form>

    <?php
   // Função para determinar a estação
function obterEstacao($mes, $dia) {
    // Verifica as estações do ano
    if (($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia < 21)) {
        return "Verão";
    } elseif (($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia < 21)) {
        return "Outono";
    } elseif (($mes == 6 && $dia >= 21) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia < 21)) {
        return "Inverno";
    } else {
        return "Primavera";
    }
}


    // Verificar se a data foi enviada
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST['data'];
        $mes = date('m', strtotime($data));
        $dia = date('d', strtotime($data));

        // Determinar a estação
        $estacao = obterEstacao($mes, $dia);

        // Exibir a estação com a imagem correspondente
        echo "<div class= estacao>
        <h3>A estação do ano é:
        <br>
         $estacao</h3>
        </div>";
        
        // Exibir uma imagem de cada estação
        switch($estacao) {
            case "Verão":
                echo '<img src="verao.jpg" alt="Verão">';
                break;
            case "Outono":
                echo '<img src="outono.jpg" alt="Outono">';
                break;
            case "Inverno":
                echo '<img src="inverno.jpg" alt="Inverno">';
                break;
            case "Primavera":
                echo '<img src="primavera.jpg" alt="Primavera">';
                break;
        }
    }
    ?>
</body>
</html>
