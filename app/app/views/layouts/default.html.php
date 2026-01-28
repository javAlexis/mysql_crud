<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */
?>
<!doctype html>
<html>

<head>
	<?php echo $this->html->charset(); ?>
	<title>TecnoMegaStore &gt; <?php echo $this->title(); ?></title>
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<?php echo $this->html->style(['bootstrap.min', 'lithified', 'tecnostore']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>

<body class="lithified">
	<div class="container-main">
		<?php echo $this->content(); ?>
	</div>
</body>

</html>