<?php
$output = '';
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
		$setting = $modx->getObject('modSystemSetting',array('key' => 'ludwigqrcode.version'));
		if ($setting != null) 
		{
				$setting->set('value','1.0.0');
				$setting->save();
		}
		unset($setting);
		break;

    case xPDOTransport::ACTION_UNINSTALL:
      $output= true;
      break;
}
return $output;
