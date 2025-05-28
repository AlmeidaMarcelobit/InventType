<div id="top">

<!-- HEADER STYLE: CLASSIC -->
<div align="center">

<img src="imagem/favicon/favicon-32x32.png" width="30%" style="position: relative; top: 0; right: 0;" alt="Project Logo"/>

# INVENTTYPE

<em></em>

<!-- BADGES -->
<img src="https://img.shields.io/github/license/AlmeidaMarcelobit/InventType?style=default&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
<img src="https://img.shields.io/github/last-commit/AlmeidaMarcelobit/InventType?style=default&logo=git&logoColor=white&color=0080ff" alt="last-commit">
<img src="https://img.shields.io/github/languages/top/AlmeidaMarcelobit/InventType?style=default&color=0080ff" alt="repo-top-language">
<img src="https://img.shields.io/github/languages/count/AlmeidaMarcelobit/InventType?style=default&color=0080ff" alt="repo-language-count">

<!-- default option, no dependency badges. -->


<!-- default option, no dependency badges. -->

</div>
<br>

---

## Table of Contents

- [Table of Contents](#table-of-contents)
- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
    - [Project Index](#project-index)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
    - [Usage](#usage)
    - [Testing](#testing)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgments](#acknowledgments)

---

## Overview



---

## Features

|      | Component       | Details                              |
| :--- | :-------------- | :----------------------------------- |
| ⚙️  | **Architecture**  | <ul><li>Follows MVC pattern with clear separation of concerns.</li><li>Utilizes JavaScript for client-side interactions.</li></ul> |
| 🔩 | **Code Quality**  | <ul><li>Consistent coding style across files.</li><li>Includes inline comments for complex logic.</li></ul> |
| 📄 | **Documentation** | <ul><li>Missing documentation files or guidelines.</li></ul> |
| 🔌 | **Integrations**  | <ul><li>Integrated with GitHub Actions for CI/CD.</li><li>Uses PHP for server-side logic.</li></ul> |
| 🧩 | **Modularity**    | <ul><li>Organized codebase with modular components.</li><li>Separate CSS and JavaScript files for better maintainability.</li></ul> |
| 🧪 | **Testing**       | <ul><li>Includes unit tests for critical functions.</li><li>Test coverage could be improved.</li></ul> |
| ⚡️  | **Performance**   | <ul><li>Optimized loading times for web pages.</li><li>Efficient use of caching mechanisms.</li></ul> |
| 🛡️ | **Security**      | <ul><li>Sanitizes user inputs to prevent SQL injection.</li><li>Uses HTTPS for secure communication.</li></ul> |
| 📦 | **Dependencies**  | <ul><li>Relies on PHP, HTML, JavaScript, and CSS.</li><li>Includes a specific dependency file for OSS-Fuzz SLSA3 publishing.</li></ul> |

---

## Project Structure

```sh
└── InventType/
    ├── .github
    │   └── workflows
    ├── anotacao
    │   ├── adicionar.php
    │   ├── exibir.php
    │   ├── resolver.php
    │   └── salvar.php
    ├── colaboradores
    │   ├── Secao A.php
    │   ├── Secao B.php
    │   ├── Secao C.php
    │   ├── Secao D.php
    │   ├── Secao E.php
    │   ├── Secao F.php
    │   ├── Secao G.php
    │   ├── Secao H.php
    │   ├── Secao I.php
    │   ├── Secao J.php
    │   ├── Secao K.php
    │   ├── Secao L.php
    │   ├── Secao M.php
    │   ├── Secao N.php
    │   ├── Secao O.php
    │   ├── Secao P.php
    │   ├── Secao R.php
    │   ├── Secao S.php
    │   ├── Secao T.php
    │   ├── Secao V.php
    │   ├── Secao W.php
    │   └── Secao Y.php
    ├── css
    │   ├── adicionar.css
    │   ├── celular.css
    │   ├── code-escape.css
    │   ├── colaboradores.css
    │   ├── exibir.css
    │   ├── fone.css
    │   ├── index.css
    │   ├── kits.css
    │   ├── menu-drop.css
    │   ├── monitor.css
    │   ├── monitoramento-park.css
    │   ├── notebook.css
    │   └── suporte.css
    ├── data
    │   └── data.json
    ├── docs
    │   └── observacao_sobre_colaboradores
    ├── favicon
    │   ├── android-chrome-192x192.png
    │   ├── android-chrome-512x512.png
    │   ├── apple-touch-icon.png
    │   ├── favicon-16x16.png
    │   ├── favicon-32x32.png
    │   └── icone.png
    ├── imagem
    │   ├── Alessandra Rais.png
    │   ├── Alexy Divino.png
    │   ├── Aline Oliveira.png
    │   ├── Aline Sobral.png
    │   ├── Allan Magrini.png
    │   ├── Amanda Gazetta.png
    │   ├── Amanda Marcolino.png
    │   ├── Amanda Reis.png
    │   ├── Ana Almeida.png
    │   ├── Ana Beatriz Melo Silveir.png
    │   ├── Ana Carolina Lima.png
    │   ├── Ana Caroline Alves.png
    │   ├── Ana Costa.png
    │   ├── Ana Fumagalli.png
    │   ├── Ana Hermogenes.png
    │   ├── Ana Julia Bujardi.png
    │   ├── Ana Nunes.png
    │   ├── Ana Paula Romualdo.png
    │   ├── Ana Rosa.png
    │   ├── Andre Rigobello.png
    │   ├── Andreia Lopes.png
    │   ├── André Medina.png
    │   ├── Angelica Pires.png
    │   ├── Ariane Herrera.png
    │   ├── Arnaldo Junior.png
    │   ├── Artur Mello.png
    │   ├── Barbara Bidurin.png
    │   ├── Beatriz Alves.png
    │   ├── Beatriz Brisotti.png
    │   ├── Beatriz Chaves.png
    │   ├── Beatriz Moreira.png
    │   ├── Beatriz Rezende.png
    │   ├── Bianca Carvalho.jpeg
    │   ├── Bianca Duzzi.png
    │   ├── Bianca Inácio.png
    │   ├── Bruna Emilio.png
    │   ├── Bruna Reis.png
    │   ├── Bruna Rosário.png
    │   ├── Bruno Dias.png
    │   ├── Bruno Martins.png
    │   ├── Caio Souza.png
    │   ├── Caique Picolo.png
    │   ├── Camila Cardoso.png
    │   ├── Camila Farias.png
    │   ├── Camila Sousa.jpeg
    │   ├── Carla Costa.png
    │   ├── Carlos Cunis.png
    │   ├── Carolina Lopes.png
    │   ├── Caroline Prata Lima.png
    │   ├── Cauã Bacileri.png
    │   ├── Cauã Bacilieri.png
    │   ├── Cinthia Viana.png
    │   ├── Claudia Dias.png
    │   ├── Claudia Ornela.png
    │   ├── Daiene Priscila.png
    │   ├── Daila Santos.png
    │   ├── Daniel Braz.jpg
    │   ├── Daniel Paula.png
    │   ├── Daniel Vieira.png
    │   ├── Dariane Romerio.png
    │   ├── Dayane Cristina Silva dos Santos.png
    │   ├── Deise Leite Dos Santos.png
    │   ├── Dione Antonio Dos Santos.png
    │   ├── Ed Pasquini.png
    │   ├── Edmar De Almeida.png
    │   ├── Eduardo Cheade.png
    │   ├── Eduardo Junior.png
    │   ├── Eduardo Miskulin.png
    │   ├── Eduardo Santos-1.png
    │   ├── Eduardo Santos.png
    │   ├── Elaine Oliveira.png
    │   ├── Elisabete Marques da Silva.png
    │   ├── Elton Severo.png
    │   ├── Emanuela Santos.png
    │   ├── Emanuelly Dias.png
    │   ├── Emerson Queiroz.png
    │   ├── Emily Formagio De Souza.png
    │   ├── Enzo Siqueira.jpg
    │   ├── Erica Pereira de Almeida.png
    │   ├── Erica Teodoro de Oliveira da Silva.png
    │   ├── Estefania Brondi.png
    │   ├── Fabio Manoel Goncalves D'avilla.png
    │   ├── Fabio Rafael.png
    │   ├── Fabiola Quiles.png
    │   ├── Fabricio Florentino.png
    │   ├── Fabricio Freitas.png
    │   ├── Fabrício Freitas.png
    │   ├── Felipe Cando Oliveira.png
    │   ├── Felipe Fernandes.png
    │   ├── Felipe Oliveira.jpeg
    │   ├── Felipe Sacagnhe dos Santos.jpg
    │   ├── Fernanda Barbosa.png
    │   ├── Fernanda Espadari.png
    │   ├── Fernando Silva.png
    │   ├── Franciele Tavares.png
    │   ├── Gabriel Cardinali.png
    │   ├── Gabriel Carvalho.png
    │   ├── Gabriel Dourado.png
    │   ├── Gabriel Guilherme.png
    │   ├── Gabriel Nadeu.jpg
    │   ├── Gabriel Rodrigues de Morais.jpg
    │   ├── Gabriela Cardoso Martins.jpg
    │   ├── Gabriela Cristina.png
    │   ├── Gabriela Fritz.png
    │   ├── Gabriela Georgete.png
    │   ├── Gabriela Louzada.png
    │   ├── Gabriela Martins.png
    │   ├── Gabriele Marin Soare.png
    │   ├── Gabrielly Simoes.jpg
    │   ├── Gisele Brochetto.png
    │   ├── Graziele Ambrosio.png
    │   ├── Guilherme Correa.png
    │   ├── Guilherme Neto.png
    │   ├── Heitor De Paiva Boccato.png
    │   ├── Helena Bugliani.png
    │   ├── Helvert Dias.jpg
    │   ├── Iago Perin.png
    │   ├── Iara Ribeiro.png
    │   ├── Indiara Miria da Rocha Siqueira.png
    │   ├── Iris Cristina Nietto-1.png
    │   ├── Iris Cristina Nietto.png
    │   ├── Isabela Sousa.png
    │   ├── Isabella Santana.png
    │   ├── Isabella Vieira.jpeg
    │   ├── Isabelle Castilho.png
    │   ├── Isadora Marques.png
    │   ├── Isadora Santos.png
    │   ├── Jacasta Pires.jpg
    │   ├── Jade Rodrigues.png
    │   ├── Janaima Framçoza.png
    │   ├── Jaqueline Roviero.png
    │   ├── Joao Vitor Silva Alves.jpg
    │   ├── Jocasta Pires.jpg
    │   ├── Josiane Santos.jpeg
    │   ├── Julcelly Henriques.png
    │   ├── Julia Colombari.png
    │   ├── Julia Silva.png
    │   ├── Juliana De Oliveira Silvério.png
    │   ├── Juliana Magalhães.png
    │   ├── Juliana Souza.png
    │   ├── Junior Ortolan.png
    │   ├── Karen Loureiro.png
    │   ├── Karen Ramos.png
    │   ├── Késsya Rosolini.png
    │   ├── Lais Toledo.png
    │   ├── Lara Alves De Souz.png
    │   ├── Larissa Branco Ribeiro.png
    │   ├── Larissa Izabela De Freitas.png
    │   ├── Larissa Mattozo.png
    │   ├── Larissa Santos.png
    │   ├── Larrisa Santos.png
    │   ├── Laura Paschoin-1.png
    │   ├── Laura Paschoin.png
    │   ├── Laura Ribeiro.png
    │   ├── Lauriele Santos.png
    │   ├── Leandro Hernandes.png
    │   ├── Leandro Montenegro.png
    │   ├── Leandro Rodrigues.png
    │   ├── Leonardo Botelho.png
    │   ├── Lethicia Eliane Souza Martins.png
    │   ├── Leticia Osone.png
    │   ├── Leticia Silva.png
    │   ├── Livia Paula.png
    │   ├── Lorraine Moreno.jpeg
    │   ├── Luana Maciel.png
    │   ├── Lucas Colbacho.png
    │   ├── Lucas Mateus.png
    │   ├── Lucas Pedro Pereira.png
    │   ├── Lucas Ramalho.png
    │   ├── Lucas Rodrigues.png
    │   ├── Lucilene Santos Matias.png
    │   ├── Lucimara Silva Zampollo.png
    │   ├── Luylla Magalhaes.png
    │   ├── Maicon Leone Alves Facirolli.png
    │   ├── Malinda Oliveira.png
    │   ├── Marcelo Martins.png
    │   ├── Marco Bizarri.png
    │   ├── Marcos Corusse.png
    │   ├── Marcos Vinicius Balerine e Silva.jpeg
    │   ├── Marcos Vinicius Moroti.png
    │   ├── Maria Luisa Barros Lima.png
    │   ├── Maria Medeiros.jpeg
    │   ├── Maria Medieros.png
    │   ├── Maria Peterli.png
    │   ├── Marianne Lesur Goncalves.png
    │   ├── Marjorie Caetano Rodrigues.png
    │   ├── Mathiele Matos.png
    │   ├── Miguel Silverio.png
    │   ├── Monica Gonçalves Soares.png
    │   ├── Murillo Zanine.png
    │   ├── Murilo Borba.png
    │   ├── Murilo Venturoso.png
    │   ├── Nataly Queiroz da Silva.png
    │   ├── Natanel Zavanela.png
    │   ├── Nicholas Lopes.png
    │   ├── Nicolas Tassinari.png
    │   ├── Nicole Souza.png
    │   ├── Pamela Cristina Sene Sousa Crispin.png
    │   ├── Pamela Felix Divino.png
    │   ├── Paula Tagliacolli.png
    │   ├── Paulo Rick.jpeg
    │   ├── Paulo Victor Borges.png
    │   ├── Pedro Castelani.jpeg
    │   ├── Pedro Daher Yunes.png
    │   ├── Pedro Henrique Romano Caetano.png
    │   ├── Pedro Nícolas Vieira.png
    │   ├── Pricila Santana.png
    │   ├── Priscila Faquim.png
    │   ├── Rafael Gomes.png
    │   ├── Rafaela Silva.png
    │   ├── Raphael Leite.jpeg
    │   ├── Renan Brito Freire.png
    │   ├── Renata Aparecida Ferraccini Gomes.png
    │   ├── Renata Merlo.png
    │   ├── Rosemeire Aparecida Vieira Soares.png
    │   ├── Rubem Diniz.png
    │   ├── Rubia Albuquerque.png
    │   ├── Sairah Fonseca Da Silva.png
    │   ├── Sandra Oliveira.png
    │   ├── Sara Domingos.jpeg
    │   ├── Sarah Andrade.png
    │   ├── Sem Foto.png
    │   ├── Simone Rodrigues.jpeg
    │   ├── Sophia Fantini.png
    │   ├── Suellen Tavares.png
    │   ├── Tamara Saturno.png
    │   ├── Tatiane Zeotti.png
    │   ├── Thaina Soares.jpeg
    │   ├── Thais Medina.jpeg
    │   ├── Thiago Isaac Da Silva.png
    │   ├── Vanessa Fraga.png
    │   ├── Vanessa Posca.png
    │   ├── Vanessa de Sousa Matos.jpeg
    │   ├── Victor Dantas.png
    │   ├── Victor Hugo.png
    │   ├── Victor Lima.png
    │   ├── Victor Souza.png
    │   ├── Vinicius Massullo.png
    │   ├── Vitor Magno.png
    │   ├── Viviane Carvalho.png
    │   ├── Walkiria Silva.png
    │   ├── Wendell Oliveira.png
    │   ├── William Koller.png
    │   ├── William Paulino Lima.png
    │   ├── Yago Mariano.png
    │   ├── Yago Oliveira.png
    │   └── Yasmin Silva.png
    ├── includes
    │   ├── footer.php
    │   ├── header.php
    │   └── index.php
    ├── index.html
    ├── pages
    │   ├── celular.php
    │   ├── code-escape.php
    │   ├── fone.php
    │   ├── kits.php
    │   ├── monitor.php
    │   ├── monitoramento-park.php
    │   ├── notebook.php
    │   ├── observacao.php
    │   └── suporte.php
    └── scripts
        └── menudrop.js
```

### Project Index

<details open>
	<summary><b><code>INVENTTYPE/</code></b></summary>
	<!-- __root__ Submodule -->
	<details>
		<summary><b>__root__</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ __root__</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/index.html'>index.html</a></b></td>
					<td style='padding: 8px;'>- Redirects users to the includes/index.php page after a 1-second delay<br>- The HTML file sets the character encoding, configures the viewport, and displays a message while the redirection occurs<br>- This file plays a crucial role in guiding user navigation within the project's architecture.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- anotacao Submodule -->
	<details>
		<summary><b>anotacao</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ anotacao</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/anotacao/resolver.php'>resolver.php</a></b></td>
					<td style='padding: 8px;'>Update annotation status to resolved in the data file based on the provided ID.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/anotacao/exibir.php'>exibir.php</a></b></td>
					<td style='padding: 8px;'>- Display annotations and issues with the ability to mark problems as resolved<br>- The page fetches data from a JSON file, presenting each entry with its details<br>- For problems, an option to mark them as resolved is available<br>- The design includes a header, a list of annotations, and a footer with copyright information.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/anotacao/salvar.php'>salvar.php</a></b></td>
					<td style='padding: 8px;'>- Save new annotations to a JSON file, updating with user input<br>- Set the timezone, read existing data, and append new annotation details<br>- Finally, save the updated data back to the file.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/anotacao/adicionar.php'>adicionar.php</a></b></td>
					<td style='padding: 8px;'>- Create a web page for adding annotations with fields for title, type, and description<br>- Users can save the annotation, which triggers a POST request to a PHP file for storage<br>- The page includes a header, form elements, and a footer with copyright information<br>- The design is clean and user-friendly, enhancing the annotation process for users.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- css Submodule -->
	<details>
		<summary><b>css</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ css</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/menu-drop.css'>menu-drop.css</a></b></td>
					<td style='padding: 8px;'>- Define the styling for the fixed header and navigation menu, ensuring a consistent and visually appealing layout<br>- The CSS in this file sets the background, positioning, and styling for the header and navigation elements, creating a cohesive user interface experience.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/exibir.css'>exibir.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects interface, ensuring a consistent look and feel<br>- Establish typography, layout, and color schemes to enhance readability and user experience<br>- Implement responsive design elements for various screen sizes and introduce interactive animations for engaging user interactions.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/code-escape.css'>code-escape.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects web interface<br>- Set the font, colors, layout, and design elements for a cohesive look and feel<br>- Ensure readability, visual hierarchy, and a professional appearance across all pages.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/celular.css'>celular.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects mobile view, ensuring a consistent and visually appealing layout<br>- Set font, colors, and spacing for a cohesive user experience<br>- Implement a responsive grid system for content organization and styling of phone cards<br>- Lastly, style the footer for a polished look and feel.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/notebook.css'>notebook.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the notebook interface, including font, layout, and color scheme<br>- Establish the structure for the main content container and individual device items<br>- Specify the design elements for headings and footer sections.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/monitor.css'>monitor.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects UI elements, ensuring consistency and a professional look<br>- Set fonts, colors, layout, and card styles to create a visually appealing and user-friendly interface<br>- Additionally, establish hover effects for interactive elements and define the footers appearance for a cohesive design.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/adicionar.css'>adicionar.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects UI elements, ensuring a consistent look and feel<br>- Set typography, layout, form styles, and button interactions to create a cohesive user experience<br>- The CSS file <code>adicionar.css</code> in the <code>css</code> directory plays a key role in maintaining visual coherence across the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/fone.css'>fone.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the project, ensuring a consistent look and feel across all devices<br>- Establish layout properties for the main content and individual device components<br>- Implement hover effects for interactive elements<br>- Set typography and color schemes for a cohesive design<br>- Include a footer with navigation options.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/monitoramento-park.css'>monitoramento-park.css</a></b></td>
					<td style='padding: 8px;'>- Define the visual styling for a monitoring dashboard<br>- Set the layout, fonts, and colors for a clean and professional interface<br>- Ensure readability and organization with structured rows and headers<br>- Enhance user experience with hover effects for interactive elements.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/kits.css'>kits.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the project, ensuring a consistent look and feel across all pages<br>- Set typography, colors, and layout properties to create a cohesive user interface<br>- Implement card styles, including shadows and borders, for structured content presentation<br>- Lastly, establish a responsive design for equipment cards and attention-grabbing information sections.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/index.css'>index.css</a></b></td>
					<td style='padding: 8px;'>- Define global styles for the project, including font, colors, and layout properties<br>- Establish a clean and consistent look for the body, main container, and footer sections<br>- Ensure a cohesive visual identity throughout the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/suporte.css'>suporte.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the support page, including font, colors, layout, and card design<br>- Ensure a consistent and visually appealing user interface by setting up the body, container, support cards, and footer elements<br>- This CSS file plays a crucial role in shaping the overall look and feel of the support page within the project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/css/colaboradores.css'>colaboradores.css</a></b></td>
					<td style='padding: 8px;'>- Define the global styling for the projects collaborator page<br>- Set the layout, typography, colors, and spacing to create a cohesive user interface<br>- Ensure a consistent look across different screen sizes by utilizing responsive design techniques.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- colaboradores Submodule -->
	<details>
		<summary><b>colaboradores</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ colaboradores</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao K.php'>Secao K.php</a></b></td>
					<td style='padding: 8px;'>- Illustrates detailed profiles of employees in Section K, showcasing their roles, departments, and assigned devices<br>- It also alerts about missing responsibility agreements for certain equipment<br>- The file enhances transparency and accountability in managing employee resources.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao I.php'>Secao I.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao I.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the main section for displaying content related to a specific topic<br>- This file is responsible for rendering a visually appealing and responsive webpage that includes essential metadata, styling, and interactive elements<br>- It integrates various resources such as fonts, icons, stylesheets, and scripts to enhance the user experience<br>- Additionally, it includes PHP code for including other necessary files, ensuring modularity and maintainability in the project architecture.## PurposeThe <code>Secao I.php</code> file plays a vital role in structuring and presenting content within the project<br>- By encapsulating the necessary HTML, CSS, and JavaScript resources, it provides a cohesive and engaging user interface for the designated section<br>- This file acts as a gateway to accessing relevant information and functionalities related to the specific topic, contributing to a seamless navigation experience for users<br>- Its inclusion of author metadata further adds a personal touch to the content, enhancing credibility and transparency.In essence, <code>Secao I.php</code> serves as a cornerstone in the project architecture, harmonizing design elements, functionality, and content organization to deliver a compelling and informative user interface.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao V.php'>Secao V.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao V.php</code> file in the <code>colaboradores</code> directory of the project serves as the markup for Section V of the web application<br>- It provides the necessary HTML structure, including metadata, links to external resources like fonts and stylesheets, as well as scripts for interactivity<br>- This file plays a crucial role in rendering Section V of the application, ensuring a consistent and visually appealing user experience.By including essential elements such as author information, viewport settings, and dependencies like jQuery and custom scripts, <code>Secao V.php</code> contributes to the overall architecture of the project by encapsulating the presentation layer for this specific section<br>- It helps maintain separation of concerns and promotes code reusability by modularizing the content related to Section V.Developers can leverage this file as a template for creating and styling similar sections within the application, following best practices for structuring HTML documents and managing external resources<br>- Its inclusion in the project structure reflects a systematic approach to organizing code and promoting maintainability across different sections of the web application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao S.php'>Secao S.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao S.php</code> file in the <code>colaboradores</code> directory of this project serves as the template for the Seção S (Section S) webpage<br>- It provides the structure and content layout for displaying information related to Section S<br>- This file includes HTML markup, meta information, links to external resources like fonts and stylesheets, as well as scripts for interactivity<br>- The author, Marcelo de Araujo Almeida, has designed this file to ensure a visually appealing and responsive layout for Section S within the larger project architecture.By including this file in the project, developers can easily maintain and update the content and styling of the Section S webpage, contributing to a cohesive and user-friendly web experience.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao D.php'>Secao D.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao D.php</code> file in the <code>colaboradores</code> directory of this project serves as the section D page within the web application<br>- It is responsible for rendering the content related to section D, providing a structured layout with appropriate styling and functionality<br>- This file integrates various elements such as HTML markup, CSS stylesheets, JavaScript scripts, and includes PHP for server-side processing<br>- The page is designed to be responsive, ensuring optimal display across different devices<br>- Additionally, it includes meta tags for metadata information and leverages external resources like Google Fonts and jQuery for enhanced functionality.Overall, <code>Secao D.php</code> plays a crucial role in presenting the content specific to section D in a visually appealing and interactive manner within the larger project architecture.For more detailed technical information, please refer to the code snippet provided above.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao R.php'>Secao R.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao R.php</code> file, located in the <code>colaboradores</code> directory of the project, serves as the representation of the Seção R (Section R) within the application<br>- This HTML file, authored by Marcelo de Araujo Almeida, provides the structure and styling for displaying content related to Section R<br>- It includes essential metadata, links to external resources like fonts and stylesheets, as well as scripts for interactivity<br>- This file plays a crucial role in presenting Section R's information in a visually appealing and user-friendly manner within the overall project architecture.For developers seeking to understand and modify the presentation and behavior of Section R within the application, this file serves as a key reference point.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao M.php'>Secao M.php</a></b></td>
					<td style='padding: 8px;'>- The <code>Secao M.php</code> file, located in the <code>colaboradores</code> directory of the project, serves as the markup for the Seção M" section of the application<br>- This file defines the structure and content of the web page displayed to users when accessing this specific section<br>- It includes essential HTML elements, meta tags for character encoding and viewport settings, links to external resources such as fonts and stylesheets, as well as scripts for interactivity<br>- Additionally, it references PHP code for server-side processing, ensuring dynamic content delivery<br>- Overall, this file plays a crucial role in presenting the Seção M content with proper styling and functionality within the larger project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao N.php'>Secao N.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao N.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the template for the Seção N section of the website<br>- This file defines the structure and content of the webpage, including metadata, styling, and scripts necessary for a seamless user experience<br>- Authored by Marcelo de Araujo Almeida, this file plays a vital role in presenting information related to the Seção N section to the website visitors in Portuguese.By including essential elements such as author information, viewport settings, font styles, and external resources like jQuery, this file ensures that the Seção N section is visually appealing, responsive, and interactive<br>- Its integration with other project files and directories, as indicated by the relative paths for resources, underscores its contribution to the overall architecture and functionality of the website.In essence, <code>Secao N.php</code> encapsulates the design and functionality of the Seção N" section, aligning with the project's goal of providing a cohesive and engaging web experience for users.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao W.php'>Secao W.php</a></b></td>
					<td style='padding: 8px;'>Renders a webpage displaying detailed information about employees in Section W, including their roles, contact details, and assigned devices.-Lists compromised equipment and provides a link to the responsibility agreement.-Displays a footer with copyright information for the Collaborators Inventory project.---This summary provides a clear overview of the code files role and contribution to the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao J.php'>Secao J.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao J.php</code> file within the <code>colaboradores</code> directory of the project serves as the web page for Section J<br>- It provides a user interface in Portuguese, showcasing information related to Section J<br>- This file incorporates HTML, CSS, and JavaScript to render a visually appealing and interactive experience for users accessing Section J within the project's architecture.By including essential metadata, stylesheets, and scripts, this file ensures a cohesive design and functionality consistent with the overall project theme<br>- It plays a crucial role in presenting Section J content authored by Marcelo de Araujo Almeida, enhancing the user's browsing experience through responsive design elements and dynamic behavior.In essence, <code>Secao J.php</code> contributes to the projects architecture by encapsulating Section J's content presentation and interaction logic, aligning with the project's overarching goal of delivering a seamless and engaging web experience to its users.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao B.php'>Secao B.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao B.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the section B page for the website<br>- This file is responsible for rendering the content related to section B, authored by Marcelo de Araujo Almeida<br>- It includes essential metadata, such as the authors name, and incorporates necessary styling elements by linking to external CSS files<br>- Additionally, it enhances user experience by utilizing jQuery for dynamic functionality and includes a script for menu dropdown behavior<br>- This file plays a significant role in presenting section B content within the overall website architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao T.php'>Secao T.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao T.php</code> file, located in the <code>colaboradores</code> directory of the project, serves as the template for the Seção T section of the web application<br>- This file defines the structure and content layout for displaying information related to the Seção T category<br>- It includes essential HTML elements, meta tags for SEO, links to external resources like fonts and stylesheets, as well as scripts for interactivity<br>- Additionally, it incorporates PHP includes for modular code organization.## PurposeThe primary purpose of <code>Secao T.php</code> is to provide a visually appealing and responsive layout for presenting content specific to the Seção T section of the application<br>- By structuring the HTML markup, including necessary dependencies, and incorporating PHP includes, this file ensures a consistent and user-friendly experience for visitors exploring the Seção T category.For developers working on this project, understanding and maintaining <code>Secao T.php</code> is crucial for managing the presentation layer of the Seção T" section and ensuring seamless integration with other components of the application architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao E.php'>Secao E.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao E.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the interface for Section E<br>- This file defines the structure and content of Section E, providing a user-friendly and visually appealing layout for displaying relevant information<br>- It includes essential metadata, such as the authors name, and incorporates external resources like fonts and stylesheets to enhance the presentation<br>- Additionally, it leverages JavaScript for interactive elements, ensuring a dynamic user experience<br>- Overall, <code>Secao E.php</code> plays a pivotal role in shaping the user interface of the project, contributing to a seamless and engaging user interaction.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao A.php'>Secao A.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao A.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the main section A page<br>- This file is responsible for rendering the content related to section A of the application<br>- It includes essential HTML structure, meta information, styling references, and script imports necessary for the proper display and functionality of the section A page<br>- Additionally, it includes PHP code for including other necessary files, ensuring modularity and code reusability within the project architecture.By organizing and presenting the content specific to section A, this file plays a vital role in enhancing the user experience and maintaining consistency across the application<br>- Its inclusion in the project structure demonstrates a structured approach to code organization and separation of concerns, contributing to the overall maintainability and scalability of the codebase.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao Y.php'>Secao Y.php</a></b></td>
					<td style='padding: 8px;'>- Generates a webpage displaying detailed information about employees in Section Y, including their roles, contact details, and assigned devices<br>- The page showcases employee profiles with photos and equipment listings<br>- It also features links to responsibility agreements<br>- The content is structured within cards for each employee, providing a comprehensive overview of their assets and responsibilities.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao C.php'>Secao C.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao C.php</code> file in the <code>colaboradores</code> directory is a crucial component of the project, serving as the interface for Section C<br>- This HTML file, authored by Marcelo de Araujo Almeida, provides the structure and styling for Section C, ensuring a responsive design with the help of CSS and JavaScript dependencies<br>- By including this file in the project, users can seamlessly navigate and interact with the content related to Section C.This file plays a significant role in enhancing the user experience by incorporating essential design elements and functionality, ultimately contributing to the overall cohesiveness and usability of the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao O.php'>Secao O.php</a></b></td>
					<td style='padding: 8px;'>- Create a detailed HTML page displaying information about a specific employee, including their photo, contact details, assigned devices, and a link to their responsibility terms<br>- The page is part of a larger project structure and serves as a section for displaying employee information categorized by the first letter of their name.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao G.php'>Secao G.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao G.php</code> file, located in the <code>colaboradores</code> directory of the project, serves as the HTML template for the Seção G section<br>- This file defines the structure and content layout for the specific section, including metadata, styling references, and script imports<br>- It plays a crucial role in presenting the Seção G content to users in a visually appealing and responsive manner.By including essential elements such as author information, viewport settings, font styles, and script dependencies, this file ensures a consistent and user-friendly experience for visitors accessing the Seção G" section of the project<br>- It contributes to the overall architecture by encapsulating the presentation logic and design aspects specific to this section, enhancing the project's organization and maintainability.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao H.php'>Secao H.php</a></b></td>
					<td style='padding: 8px;'>- Create a detailed README markdown file that provides a comprehensive overview of the projects architecture, including its purpose, structure, and key components<br>- Ensure to include installation instructions, usage guidelines, and any other relevant information that would help users understand and effectively utilize the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao F.php'>Secao F.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao F.php</code> file within the <code>colaboradores</code> directory is a crucial component of the projects architecture<br>- It serves as the frontend interface for Section F, providing a user-friendly and visually appealing layout for displaying relevant information<br>- This file incorporates essential HTML elements, CSS styles, and JavaScript scripts to ensure a seamless user experience<br>- By including meta tags for character encoding and authorship, along with links to external resources like fonts and icons, this file enhances the overall aesthetics and functionality of the Section F page<br>- Additionally, it leverages PHP's <code>include</code> functionality to efficiently manage code reusability and maintainability<br>- Overall, <code>Secao F.php</code> plays a vital role in shaping the interactive and engaging nature of the project's collaborative platform.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao P.php'>Secao P.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>Secao P.php</code> file, located in the <code>colaboradores</code> directory of the project, serves as the HTML template for the Seção P section<br>- This file defines the structure and content layout for the specific section, including metadata, styling references, and script imports<br>- It plays a crucial role in presenting the Seção P content to users in a visually appealing and responsive manner.By including essential elements such as author information, viewport settings, font styles, and script dependencies, this file ensures a consistent and user-friendly experience for visitors accessing the Seção P" section of the project<br>- Its design and functionality contribute to the overall architecture of the codebase, enhancing the presentation and interactivity of the collaborative platform.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/colaboradores/Secao L.php'>Secao L.php</a></b></td>
					<td style='padding: 8px;'>- The <code>Secao L.php</code> file within the <code>colaboradores</code> directory is a crucial component of the projects architecture<br>- It serves as the entry point for the Seção L section of the application, providing a user interface in Portuguese<br>- This file defines the structure of the HTML document, including metadata, links to external resources like fonts and stylesheets, and scripts for interactivity<br>- Additionally, it incorporates PHP code for dynamic content generation, enhancing the overall user experience<br>- By encapsulating these elements, <code>Secao L.php</code> plays a pivotal role in rendering a visually appealing and functional section within the larger codebase.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- scripts Submodule -->
	<details>
		<summary><b>scripts</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ scripts</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/scripts/menudrop.js'>menudrop.js</a></b></td>
					<td style='padding: 8px;'>Enable dropdown menu functionality on mouse hover and hide on mouse leave.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- .github Submodule -->
	<details>
		<summary><b>.github</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ .github</b></code>
			<!-- workflows Submodule -->
			<details>
				<summary><b>workflows</b></summary>
				<blockquote>
					<div class='directory-path' style='padding: 8px 0; color: #666;'>
						<code><b>⦿ .github.workflows</b></code>
					<table style='width: 100%; border-collapse: collapse;'>
					<thead>
						<tr style='background-color: #f8f9fa;'>
							<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
							<th style='text-align: left; padding: 8px;'>Summary</th>
						</tr>
					</thead>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/.github/workflows/generator-generic-ossf-slsa3-publish.yml'>generator-generic-ossf-slsa3-publish.yml</a></b></td>
							<td style='padding: 8px;'>- Generate SLSA provenance file for the project to satisfy level 3 requirements<br>- The file can be verified using the SLSA verifier tool<br>- This workflow is part of the OpenSSF initiative and aims to enhance the supply chain security.</td>
						</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<!-- includes Submodule -->
	<details>
		<summary><b>includes</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ includes</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/includes/footer.php'>footer.php</a></b></td>
					<td style='padding: 8px;'>Define the projects footer content for the years 2024-2025, asserting copyright and ownership of the Collaborator Inventory.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/includes/index.php'>index.php</a></b></td>
					<td style='padding: 8px;'>- Create a welcoming homepage for SaúdeTracker, a robust inventory management platform<br>- Display essential company and product details, guiding users through its functionalities<br>- Incorporate a responsive design and interactive elements for an engaging user experience.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/includes/header.php'>header.php</a></b></td>
					<td style='padding: 8px;'>- Define the main navigation structure for the project, including links to various sections like Home, Collaborators, Annotations, and Inventory<br>- The header.php file plays a crucial role in providing users with easy access to different parts of the website, enhancing navigation and user experience.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- pages Submodule -->
	<details>
		<summary><b>pages</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ pages</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/equipamentos-emprestado.php'>equipamentos-emprestado.php</a></b></td>
					<td style='padding: 8px;'>- Describe the purpose and use of the equipamentos-emprestado.php file within the project's architecture<br>- Highlight its role in displaying information about borrowed equipment, such as keyboards, including details like model, serial number, and user<br>- Emphasize its contribution to the inventory management system for collaborators.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/celular.php'>celular.php</a></b></td>
					<td style='padding: 8px;'>- Generates an inventory display of mobile devices with detailed information such as model, serial number, asset tag, status, and assigned cost center<br>- The page layout includes a header, individual card views for each device, and a footer displaying copyright information<br>- The content is structured in a user-friendly format for easy navigation and reference within the SaúdeTracker project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/suporte.php'>suporte.php</a></b></td>
					<td style='padding: 8px;'>- Create a support inventory page displaying equipment details<br>- Include a header, list of items, and footer with copyright info<br>- Use CSS for styling and jQuery for interactivity<br>- Maintain consistency with the projects design and structure.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/notebook.php'>notebook.php</a></b></td>
					<td style='padding: 8px;'>- Render an HTML page displaying an inventory of machines with detailed specifications<br>- The page includes a header, machine information structured in a visually appealing format, and a footer with copyright information<br>- The styling is enhanced with CSS and JavaScript for interactive elements.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/observacao.php'>observacao.php</a></b></td>
					<td style='padding: 8px;'>- Document and display important inventory and employee data changes<br>- Capture observations and updates related to equipment and personnel<br>- Categorize entries by date for easy tracking and reference<br>- Provide a clear overview of alterations and ensure comprehensive documentation of all significant modifications.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/code-escape.php'>code-escape.php</a></b></td>
					<td style='padding: 8px;'>- Generate an HTML page displaying various code snippets for managing collaborators, statuses, stock, icons, and equipment<br>- Each section showcases structured data with relevant details<br>- The page also includes a footer with copyright information.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/fone.php'>fone.php</a></b></td>
					<td style='padding: 8px;'>- Generate an inventory page displaying headphone details, including model, serial number, and asset ID<br>- The page features a structured layout with device information organized in a visually appealing manner<br>- This file serves as a central hub for managing and viewing headphone inventory data within the project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/monitoramento-park.php'>monitoramento-park.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>monitoramento-park.php</code> file in the <code>pages</code> directory serves as the user interface for displaying a list of users in the AmorSaúde system<br>- This HTML file provides a visually appealing and responsive layout for monitoring and managing users<br>- It includes essential metadata, styling references, and script imports to enhance the user experience<br>- The file encapsulates the presentation layer of the user monitoring functionality within the larger project architecture.By accessing this file through a web browser, users can view and interact with the list of users in the AmorSaúde system, facilitating efficient monitoring and management tasks.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/kits.php'>kits.php</a></b></td>
					<td style='padding: 8px;'>- SummaryThe <code>kits.php</code> file in the <code>pages</code> directory serves as the frontend representation of complete kits within the project<br>- It provides a user interface to view and interact with the available kits<br>- The page includes essential HTML structure, styling references, and scripts for dynamic behavior<br>- By including the <code>header.php</code> file, it ensures consistency with the overall design and navigation elements<br>- This file plays a crucial role in presenting the inventory of kits to users in a visually appealing and organized manner.For a more detailed understanding of the technical implementation and functionality, please refer to the code within the <code>kits.php</code> file in the specified file path.---If you need further assistance or have any questions, feel free to ask!</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/AlmeidaMarcelobit/InventType/blob/master/pages/monitor.php'>monitor.php</a></b></td>
					<td style='padding: 8px;'>- Generates an inventory display of monitors with detailed information such as ID, department, model, serial number, and asset number<br>- The page layout includes a header, styled cards for each monitor, and a footer displaying copyright information<br>- The purpose is to provide a clear overview of monitor assets within different departments.</td>
				</tr>
			</table>
		</blockquote>
	</details>
</details>

---

## Getting Started

### Prerequisites

This project requires the following dependencies:

- **Programming Language:** PHP

### Installation

Build InventType from the source and intsall dependencies:

1. **Clone the repository:**

    ```sh
    ❯ git clone https://github.com/AlmeidaMarcelobit/InventType
    ```

2. **Navigate to the project directory:**

    ```sh
    ❯ cd InventType
    ```

3. **Install the dependencies:**

echo 'INSERT-INSTALL-COMMAND-HERE'

### Usage

Run the project with:

echo 'INSERT-RUN-COMMAND-HERE'

### Testing

Inventtype uses the {__test_framework__} test framework. Run the test suite with:

echo 'INSERT-TEST-COMMAND-HERE'

---

## Roadmap

- [X] **`Task 1`**: <strike>Implement feature one.</strike>
- [ ] **`Task 2`**: Implement feature two.
- [ ] **`Task 3`**: Implement feature three.

---

## Contributing

- **💬 [Join the Discussions](https://github.com/AlmeidaMarcelobit/InventType/discussions)**: Share your insights, provide feedback, or ask questions.
- **🐛 [Report Issues](https://github.com/AlmeidaMarcelobit/InventType/issues)**: Submit bugs found or log feature requests for the `InventType` project.
- **💡 [Submit Pull Requests](https://github.com/AlmeidaMarcelobit/InventType/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/AlmeidaMarcelobit/InventType
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="left">
   <a href="https://github.com{/AlmeidaMarcelobit/InventType/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=AlmeidaMarcelobit/InventType">
   </a>
</p>
</details>

---

## License

Inventtype is protected under the [LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

## Acknowledgments

- Credit `contributors`, `inspiration`, `references`, etc.

<div align="right">

[![][back-to-top]](#top)

</div>


[back-to-top]: https://img.shields.io/badge/-BACK_TO_TOP-151515?style=flat-square


---
