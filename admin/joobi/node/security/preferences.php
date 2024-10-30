<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Default_security_preferences {
var $audit_modification=0;
var $audit_space=1;
var $audit_type=0;
var $block_blacklist=1;
var $block_admin_no_whitelist=0;
var $block_robots=0;
var $block_unknown=0;
var $block_admin_username=0;
var $block_incidents_action=9;
var $block_incidents='49|_|43|_|44|_|45|_|78';	var $request_form=1;
var $email_admins=0;
var $email_alladmins=0;
var $email_ipchange=1;
var $email_wrong_attempt=1;
var $request_email = '';
var $notif_login_email = '';
var $notif_login_roles = '';
var $notif_login_users = '';
var $notif_login_ips = '';
var $notif_login_admin_fail=1;
var $ip_freegeoip=1;
var $ip_ipinfodb='';
var $ip_nekudo=1;
var $incident_emails='';	var $recordactivities=1;
var $recordactivitypages=1;
var $record_request=0;
var $allow_whitelist=0;
var $allowed_be='';
var $allowed_admin='';
var $block_fe_admin=0;
var $delete_activity_guest=31;
var $delete_activity_registered=183;
var $delete_activity_admin=365;
var $delete_activitypages_guest=7;
var $delete_activitypages_registered=31;
var $delete_activitypages_admin=31;
var $delete_incident=365;
var $shield_badwords=3;	var $shield_badwords_admin=0;
var $shield_badwords_role='manager';
var $shield_badwords_replace='*';
var $shield_valid_email=1;
var $shield_login_failnb=5;
var $shield_login_failperiod=300;
var $shield_login_failblocked=900;
var $shield_incident_block_max=7;
var $shield_incident_block_maxdiff=2;
var $shield_incident_block_period=43200;
var $shield_incident_blacklist_max=15;
var $shield_incident_blacklist_maxdiff=4;
var $shield_incident_blacklist_period=1728000;	var $shield_sqlinjection=1;
var $shield_mua=1;
var $shield_rfi=1;
var $shield_dfi=1;
var $shield_sp=1;
var $shield_file=1;
var $display_logins=1;	var $generator_hide=0;
var $generator_custom='';
var $secret_admin='';
var $block_tmpl=0;
var $block_tmpl_list='';
var $block_template=0;
var $block_template_publish=0;
var $user_pwd_period=92;	var $ip_info=1;
var $no_record_ip='';
var $optimizeimage=1;
var $notif_payment=1;
var $manage_ip=1;
var $manage_username=0;
var $manage_country=0;
var $manage_role=0;
var $defense_active=0;
}
class Role_security_preferences {
var $audit_modification='sadmin';
var $audit_space='sadmin';
var $audit_type='sadmin';
var $block_blacklist='admin';
var $block_admin_no_whitelist='admin';
var $block_robots='admin';
var $block_unknown='admin';
var $block_admin_username='admin';
var $block_incidents_action='admin';
var $block_incidents='admin';
var $request_form='admin';
var $email_admins='admin';
var $email_alladmins='admin';
var $email_ipchange='admin';
var $email_wrong_attempt='admin';
var $request_email = 'admin';
var $notif_login_email = 'admin';
var $notif_login_roles = 'sadmin';
var $notif_login_users = 'sadmin';
var $notif_login_ips = 'admin';
var $notif_login_admin_fail = 'admin';
var $ip_freegeoip='admin';
var $ip_ipinfodb='admin';
var $ip_nekudo='admin';
var $incident_emails='admin';
var $recordactivities='admin';
var $recordactivitypages='admin';
var $record_request='sadmin';
var $allow_whitelist='admin';
var $allowed_be='sadmin';
var $allowed_admin='sadmin';
var $block_fe_admin='admin';
var $delete_activity_guest='admin';
var $delete_activity_registered='admin';
var $delete_activity_admin='admin';
var $delete_activitypages_guest='admin';
var $delete_activitypages_registered='admin';
var $delete_activitypages_admin='admin';
var $delete_incident='admin';
var $shield_badwords='manager';
var $shield_badwords_admin='manager';
var $shield_badwords_role='manager';
var $shield_badwords_replace='manager';
var $shield_valid_email='admin';
var $shield_login_failnb='admin';
var $shield_login_failperiod='admin';
var $shield_login_failblocked='admin';
var $shield_incident_block_max='admin';
var $shield_incident_block_maxdiff='admin';
var $shield_incident_block_period='admin';
var $shield_incident_blacklist_max='admin';
var $shield_incident_blacklist_maxdiff='admin';
var $shield_incident_blacklist_period='admin';
var $shield_sqlinjection='admin';
var $shield_mua='admin';
var $shield_rfi='admin';
var $shield_dfi='admin';
var $shield_sp='admin';
var $shield_file='admin';
var $display_logins='admin';
var $generator_hide='admin';
var $generator_custom='admin';
var $secret_admin='admin';
var $block_tmpl='admin';
var $block_tmpl_list='admin';
var $block_template='admin';
var $block_template_publish='admin';
var $user_pwd_period='admin';
var $ip_info='admin';
var $no_record_ip='admin';
var $optimizeimage='admin';
var $notif_payment='admin';
var $manage_ip='admin';
var $manage_username='admin';
var $manage_country='admin';
var $manage_role='admin';
var $defense_active='sadmin';
}
