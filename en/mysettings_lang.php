<?php
$lang = array (

	// controllers/mysettings
	'c_myset_export_mypwd'			=> 'Export My Passwords',
	'c_myset_export_no_pwd'			=> "You don't have any passwords in My Passwords section.",
	'c_myset_return'				=> 'Return to My Settings',

	'c_myset_import_mypwd'			=> 'Import My Passwords',
	'c_myset_import_mypwd_log'		=> 'Import My Passwords Log',
	'c_myset_import_mypwd_log_id_ko' => 'Log ID not found or it has no entries.',

	'c_myset_import_folder_missing'	=> 'The import folder is missing.',
	'c_myset_import_folder_desc'	=> 'To import passwords the following folder must exist and <strong>it must be writable</strong>',
	'c_myset_import_folder_create'	=> 'Please manually create the import folder, set it writable and execute the import procedure again.',
	'c_myset_export_import_help'	=> 'Help on exporting/importing My Passwords',
	'c_myset_import_folder_not_writable' => 'The import folder is not writable.',
	'c_myset_import_folder_writable_desc' => 'To import passwords the import folder must be writable, your webserver should be able to create files in it.',
	'c_myset_import_folder_set_writable' => 'Please set it writable and execute the import procedure again.',

	'c_myset_incorrect_verification' => 'Incorrect verificaton.',
	'c_myset_incorrect_pwd'			=> 'Your Password is not correct.',
	'c_myset_verification'			=> 'Verification',
	'c_myset_delete_all_mypwd'		=> 'Delete All My Passwords',
	'c_myset_delete_all_mypwd_done'	=> 'All My Passwords have been deleted.',
	'c_myset_delete_all_mypwd_error' => 'There has been an error deleting all My Passwords',
	'c_myset_delete_all_mypwd_csrf_error' => 'There has been a CSRF error deleting all My Passwords. Please try again.',

	// views/my_settings
	'v_myset_my_account'			=> 'My Account',	// = v_users_my_account
 	'v_myset_my_settings'			=> 'My Settings',	// = v_users_my_settings
 	'v_myset_my_passwords'			=> 'My Passwords',	// = v_users_my_passwords

 	'v_myset_export_all_mypwd'		=> 'Export All My Passwords (direct export)',

 	'v_myset_del_mypwd_confirm'		=> 'Delete all of My Passwords?',
 	'v_myset_del_mypwd_warning'		=> 'Warning: this action is permanent and cannot be un-done.',
 	'v_myset_del_mypwd_enter_delete' => 'Enter DELETE', // Do not translate DELETE
 	'v_myset_enter_pwd'				=> 'Enter your Password',

 	'v_myset_import_outcome'		=> 'The import process has finished with the following outcome',
 	'v_myset_import_num_imported' 	=> 'Number of my passwords imported',
 	'v_myset_import_log_id' 		=> 'The import has been logged with ID',
 	'v_myset_import_download_log' 	=> 'Download import log',
 	'v_myset_import_file_deleted' 	=> 'For security reasons, the uploaded file has been deleted from the import folder.',
 	'v_myset_import_file_not_deleted' => "It hasn't been possible to delete the uploaded file from the import folder. For security reasons it's advised that you delete it manually.",

 	'v_myset_import_select_file'	=> 'Select the file that contains the password entries to import to My Passwords (CSV extension)',
 	'v_myset_upload_import'			=> 'Upload and Import',
 	'v_myset_export_import_full_help' => 'Read the full help on importing my password entries',
 	'v_myset_import_explain'		=> "When you click 'Upload and Import', the selected file will be uploaded to the import folder and the import process will be executed. When it's over you'll be taken to another screen with the import results.",

 	'v_myset_import_d1'				=> 'This file must be a CSV (Comma-separated values) file with the following properties',
 	'v_myset_import_d2'				=> 'Each value must be enclosed in double quotes (") and separated by a comma (,).',
 	'v_myset_import_d3'				=> 'The file must be UTF-8 encoded.',
 	'v_myset_import_d4'				=> 'Each line on the file must be a password entry with the following fields',
 	'v_myset_import_d5'				=> 'Password name',
 	'v_myset_import_d6'				=> 'Optional: Access information (unencrypted)',
 	'v_myset_import_d7'				=> 'Optional: Username (unencrypted)',
 	'v_myset_import_d8'				=> 'Optional: E-mail (unencrypted)',
 	'v_myset_import_d9'				=> 'Optional: Password (unencrypted)',
 	'v_myset_import_d10'			=> 'Optional: Notes',
 	'v_myset_import_d11'			=> 'Optional: Tags (separated by comma)',
 	'v_myset_import_d12'			=> 'The file extension must be csv.',

 	// v12
	'c_set_import_csrf_error'		=> 'There has been a CSRF error importing passwords.',

	// v15
	'v_myset_trash_mypwd_confirm'	=> 'Move all of My Passwords to my Trash Bin?',
	'c_myset_trash_all_mypwd_done'	=> 'All My Passwords have been moved to my Trash Bin.',

	'c_myset_empty_my_trash'		=> 'Empty My Trash Bin',
	'c_myset_trash_bin_already_empty' => 'My Trash Bin is already empty.',
	'v_myset_empty_trash_confirm'	=> 'Empty my Trash Bin (permanently delete all the passwords in it)?',
	'c_myset_empty_trash_error'		=> 'There has been an error emptying My Trash Bin',
	'c_myset_empty_my_trash_done'	=> 'My Trash Bin has been emptied.',
	'c_myset_empty_trash_csrf_error' => 'There has been a CSRF error emptying My Trash Bin. Please try again.',

	// v20
	'v_help_imp_optional'			=> 'Optional', // =help_lang
	'v_help_exp_cfnames'			=> 'Custom fields names (separated by comma)', // =help_lang
	'v_help_exp_cf1'				=> 'Custom field 1 (unencrypted)', // =help_lang
	'v_help_exp_cf10'				=> 'Custom field 10 (unencrypted)', // =help_lang

);
