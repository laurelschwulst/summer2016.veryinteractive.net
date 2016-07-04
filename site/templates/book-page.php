<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="menu book">
	<?php snippet('menu-book') ?>
</div>

<div class="container book">

	<div class="document">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>

	<?php snippet('meta-bar') ?>

</div>

<?php snippet('footer') ?>