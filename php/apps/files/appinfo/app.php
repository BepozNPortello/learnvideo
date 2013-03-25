<?php
OC::$CLASSPATH['OCA\Files\Capabilities'] = 'apps/files/lib/capabilities.php';

$l = OC_L10N::get('files');

OCP\App::registerAdmin('files', 'admin');

OCP\App::addNavigationEntry( array( "id" => "files_index",
									"order" => 0,
									"href" => OCP\Util::linkTo( "files", "index.php" ),
									"icon" => OCP\Util::imagePath( "core", "places/files.svg" ),
									"name" => $l->t("Files") ));

OC_Search::registerProvider('OC_Search_Provider_File');
