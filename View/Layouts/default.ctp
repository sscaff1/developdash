<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription =  'DevelopDash';
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('jquery-ui.min');
		echo $this->Html->css('pure-min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('my_styles');
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery-ui.min');
		echo $this->Html->script('yui-min');
		echo $this->Html->script('custom');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $cakeDescription; ?></h1>
		</div>
		<div id="content">
			<?php echo $this->element('site_main_menu'); ?>
			<?php echo $this->Session->flash(); ?>
			<div id="form_content">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
