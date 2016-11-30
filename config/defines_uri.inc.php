<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/* Theme URLs */
sdefine('_PS_THEME_DIR_',   _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/');
sdefine('_THEMES_DIR_',     __PS_BASE_URI__.'themes/');
sdefine('_THEME_DIR_',      _THEMES_DIR_._THEME_NAME_.'/');
sdefine('_THEME_IMG_DIR_',  _THEME_DIR_.'img/');
sdefine('_THEME_CSS_DIR_',  _THEME_DIR_.'css/');
sdefine('_THEME_JS_DIR_',   _THEME_DIR_.'js/');
sdefine('_PS_THEME_OVERRIDE_DIR_', _PS_THEME_DIR_.'override/');

/* For mobile devices */
if (file_exists(_PS_THEME_DIR_.'mobile/'))
{
	sdefine('_PS_THEME_MOBILE_DIR_', _PS_THEME_DIR_.'mobile/');
	sdefine('_THEME_MOBILE_DIR_', _THEMES_DIR_._THEME_NAME_.'/mobile/');
}
else
{
	sdefine('_PS_THEME_MOBILE_DIR_', _PS_ROOT_DIR_.'/themes/default/mobile/');
	sdefine('_THEME_MOBILE_DIR_', __PS_BASE_URI__.'themes/default/mobile/');
}
sdefine('_PS_THEME_MOBILE_OVERRIDE_DIR_', _PS_THEME_MOBILE_DIR_.'override/');

sdefine('_THEME_MOBILE_IMG_DIR_', _THEME_MOBILE_DIR_.'img/');
sdefine('_THEME_MOBILE_CSS_DIR_', _THEME_MOBILE_DIR_.'css/');
sdefine('_THEME_MOBILE_JS_DIR_', _THEME_MOBILE_DIR_.'js/');

/* For touch pad devices */
sdefine('_PS_THEME_TOUCHPAD_DIR_', _PS_THEME_DIR_.'touchpad/');
sdefine('_THEME_TOUCHPAD_DIR_', _THEMES_DIR_._THEME_NAME_.'/touchpad/');
sdefine('_THEME_TOUCHPAD_CSS_DIR_', _THEME_MOBILE_DIR_.'css/');
sdefine('_THEME_TOUCHPAD_JS_DIR_', _THEME_MOBILE_DIR_.'js/');

/* Image URLs */
sdefine('_PS_IMG_',         __PS_BASE_URI__.'img/');
sdefine('_PS_ADMIN_IMG_',   			_PS_IMG_.'admin/');
sdefine('_PS_TMP_IMG_',   			_PS_IMG_.'tmp/');
sdefine('_THEME_CAT_DIR_',  			_PS_IMG_.'c/');
sdefine('_THEME_PROD_DIR_', 			_PS_IMG_.'p/');
sdefine('_THEME_MANU_DIR_', 			_PS_IMG_.'m/');
sdefine('_THEME_SCENE_DIR_', 		_PS_IMG_.'scenes/');
sdefine('_THEME_SCENE_THUMB_DIR_', 	_PS_IMG_.'scenes/thumbs');
sdefine('_THEME_SUP_DIR_',  			_PS_IMG_.'su/');
sdefine('_THEME_SHIP_DIR_',			_PS_IMG_.'s/');
sdefine('_THEME_STORE_DIR_',			_PS_IMG_.'st/');
sdefine('_THEME_LANG_DIR_',			_PS_IMG_.'l/');
sdefine('_THEME_COL_DIR_', 			_PS_IMG_.'co/');
sdefine('_THEME_GENDERS_DIR_',		_PS_IMG_.'genders/');
sdefine('_SUPP_DIR_',      			_PS_IMG_.'su/');
sdefine('_PS_PROD_IMG_', 			_PS_IMG_.'p/');

/* Other URLs */
sdefine('_PS_JS_DIR_',               __PS_BASE_URI__.'js/');
sdefine('_PS_CSS_DIR_',              __PS_BASE_URI__.'css/');
sdefine('_THEME_PROD_PIC_DIR_', 	__PS_BASE_URI__.'upload/');
sdefine('_MAIL_DIR_',        	__PS_BASE_URI__.'mails/');
sdefine('_MODULE_DIR_',        	__PS_BASE_URI__.'modules/');
