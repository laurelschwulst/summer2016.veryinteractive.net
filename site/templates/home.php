<?php snippet('header') ?>
<?php snippet('menu') ?>

<div style="position: fixed; top: 92px; left: 0; right: 0;">
<div style="height: 160px; width: 160px; display: block; background: #FDEE2F; border-radius: 50%; margin: 0 auto;" class="sun"></div>
</div>

<div id="town"></div>

<div id="greeting" class="large">
	<?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>