<?php


global $library;

if($library){

$dbConfig = require "$library/org.hailong.configs/db_default.php";

defaultDBAdapter($dbConfig["type"],$dbConfig["servername"],$dbConfig["database"],$dbConfig["username"],$dbConfig["password"]);

getDefaultDBAdapter()->setCharset($dbConfig["charset"]);

defaultDBContext(new DBContext());

date_default_timezone_set("PRC");

	require_once "$library/org.hailong.account/account.php";
    require_once "$library/org.hailong.authority/authority.php";
    require_once "$library/org.hailong.crash/crash.php";
}

function config(){
	return array(
		"services" => array(
			array(
				"class" => "DBService",
				"tasks" => array(
					"DBContextTask"
					),
				"config" => array(
					"entitys"=>array("DBAccount","DBUserViewState","DBAuthority","DBAuthorityRole","DBAuthorityEntity","DBLog","DBCrash")
				),
				"createInstance" =>true,
			),
			array(
				"class" => "LogService",
				"tasks" => array(
					"LogTask"
				),
				"config" => array(
					"filter"=>LogLevelError
				),
			),
			array(
				"class" => "LoginService",
				"tasks" => array(
					"LoginTask","LogoutTask"
				),
			),
			array(
				"class" => "AccountService",
				"tasks" => array(
					"AccountIDTask","AccountByIDTask"
				),
			),
			array(
				"class" => "AuthService",
				"tasks" => array(
					"AuthTask","UserViewStateSaveTask","UserViewStateLoadTask","UserViewStateClearTask"
				),
			),
			array(
				"class" => "UserViewStateService",
				"tasks" => array(
					"UserViewStateSaveTask","UserViewStateLoadTask","UserViewStateClearTask"
				),
			),
			array(
				"class" => "AuthorityValidateService",
				"tasks" => array(
					"AuthorityEntityValidateTask","AuthorityRoleValidateTask"
				),
			),
			array(
				"class" => "CrashService",
				"tasks" => array(
					"CrashExportTask"
				),
			),
		),
	);
}

?>