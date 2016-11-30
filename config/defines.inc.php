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

/* Debug only */
sdefine('_PS_MODE_DEV_', true);
if (_PS_MODE_DEV_)
{
	@ini_set('display_errors', 'on');
	@error_reporting(E_ALL | E_STRICT);
	sdefine('_PS_DEBUG_SQL_', true);
	/* Compatibility warning */
	sdefine('_PS_DISPLAY_COMPATIBILITY_WARNING_', true);
}
else
{
	@ini_set('display_errors', 'off');
	sdefine('_PS_DEBUG_SQL_', false);
	/* Compatibility warning */
	sdefine('_PS_DISPLAY_COMPATIBILITY_WARNING_', false);
}

sdefine('_PS_DEBUG_PROFILING_', false);
sdefine('_PS_MODE_DEMO_', false);

$currentDir = dirname(__FILE__);

if (!defined('PHP_VERSION_ID'))
{
    $version = explode('.', PHP_VERSION);
    define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
}

/* Directories */
sdefine('_PS_ROOT_DIR_', realpath($currentDir.'/..'));
sdefine('_PS_CLASS_DIR_',            _PS_ROOT_DIR_.'/classes/');
sdefine('_PS_CONTROLLER_DIR_',       _PS_ROOT_DIR_.'/controllers/');
sdefine('_PS_FRONT_CONTROLLER_DIR_', _PS_ROOT_DIR_.'/controllers/front/');
sdefine('_PS_ADMIN_CONTROLLER_DIR_', _PS_ROOT_DIR_.'/controllers/admin/');
sdefine('_PS_OVERRIDE_DIR_', _PS_ROOT_DIR_.'/override/');
sdefine('_PS_TRANSLATIONS_DIR_', _PS_ROOT_DIR_.'/translations/');
sdefine('_PS_DOWNLOAD_DIR_',         _PS_ROOT_DIR_.'/download/');
sdefine('_PS_MAIL_DIR_',             _PS_ROOT_DIR_.'/mails/');
sdefine('_PS_PDF_DIR_', _PS_ROOT_DIR_.'/pdf/');
sdefine('_PS_ALL_THEMES_DIR_',       _PS_ROOT_DIR_.'/themes/');
sdefine('_PS_IMG_DIR_',              _PS_ROOT_DIR_.'/img/');
sdefine('_PS_MODULE_DIR_',              _PS_ROOT_DIR_.'/modules/');
sdefine('_PS_CAT_IMG_DIR_',          _PS_IMG_DIR_.'c/');
sdefine('_PS_STORE_IMG_DIR_',		_PS_IMG_DIR_.'st/');
sdefine('_PS_PROD_IMG_DIR_',         _PS_IMG_DIR_.'p/');
sdefine('_PS_SCENE_IMG_DIR_',        _PS_IMG_DIR_.'scenes/');
sdefine('_PS_SCENE_THUMB_IMG_DIR_',  _PS_IMG_DIR_.'scenes/thumbs/');
sdefine('_PS_MANU_IMG_DIR_',         _PS_IMG_DIR_.'m/');
sdefine('_PS_SHIP_IMG_DIR_',         _PS_IMG_DIR_.'s/');
sdefine('_PS_SUPP_IMG_DIR_',         _PS_IMG_DIR_.'su/');
sdefine('_PS_COL_IMG_DIR_',			_PS_IMG_DIR_.'co/');
sdefine('_PS_TMP_IMG_DIR_',          _PS_IMG_DIR_.'tmp/');
sdefine('_PS_UPLOAD_DIR_',			_PS_ROOT_DIR_.'/upload/');
sdefine('_PS_TOOL_DIR_', _PS_ROOT_DIR_.'/tools/');
sdefine('_PS_GEOIP_DIR_',            _PS_TOOL_DIR_.'geoip/');
sdefine('_PS_SWIFT_DIR_', _PS_TOOL_DIR_.'swift/');
sdefine('_PS_GENDERS_DIR_',            _PS_IMG_DIR_.'genders/');
sdefine('_PS_FPDF_PATH_',            _PS_TOOL_DIR_.'fpdf/'); // @deprecated will be removed in 1.6
sdefine('_PS_TCPDF_PATH_',            _PS_TOOL_DIR_.'tcpdf/');
sdefine('_PS_TAASC_PATH_',            _PS_TOOL_DIR_.'taasc/');
sdefine('_PS_PEAR_XML_PARSER_PATH_', _PS_TOOL_DIR_.'pear_xml_parser/');
sdefine('_PS_CACHE_DIR_',			_PS_ROOT_DIR_.'/cache/');
/* BO THEMES */
if (defined('_PS_ADMIN_DIR_'))
    sdefine('_PS_BO_ALL_THEMES_DIR_',			_PS_ADMIN_DIR_.'/themes/');

