<html>
<head>
	<title>
		<?php echo $this->init_model->get_title(); ?>
	</title>
	<link rel="stylesheet" type="text/css" media="screen,print" href="<?php echo base_url(); ?>_css/main.css">
</head>
<body>
	<div id="container">
		<div id="logo">
			<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>_images/logo.png" alt=""></a>
		</div>
		<nav id="menu">
			<ul>
				<?php foreach ($nav_menu as $nav_name) : ?>
				<li>
					<a class="<?php echo $nav_name->class; ?>" href="<?php echo base_url() . $nav_name->link; ?>/"><?php echo $nav_name->name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>

