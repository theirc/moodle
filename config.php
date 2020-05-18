<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('APPSETTING_DBHOST');
$CFG->dbname    = getenv('APPSETTING_DBNAME');
$CFG->dbuser    = getenv('APPSETTING_DBUSER');
$CFG->dbpass    = getenv('APPSETTING_DBPASS');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = getenv('APPSETTING_WWWROOT');
$CFG->dataroot  = 'D:\\home\\site\\wwwroot\\moodledata\\';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

//require_once(__DIR__ . '/lib/setup.php');
require_once(__DIR__ . '\lib\setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
