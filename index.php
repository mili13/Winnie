<?php
//
// PHASE: BOOTSTRAP
//
define('WINNIE_INSTALL_PATH', dirname(__FILE__));
define('WINNIE_SITE_PATH', WINNIE_INSTALL_PATH . '/site');

require(WINNIE_INSTALL_PATH.'/Src/CWinnie/bootstrap.php');

$win = CWinnie::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$win->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$win->ThemeEngineRender();
