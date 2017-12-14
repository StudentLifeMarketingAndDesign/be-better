<?php

global $project;
$project = 'mysite';

global $database;
$database = 'bebetter';

// Use _ss_environment.php file for configuration
require_once ("conf/ConfigureFromEnv.php");

// Set the site locale
i18n::set_locale('en_US');


Authenticator::unregister('MemberAuthenticator');
Authenticator::set_default_authenticator('SAMLAuthenticator');

if(Director::isLive()) {
	Director::forceSSL();
}