/* settings php */
sdefine('_PS_TRANS_PATTERN_',            '(.*[^\\\\])');
sdefine('_PS_MIN_TIME_GENERATE_PASSWD_', '360');
sdefine('_PS_MAGIC_QUOTES_GPC_',         get_magic_quotes_gpc());

sdefine('_CAN_LOAD_FILES_', 1);

/* Order states
Order states has been moved in config.inc.php file for backward compatibility reasons */

/* Tax behavior */
sdefine('PS_PRODUCT_TAX', 0);
sdefine('PS_STATE_TAX', 1);
sdefine('PS_BOTH_TAX', 2);

sdefine('_PS_PRICE_DISPLAY_PRECISION_', 2);
sdefine('PS_TAX_EXC', 1);
sdefine('PS_TAX_INC', 0);

sdefine('PS_ORDER_PROCESS_STANDARD', 0);
sdefine('PS_ORDER_PROCESS_OPC', 1);

sdefine('PS_ROUND_UP', 0);
sdefine('PS_ROUND_DOWN', 1);
sdefine('PS_ROUND_HALF', 2);

/* Registration behavior */
sdefine('PS_REGISTRATION_PROCESS_STANDARD', 0);
sdefine('PS_REGISTRATION_PROCESS_AIO', 1);

/* Carrier::getCarriers() filter */
// these defines are DEPRECATED since 1.4.5 version
sdefine('PS_CARRIERS_ONLY', 1);
sdefine('CARRIERS_MODULE', 2);
sdefine('CARRIERS_MODULE_NEED_RANGE', 3);
sdefine('PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE', 4);
sdefine('ALL_CARRIERS', 5);

/* SQL Replication management */
sdefine('_PS_USE_SQL_SLAVE_', 0);

/* PS Technical configuration */
sdefine('_PS_ADMIN_PROFILE_', 1);

/* Stock Movement */
sdefine('_STOCK_MOVEMENT_ORDER_REASON_', 3);
sdefine('_STOCK_MOVEMENT_MISSING_REASON_', 4);

/**
 * @deprecated 1.5.0.1
 * @see Configuration::get('PS_CUSTOMER_GROUP')
 */
sdefine('_PS_DEFAULT_CUSTOMER_GROUP_', 3);

sdefine('_PS_CACHEFS_DIRECTORY_', _PS_ROOT_DIR_.'/cache/cachefs/');

/* Geolocation */
sdefine('_PS_GEOLOCATION_NO_CATALOG_', 0);
sdefine('_PS_GEOLOCATION_NO_ORDER_', 1);

sdefine('MIN_PASSWD_LENGTH', 8);

sdefine('_PS_SMARTY_NO_COMPILE_', 0);
sdefine('_PS_SMARTY_CHECK_COMPILE_', 1);
sdefine('_PS_SMARTY_FORCE_COMPILE_', 2);

sdefine('_PS_SMARTY_CONSOLE_CLOSE_', 0);
sdefine('_PS_SMARTY_CONSOLE_OPEN_BY_URL_', 1);
sdefine('_PS_SMARTY_CONSOLE_OPEN_', 2);

sdefine('_PS_JQUERY_VERSION_', '1.7.2');

