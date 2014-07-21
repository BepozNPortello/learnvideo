<?php
define("DIRECTORY",$_SERVER['OPENSHIFT_DATA_DIR'] );
define("DBNAME",$_SERVER['OPENSHIFT_APP_NAME'] );
define("DBUSER",$_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'] );
define("DBPASS",$_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD'] );
define("DBHOST",$_SERVER['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_SERVER['OPENSHIFT_MYSQL_DB_PORT'] );

define("ADMIN_PASSWORD_FILE", $_SERVER['OPENSHIFT_DATA_DIR'] . '/.initial_owncloud_password' );

$AUTOCONFIG = array(
     'installed' => false,
     'dbtype' => 'mysql',
     'dbtableprefix' => 'oc_',
     'adminlogin' => 'admin',
     'adminpass' => trim(file(ADMIN_PASSWORD_FILE)[0]),
     'directory' => DIRECTORY,
     'dbname' => DBNAME,
     'dbuser' => DBUSER,
     'dbpass' => DBPASS,
     'dbhost' => DBHOST, 
  );
?>
