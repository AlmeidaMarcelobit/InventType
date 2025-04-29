<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Anotações</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marcelo de Araujo Almeida">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/exibir.css">
    <link rel="stylesheet" href="../css/menu-drop.css">
    <link rel="icon" href="../imagem/favicon/favicon-16x16.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/menudrop.js" defer></script>
</head>
<body>
<?php include '../includes/header.php'; ?>
<div class="container">
<h2>Anotações</h2>
<div id="lista"></div>

<script>
    fetch('../data/data.json')
        .then(r => r.json())
        .then(data => {
            const lista = document.getElementById('lista');
            data.forEach(item => {
                const div = document.createElement('div');
                div.innerHTML = `
  <strong>${item.tipo === 'problema' ? '⚠️Problema' : '📝 Anotação'}: ${item.titulo}</strong><br/>
<small>📅 ${item.data_hora}</small>
  <p>${item.texto}</p>
  ${
                    item.tipo === 'problema' && !item.resolvido
                        ? `<button onclick="resolver(${item.id})">✅ Marcar como resolvido</button>`
                        : item.tipo === 'problema'
                            ? `<em>✅ Resolvido</em>`
                            : ''
                }
`;
                lista.appendChild(div);
            });
        });

    function resolver(id) {
        fetch("resolver.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `id=${id}`
        })
            .then(res => res.json())
            .then(() => location.reload());
    }
</script>
</div>
<footer>
    <p>&copy; 2024 - 2025 SaúdeTracker - Todos os direitos reservados.</p>
</footer>
</body>
</html>
