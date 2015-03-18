<?php
define("DIRECTORY",$_SERVER['OPENSHIFT_DATA_DIR'] );
define("DBNAME",$_SERVER['OPENSHIFT_APP_NAME'] );


if ($_SERVER['OWNCLOUD_DB'] == 'mysql' ) {
  define("DBTYPE",'mysql' );
  define("DBUSER",$_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'] );
  define("DBPASS",$_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD'] );
  define("DBHOST",$_SERVER['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_SERVER['OPENSHIFT_MYSQL_DB_PORT'] );
}

if ($_SERVER['OWNCLOUD_DB'] == 'postgresql' ) {
  define("DBTYPE",'pgsql' );
  define("DBUSER",$_SERVER['OPENSHIFT_POSTGRESQL_DB_USERNAME'] );
  define("DBPASS",$_SERVER['OPENSHIFT_POSTGRESQL_DB_PASSWORD'] );
  define("DBHOST",$_SERVER['OPENSHIFT_POSTGRESQL_DB_HOST'] . ':' . $_SERVER['OPENSHIFT_POSTGRESQL_DB_PORT'] );
}

define("ADMIN_PASSWORD_FILE", $_SERVER['OPENSHIFT_DATA_DIR'] . '/.initial_owncloud_password' );

$AUTOCONFIG = array(
     'installed' => false,
     'dbtype' => DBTYPE,
     'dbtableprefix' => 'oc_',
     'adminlogin' => 'admin',
     'adminpass' => trim(array_shift(file(ADMIN_PASSWORD_FILE))),
     'directory' => DIRECTORY,
     'dbname' => DBNAME,
     'dbuser' => DBUSER,
     'dbpass' => DBPASS,
     'dbhost' => DBHOST,
  );
?>
