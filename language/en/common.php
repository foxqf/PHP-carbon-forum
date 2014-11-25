<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
if (empty($Lang) || !is_array($Lang))
	$Lang = array();

$Lang = array_merge($Lang, array(
	'Language' => 'en',
	'RoleDict' => array('Visitor','Member','VIP','SVP','Administrator','System Administrator'),
	'Error_Message' => 'Error Message',
	'Error_Unknown_Referer' => 'Unknown referer',
	'Error_Insufficient_Permissions' => 'This page is only visible to {{RoleDict}}, you have insufficient permissions.',
	'Error_Account_navailable' => 'Your account is being reviewed, or banned, contact administrator to confirm! ',
	'Time_Days_Ago' => 'days ago',
	'Time_Hours_Ago' => 'hours ago',
	'Time_Minutes_Ago' => 'minutes ago',
	'Time_Seconds_Ago' => 'seconds ago',
	'Time_Just_Now' => 'just now',
	'Page_Previous' => 'Previous',
	'Page_Next' => 'Next',
	'New_Message' => '({{NewMessage}} New Messages)',
	'UserName' => 'Username',
	'Password' => 'Password',
	'Verification_Code' =>'Verification code',
	'Log_In' => ' Log in ',
	'Sign_Up' => 'Sign up',
	'User_Panel' => 'User Panel',
	'Log_Out' => 'Log out',
	'Information_Bar' =>'Information Bar',
	'Home' => 'Home',
	'Create_New_Topic' => 'Create New Topic',
	'Tags_Followed' => 'Tags Followed',
	'Favorite_Topics' => 'Favorites',
	'Users_Followed' => 'Following',
	'Notifications' => 'Notifications',
	'Settings' => 'Settings',
	'System_Settings' => 'System Settings'
));