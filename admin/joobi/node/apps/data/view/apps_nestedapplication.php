<?php defined('JOOBI_SECURE') or die('J....');
class Data_apps_apps_nestedapplication_view extends WDataView{
var $yid=1625;
var $wid='#apps.node';
var $type=2;
var $params='maxitem=10';
var $namekey='apps_nestedapplication';
var $filters=1;
var $sid='#apps';
var $form=1;
var $icon='column';
var $rolid='#manager';
var $alias='nestedapplication';
var $name='1227580613HBMJ';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.customized',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'filef=link2apps
order=2',
'ordering'=>1,
'map'=>'name',
'lid'=>5474,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_name',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OXBR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#appstrans',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'ovly=1',
'ordering'=>2,
'map'=>'description',
'lid'=>11314,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_appstrans_description',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#nestedapplication_apps_name',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps.info',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1
align=center',
'ordering'=>3,
'map'=>'userversion',
'lid'=>13609,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_info_userversion',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'infonly=1',
'ordering'=>4,
'map'=>'status',
'lid'=>5571,
'level'=>0,
'hidden'=>0,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_status',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>7,
'map'=>'namekey',
'lid'=>13611,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_namekey',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>8,
'map'=>'publish',
'lid'=>13610,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_publish',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#apps',
'search'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>9,
'map'=>'modified',
'lid'=>5643,
'level'=>0,
'hidden'=>1,
'core'=>1,
'did'=>0,
'ref_wid'=>0,
'rolid'=>'#manager',
'namekey'=>'nestedapplication_apps_modified',
'fdid'=>0,
'parentdft'=>0,
'advsearch'=>0,
'advordering'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#applicationonly_publish',
'bktbefore'=>0,
'sid'=>'#apps',
'map'=>'publish',
'type'=>1,
'ref_sid'=>0,
'refmap'=>1,
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'applicationonly_publish',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' ),
array(
'flid'=>'#applicationonly_1625',
'bktbefore'=>0,
'sid'=>'#apps',
'map'=>'type',
'type'=>1,
'ref_sid'=>0,
'refmap'=>1,
'bktafter'=>0,
'logicopr'=>0,
'level'=>0,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'applicationonly_1625',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>0,
'requirednode'=>0,
'rolid'=>0,
'isadmin'=>'0' )
);
}