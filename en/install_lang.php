<?php
$lang = array (
	// Controllers/models
	'c_install_title'				=> 'Install',

	'c_install_session_data_expired' => 'Session data expired',
	'c_install_try_again' 			=> 'Please try again',

	'c_install_username'			=> 'Username',
	'c_install_email'				=> 'E-mail address',
	'c_install_pwd'					=> 'Password',
	'c_install_repeat_pwd'			=> 'Repeat password',
	'c_install_name'				=> 'Name',
	'c_install_eula_agreement'		=> 'EULA Agreement',
	'c_install_username_invalid'	=> 'The username contains invalid characters.',

	'm_install_incorrect_version' 	=> "Incorrect version. This indicates that the index.php file doesn't match the rest of the software. Debug info",
	'm_install_php_version_56'		=> 'PHP version must be 5.6.0 or greater, now is',
	'm_install_always_populate_raw_post_data' => 'The always_populate_raw_post_data parameter in php.ini must be -1. Set always_populate_raw_post_data=-1 in php.ini and restart the web server.',
	'm_install_db_not_set_config'	=> 'The database connection parameters are not set. You must set them in config.php.',
	'm_install_tables_exist'		=> 'Some or all of the tables of the database already exist. Choose an empty database and set it in config.php.',
	'm_install_db_not_correctly'	=> 'The database is not correctly set in config.php (it does not exist or cannot be accessed).',
	'm_install_problem_testing_db'	=> 'Problem testing database operations (normally due to incorrect database privileges, but could be other another issue). This operation has failed',
	'm_install_cannot_install'		=> 'Team Password Manager cannot be installed due to the following errors',
	'm_install_cannot_upgrade'		=> 'Team Password Manager cannot be upgraded due to the following errors',
	'm_install_correct_execute'		=> 'Please correct them and execute the installation procedure again.',
	'm_install_correct_execute_upgrade'	=> 'Please correct them and execute the upgrade procedure again.',

	'm_install_error_creating_table' => 'Error creating table',
	'm_install_verify_priv_table' 	=> 'Verify that the database user has enough privileges to create the table.',
	'm_install_error_creating_tables' => 'Error creating tables. Check that the database user has table creation privileges.',
	'm_install_error_options'		=> 'Error writing options table. Check that the database user has insert privileges.',
	'm_install_error_roles'			=> 'Error writing roles table. Check that the database user has insert privileges.',
	'm_install_error_ekey'			=> 'Error creating encryption key. Check that the database user has insert privileges.',
	'm_install_error_admin'			=> 'Error creating the admin user',
	'm_install_exception_admin'		=> 'Error creating the admin user. Check that the database user has insert privileges.',
	'm_install_errors_during_install' => 'The following errors have occurred during install',
	'm_install_correct_support'		=> 'Please correct them (or contact support) and execute the installation procedure again.',
	'm_install_error_inserting_counters' => 'Error inserting counters',

	'c_upgrade_title'				=> 'Upgrade',
	'c_upgrade_incorrect_user'		=> 'The user entered is not an admin/IT user or incorrect username or password.',

	'm_install_tpm_uptodate'		=> 'Team Password Manager is up to date. No upgrading is required.',
	'm_install_table_not_exists'	=> 'This table does not exist',
	'm_install_keyphp_not_exists'	=> 'key.php file does not exist',
	'm_install_db_not_found'		=> 'Database not found.',
	'm_install_upgrading_smaller'	=> "The version you are upgrading to is smaller than the one that's installed.",
	'm_install_upgrading_smaller_to' => 'Upgrading to',
	'm_install_upgrading_smaller_from' => 'Installed',

	'm_install_enc_key_not_defined'	=> 'Encryption key not defined (key.php missing or Encryption key not set).',
	'm_install_errors_upgrading' 	=> 'There have been errors upgrading, in query or process',
	'm_install_contact_support'		=> 'Please contact support.',
	'm_install_upgrade_stopped'		=> 'Upgrade stopped. Please contact support.',
	'm_install_failed_query'		=> 'Failed query',

	'c_upgrade_admin_it_username'	=> 'Admin/IT username',
	'c_upgrade_admin_it_email'		=> 'Admin/IT email',

	// Views
	'v_install_v'					=> 'v.', // for version, eg v. xxx
	'v_install_enter_data'			=> 'Enter the data for the <strong>admin user</strong> of Team Password Manager (<strong>all of the fields are required</strong>)',
	'v_install_8cm'					=> '8 characters minimum',
	'v_install_agree_eula'			=> 'I agree to the End User License Agreement',
	'v_install_submit_data'			=> 'Submit data to complete installation',

	'v_install_tpm_installed_ok'	=> 'Team Password Manager has been installed correctly.',
	'v_install_tpm_installed_del_files' => 'We advise you to delete the following files from your Team Password Manager folder: install.txt, eula.txt and upgrade.txt.',
	'v_install_tpm_installed_lic'	=> 'If you have purchased a license you will be able to register it by going to the Settings | Licenses menu after signing in.',
	'v_install_tpm_installed_maysignin' => 'You may now login to Team Password Manager with the user created in the previous step',
	'v_install_tpm_installed_signin' => 'Team Password Manager Sign In',

	'v_upgrade_ok'					=> 'Team Password Manager has been upgraded correctly to version',
	'v_upgrade_keyphp_not_needed'	=> 'The key.php file is no longer required in this new version, so it is advised that you delete it. You should delete it manually.',
	'v_upgrade_old_hashing_system'	=> 'You have upgraded an old version of Team Password Manager that used an old system for hashing the passwords from users. As a result, the rest of the users will have to reset password to be able to gain access to Team Password Manager.',

	'v_upgrade_btn'					=> 'Upgrade',
	'v_upgrade_process_desc'		=> 'This process will upgrade your installation of Team Password Manager',
	'v_upgrade_from_version'		=> 'From version',
	'v_upgrade_to_version'			=> 'To version',
	'v_upgrade_expired_note_1'		=> '<strong>Note:</strong> the following licenses have expired the support and updates period',
	'v_upgrade_expired_note_2'		=> 'To be able to use these licenses with the version you are about to upgrade you will need to attach a "Support and Updates" license to each one of them. You can do this after upgrading.',
	'v_upgrade_purchase_su'			=> 'Purchase "Support and Updates" licenses',
	'v_upgrade_more_information'	=> 'More information',
	'v_upgrade_backup_note'			=> 'Upgrading Team Password Manager can make changes to the database structure (and sometimes data), so we advise that you make a backup copy of the database. See here how to make a backup of the database',
	'v_upgrade_enter_adminit_desc'	=> 'Enter an Admin or IT username and password and click the "Upgrade" button to proceed.',

	'm_install_json_not_installed'	=> 'The PHP JSON extension is not installed',
	'm_install_filter_not_installed' => 'The PHP Filter extension is not installed',
	'm_install_session_not_installed' => 'The PHP Session extension is not installed',
	'm_install_hash_not_installed'	=> 'The PHP Hash extension is not installed',

	// v9
	'm_install_error_enabling_linked_passwords' => 'Error enabling linked passwords',
	'm_install_error_enabling_password_reset' => 'Error enabling password reset',
	
);