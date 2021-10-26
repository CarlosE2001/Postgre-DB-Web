<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/adodb/adodb-php/adodb-active-record.inc.php';

define('DS', DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', 'View' . DS);
define('BASE_DIR', getcwd() . DS);

define('ADODB_ASSOC_CASE', 0);
$db = NewADOConnection('postgres9://eb92786:eb92786@localhost/ci0137');
$dictionary = NewDataDictionary($db);
$dictionary->SetSchema('eb92786');
$db->Execute('SET search_path TO eb92786');
ADOdb_Active_Record::SetDatabaseAdapter($db);
$db->debug = FALSE; //

spl_autoload_register(
	function ($class)
	{
		preg_match('/^(?<name>\w+)(?<function>(Controller|Model)){1}$/', $class, $matches);
		switch (@$matches['function']) {
			case 'Controller':
				require_once('Controller' . DS . $class . '.php');
				break;
			case 'Model':
				require_once('Model' . DS . $class . '.php');
				break;
			default:
				require_once('Ekeke' . DS . $class . '.class.php');
		} // switch
	}
);

$direccionesController = new DireccionesController();

?>