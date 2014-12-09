<?php
$output = '';
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
        break;
    case xPDOTransport::ACTION_UPGRADE:
 		 $setting = $modx->getObject('modSystemSetting',array('key' => 'ludwigshariff.version'));
		if ($setting != null) { 
				$setting->set('value', PKG_VERSION);
				$setting->save();
		}
        unset($setting);
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}
return $output;
