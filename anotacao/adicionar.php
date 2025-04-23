<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Adicionar Anotação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marcelo de Araujo Almeida">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/adicionar.css">
    <link rel="stylesheet" href="../css/menu-drop.css">
    <link rel="icon" href="../favicon/favicon-16x16.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/menudrop.js" defer></script>
</head>
<body>
<?php include '../includes/header.php'; ?>
<div class="container">
    <h2>Nova Anotação</h2>

    <label for="titulo">Título:</label><br />
    <input type="text" id="titulo" placeholder="Ex: Equipamento alocado para colaborar X" /><br /><br />

    <label for="tipo">Tipo:</label><br />
    <select id="tipo">
        <option value="anotacao">📝 Anotação</option>
        <option value="problema">⚠️ Problema</option>
    </select><br /><br />

    <label for="texto">Descrição:</label><br />
    <textarea id="texto" rows="4" cols="50" placeholder="Descreva a anotação ou problema..."></textarea><br /><br />

    <button onclick="salvar()">Salvar</button>

    <script>
        function salvar() {
            const tipo = document.getElementById("tipo").value;
            const titulo = document.getElementById("titulo").value;
            const texto = document.getElementById("texto").value;

            fetch("salvar.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `tipo=${tipo}&titulo=${encodeURIComponent(titulo)}&texto=${encodeURIComponent(texto)}`
            })
                .then(res => res.json())
                .then(data => {
                    alert("Salvo com sucesso!");
                    document.getElementById("titulo").value = "";
                    document.getElementById("texto").value = "";
                });
        }
    </script>
</div>
<footer>
    <p>&copy; 2024 - 2025 SaúdeTracker - Todos os direitos reservados.</p>
</footer>
</body>
</html>
