<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $baseXmlGen->title; ?></title>
		<link rel="shortcut icon" type="image/png" href="/media/img/main/favicon.png"/>
	</head>
	<body>
		<?php require_once($core->getModule($layoutFileGen,"header")); ?>
		<div class="mainContentInline">
			<?php
				$contentClass 	= $core->getSetting(
					array($baseXmlGen, $layoutFileGen),
					array("settings","body","mainContent","content","columnWidth"),
					"50");
				$hideMobile 		= (string)$core->getSetting(
					array($baseXmlGen, $layoutFileGen),
					array("settings","body","mainContent","content","hideMobile"),
					"false");
				if($hideMobile === "true")
				{
					$contentClass .= " hideMobile";
				}
			?>
			<div class="column width<?php echo $contentClass; ?>">
				<!-- Default content -->
				<?php include($core->getContent($baseXmlGen)); ?>
			</div>
			<?php
				$contentClass 	= $core->getSetting(
					array($baseXmlGen, $layoutFileGen),
					array("settings","body","mainContent","contentTwo","columnWidth"),
					"50");
				$hideMobile 		= (string)$core->getSetting(
					array($baseXmlGen, $layoutFileGen),
					array("settings","body","mainContent","contentTwo","hideMobile"),
					"false");
				if($hideMobile === "true")
				{
					$contentClass .= " hideMobile";
				}
			?>
	  		<div class="column width<?php echo $contentClass; ?>">
	  			<!-- contentTwo -->
	  			<?php include($core->getContent($baseXmlGen, "contentTwo")); ?>
	  		</div>
	  	</div>
		<?php require_once($core->getModule($layoutFileGen,"footer")); ?>
	</body>
</html>