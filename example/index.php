<?php
require_once('../vendor/autoload.php');

use FlySkyPie\MinecraftSkinRenderer\Render3DPlayer;
	
$player = new Render3DPlayer('./img/steve.png');
$player->setRotationOfHead(10);
$player->setRotationOfRightArm(80);
$player->setRotationOfLeftArm(-70);
$player->setRotationOfRightLeg(-50);
$player->setRotationOfLeftLeg(50);
$player->setImageRatio(12);

$image = $player->get3DRender();
header('Content-type: image/png');
echo $image;
exit();
