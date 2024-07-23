<?php
$lang = array (

	// Language to use in headers of html pages (<html lang="XX">)
	// See: https://www.w3.org/International/questions/qa-html-language-declarations.en
	'html_lang'					=> 'en',

	// Locale for the datepicker component
	// See all the locales here: /css/js/datepicker/js/locales
	'datepicker_locale'			=> 'en',
	'datepicker_weekstart'		=> 0, // 0=Sunday, 1=Monday, etc.

	'prj' 						=> 'project',
	'cap_prj'					=> 'Project', // cap=1st letter capitalized
	'prjs' 						=> 'projects',
	'cap_prjs'					=> 'Projects',
	'subprj' 					=> 'subproject',
	'cap_subprj' 				=> 'Subproject',
	'subprjs' 					=> 'subprojects',
	'cap_subprjs' 				=> 'Subprojects',
	'cap_pwds'					=> 'Passwords',
	'cap_pwd'					=> 'Password',
	'cancel'					=> 'Cancel',
	'ok'						=> 'Ok',
	'save'						=> 'Save',
	'no'						=> 'No',
	'yes'						=> 'Yes',
	'tpm_required'				=> 'required',
	'show'						=> 'Show',
	'hide'						=> 'Hide',
	'tag'						=> 'Tag',
	'tags'						=> 'Tags',
	'in'						=> 'in',
	
	'pwd_name'					=> 'Name',
	'pwd_access'				=> 'Access',
	'pwd_username'				=> 'Username',
	'pwd_email'					=> 'E-mail',
	'repeat_pwd'				=> 'Repeat password',
	'pwd_expiry_date'			=> 'Expiry date',
	'pwd_notes'					=> 'Notes',

	'pwd_expires_today'			=> 'Expires today',
	'pwd_expired'			 	=> 'Expired',
	'pwd_will_expire_soon' 		=> 'Will expire soon',
	'pwd_expired_or_today' 		=> 'Expired or expires today',
	
	'cf_do_not_use'				=> 'Do not use custom field',
	'cf_text' 					=> 'Text',
	'cf_enc_text' 				=> 'Encrypted text',
	'cf_email' 					=> 'E-mail',
	'cf_pwd' 					=> 'Password',
	'cf_notes' 					=> 'Notes',
	'cf_enc_notes' 				=> 'Encrypted notes',

	'you'						=> 'you',
	'inactive'					=> 'Inactive',
	'deleted_user'				=> 'deleted user',
	
	// pwd permissions
	'PWD_PERM_DO_NOT_SET'		=> '(Do not set)',
	'PWD_PERM_READ'				=> 'Read',
	'PWD_PERM_EDIT'				=> 'Edit data',
	'PWD_PERM_MANAGE'			=> 'Manage',
	'PWD_PERM_NO_ACCESS'		=> 'No access',

	// prj permissions
	'PRJ_PERM_DO_NOT_SET'		=> '(Do not set)',
	'PRJ_PERM_ACCESS_TRAVERSE'	=> 'Traverse',
	'PRJ_PERM_ACCESS_READ'		=> 'Read',
	'PRJ_PERM_ACCESS_CREATE_PWD'=> 'Read / Create passwords',
	'PRJ_PERM_ACCESS_EDIT_PWD'	=> 'Read / Edit passwords data',
	'PRJ_PERM_ACCESS_MANAGE_PWD'=> 'Read / Manage passwords',
	'PRJ_PERM_MANAGE'			=> 'Manage',
	'PRJ_PERM_INHERIT'			=> 'Inherit from parent',
	'PRJ_PERM_NO_ACCESS'		=> 'No access',

	'Normal user' 				=> 'Normal user',
	'Admin' 					=> 'Admin',
	'Project manager'			=> '[PRJ] manager',
	'Read only' 				=> 'Read only',
	'IT' 						=> 'IT',

	'total_rows'				=> 'Total rows',

	'prj_name'					=> 'Name',
	'prj_notes'					=> 'Notes',

	'error'						=> 'Error',
	'errors'					=> 'Errors',

	// Top menu
	'menu_home'					=> 'Home',
	'menu_user_groups'			=> 'Users / Groups',
	'menu_log'					=> 'Log',
	'menu_settings'				=> 'Settings',
	'menu_my_passwords'			=> 'My Passwords',
	'menu_logout'				=> 'Logout',

	// Free version
	'free_line_1'				=> "you're using the FREE VERSION of Team Password Manager, which only allows you to have 2 users and 5 [PRJS].",
	'free_line_2'				=> 'click here for more users and [PRJS]',

	// Footer
	'footer_eula'				=> 'EULA and other licenses',
	'footer_help'				=> 'Help',
	'footer_search_help'		=> 'Advanced Search Help',

	// Demo
	'demo_desc'					=> 'This is a <strong>demo</strong> of <strong>Team Password Manager</strong>. Data is reset everyday at 02:00 AM (UTC / GMT).',
	'demo_feedback'				=> 'Any feedback is greatly appreciated',
	'demo_download'				=> 'Download Team Password Manager and install it on your own server',

	// File sizes
	'bytes' 					=> 'Bytes',
	'kb'						=> 'Kb',
	'mb'						=> 'Mb',
	'gb'						=> 'Gb',
	'tb'						=> 'Tb',

	'sort_by'					=> 'Sort by',

	'user'						=> 'User',
	'group'						=> 'Group',
	'users'						=> 'Users',
	'groups'					=> 'Groups',

	'deleted'					=> 'deleted',

	'examples'					=> 'Examples',

	'required_fields'			=> 'required fields',

	'server'					=> 'Server',
	'not_defined'				=> 'not defined',

	'instructions'				=> 'Instructions',

	'protocol'					=> 'Protocol',

	'page_not_exist'			=> 'This page does not exist or you cannot access it.',		

	'main_large_msg_default_btn'=> 'Ok',
	'main_edit_modal_cancel' 	=> 'Cancel',
	'main_edit_modal_save' 		=> 'Save',	

	// Form validation
	// IMPORTANT NOTE: USE "" INSTEAD OF '' IN THE DESCRIPTION OF THESE STRINGS
	'form_validation_required'	=>  "The %s field is required.",
	'form_validation_isset'		=> "The %s field must have a value.",
	'form_validation_valid_email'=> "The %s field must contain a valid email address.",
	'form_validation_valid_emails'=> "The %s field must contain all valid email addresses.",
	'form_validation_valid_url' =>  "The %s field must contain a valid URL.",
	'form_validation_valid_ip' 	=>  "The %s field must contain a valid IP.",
	'form_validation_min_length' =>  "The %s field must be at least %s characters in length.",
	'form_validation_max_length' =>  "The %s field can not exceed %s characters in length.",
	'form_validation_exact_length'=> "The %s field must be exactly %s characters in length.",
	'form_validation_alpha' 	=> "The %s field may only contain alphabetical characters.",
	'form_validation_alpha_numeric'=> "The %s field may only contain alpha-numeric characters.",
	'form_validation_alpha_dash' =>  "The %s field may only contain alpha-numeric characters, underscores, and dashes.",
	'form_validation_numeric' 	=>  "The %s field must contain only numbers.",
	'form_validation_is_numeric' =>  "The %s field must contain only numeric characters.",
	'form_validation_integer' 	=>  "The %s field must contain an integer.",
	'form_validation_regex_match'=> "The %s field is not in the correct format.",
	'form_validation_matches' 	=>  "The %s field does not match the %s field.",
	'form_validation_is_unique' =>  "The %s field must contain a unique value.",
	'form_validation_is_natural' =>  "The %s field must contain only positive numbers.",
	'form_validation_is_natural_no_zero' => "The %s field must contain a number greater than zero.",
	'form_validation_decimal' 	=> "The %s field must contain a decimal number.",
	'form_validation_less_than' =>  "The %s field must contain a number less than %s.",
	'form_validation_greater_than'=> "The %s field must contain a number greater than %s.",

	// Running conditions
	'm_ac_mcrypt_not_installed'	=> 'The Mcrypt PHP library is not installed.',
	'm_ac_mbstring_not_installed' => 'The Multibyte String (mbstring) library is not installed.',
	'm_ac_mysqli_not_installed'	=> 'The mysqli extension is not installed.',
	'm_ac_db_not_set'			=> 'The database connection parameters are not set.',
	'm_ac_tables_missing' 		=> 'Some or all of the database tables are missing. You probably need to execute the install or upgrade procedure.',
	'm_ac_execute_upgrade' 		=> 'You need to execute the upgrade procedure',
	'm_ac_cannot_run' 			=> 'Team Password Manager cannot run due to the following errors',
	'm_ac_contact_admin'		=> 'Please contact your systems administrator.',
	'm_ac_db_ko'				=> 'Database is not set or cannot be accessed. Check database configuration.',

	// Notifications
	'tpm_notification'			=> 'TPM Notification',
	'automated_message'			=> 'This is an automated message from Team Password Manager.',

	// v6
	'add'						=> 'Add',
	'(system)'					=> '(system)', // user used in processes where no user is logged in
	
	// v8
	'c_maintenance_mode'		=> 'Maintenance Mode',
	'm_upgrade_maint_mode'		=> 'To be able to execute the upgrade procedure you must put this installation in Maintenance Mode. Please check here how to do it:',

	// v12
	'id'						=> 'Id',
	'cf_otp' 					=> 'One Time Password',
	'cf_date'					=> 'Date',
	'error_incorrect_date_string' => 'Error: incorrect date string',

	// v13
	'form_validation_spaces'	=> "The %s field cannot have leading or trailing spaces.", // Use "" instead of ''. %s is replaced by a string

	// v14
	'clear_clipboard'			=> 'Clear Clipboard',

	// v15
	'm_in_trash_log'			=> 'in the trash bin',

	// v19
	'v_none_selected'			=> '(none selected)',
	'v_password_manager'		=> 'Password Manager',

	// v20
	'v_more'					=> 'more',
	'v_less'					=> 'less',

	'm_ac_execute_upgrade'		=> 'The upgrade procedure needs to be executed',

	// v21
	'v_strength'				=> 'Strength',

	'strength_score_1'			=> 'Very weak',
	'strength_score_2'			=> 'Weak',
	'strength_score_3'			=> 'Good',
	'strength_score_4'			=> 'Strong',

	'v_etc'						=> 'time to crack',
	'etc_centuries'				=> 'centuries',
	'etc_less_second'			=> 'less than a second', 
	'etc_seconds' 				=> 'seconds', 
	'etc_minutes'				=> 'minutes',
	'etc_hours'					=> 'hours',
	'etc_days'					=> 'days', 
	'etc_months'				=> 'months',
	'etc_years'					=> 'years',
	'etc_second'				=> 'second',
	'etc_minute'				=> 'minute', 
	'etc_hour'					=> 'hour',
	'etc_day'					=> 'day',
	'etc_month'					=> 'month',
	'etc_year'					=> 'year',

	'v_length'					=> 'Length',

);