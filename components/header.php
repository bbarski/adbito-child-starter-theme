<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
	<body site-theme="outdoor">
		<header>
			<div class="header-container">
				<div class="header-content">
					<?php get_template_part('components/elements/header-logo'); ?>
					<?php get_template_part('components/nav');?>
					<?php get_template_part('components/elements/header-site-description'); ?>
				</div>
			</div>
		</header>
<main>
