<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_email_mail_preview_view extends WDataView{
var $yid=1195;
var $wizard=1;
var $wid='#email.node';
var $type=51;
var $params='autosave=1
phpfile=1';
var $namekey='email_mail_preview';
var $menu=13;
var $sid='#email';
var $form=1;
var $icon='preview';
var $rolid='#manager';
var $alias='Preview';
var $faicon='fa-envelope';
var $name='1211811587EZNL';
var $description='1470784954KGPG';
var $wname='1211811587EZNL';
var $wdescription='1230529132JKPD';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459671,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_test',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811588SCXW',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'map'=>'x[html]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459673,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_html',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_preview_test',
'name'=>'1211811588SCXX',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'email=1',
'ordering'=>3,
'map'=>'x[testemail]',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459672,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_testemail',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_preview_test',
'name'=>'1230529131MQQP',
'description'=>'1230529131MQQN' ),
array(
'type'=>'output.fieldset',
'sid'=>0,
'required'=>0,
'readonly'=>0,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'map'=>'',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459665,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_preview',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811587EZNL',
'description'=>'' ),
array(
'type'=>'output.textonly',
'sid'=>'#emailtrans',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'onlyread=1
width=35',
'ordering'=>5,
'map'=>'name',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459663,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_mailtrans_name',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_preview_preview',
'name'=>'1206732400OXCG',
'description'=>'' ),
array(
'type'=>'output.textonly',
'sid'=>'#emailtrans',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'onlyread=1',
'ordering'=>6,
'map'=>'chtml',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459666,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_mailtrans_chtml',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_preview_preview',
'name'=>'1211811588SCXM',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#emailtrans',
'required'=>0,
'readonly'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'onlyread=1
cols=100
rows=20',
'ordering'=>7,
'map'=>'ctext',
'level'=>0,
'initial'=>'',
'hidden'=>0,
'fid'=>459766,
'core'=>1,
'did'=>0,
'private'=>0,
'area'=>'',
'ref_yid'=>0,
'frame'=>0,
'rolid'=>'#manager',
'namekey'=>'mail_preview_mailtrans_ctext',
'fdid'=>0,
'parentdft'=>0,
'checktype'=>0,
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#mail_preview_preview',
'name'=>'1211811588SCXP',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>1,
'level'=>0,
'icon'=>'send',
'action'=>'sendtest',
'mid'=>2104,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_preview_sendtest',
'faicon'=>'fa-envelope',
'color'=>'success',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811588SCXH',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>2,
'level'=>0,
'icon'=>'',
'action'=>'divider',
'mid'=>2133,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_preview_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>3,
'level'=>0,
'icon'=>'edit',
'action'=>'edit',
'mid'=>2132,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_preview_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>4,
'level'=>0,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>2103,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_preview_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>0,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>0,
'params'=>'',
'ordering'=>6,
'level'=>0,
'icon'=>'help',
'action'=>'help',
'mid'=>8581,
'private'=>0,
'position'=>0,
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'mail_preview_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>0,
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}