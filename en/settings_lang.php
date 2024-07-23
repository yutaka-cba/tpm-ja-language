<?php
$lang = array (

	// Controller
	'c_set_ret_lic'					=> 'Return to licenses',

	'c_set_2fa_enabled'				=> 'Two-factor authentication with Google Authenticator is <strong>enabled</strong>.',
	'c_set_2fa_disabled'			=> 'Two-factor authentication with Google Authenticator is <strong>disabled</strong>.',
	'c_set_2fa_enforced'			=> '<strong>Enforced</strong> on all users.',
	'c_set_2fa_not_enforced'		=> '<strong>NOT enforced</strong> on all users.',

	'c_set_smtp_not_configured'		=> 'SMTP server is not configured. Messages can still be sent but on some systems it may not work.',
	'c_set_smtp_configured'			=> 'SMTP server is configured.',

	'c_set_num_ip_blocked'			=> 'Number of IP addresses being blocked',

	'c_set_auto_ip_blocking_disabled' => 'Automatic IP address blocking is <strong>disabled</strong>.',
	'c_set_auto_ip_blocking_enabled' => 'Automatic IP address blocking is <strong>enabled</strong>.',
	
	'c_set_ldap_php_not_installed'	=> 'LDAP PHP support is not installed.',
	'c_set_ldap_disabled'			=> 'LDAP Authentication is disabled.',
	'c_set_ldap_enabled'			=> 'LDAP Authentication is enabled.',

	'c_set_timeout_disabled'		=> 'Timeout is disabled (is managed with PHP ini settings).',
	'c_set_timeout_set_to'			=> 'Timeout is set to',
	'c_set_timeout_seconds'			=> 'seconds',

	'c_set_db_not_encrypted'		=> 'The database configuration parameters in config.php are NOT encrypted.',
	'c_set_db_encrypted'			=> 'The database configuration parameters in config.php are encrypted.',

	'c_set_version_checking_manual'	=> 'Version checking is manual.',

	'c_set_api_enabled'				=> 'API access is enabled.',
	'c_set_api_disabled'			=> 'API access is disabled.',

	'c_set_exp_days_remind'			=> 'Days to remind before expiration',
	'c_set_exp_disabled'			=> 'Disabled',

	'c_set_default_template'		=> 'Default template for new passwords',
	'c_set_default_templante_none'	=> 'none',

	'c_set_ext_sha_enabled'			=> 'External sharing of passwords is enabled.',
	'c_set_ext_sha_disabled'		=> 'External sharing of passwords is disabled.',

	'c_set_vcheck_title' 			=> 'Version checker',
	'c_set_licenses_title'			=> 'Licenses',
	'c_set_export_import_title'		=> 'Export and import',
	'c_set_email_title'				=> 'Email',
	'c_set_2fa_title'				=> 'Two-Factor authentication',
	'c_set_ipba_title' 				=> 'Automatic IP address blocking',
	'c_set_ipb_title' 				=> 'IP address blocking',
	'c_set_pgen_title' 				=> 'Password generator',
	'c_set_ldap_title'				=> 'LDAP authentication',
	'c_set_timeout_title'			=> 'Timeout',
	'c_set_edb_config_title'		=> 'Encrypt DB configuration',
	'c_set_api_title'				=> 'API',
	'c_set_expiration_title'		=> 'Password expiration',
	'c_set_cft_title'				=> 'Custom Field Templates',
	'c_set_external_sharing_title' 	=> 'External sharing of passwords',
	'c_set_languages_title'			=> 'Languages',

	'c_set_license'					=> 'License',
	'c_set_lic_not_found'			=> 'License not found',
	'c_set_lic_not_exist'			=> 'This license does not exist.',

	'c_set_lic_deleted_title'		=> 'License deleted',
	'c_set_lic_deleted_desc'		=> 'This license has been deleted',
	'c_set_lic_not_deleted_title'	=> 'License not deleted',
	'c_set_lic_not_deleted_desc'	=> 'The license has NOT been deleted. Please try again.',

	'c_set_lic_email'				=> 'E-mail',
	'c_set_lic_id'					=> 'Id',
	'c_set_lic_code'				=> 'Code',

	'c_set_lic_already_exists'		=> 'The license Id already exists.',
	'c_set_add_lic'					=> 'Add a license',
	'c_set_su_lic_error_1'			=> "The license you're trying to add is a 'Support and Updates' license and it must be attached to an existing license.",
	'c_set_su_lic_error_2'			=> "Please click on the 'Attach Support and Updates license' button of an existing license from the licenses list.",
	'c_set_lic_added_title'			=> 'License added',
	'c_set_lic_added_desc'			=> 'This license has been added',
	'c_set_lic_added_error'			=> 'There has been an error adding the license.',
	'c_set_lic_data_incorrect'		=> 'The license data your entered is not correct.',
	'c_set_trial_expired'			=> 'The trial period has expired.',
	'c_set_already_trial'			=> 'This installation has already had a trial license, and another one cannot be applied.',
	'c_set_add_lic_csrf_error'		=> 'There has been a CSRF error adding the license.',
	
	'c_set_attach_su'				=> 'Attach a Support and Updates License',
	'c_set_lic_attached'			=> 'It has been attached to license',
	'c_set_attach_su_error'			=> 'There has been an error attaching the license.',
	'c_set_attach_su_users_mismatch' => "The number of users of the normal license do not match the ones of the license you're trying to attach.",
	'c_set_attach_su_not_su'		=> "The license you're trying to attach is NOT a 'Support and Updates' license.",
	'c_set_attach_su_lic_not_exists' => 'This license does not exist or it cannot be attached a Support and Updates license.',

	'c_set_export_disabled_title'	=> 'Exporting is disabled',
	'c_set_export_disabled_desc'	=> 'You cannot export passwords.',
	'c_set_return_exp_imp'			=> 'Return to export/import',
	'c_set_export'					=> 'Export Passwords',
	'c_set_export_no_pwd'			=> "the selected [PRJ] doesn't have any passwords.",
	'c_set_export_csrf_error'		=> 'There has been a CSRF error exporting passwords.',

	'c_set_import_disabled_title'	=> 'Importing is disabled',
	'c_set_import_disabled_desc'	=> 'You cannot import passwords.',

	'c_set_import'					=> 'Import Passwords',
	'c_set_import_log'				=> 'Import Passwords Log',
	'c_set_import_log_not_found'	=> 'Log ID not found or it has no entries',

	'c_set_import_folder_missing'	=> 'The import folder is missing.',
	'c_set_import_folder_desc'		=> 'To import passwords the following folder must exist and <strong>it must be writable</strong>',
	'c_set_import_folder_create'	=> 'Please manually create the import folder, set it writable and execute the import procedure again.',
	'c_set_export_import_help'		=> 'Help on exporting/importing Passwords',
	'c_set_import_folder_not_writable' => 'The import folder is not writable.',
	'c_set_import_folder_writable_desc' => 'To import passwords the import folder must be writable, your webserver should be able to create files in it.',
	'c_set_import_folder_set_writable' => 'Please set it writable and execute the import procedure again.',

	'c_set_email_test'				=> 'Send test email',
	'c_set_email_return'			=> 'Return to email settings',
	'c_set_email_test_ok'			=> 'Your test message has been successfully sent. Please check your inbox for this message to confirm delivery.',
	'c_set_email_test_error'		=> 'There has been an error sending your test message. Please check the email configuration.',
	'c_set_email_test_response'		=> 'This is the response when trying to send the message',

	'm_set_email_test_header'		=> 'Test message from Team Password Manager',
	'm_set_email_test_body'			=> 'This is a test message from your Team Password Manager installation. If you can read this it means that it can send messages.',

	'c_set_email_edit'				=> 'Edit SMTP server configuration',
	'c_set_email_edit_error'		=> 'There has been an error editing the configuration.',
	'c_set_email_edit_csrf_error'	=> 'There has been a CSRF error editing the configuration.',

	'c_set_enable_2fa'				=> 'Enable two-factor authentication',
	'c_set_disable_2fa'				=> 'Disable two-factor authentication',
	'c_set_return_2fa'				=> 'Return to two-factor authentication settings',
	'c_set_2fa_already_enabled'		=> 'Two-factor authentication is already enabled.',
	'c_set_2fa_already_disabled'	=> 'Two-factor authentication is already disabled.',
	'c_set_enforce_2fa'				=> 'Enforce two-factor authentication',
	'c_set_stop_enforcing_2fa'		=> 'Stop enforcing two-factor authentication',
	'c_set_2fa_already_enforced'	=> 'Two-factor authentication is already enforced on all users.',
	'c_set_2fa_already_not_enforced'=> 'Two-factor authentication is already NOT enforced on all users.',
	'c_set_2fa_not_enabled'			=> 'Two-factor authentication is not enabled.',

	'c_set_blocked_ips'				=> 'Blocked IP addresses',
	'c_set_ip_address'				=> 'IP address',
	'c_set_ip_address_already_exists' => 'The IP address already exists.',
	'c_set_new_ip'					=> 'New IP address to block',
	'c_set_ip_added_1'				=> 'The IP address has been added and access to this installation of Team Password Manager from it is being blocked',
	'c_set_ip_added_2'				=> 'Note that this validation is done at the "Sign in" screen. Users already logged in from this IP address are not being blocked.',
	'c_set_new_ip_error'			=> 'There has been an error saving the IP address.',
	'c_set_new_ip_csrf_error'		=> 'There has been a CSRF error saving the IP address, please try again.',

	'c_set_del_ip'					=> 'Delete Blocked IP address',
	'c_set_ip_not_exists'			=> 'The IP address does not exist.',
	'c_set_del_ip_ok'				=> 'IP address deleted.',
	'c_set_del_ip_error'			=> 'It has not been possible to delete the IP address.',

	'c_set_enable_ipba'				=> 'Enable automatic IP address blocking',
	'c_set_disable_ipba'			=> 'Disable automatic IP address blocking',
	'c_set_return_ipba'				=> 'Return to automatic IP address blocking settings',
	'c_set_ipba_already_enabled'	=> 'Automatic IP address blocking is already enabled.',
	'c_set_ipba_already_disabled'	=> 'Automatic IP address blocking is already disabled.',
	'c_set_ipba_disabled'			=> 'Automatic IP address blocking is disabled. You should enable it if you want to edit its configuration.',

	'c_set_ipba_failed_attempts'	=> 'Failed attempts',
	'c_set_ipba_period'				=> 'Period',
	'c_set_ipba_valid_ips'			=> 'The <strong>Exceptions</strong> field must contain a list of valid IP addresses.',
	'c_set_ipba'					=> 'Edit automatic IP address blocking configuration',
	'm_ipb_no_one'					=> 'No one',
	'c_set_ipba_error'				=> 'There has been an error saving the settings.',
	'c_set_ipba_csrf_error'			=> 'There has been a CSRF error saving the settings.',

	'c_set_pgen_min_length' 		=> 'Minimum length',
	'c_set_pgen_max_length' 		=> 'Maximum length',
	'c_set_pgen_uppercase' 			=> 'Uppercase letters',
	'c_set_pgen_lowercase' 			=> 'Lowercase letters',
	'c_set_pgen_numbers' 			=> 'Numbers',
	'c_set_pgen_symbols' 			=> 'Symbols',
	'c_set_pgen_allowed_symbols' 	=> 'Allowed symbols',

	'c_set_pgen_min_len_smaller_max' => 'The minimum length must be smaller than the maximum length.',
	'c_set_pgen_require_one_group'	=> 'At least one group of characters must be checked.',
	'c_set_pgen_allowed_symbols_only' => 'The Allowed symbols field must only contain symbols: no letters, numbers or spaces.',
	'c_set_pgen_allowed_symbols_no_repeated' => 'The Allowed symbols field cannot have repeated symbols.',

	'c_set_pgen_edit'				=> 'Edit password generator configuration',
	'c_set_pgen_edit_error'			=> 'There has been an error saving the configuration.',
	'c_set_pgen_edit_csrf_error'	=> 'There has been a CSRF error saving the configuration.',
	'c_set_pgen_return'				=> 'Return to password generator settings',

	'c_set_ldap_enable'				=> 'Enable LDAP authentication',
	'c_set_ldap_disable'			=> 'Disable LDAP authentication',

	'c_set_ldap_edit_server'		=> 'Edit LDAP server configuration: Server',
	'c_set_ldap_edit_server_error'	=> 'There has been an error saving the server configuration.',
	'c_set_ldap_edit_server_csrf_error' => 'There has been a CSRF error saving the server configuration.',
	'c_set_ldap_return'				=> 'Return to LDAP authentication settings',

	'c_set_ldap_test'				=> 'Test LDAP/AD Server Connectivity: Server',
	'c_set_ldap_test_error'			=> 'There has been an error authenticating to the LDAP server with the provided settings',
	'c_set_ldap_test_ok'			=> 'You have been able to correctly authenticate to the LDAP server with the provided settings.',
	'c_set_ldap_test_csrf_error'	=> 'There has been a CSRF error testing the configuration.',

	'c_set_timeout_field'			=> 'Timeout',
	'c_set_timeout_edit'			=> 'Edit Timeout',
	'c_set_timeout_edit_csrf_error'	=> 'There has been a CSRF error saving the timeout.',
	'c_set_timeout_return'			=> 'Return to timeout configuration',

	'c_set_vcheck_set_auto'			=> 'Set automatic version checking',
	'c_set_vcheck_set_manual'		=> 'Set manual version checking',

	'c_set_api_enable'				=> 'Enable API access',
	'c_set_api_disable'				=> 'Disable API access',
	'c_set_api_cannot_free'			=> 'API access cannot be enabled/disabled in the free version.',
	'c_set_api_return'				=> 'Return to API configuration',

	'c_set_exp_days_field'			=> 'Days to remind',
	'c_set_exp_edit'				=> 'Edit password expiration configuration',
	'c_set_exp_edit_csrf_error'		=> 'There has been a CSRF error saving the password expiration configuration.',
	'c_set_exp_return'				=> 'Return to expiration configuration',

	'c_set_cft_name'				=> 'Name',
	'c_set_cft_custom_label'		=> 'Custom Label',
	'c_set_cft_custom_type'			=> 'Custom Type',
	'c_set_cft_at_leat_one_field'	=> 'At least one custom field must be defined.',
	'c_set_cft_template_exists'		=> 'The template already exists.',
	'c_set_cft_label_cannot_empty'	=> 'The <strong>Label</strong> for the following field cannot be empty: Custom Field',

	'c_set_cft_add'					=> 'Add custom fields template',
	'c_set_cft_edit'				=> 'Edit custom fields template',
	'c_set_cft_edit_ok'				=> 'The template has been correctly saved. Template name',
	'c_set_cft_return'				=> 'Return to custom field templates',
	'c_set_cft_edit_error'			=> 'There has been an error saving the template',
	'c_set_cft_edit_csrf_error'		=> 'There has been a CSRF error saving the template.',
	'c_set_cft_not_found_title'		=> 'Template not found',
	'c_set_cft_not_found_desc'		=> 'This template does not exist.',

	'c_set_cft_del'					=> 'Delete custom fields template',
	'c_set_cft_del_ok'				=> 'The template as been deleted.',
	'c_set_cft_del_error'			=> 'It has not been possible to delete the template.',

	'c_set_cft_set_default'			=> 'Set default custom fields template for new passwords',
	'c_set_cft_set_default_csrf_error' => 'There has been a CSRF error setting the default template.',
	'c_set_cft_set_default_no_templates' => 'There are no custom field templates to choose from.',

	'c_set_enable_ext_sha'			=> 'Enable External Sharing of Passwords',
	'c_set_disable_ext_sha'			=> 'Disable External Sharing of Passwords',

	'm_set_not_possible_to_get'		=> "It's not possible to get information of the latest version from the Team Password Manager website.",
	'm_set_latest_version'			=> 'Your installation of Team Password Manager is running <strong>the latest version available</strong>',
	'm_set_theres_a_new_version'	=> "There's a new version of Team Password Manager. Your installation is running version",
	'm_set_latest_version_is'		=> 'The latest version is',
	'm_set_new_version_available'	=> 'New version available',

	// Views
	'v_set_return'					=> 'Return to settings overview',

	// Tabs	
	'v_set_tabs_overview'			=> 'Overview',
	'v_set_tab_vcheck' 				=> 'Version checker',
	'v_set_tab_licenses'			=> 'Licenses',
	'v_set_tab_export_import'		=> 'Export / import',
	'v_set_tab_email'				=> 'Email',
	'v_set_tab_2fa'					=> 'Two-Factor authentication',
	'v_set_tab_ipb' 				=> 'IP address blocking',
	'v_set_tab_pgen' 				=> 'Password generator',
	'v_set_tab_ldap'				=> 'LDAP authentication',
	'v_set_tab_timeout'				=> 'Timeout',
	'v_set_tab_edb_config'			=> 'Encrypt DB Config',
	'v_set_tab_api'					=> 'API',
	'v_set_tab_expiration'			=> 'Expiration',
	'v_set_tab_cft'					=> 'Custom Field Templates',
	'v_set_tab_external_sharing' 	=> 'External Sharing',
	'v_set_tab_languages'			=> 'Languages',

	// Overview
	'v_set_overview'				=> 'Settings Overview',
	'v_set_set_menu'				=> 'Settings Menu',

	'v_set_lic_free'				=> "you're using the FREE VERSION of Team Password Manager, which only allows you to have 2 users and 5 [PRJS].",
	'v_set_lic_num_licenses'		=> 'Number of valid licenses',
	'v_set_lic_num_users'			=> 'Total number of named users',

	'v_set_version_info_1'			=> 'This installation of Team Password Manager is running version',
	'v_set_version_info_2'			=> 'released',

	'v_set_main_config_file'		=> 'Main configuration file',
	'v_set_all_params'				=> 'See all the possible parameters for config.php',

	'v_set_unlimited'				=> 'unlimited', // users

	// Version checker
	'v_set_vcheck_check_now'		=> 'Check version now',	
	'v_set_vcheck_is_automatic'		=> 'Version checking is automatic',
	'v_set_vcheck_is_manual'		=> 'Version checking is manual',
	'v_set_vcheck_automatic_desc'	=> 'Version checking is configured to be executed every time an "Admin" or "IT" user signs in. In case a newer version is available, a note will appear on the footer, on the right hand side. You can always run a version check manually using the "Check version now" button above.',
	'v_set_vcheck_manual_desc' 		=> 'Version checking is configured to be executed manually using the "Check version now" button above.',
	'v_set_vcheck_change_to_manual'	=> 'Change to manual version checking',
	'v_set_vcheck_change_to_automatic' => 'Change to automatic version checking',
	'v_set_vcheck_more_info'		=> 'More information on Team Password Manager versions',
	'v_set_vcheck_url'				=> 'URL that the software uses to check the version',
	'v_set_vcheck_changelog'		=> 'Change log',
	'v_set_vcheck_download'			=> 'Download',
	'v_set_vcheck_upgrade'			=> 'How to upgrade',
	'v_set_vcheck_proxy_set'		=> 'Proxy settings',
	'v_set_vcheck_proxy_desc'		=> 'If your installation of Team Password Manager accesses the Internet through a Proxy, you may set the following parameters in <code>config.php</code> so that the version checker works properly',
	'v_set_example'					=> 'Example',
	'v_set_vcheck_proxy_desc_2'		=> 'If a proxy is used, VCHECK_PROXY_HOST and VCHECK_PROXY_PORT are required. VCHECK_PROXY_LOGIN and VCHECK_PROXY_PWD are optional.',
	'v_set_vcheck_proxy_current'	=> 'The current values for these parameters are',
	'v_set_not_defined'				=> 'not defined',

	'v_set_vcheck_set_auto_question' => 'Set version checking to automatic?',
	'v_set_vcheck_set_auto_question_desc' => 'Version checking will be executed automatically every time an "Admin" or "IT" user signs in. In case a newer version is available, a note will appear on the footer, on the right hand side.',
	'v_set_vcheck_set_manual_question' => 'Set version checking to manual?',
	'v_set_vcheck_set_manual_question_desc' => 'Version checking will have to be executed manually by clicking on the "Check version now" button.',

	// Licenses
	'v_set_lic_you_have'			=> 'You have the following licenses',
	'v_set_lic_type'				=> 'Type',
	'v_set_lic_eic' 				=> 'E-mail / Id / Code',
	'v_set_lic_email'				=> 'E-mail',
	'v_set_lic_id'					=> 'Id',
	'v_set_lic_code'				=> 'Code',
	'v_set_lic_no_users' 			=> 'No. Users',
	'v_set_lic_limit' 				=> 'Limit',
	'v_set_lic_status' 				=> 'Status',
	'v_set_lic_actions' 			=> 'Actions',

	'v_set_lic_valid'				=> 'Valid',
	'v_set_lic_not_valid'			=> 'Not valid',
	'v_set_lic_forever'				=> 'Forever',
	'm_set_lic_year'				=> 'year',
	'm_set_lic_years'				=> 'years',
	'm_set_lic_unl_years'			=> 'Unlimited years',
	'm_set_lic_num_users_not_match' => 'Error: the number of users do not match',
	'v_set_lic_normal'				=> 'Normal',
	'v_set_lic_upgrade_to_unlimited' => 'Upgrade to unlimited',
	'v_set_lic_free_user'			=> 'Free user',
	'v_set_lic_trial'				=> 'Trial',
	'v_set_lic_su'					=> 'Support and updates',

	'v_set_lic_delete'				=> 'Delete',
	'v_set_lic_attach_su'			=> 'Attach a Support and Updates License',

	'v_set_lic_date_current_version' => 'Date this version of Team Password Manager was released',
	'v_set_lic_date_updates_covered' => 'Date until this license covers updates',
	'v_set_lic_you_should_attach_su' => 'You should attach a Support and Updates license to cover this version.',
	'v_set_lic_buy_su'				=> 'Buy a support and updates license',

	'v_set_lic_limit_desc'			=> '<strong>Limit</strong> = For "Normal licenses", the date when the support/updates end. For "Support and updates licenses", the period. For "Trial licenses", the expiry date.',
	'v_set_lic_need_more_users'		=> 'If you need more users you can buy licenses from the Team Password Manager website',
	'v_set_lic_notification_approaching' => 'For each license, approaching the support and updates date, you will receive an email to optionally renew support and updates.',
	'v_set_lic_using_free'			=> 'you are using the <strong>free version</strong>, which only allows you to have <strong>2 users and 5 [PRJS]</strong>. You need to add a license to have more users and [PRJS].',
	'v_set_lic_can_buy'				=> 'You can buy licenses from the Team Password Manager website',
	'v_set_lic_if_you_have'			=> 'If you have a license, click the button below to add it.',

	'v_set_lic_delete_question'		=> 'Delete this license?',

	'v_set_lic_received'			=> 'You should have received the license data by e-mail. Please enter these data below',
	'v_set_lic_add_btn'				=> 'Add license',
	'v_set_lic_attach_btn'			=> 'Attach license',
	'v_lic_su_desc_1'				=> 'A Support and Updates license extends the support and updates date for the license',
	'v_lic_su_desc_2'				=> "<strong>Note:</strong> This license currently has a Support and Updates license attached to. The one you're adding now will replace the current one.",

	// Export/import
	'v_set_exp_imp_title'			=> 'Export / Import Passwords',
	'v_set_exp_imp_desc'			=> 'Export or import passwords to and from CSV files',
	'v_set_ei_help_link'			=> 'help',

	'v_set_imp_sel_file'			=> 'Select the file that contains the passwords to import',
	'v_set_imp_csv_ext'				=> 'CSV extension',
	
	'v_set_imp_select_parent_btn'	=> 'Select a parent [PRJ]',	
	'v_set_imp_current_parent'		=> 'Currently selected',
	'v_set_imp_root'				=> '(root)',
	'v_set_imp_not_access_selected' => '(you do not have access to the selected [PRJ])',
	'v_set_imp_parent_desc'			=> 'New [PRJS] created in the import process will have this one as parent.',
	'v_set_imp_process_desc'		=> "When you click 'Upload and Import', the choosen file will be uploaded to the import folder and the import process will be executed. When it's over you'll be taken to another screen with the import results.",
	'v_set_imp_upl_btn'				=> 'Upload and Import',

	'v_set_imp_outcome'				=> 'The import process has finished with the following outcome',
	'v_set_imp_num_prj_created'		=> 'Number of [PRJS] created',
 	'v_set_imp_num_imported' 		=> 'Number of passwords imported',
 	'v_set_imp_log_id' 				=> 'The import has been logged with ID',
 	'v_set_imp_download_log' 		=> 'Download import log',
 	'v_set_imp_file_deleted' 		=> 'For security reasons, the uploaded file has been deleted from the import folder.',
 	'v_set_imp_file_not_deleted' 	=> "It hasn't been possible to delete the uploaded file from the import folder. For security reasons it's advised that you delete it manually.",

 	'v_set_exp_all'					=> 'All', // referring to projects
 	'v_set_exp_sel_prj'				=> 'select a [PRJ] to export passwords from',
 	'v_set_exp_not_locked'			=> 'Note: *locked* passwords are not fully exported (only their name and project are exported).',
 	'v_set_exp_process_desc'		=> "When you click 'Export' a CSV (Comma Separated Values) file will be downloaded with the passwords",
 	'v_set_exp_process_btn'			=> 'Export',

 	// Email
 	'v_set_email_title'				=> 'Email Configuration',
 	'v_set_email_desc_1'			=> 'Team Password Manager uses email to send password reset and notification messages to its users.',
 	'v_set_email_desc_2'			=> 'It can send messages using an SMTP email server (preferred option) or directly (using PHP mail() function) if no server is configured.',
 	'v_set_email_current_config'	=> 'The current email configuration is',
 	'v_set_email_test'				=> 'Send test email (to yourself)',

 	'v_set_email_smtp_host'			=> 'SMTP Host',
 	'v_set_email_smtp_host_blank' 	=> 'Leave blank to delete SMTP configuration',
 	'v_set_email_tls_ssl' 			=> 'TLS/SSL Encryption',
 	'v_set_email_tls_ssl_none'	 	=> 'none',
 	'v_set_email_smtp_port' 		=> 'SMTP Port',
 	'v_set_email_smtp_user' 		=> 'SMTP User',
 	'v_set_email_smtp_pwd' 			=> 'SMTP Password',
 	'v_set_email_smtp_user_sender' 	=> 'Use the SMTP User as the email sender (otherwise it will use the email of the user). If selected, the SMTP User must be an email address.',
 	'v_set_email_typical_config' 	=> 'Configuration values for typical email services',
 	'v_set_email_your_email' 		=> 'your e-mail address, like',
 	'v_set_email_your_pwd' 			=> 'your password',
 	'v_set_email_enc_note' 			=> '* Important: All these data are saved encrypted',

 	// 2FA
 	'v_set_2fa_title'				=> 'Two-Factor Authentication with Google Authenticator Configuration',
 	'v_set_2fa_user_enable'			=> 'To enable two-factor authentication for a user, the user must select "My Account" and click on "Enable Two-Factor Authentication".',
 	'v_set_2fa_exempt_enforcement'	=> 'Admin/IT user exempt from two-factor authentication enforcement',
 	'v_set_2fa_can_stop_enforcing'	=> 'You can stop enforcing two-factor authentication on all users by clicking on this button',
 	'v_set_2fa_can_enforce'			=> 'You can enforce two-factor authentication on all users by clicking on this button',
 	'v_set_2fa_can_disble'			=> 'Two-Factor Authentication can be disabled globally (for all users).',
 	'v_set_2fa_enable_question'		=> 'Enable two-factor authentication?',
 	'v_set_2fa_disable_question'	=> 'Disable two-factor authentication?',
 	'v_set_2fa_disable_desc'		=> 'Users will be able to sign-in, but without two-factor authentication.',

 	'v_set_2fa_enforce_question'	=> 'Enforce two-factor authentication on all users?',
 	'v_set_2fa_enforce_desc'		=> 'Users that have not enabled two-factor authentication will be forced to do so the next time they sign in.',
 	'v_set_2fa_user_exempt'			=> 'Admin/IT user exempt',
 	'v_set_2fa_stop_enforcing_question' => 'Stop enforcing two-factor authentication on all users?',

 	// IP Blocking
 	'v_set_ipb_tab_blocked'			=> 'Blocked IP Addresses',
 	'v_set_ipb_tab_blocked_phone'	=> 'Blocked IPs',
 	'v_set_ipb_tab_auto'			=> 'Automatic Blocking Settings',
 	'v_set_ipb_tab_auto_phone'		=> 'Automatic Blocking',

 	'v_set_ipb_title'				=> 'IP Adress Blocking Configuration',
 	'v_set_your_ip'					=> 'Your IP address',

 	'v_set_ipb_listed'				=> 'The IP addresses listed here cannot access this installation of Team Password Manager.',
 	'v_set_ipb_note_blocking'		=> 'Note that blocking validation is done only at the "Sign in" screen, so users already logged in when an address is added will not be blocked.',
 	'v_set_ipb_no_ips_filter'		=> 'There are no IPs with this filter or search.',

 	'v_set_ipb_all_ips'				=> 'All IPs',
 	'v_set_ipb_search_results'		=> 'Search results',
 	'v_set_ipb_filter_type'			=> 'Filter by Type',
 	'v_set_ipb_filter_type_manual'	=> 'Manual',
 	'v_set_ipb_filter_type_auto'	=> 'Automatic',

 	'v_set_ipb_sort_ip'				=> 'Sort by IP Address',
 	'v_set_ipb_sort_type'			=> 'Sort by Type',
 	'v_set_ipb_sort_creator'		=> 'Sort by Creator',
 	'v_set_ipb_sort_dtm'			=> 'Sort by Date / Time',

 	'v_set_ipb_field_ip'			=> 'IP Address',
 	'v_set_ipb_field_type'			=> 'Type',
 	'v_set_ipb_field_creator'		=> 'Creator',
 	'v_set_ipb_field_dtm'			=> 'Date/Time',

 	'v_set_ipb_delete_btn'			=> 'Delete',
 	'v_set_ipb_return'				=> 'Return to blocked IPs list',

 	'v_set_ipb_new_btn'				=> 'New IP to block',
 	'v_set_ipb_search_btn'			=> 'Search IPs',

 	'v_set_ipb_enter_ip'			=> 'Enter the IP address to be blocked. Effect is immediate after saving.',
 	'v_set_ipb_valid_ipv46'			=> 'Valid IPv4 or IPv6 address',

 	'v_set_ipb_del_question'		=> 'Delete this IP address?',

 	'v_set_ipba_current_config'		=> 'Current configuration',
 	'v_set_ipba_rule'				=> 'Rule',
 	'v_set_ipba_rule_desc'			=> 'An IP address will be blocked if users fail to sign from it these number of failed attempts in this period.',
 	'v_set_ipba_exceptions'			=> 'Exceptions',
 	'v_set_ipba_who_notify'			=> 'Who to notify',
 	'v_set_ipba_rule_failed_attempts' => 'Failed attempts',
 	'v_set_ipba_rule_period'		=> 'Period (seconds)',
 	'v_set_ipba_desc'				=> 'Automatic IP address blocking allows Team Password Manager to block IP addresses from which users fail to sign in X times in Y seconds. (X and Y are configurable).',
 	
 	'm_ipb_none'					=> 'None',
 	'm_ipb_no_one'					=> 'No one',

 	'v_set_ipba_rule_failed_attempts_help' => 'Number of failed sign in attempts to trigger the IP block (3-999)',
 	'v_set_ipba_rule_period_help'	=> 'Seconds to trigger the IP block if the number of failed attempts is reached (10-999)',
 	'v_set_ipba_exceptions_help'	=> 'IP addresses to exclude from the automatic blocking. Separate by comma. Example: 1.2.3.4, 5.6.7.8',
 	'v_set_ipba_who_notify_help'	=> 'Admin/IT user to notify of the block by e-mail (the user must be active at the time of notification)',

 	'v_set_ipba_enable_question'	=> 'Enable automatic IP address blocking?',
 	'v_set_ipba_disable_question'	=> 'Disable automatic IP address blocking?',
 	'v_set_ipba_disable_desc'		=> 'Currently automatically blocked IP addresses will remain blocked.',

 	// Password generator
 	'v_set_pgen_title'				=> 'Password Generator Configuration',
 	'v_set_pgen_desc'				=> 'The password generator allows the user to generate random strong passwords when editing a password.',
 	'v_set_pgen_uses_config'		=> 'It uses the following configuration',	
 	'v_set_pgen_min_len'			=> 'Minimum length',
 	'v_set_pgen_max_len'			=> 'Maximum length',
 	'v_set_pgen_ucase'				=> 'Uppercase letters',
 	'v_set_pgen_lcase'				=> 'Lowercase letters',
 	'v_set_pgen_num'				=> 'Numbers',
 	'v_set_pgen_sym'				=> 'Symbols',
 	'v_set_pgen_allowed_sym'		=> 'Allowed symbols',
 	'v_set_pgen_test'				=> 'Password Generator Test',
 	'v_set_pgen_gen10'				=> 'Generate 10 passwords using the above configuration',
 	'v_set_pgen_generated'			=> 'Generated passwords',

 	'v_set_pgen_edit_desc'			=> 'You should check at least one group of characters (uppercase letters, lowercase letters, numbers or symbols)',
 	'v_set_pgen_min'				=> 'Min',
 	'v_set_pgen_max'				=> 'Max',
 	'v_set_pgen_only_sym'			=> 'Only symbols, no letters, numbers or spaces',

 	// LDAP auth
 	'v_set_ldap_title'				=> 'LDAP Authentication Configuration',
 	'v_set_ldap_desc'				=> 'LDAP authentication allows users of Team Password Manager to be authenticated against a Lightweight Directory Access Protocol (LDAP) or Active Directory (AD) server.',
 	'v_set_ldap_site_link'			=> 'Click here to read the document explaining LDAP authentication in Team Password Manager.',
 	'v_set_ldap_not_installed'		=> 'LDAP PHP support is not installed. If you need to use LDAP Authentication you need to install LDAP for PHP.',
 	'v_set_ldap_url'				=> 'Please check the following URL',
 	'v_set_ldap_upto9'				=> 'Up to 9 LDAP/AD servers can be defined',
 	'v_set_ldap_edit_server_btn'	=> 'Edit LDAP/AD server configuration',
 	'v_set_ldap_test_server_btn'	=> 'Test LDAP/AD server connectivity',

 	'v_set_ldap_field_server'		=> 'LDAP/AD Server',
 	'v_set_ldap_field_port'			=> 'LDAP Port',
 	'v_set_ldap_field_ssl'			=> 'SSL Connectivity',
 	'v_set_ldap_field_prot'			=> 'Protocol version',

 	'v_set_ldap_ssl_ldaps'			=> 'Use SSL (ldaps)',
 	'v_set_ldap_ssl_tls'			=> 'Use TLS (only for protocol version 3)',
 	'v_set_ldap_ssl_no_ssl'			=> 'No SSL connectivity',
 	'v_set_ldap_std_port'			=> 'Standard LDAP port (389, 636 for SSL)',

 	'v_set_ldap_server_not_defined'	=> 'Not defined',

 	'v_set_ldap_field_server_help_1' => 'The DNS name or IP address of the server(s). Examples: ldap.mydomain.com, 192.168.0.10',
 	'v_set_ldap_field_server_help_2' => 'Put backup servers separated by spaces. Example: 192.168.0.10  192.168.0.11',
 	'v_set_ldap_field_server_help_3' => 'Leave blank to delete server configuration',
 	'v_set_ldap_port_help'			=> 'If empty, it will use the standard LDAP port (389, 636 for SSL)',
 	'v_set_ldap_prot_help'			=> 'Use protocol version 3 whenever possible, 2 is provided for legacy systems and not recommended',
 	'v_set_ldap_important_enc'		=> '* Important: All these data are saved encrypted',

 	'v_set_ldap_enable_question'	=> 'Enable LDAP authentication?',
 	'v_set_ldap_disable_question'	=> 'Disable LDAP authentication?',

 	'v_set_ldap_test_desc'			=> 'Using this form you can try to authenticate to your LDAP/AD server to test the server connection.',
 	'v_set_ldap_test_imp'			=> 'Important: the values entered here are not saved anywhere, this is only for testing.',
 	'v_set_ldap_login_dn_username'	=> 'Login DN / Username',
 	'v_set_ldap_anonymous'			=> 'Anonymous',
 	'v_set_ldap_server_settings'	=> 'Server settings',
 	'v_set_ldap_test_btn'			=> 'Test authentication',

 	// Timeout
 	'v_set_timeout_title'			=> 'Timeout Configuration',
 	'v_set_timeout_desc'			=> 'This setting is used to define how long an inactive user session lasts. It affects all users the same way.',
 	'v_set_timeout_ini_title'		=> 'PHP ini settings that affect timeout',
 	'c_set_timeout_until_browser_closed' => 'Until the browser is closed',
 	'v_set_timeout_gc_maxlifetime'	=> "Specifies the number of seconds after which data will be seen as garbage and cleaned up. This setting is often used as a timeout for inactive user sessions, but since it uses PHP's garbage collector you can't rely on it for an exact timeout. This is why Team Password Manager implements it own session timeout. This setting should be at least as large as the one you specify in the timeout field.",
 	'v_set_timeout_cookie_lifetime'	=> 'Defines how long a session will last, inactive or not. If 0 it means "until the browser is closed". It should be 0 if you intend to manage the timeout with the timeout setting in Team Password Manager.',
 	'v_set_timeout_set_cookie_lifetime_0' => 'You should set this setting to 0.',

 	'v_set_timeout_field_help_1'	=> 'Set to 0 to disable timeout (and manage it with PHP ini settings).',
 	'v_set_timeout_field_help_2'	=> 'Less than 60 seconds is considered 0.',

 	// Encrypt DB config
 	'v_set_edb_title'				=> 'Encrypt DB Configuration in config.php',
 	'v_set_edb_inst_to_encrypt' 	=> 'If you want to encrypt them, do the following in the <strong>config.php</strong> file',
 	'v_set_edb_inst_to_not_encrypt' => 'If you want to use them in plain text (unencrypted), do the following in the <strong>config.php</strong> file',
 	'v_set_edb_enter_instruction'	=> 'Enter the following instruction',
 	'v_set_edb_enter_next'			=> 'Next, enter the following instructions',
 	'v_set_edb_set_unencrypted'		=> 'Set the following constants to their unencrypted values',
 	'v_set_edb_example'				=> 'Example (actual values not shown for security)',

 	'v_set_edb_example_hostname'	=> 'THE DB HOSTNAME NORMALLY localhost',
 	'v_set_edb_example_username'	=> 'THE DB USERNAME',
 	'v_set_edb_example_pwd'			=> 'THE DB PASSWORD',
 	'v_set_edb_example_db'			=> 'THE TEAM PASSWORD MANAGER DATABASE',
 	'v_set_edb_example_port'		=> 'THE SPECIFIC PORT THE DB USES',

 	// API
 	'v_set_api_title'				=> 'API Configuration',
 	'v_set_api_desc'				=> "Team Password Manager's <strong>application programming interface (API)</strong> allows other applications to interact with objects of the software (passwords, projects and others) programmatically.",
 	'v_set_api_available'			=> 'Available API versions',
 	'v_set_api_doc'					=> 'Documentation',
 	'v_set_api_v3_note'				=> 'Note: <strong>API v3 is deprecated</strong> and will not be available in future versions of Team Password Manager. Please use v4 for new projects and convert current projects to v4.',
 	'v_set_api_hash_hmac_note'		=> 'Note: the hash_hmac() function required for HMAC Authentication is not installed, you will not be able to authenticate using HMAC.',
 	'v_set_api_sha256_note'			=> 'Note: the sha256 hash algorithm required for HMAC Authentication is not installed, you will not be able to authenticate using HMAC.',
 	'v_set_api_free'				=> 'API access cannot be enabled in the free version.',

 	'v_set_api_enable_question'		=> 'Enable API access?',
 	'v_set_api_disable_question'	=> 'Disable API access?',

 	// External sharing
 	'v_set_ext_sha_title'			=> 'External Sharing of Passwords Configuration',
 	'v_set_ext_sha_desc_1'			=> 'External sharing of passwords allows some passwords to be viewed by users that are not registered in Team Password Manager using a special URL. Note that not all the passwords are externally shared by default. External sharing of a password must be configured for each password that needs to be shared externally.',
 	'v_set_ext_sha_desc_2'			=> 'This setting allows you to enable or disable this feature.',

 	'v_set_ext_sha_enable_question' => 'Enable External Sharing of Passwords?',
 	'v_set_ext_sha_disable_question' => 'Disable External Sharing of Passwords?',

 	// Expiration
 	'm_notif_expiry_date'			=> 'Expiry date',
 	'm_notif_expired_or_today'		=> 'The following passwords have expired or expire today',
 	'm_notif_expire_soon'			=> 'The following passwords will expire soon',
 	'm_notif_expired_or_soon'		=> 'expired or soon to expire passwords', // email subject: careful about accents

 	'v_set_exp_title'				=> 'Password Expiration Configuration',
 	'v_set_exp_days'				=> 'Days to remind before expiration',
 	'v_set_exp_days_disabled'		=> 'Disabled',
 	'v_set_exp_will'				=> 'This setting will',
 	'v_set_exp_desc_1'				=> 'Show the following label next to the expiry date for those passwords that will expire in X days or less',
 	'v_set_exp_desc_2'				=> 'If <code>genexp</code> is being run regularly, send a notification email to the password manager and its [PRJ] manager reminding them that the password will expire soon.',

 	'v_set_exp_genexp_title'		=> 'genexp: how to send expiration notifications by email',
 	'v_set_exp_genexp_desc'			=> 'If you want that password managers and [PRJ] managers receive regular notifications of password expirations or expiration reminders by email you should setup <code>genexp</code> to execute daily.',
 	'v_set_exp_genexp_location'		=> '<code>genexp</code> is located at the following address for your installation',
 	'v_set_exp_genexp_cron_1'		=> 'If running Linux you can setup a daily cron job to execute <code>curl</code> to open this address. To do so, edit the crontab configuration file with <code>sudo crontab -e</code> and enter the following line',
 	'v_set_exp_genexp_cron_2'		=> 'This will setup <code>genexp</code> to be executed at 6:00 AM every day.',
 	'v_set_exp_genexp_more_info'	=> 'For more information please read the following document',

 	'v_set_exp_days_field'			=> 'Days to remind',
 	'v_set_exp_days_field_help'		=> 'Set to 0 to disable expiration reminders',

 	// Custom Field Templates
 	'v_set_cft_none'				=> 'none',
 	'v_set_cft_default_lbl'			=> 'Default template for new passwords',
 	'v_set_cft_set_default'			=> 'Set default template',

 	'v_set_cft_title'				=> 'Custom Field Templates',
 	'v_set_cft_templates'			=> 'Templates',
 	'v_set_cft_no_templates_search'	=> 'There are no templates with the current search terms.',
 	'v_set_cft_no_templates'		=> 'There are no templates.',
 	'v_set_cft_new_template'		=> 'New template',
 	'v_set_cft_search_templates'	=> 'Search templates',
 	'v_set_cft_sort_name'			=> 'Sort by Name',
 	'v_set_cft_sort_updated'		=> 'Sort by Update date',
 	'v_set_cft_name'				=> 'Name',
 	'v_set_cft_fields'				=> 'Fields',
 	'v_set_cft_updated'				=> 'Updated',
 	'v_set_cft_edit'				=> 'Edit',
 	'v_set_cft_delete'				=> 'Delete',
 	'v_set_cft_default'				=> 'default',

 	'v_set_cft_delete_question'		=> 'Delete this custom fields template?',

 	'v_set_cft_edit_desc'			=> 'Enter the labels and types for the custom fields of the template. <strong>At least one field must be defined</strong>.',
 	'v_set_cft_template_name'		=> 'Template name',
 	'v_set_cft_label'				=> 'Label',
 	'v_set_cft_type'				=> 'Type',
 	'v_set_cft_custom_field'		=> 'Custom Field',

 	'v_set_cft_select_template'		=> 'Select a template (or none)',

	// Languages
	'v_set_lang_help' 				=> 'Click here to read the document that explains how languages work in Team Password Manager.',	
	'v_set_lang_version'			=> 'Language version',
	'v_set_lang_version_note'		=> 'The language files version - <code>lang_files_version</code> value in <code>config_lang.php</code> - must match this version.',
	'v_set_lang_default'			=> 'Default language',
	'v_set_lang_default_note'		=> "You can set the default language in <code>config.php</code> with the following instruction: <code>define('TPM_DEFAULT_LANG', 'XX');</code>, where <code>XX</code> is the language code.",
	'v_set_lang_available'			=> 'Available Languages',
	'v_set_lang_available_note'		=> 'This installation of Team Password Manager has the following languages',
	'v_set_lang_v'					=> 'v.', // version
	'v_set_lang_incorrect_version'	=> 'incorrect version',

	// v7
	'v_set_imp_select_parent'		=> 'select a parent [PRJ]', // Changed, not new in v7
	'v_set_imp_none'				=> 'None',
	'v_set_imp_select_parent_error' => 'You did not select a parent [PRJ]',

	// v8
	'v_set_api_sec'					=> 'API Security',
	'v_set_api_sec_all'				=> 'All the active users can access the API',
	'v_set_api_sec_ao'				=> 'Only active "API only" users can access the API',
	'v_set_api_sec_edit'			=> 'Edit API Security',
	'v_api_sec_edit_csrf_error'		=> 'There has been a CSRF error editing the API Security',
	'v_api_sec_edit_error'			=> 'There has been an error editing the API Security',

	// v9
	'c_set_linked_passwords_enabled' => 'Linked passwords creation is enabled.',
	'c_set_linked_passwords_disabled' => 'Linked passwords creation is disabled.',
	'c_set_linked_passwords_title' 	=> 'Linked Passwords',
	'v_set_linked_passwords_title'	=> 'Linked Passwords Configuration',
	'v_set_tab_linked_passwords' 	=> 'Linked Passwords',
	'v_set_linked_passwords_desc_1'	=> 'A linked password is a reference to a password in one [PRJ] from another [PRJ].',
	'v_set_linked_passwords_desc_2' => 'This setting enables or disables the creation of linked passwords. Note that existing linked passwords will still be visible if the creation of new ones is disabled.',
	'c_set_enable_linked_passwords'	=> 'Enable Linked Passwords Creation',
	'c_set_disable_linked_passwords' => 'Disable Linked Passwords Creation',
	'v_set_linked_passwords_site_link' => 'Click here to read the document explaining Linked Passwords in Team Password Manager.',
	'v_set_linked_passwords_enable_question' => 'Enable Linked Passwords Creation?',
	'v_set_linked_passwords_disable_question' => 'Disable Linked Passwords Creation?',

	'c_set_password_reset_enabled' => 'Password reset is enabled.',
	'c_set_password_reset_disabled' => 'Password reset is disabled.',
	'c_set_password_reset_title' 	=> 'Password Reset',
	'c_set_enable_password_reset'	=> 'Enable Password Reset',
	'c_set_disable_password_reset'	=> 'Disable Password Reset',
	'v_set_tab_password_reset'		=> 'Password Reset',
	'v_set_password_reset_title'	=> 'Password Reset Configuration',
	'v_set_password_reset_desc_1'	=> 'This setting allows you to enable or disable password reset for users (the "Forgot your password?" link in the Sign in screen).',
	'c_set_enable_password_reset'	=> 'Enable Password Reset',
	'c_set_disable_password_reset'	=> 'Disable Password Reset',
	'v_set_password_reset_enable_question' => 'Enable Password Reset?',
	'v_set_password_reset_disable_question' => 'Disable Password Reset?',

	// v10
	'v_set_email_doc_link'			=> 'Click here to read the document explaining Email configuration in Team Password Manager.',
	'v_set_email_sender_address'	=> 'Sender Address',
	'v_set_email_sender_name'		=> 'Sender Name',
	'v_set_email_sender_address_def'=> 'Will use the destination address if left blank',
	'v_set_email_sender_name_def'	=> 'Only a-z, A-Z and 0-9 characters and space. Defaults to "Team Password Manager" if left blank',
	'v_set_email_sender_name_ic'	=> 'The Sender Name contains invalid characters',

	// v11
	'c_set_saml_missing_modules'	=> 'The following PHP modules are missing to be able to use SAML authentication: ',
	'c_set_saml_disabled'			=> 'SAML Authentication is disabled.',
	'c_set_saml_enabled'			=> 'SAML Authentication is enabled.',
	'v_set_tab_saml'				=> 'SAML Authentication',
	'c_set_saml_title'				=> 'SAML Authentication',
	'v_set_saml_title'				=> 'SAML Single Sign On Authentication Configuration',
	'v_set_saml_desc'				=> 'SAML authentication allows users of Team Password Manager to be authenticated against a SAML Identity Provider.',
	'v_set_saml_site_link'			=> 'Click here to read the document explaining SAML authentication in Team Password Manager.',
	'c_set_saml_disable'			=> 'Disable SAML authentication',
	'c_set_saml_enable'				=> 'Enable SAML authentication',
	'v_set_saml_enable_question'	=> 'Enable SAML authentication?',
	'v_set_saml_disable_question' 	=> 'Disable SAML authentication?',
	'v_2fa_disabled_saml_users'		=> 'Note: two-factor authentication is disabled for SAML users. This feature should be provided by the Identity Provider (IdP).',

	'saml_login_text'				=> 'Sign In via SAML',	// Same as in login_lang.php
	'v_saml_set_other'				=> 'Other Settings',
	'v_saml_set_login_text'			=> 'SAML Sign in Text',
	'v_saml_set_login_text_help'	=> 'Text shown in the SAML Sign In Link or Button',
	'v_saml_set_custom_help'		=> 'Enter custom settings, one per line, using this format: custom.setting=value',
	'v_saml_set_default_login'		=> 'Default Sign In Screen',
	'v_saml_set_normal_login'		=> 'Normal Username/Password Sign In Screen',
	'v_saml_set_saml_login'			=> 'SAML Sign In Screen',
	'v_saml_set_sp'					=> 'Service Provider (Team Password Manager) Settings',
	'c_set_saml_edit_server_error'	=> 'There has been an error editing the SAML settings',
	'c_set_saml_return'				=> 'Return to SAML Authentication Configuration',
	'c_set_saml_edit_server_csrf_error' => 'There has been a CSRF error editing the SAML settings.',
	'v_saml_set_idp'				=> 'Identity Provider (IdP) Settings',
	'v_saml_set_saml_not_configured' => 'SAML Authentication is not configured. You need to enter the required Identity Provider settings.',
	'v_saml_set_sp_eid'				=> 'Entity Id',
	'v_saml_set_sp_acs_url'			=> 'Assertion Consumer Service URL',
	'v_saml_set_sp_sls_url'			=> 'Single Logout Service URL',
	'v_saml_set_idp_eid'			=> 'Entity Id',
	'v_saml_set_idp_sso_url'		=> 'Single Sign On URL',
	'v_saml_set_idp_slo_url'		=> 'Single Logout Service URL',
	'v_saml_set_idp_cert'			=> 'Certificate',
	'v_saml_set_idp_not_set_required' => 'Not set. Required.',
	'v_saml_set_idp_not_set'		=> 'Not set.',
	'v_saml_set_idp_cert_set'		=> 'Set, edit to view.',
	'v_saml_set_notes'				=> 'Notes',
	'v_saml_set_notes_help'			=> 'Internal notes',
	'v_saml_set_idp_slo_disabled' 	=> "Leave empty to disable SAML Single Logout or if the IdP doesn't support it",
	'v_saml_set_edit_sp'			=> 'Edit Service Provider SAML Settings',
	'v_saml_set_edit_idp'			=> 'Edit Identity Provider SAML Settings',
	'v_saml_set_edit_other'			=> 'Edit other SAML Settings',
	'v_saml_set_sp_cert'			=> 'Certificate',
	'v_saml_set_sp_pk'				=> 'Private Key',
	'v_saml_set_sp_nif'				=> 'Name ID Format',
	'v_saml_set_sp_set'				=> 'Set, edit to view.',
	'v_saml_set_sp_not_set'			=> 'Not set.',
	'v_saml_set_custom'				=> 'Custom Settings',
	'v_saml_set_idp_x509'			=> 'Public x509 certificate of the Identity Provider',
	'v_saml_set_sp_x509'			=> 'Public x509 certificate of the Service Provider',
	'v_saml_set_sp_pk_help'			=> 'Private Key of the Service Provider',
	'v_saml_set_sp_nif_help'		=> 'If left blank it will default to:',

	'v_set_cc_copied'				=> 'Copied',
	'v_set_cc_nothing_copy'			=> 'Nothing to copy!',
	'v_set_cc_error'				=> 'Error getting data to copy',
	'v_set_cc_copy_clipboard' 		=> 'Copy to clipboard',

	'v_set_ldap_field_aut'			=> 'Authentication',
	'v_set_ldap_field_aut_ldap'		=> 'LDAP: LDAP users in this server will authenticate via LDAP',
	'v_set_ldap_field_aut_saml'		=> 'SAML: LDAP users in this server will authenticate via SAML, and can be provisioned like LDAP users',
	'v_users_saml_disabled'			=> 'Note: SAML authentication is disabled', // Same as in users_lang.php

	// v12
	'c_set_import_csrf_error'		=> 'There has been a CSRF error importing passwords.',
	'c_set_pwd_reset_url_set'		=> 'The password reset URL is set.',
	'c_set_pwd_reset_url_not_set'	=> 'The password reset URL is not set.',
	'v_set_pwd_reset_url'			=> 'Password reset URL',
	'v_set_set_pwd_reset_url'		=> 'Edit password reset URL',
	'v_set_pwd_reset_info'			=> 'The password reset URL prevents <strong>password reset poisoning</strong> by using it instead of the Host header to generate the URL used to reset the password.',
	'v_set_pwd_reset_info_2'		=> "Note that if you're using the TPM_BASE_URL parameter in config.php you don't need to set the password reset URL.",
	'c_set_pwres_url_field'			=> 'Password reset URL',
	'c_set_pwd_reset_url_edit'		=> 'Edit Password Reset URL',
	'v_set_pwres_url_field_help_1'	=> "Needs to be http or https. Doesn't need to end with a slash (/).",
	'v_set_pwres_url_field_help_2'	=> 'Leave blank to delete',
	'v_set_pwd_reset_url_suggested'	=> 'Suggested value',
	'v_set_pwres_url_suggested_help' => 'The suggested value is the URL of your Team Password Manager installation before index.php',
	'c_set_edit_pwd_reset_csrf_error' => 'There has been a CSRF error saving the password reset URL',
	'c_set_pwd_reset_return' 		=>'Return to password reset configuration',
	'c_set_edit_pwd_reset_error'	=> 'There has been an error saving the password reset URL',
	'c_set_pwe_reset_http_error'	=> 'The password reset URL needs to be http or https',
	'v_set_api_deprecated'			=> 'Deprecated',

	// v13
	'v_set_tab_password_rules'		=> 'User Password Rules',
	'v_set_password_rules_desc_1'	=> 'This setting allows you to define the rules of the passwords of Team Password Manager users (not for SAML or LDAP users, that use rules defined in their SAML/LDAP server).',
	'v_set_password_rules_desc_2'	=> 'Currently, user passwords have the following rules:',

	'v_set_password_rules_username'	=> 'Cannot be a part of the username or email address of the user',
	'v_set_password_rules_min_len'	=> 'Minimum length',
	'v_set_password_rules_contain' 	=> 'Must contain at least one character from the following sets',
	'v_set_password_rules_uppercase'=> 'Uppercase letters',
	'v_set_password_rules_lowercase'=> 'Lowercase letters',
	'v_set_password_rules_numbers' 	=> 'Numbers',
	'v_set_password_rules_symbols' 	=> 'Symbols',
	'v_set_password_rules_spaces' 	=> 'Spaces',
	'v_set_password_rules_spaces_except' => '(except leading or trailing, which are not allowed)',

	'c_set_upr_edit'				=> 'Edit user password rules',
	'v_set_upr_min'					=> 'Min',
	'v_set_upr_max'					=> 'Max',
	
	'c_set_upr_edit_error'			=> 'Error saving the configuration',
	'c_set_upr_return'				=> 'Return to user password rules settings',
	'c_set_upr_edit_csrf_error'		=> 'There has been a CSRF error saving the configuration.',

	'v_upr_load_error'				=> 'There has been an error loading the password rules',

	// v14
	'v_set_tab_manager'				=> 'Manager for New Passwords',
	'v_set_pwm_explanation'			=> 'This setting allows you to configure the user who is going to be the manager for new passwords. The manager of a password has complete control over a password.',
	'v_set_pwm_currently'			=> 'Currently, the manager for new passwords is:',
	'v_set_pwmedit'					=> 'Change the Manager for New Passwords',
	'c_set_pwm_creator'				=> 'The user who creates the password',
	'c_set_pwm_pm'					=> 'The manager of the project of the password',
	'c_set_pwm_this_user'			=> 'This user:',
	'v_set_pwm_field'				=> 'Manager for new passwords',
	'v_set_pwm_specific_user'		=> 'A specific user (select below)',
	'v_set_pwmedit_error'			=> 'There has been an error changing the manager for new passwords',
	'c_set_pwm_return'				=> 'Return to Manager for New passwords configuration',
	'v_set_pwmedit_incorrect'		=> 'incorrect values',
	'v_set_pwmedit_csrf_error'		=> 'There has been a CSRF error changing the manager for new passwords',
	'v_set_pwm_user'				=> 'User',
	'v_set_pwd_select_user'			=> 'Select User',
	'c_set_pwm_user_does_not_exist'	=> 'The selected user does not exist',
	'c_set_pwm_user_read_only'		=> 'The selected user cannot be a user with role Read Only',
	'c_set_pwm_user_required'		=> 'You need to select a user',
	'v_set_pwd_select_user_title'	=> 'Select the user to be the manager for new passwords',
	'v_set_notes_pm_user' 			=> 'Note: if this user does not exist or is a read only user when the password is created, the manager of the password will be the user who creates the password.',

	// v18
	'v_set_exp_desc_2'				=> 'If <code>genexp</code> is being run regularly, send a notification email to the password manager and its [PRJ] manager (and/or to a globally configured email address) reminding them that the password will expire soon.',

	'v_set_exp_global_email'		=> 'Global email address to send expiration notifications or expiration reminders',
	'v_set_exp_global_email_not_set' => '(not set)',
	'v_set_exp_global_also'			=> 'Also send expiration notifications to the password manager and [PRJ] manager',

	'v_set_exp_genexp_desc'			=> 'If you want that password managers and [PRJ] managers (and/or a globally configured email address) receive regular notifications of password expirations or expiration reminders by email you should setup <code>genexp</code> to execute daily.',

	'v_set_exp_days_field_help'		=> 'Set to 0 to disable expiration reminders',

	'v_set_exp_global_email_1'		=> 'Global email address',
	'v_set_exp_global_email_2'		=> 'to send expiration notifications or expiration reminders',

	'v_set_exp_global_also_mgrs'	=> 'Also notify managers',

	// v21
	'v_set_tab_pstren'				=> 'Password strength',
	'v_set_pstren_title'			=> 'Password Strength',
	'c_set_pstren_title'			=> 'Password strength',

	'pstren_enabled'				=> 'Enabled',
	'pstren_disabled'				=> 'Disabled',

	'v_set_pstren_enabled'			=> 'Password strength is <strong>Enabled</strong>.',
	'v_set_pstren_disabled'			=> 'Password strength is <strong>Disabled</strong>.',

	'v_set_pstren_explain1'			=> 'To enable password strength you need to execute a process that will calculate the strength of all the passwords in the system.',
	'v_set_pstren_explain2'			=> 'Click the following button to execute this process:',	

	'v_set_pstren_enable'			=> 'Enable Password Strength',

	'v_set_pstren_calc_title'		=> 'Password Strength Calculation',

	'v_set_pstren_calc_exec_prog'	=> 'Execution in progress:',
	'v_set_pstren_calc_exec_stopped'=> 'Execution stopped at:',
	'v_set_pstren_calc_stopping'	=> 'Stopping execution...',

	'v_set_pstren_calc_explain1'	=> 'This process calculates the strength of all the passwords in the system. Click the button to start it:',
	'v_set_pstren_calc_explain2'	=> 'The execution has stopped. Click the  button to resume it:',
	'v_set_pstren_calc_ended'		=> 'The password strengh calculation has finished. Password strength is now <strong>Enabled</strong>.',

	'v_set_pstren_calc_btn_execute'	=> 'Execute Password Strength Calculation',
	'v_set_pstren_calc_btn_stop'	=> 'Stop Execution',

	'v_set_pstren_calc_do_not_close_tab' => 'If you close this tab the execution will stop.',

);