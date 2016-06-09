<?php

$wgDefaultSkin = "chameleon";


require_once "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php";
enableSemantics( $wgServer );
require_once "$IP/extensions/SemanticForms/SemanticForms.php";
require_once "$IP/extensions/Stepnumber/StepNumber.php";
require_once "$IP/extensions/WfSearch/WfSearch.php";
require_once "$IP/extensions/Explore/WfExplore.php";
require_once "$IP/extensions/AuthorDiv/WfAuthorDiv.php";
require_once "$IP/extensions/Carousel/Carousel.php";
require_once "$IP/extensions/Cite/Cite.php";
require_once "$IP/extensions/Tabber/Tabber.php";
require_once "$IP/extensions/UserFunctions/UserFunctions.php";
require_once "$IP/extensions/WfSocialProfile/SocialProfile.php";
require_once "$IP/extensions/ExtensionsUserFollowlist/UserFollowList.php";
require_once "$IP/extensions/WfextStyle/wikifabstyle.php";
require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";

$egChameleonLayoutFile= __DIR__ . '/skins/wikifabStyleModule/layout-wikifab.xml';
$egChameleonLayoutFileSearchResult= __DIR__ . '/skins/wikifabStyleModule/layout-wikifab-search-result.html';
$egChameleonLayoutFileSearchResultUserPage = __DIR__ . '/skins/wikifabStyleModule/layout-wikifab-search-result-userpage.html';

$egChameleonExternalStyleModules = array(
    __DIR__ . '/skins/wikifabStyleModule/chameleon-wikifab.less' => $wgScriptPath . '/skins/wikifabStyleModule',
    __DIR__ . '/skins/wikifabStyleModule/font-awesome-4.4.0/less/font-awesome.less' => $wgScriptPath . '/skins/wikifabStyleModule/font-awesome-4.4.0/less/font-awesome.less',
);




$wgFooterIcons['poweredby']['wikifab']['src'] = "http://files.wikifab.org/logo/poweredby_wikifab_88x31.png";
$wgFooterIcons['poweredby']['wikifab']['alt'] = "Powered by wikifab";
$wgFooterIcons['poweredby']['wikifab']['url'] = "http://beta.wikifab.org/index.php/Développeurs";


$wgUploadSizeWarning = '2097152';

$wgFileExtensions = array(
    //image
    'png', 'gif', 'jpg', 'jpeg', 'doc',
    'xls', 'mpp', 'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx',
    'pptx', 'ps', 'odt', 'ods', 'odp', 'odg',
    // fichier 3D
	'3dc','3ds','ac','asc','bvh','blend','geo','dae','dwf','dw','x','fbx',
	'gta','mu','kmz','lwo','lws','flt','iv','osg','osgt','osgb','ive',
	'ply','shp','stl','vpk','wrl','wrz','obj',
    '3dm','dxf','stl','sldprt'
);

$smwgLinksInValues = true;

$wgUFAllowedNamespaces[NS_MAIN] = true;
$wgUFAllowedNamespaces[SF_NS_FORM] = true;


// Use this line ONLY if your MediaWiki version is 1.25 or newer:
/*
wfLoadExtensions( array( 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ) );
$wgCaptchaClass = 'ReCaptchaNoCaptcha';
$wgReCaptchaSiteKey = '';
$wgReCaptchaSecretKey = '';
$wgCaptchaTriggers['edit']          = false;
$wgCaptchaTriggers['create']        = false;
$wgCaptchaTriggers['addurl']        = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin']      = true;
$wgGroupPermissions['user']['skipcaptcha'] = true;
// */
