<?php
/**
 *
 * PHP CSS Sprite generator example
 *
 * this is an example usage of the css sprite library
 * chmod your outpath so its script writeable.
 *
 * Devin Smith            www.devin-smith.com            2009.06.18
 *
 */

require_once 'CssSprite.php';

$images['devin']['file'] = 'devinsmith.logo.png';
$images['devin']['style']['margin'] = '0 auto';
$images['charitycall']['file'] = 'charitycall.logo.png';
$images['charitycall']['style']['margin'] = '0 auto';


$sprite = new CssSpriteMap();

$sprite->setImages($images)
	->setInPath('./')
	->setForceRefresh(false)
	->setCssPrefix('csssprite')
	->setOutPath('./cache/')
	->setOutUrl('cache/')
	->create();


/**
 * get the css and display it in your header
 */
$css = $sprite->getCss();

/**
 * contains the image information of the sprite you want (optional)
 */
$mySprite = $sprite->getImg('devin');

/**
 * sloppy output!
 */
?>
<html><head><title>Css Sprite Generator Example</title>
<style type="text/css">
	<?=$css?>
	.<?=$sprite->getCssPrefix()?> span { display: none; }
</style>
</head><body>
<div class="<?=$sprite->getCssPrefix()?> <?=$sprite->getCssPrefix()?>devin center"><span>www.devin-smith.com</span></div>
<br /><br />
<div class="<?=$sprite->getCssPrefix()?> <?=$sprite->getCssPrefix()?>charitycall center"><span>charitycalliphone.com</span></div>
</body></html>