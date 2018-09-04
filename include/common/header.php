<body class="<?= $body; ?>">
<header>
	<nav>
		<ul>
			<?php
			foreach ($navlist as $key => $value) {
			?>
				<li>
				<a href="<?= 'index.php' . LINK_PATTERN . $value['link']; ?>"> <?= $value['label']; ?></a>
				</li>	
			<?php
			}
			?>
		</ul>	
	</nav>
</header>