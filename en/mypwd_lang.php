<?php
$lang = array (

	// controllers/mypwd
	'c_mypwd_invalid_pek_title'		=> 'My Passwords: invalid Personal Encryption Key',
	'c_mypwd_invalid_pek_desc'		=> 'Your Personal Encryption Key is not valid. Please contact support.',

	'c_mypwd'						=> 'My Password',

	'c_mypwd_not_found_title'		=> 'Password not found',
	'c_mypwd_not_found_desc'		=> 'This password does not exist or you cannot access it.',

	'c_mypwd_pwd_exists'			=> 'The password already exists.',
	'c_mypwd_new'					=> 'New Password',
	'c_mypwd_edit'					=> 'Edit My Password',
	'c_mypwd_edit_error'			=> 'There has been an error saving the password',
	'c_mypwd_edit_csrf_error'		=> 'There has been a CSRF error saving the password, please try again.',

	'c_mypwd_return'				=> 'Return to my password',

	'c_mypwd_del'					=> 'Delete My Password',
	'c_mypwd_del_ok'				=> 'The password has been deleted.',
	'c_mypwd_del_error'				=> 'There has been an error deleting the password.',
	'c_mypwd_del_csrf_error'		=> 'There has been a CSRF error deleting the password, please try again.',

	'c_mypwd_goto_pwd'				=> 'Go to the password',

	'c_mypwd_copy_archived'			=> 'the destination [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_mypwd_copy_exists'			=> 'the password already exists in the destination [PRJ].',
	'c_mypwd_copy_cannot'			=> 'you cannot create passwords in the destination [PRJ].',
	'c_mypwd_copy_prj_not_exists'	=> 'the destination [PRJ] does not exist or you cannot access it.',
	'c_mypwd_copy'					=> 'Copy My Password',
	'c_mypwd_copy_cannot_reason'	=> 'This password cannot be copied for the following reason',
	'c_mypwd_copy_error'		 	=> 'There has been an error copying the password',
	'c_mypwd_copy_ro'			 	=> 'You cannot copy/create passwords, you have a read only role.',
	'c_mypwd_copy_csrf_error' 		=> 'The password has NOT been copied (CSRF validation), please try again.',
	'c_mypwd_copy_ok_error'		 	=> 'The password has been copied, but there has been this error doing so',
	'c_mypwd_copy_pwd_prj_not_exist' => 'The password/[PRJ] does not exist or you cannot access it.',

	'c_mypwd_move'					=> 'Move My Password',
	'c_mypwd_move_cannot_reason'	=> 'This password cannot be moved for the following reason',
	'c_mypwd_move_error'		 	=> 'There has been an error moving the password',
	'c_mypwd_move_ro'			 	=> 'You cannot move/create passwords, you have a read only role.',
	'c_mypwd_move_csrf_error' 		=> 'The password has NOT been moved (CSRF validation), please try again.',
	'c_mypwd_move_ok_error'		 	=> 'The password has been moved, but there has been this error doing so',

	// views/mypwd
	'v_mypwd_my_account'			=> 'My Account',	// = v_users_my_account
 	'v_mypwd_my_settings'			=> 'My Settings',	// = v_users_my_settings
 	'v_mypwd_my_passwords'			=> 'My Passwords',	// = v_users_my_passwords

 	'v_mypwd_return_list'			=> 'Return to my passwords list',

 	'v_mypwd_edit_btn'				=> 'Edit',
 	'v_mypwd_copy_btn'				=> 'Copy',
 	'v_mypwd_move_btn'				=> 'Move',
 	'v_mypwd_del_btn'				=> 'Delete',
 	'v_mypwd_edit_title'			=> 'Edit password data',
 	'v_mypwd_copy_title'			=> 'copy password to a [PRJ]',
 	'v_mypwd_move_title'			=> 'move password to a [PRJ]',
 	'v_mypwd_del_title'				=> 'Delete password',

 	'v_mypwd_data'					=> 'Data',

 	'v_mypwd_no_data'				=> "This password doesn't have any data",
 	'v_mypwd_no_notes'				=> 'There are no notes for this password.',

 	'v_mypwd_created_on'			=> 'Created on',
 	'v_mypwd_updated_on'			=> 'Updated on',
 	'v_mypwd_by'					=> 'By',

 	'v_mypwd_ccall_copied'			=> 'Copied',
 	'v_mypwd_ccall_nothing'			=> 'Nothing to copy!',
 	'v_mypwd_ccall_error'			=> 'Error getting data to copy',
 	'v_mypwd_cc_copied'				=> 'Copied',
 	'v_mypwd_cc_nothing'			=> 'Nothing to copy!',
 	'v_mypwd_cc_error'				=> 'Error getting data to copy',
 	'v_mypwd_cc_not_supported'		=> 'This copy to clipboard method is not supported in this browser',
 	'v_mypwd_ccall'					=> 'Copy all the fields to clipboard',
 	'v_mypwd_cc'					=> 'Copy to clipboard',
 	'v_mypwd_ccnotes'				=> 'Copy notes to clipboard',
 	'v_mypwd_ccnotes_copied'		=> 'Copied',
 	'v_mypwd_ccnotes_nothing'		=> 'Nothing to copy!',
 	'v_mypwd_ccnotes_error'			=> 'Error getting data to copy',

 	'v_mypwd_sort_by_name'			=> 'Sort by Name',
 	'v_mypwd_list_auep'				=> 'Access / Username / Email / Password',
 	'v_mypwd_sort_by_updated'		=> 'Sort by Update Date',
 	'v_mypwd_updated'				=> 'Updated',
 	'v_mypwd_list_updated_ph'		=> 'Updated',

 	'v_mypwd_list_empty'			=> 'There are no passwords with this filter or search.',

 	'v_mypwd_sidebar_all_pwds'		=> 'All Passwords',
 	'v_mypwd_sidebar_search_res'	=> 'Search Results',
 	'v_mypwd_sidebar_filter_tag'	=> 'Filter by Tag',
 	'v_mypwd_sidebar_search_tags'	=> 'Search tags',

 	'v_mypwd_new_pwd'				=> 'New Password',
 	'v_mypwd_new_pwd_phone'			=> 'New',
 	'v_mypwd_search'				=> 'Search My Passwords',
 	'v_mypwd_search_phone'			=> 'Search',
 	'v_mypwd_adv_search_title'		=> 'Advanced search',
 	'v_mypwd_search_adv'			=> 'Search',
 	'v_mypwd_adv_help'				=> 'Advanced Search Help',
 	'v_mypwd_adv_search_any' 		=> 'Any Field',
 	'v_mypwd_adv_search_username_email' => 'Username or E-mail',
 	'v_mypwd_adv_search_tag'		=> 'Tag',

 	'v_mypwd_edit_info_saved_enc'	=> 'this information is saved encrypted',
 	'v_mypwd_edit_tags_instruct'	=> 'Use a comma (,) for new tags, "tab" for selecting from the list',
 	'v_mypwd_edit_access_examples'	=> 'Examples: http://site, ftp://ip-address, manual login',
 	'v_mypwd_edit_click_gen_pwd'	=> 'Click to generate password',
 	'v_mypwd_edit_del_gen_pwd' 		=> 'You need to delete the current password if you want to generate a new one!',
 	'v_mypwd_edit_pwd_generated'	=> 'Password generated!',
 	
 	'v_mypwd_del_confirm'			=> 'Delete this password?',
 	'v_mypwd_del_warning'			=> 'Warning: this action is permanent and cannot be un-done.',

 	// v15
 	'm_mypwd_trash_error_transaction' => 'Error in the transaction',
 	'm_mypwd_trash_not_found'		=> 'Password not found',

 	'v_mypwd_moved_trash'			=> 'The password has been moved to the trash bin.',
	'v_mypwd_trash_conf1'			=> 'Move this password to the trash bin?',

	'c_mypwd_trash_error'			=> 'Error moving the password to the trash bin',

	'v_mypwd_trash_bin'				=> 'Trash Bin',

	'v_mypwd_my_trash'				=> 'My Trash Bin',
	'v_mypwd_trash_empty'			=> 'The Trash Bin is empty.',

	'v_mypwd_sort_by_trashed_on'	=> 'Sort by Deleted Date',
	'v_mypwd_trashed'				=> 'Deleted On',

	'v_mypwd_not_shown_trash'		=> 'not shown in the trash bin',

	'v_mypwd_trash_actions'			=> 'Actions',
	'v_mypwd_restore'				=> 'Restore',
	'v_mypwd_delperm'				=> 'Permanently Delete',
	'm_mypwd_trash_not_found_trash'	=> 'This password is not in the trash bin',

	'c_mypwd_restore'				=> 'Restore my password',
	'v_mypwd_restore_conf1'			=> 'Restore this password?',
	'c_mypwd_cannot_restore_same_name' => 'This password cannot be restored because there is another password with the same name.',
	'c_mypwd_return_trash'			=> 'Return to the trash bin',
	'c_mypwd_restore_csrf_error'	=> 'The password has <strong>NOT</strong> been restored.',
	'c_mypwd_restore_error'			=> 'Error restoring the password',

	'c_mypwd_delperm'				=> 'Permanently delete my password',
	'v_mypwd_delperm_conf1'			=> 'Permanently delete this password?',
	'c_mypwd_delperm_csrf_error'	=> 'The password has <strong>NOT</strong> been permanently deleted.',
	'c_mypwd_delperm_error'			=> 'Error permanently deleting the password',
	'c_mypwd_delperm_ok'			=> 'The password has been permanently deleted.',

	'm_mypwd_trash_not_found_in_trash' => 'This password is not in the trash bin',


	// v18
	'v_mypwd_edit_access_note'		=> 'You can enter more than one URL, separate each one with a comma.',
	
	'v_mypwd_archive_title'			=> 'Archive my password?',
	'v_mypwd_archive_btn'			=> 'Archive',
	'c_mypwd_archive'				=> 'Archive my password',
	'v_mypwd_archive_conf1'			=> 'Archive my password?',
	'v_mypwd_archive_conf2'			=> 'An archived password cannot be changed.',
	'c_mypwd_arch_csrf_error'		=> 'There has been a CSRF error archiving the password, please try again.',
	'c_mypwd_archive_error'			=> 'Error archiving my password',
	'v_mypwd_archived'				=> 'Archived',

	'v_mypwd_unarchive_title'		=> 'Un-Archive my password?',
	'v_mypwd_unarchive_btn'			=> 'Un-Archive',
	'c_mypwd_unarchive'				=> 'Un-Archive my password',
	'v_mypwd_unarchive_conf1'		=> 'Un-Archive my password?',
	'c_mypwd_unarch_csrf_error'		=> 'There has been a CSRF error un-archiving the password, please try again.',
	'c_mypwd_unarchive_error'		=> 'Error un-archiving my password',

	'v_mypwd_sidebar_active_pwds'	=> 'Active Passwords',
	'v_mypwd_sidebar_archived_pwds'	=> 'Archived Passwords',

	'v_mypwd_search_aaa_all'		=> 'All',
	'v_mypwd_search_aaa_active'		=> 'Only active',
	'v_mypwd_search_aaa_archived'	=> 'Only archived',

	// v20
	'vpwd_custom_fields_title'		=> 'Custom fields configuration', // =home_lang
	'vpwd_custom_fields'			=> 'Custom Fields', // =home_lang
	'c_mypwd_cf_config'				=> 'Edit My Custom Fields', 
	'c_pwd_cf_config_pwdarchived'	=> 'The custom fields configuration for the password cannot be changed because it is <span class="label label-warning tpm-archived">Archived</span>.',

	'vpwd_cf_instructions'		=> 'Enter the labels and types for the custom fields you need. Note: setting a field type to "Do not use custom field" will not delete its data (if the field has any).', // =home_lang
	'vpwd_cf_template'			=> 'Template', // =home_lang
	'vpwd_cf_select'			=> 'Select a template to fill in the fields', // =home_lang
	'vpwd_cf_label'				=> 'Label', // =home_lang
	'vpwd_cf_type'				=> 'Type', // =home_lang
	'vpwd_cf_custom_field'		=> 'Custom Field', // =home_lang

	'c_mypwd_csrf_error'		=> 'There has been a CSRF error, please try again.',

	'c_pwd_custom_label'		=> 'Custom Label', // =home_lang
	'c_pwd_custom_type'			=> 'Custom Type', // =home_lang
	'c_pwd_cflabel_empty'		=> 'The <strong>Label</strong> for this field cannot be empty: <strong>Custom Field', // <strong> gets closed in code // =home_lang

	'c_mypwd_cf_error'			=> 'There has been an error saving the custom fields configuration',

	'vpwd_edit_basic_data_label' => 'BASIC DATA', // =home_lang
	'vpwd_edit_cf_label'		=> 'CUSTOM FIELDS', // =home_lang
	'vpwd_secret_key'			=> 'Secret Key',  // =home_lang
	'vpwd_edit_expdate_format'	=> 'Format: mm-dd-yyyy', // =home_lang

	'c_pwd_repeat'				=> 'Repeat', // =home_lang

	'vpwd_get_otp_value'		=> 'Get value', // =home_lang

	'vpwd_listcc_copied'		=> 'Copied', // =home_lang
	'vpwd_listcc_nothing'		=> 'Nothing to copy!', // =home_lang
	'vpwd_listcc_error'			=> 'Error getting data to copy', // =home_lang
	'vpwd_listcc_not_sup'		=> 'This copy to clipboard method is not supported in this browser', // =home_lang
	'vpwd_listcc_copy'			=> 'Copy to clipboard', // =home_lang

	'v_mypwd_duplicate_title'	=> 'Duplicate password',
	'v_mypwd_duplicate_btn'		=> 'Duplicate',

	'c_mypwd_duplicate'			=> 'Duplicate My Password',

	'c_pwd_vrd_gen_pwd'			=> 'Generate new password', // =home_lang
	'c_pwd_vrd_dup_custom'		=> 'Duplicate custom fields', // =home_lang
	'c_pwd_dup_pwd_copy_of' 	=> 'Copy of', // =home_lang

	'vpwd_duplicate_new_name'	=> 'New Name', // =home_lang
	'vpwd_duplicate_options'	=> 'Options', // =home_lang
	'vpwd_duplicate_gen_pwd'	=> 'Generate new password(s) for the password field(s)', // =home_lang
	'vpwd_duplicate_cf' 		=> 'Duplicate custom fields', // =home_lang

	'c_mypwd_duplicate_error'	=> 'There has been an error duplicating the password',

	'vpwd_upload_title'			=> 'Upload file', // =home_lang
	'vpwd_upload'				=> 'Upload File', // =home_lang

	'vpwd_tab_files'			=> 'Files', // =home_lang

	'vpwd_files_no_files' 		=> "This password doesn't have any files.", // =home_lang

	'vfiles_filename'			=> 'Filename', // =home_lang
	'vfiles_size'				=> 'Size', // =home_lang
	'vfiles_notes'				=> 'Notes', // =home_lang
	'vfiles_updated'			=> 'Updated', // =home_lang
	'vfiles_download'			=> 'Download', // =home_lang
	'vfiles_edit'				=> 'Edit', // =home_lang
	'vfiles_del'				=> 'Delete', // =home_lang
	'vfiles_view'				=> 'View', // =home_lang
	'vfiles_info'				=> 'Info', // =home_lang
	'vpwd_list_sort_by'			=> 'Sort by', // =home_lang
	'vpwd_list_file'			=> 'file', // =home_lang
	'vpwd_list_files'			=> 'files', // =home_lang

	'c_pwd_vrd_dup_files'		=> 'Duplicate files', // =home_lang
	'vpwd_duplicate_file'		=> 'file', // =home_lang
	'vpwd_duplicate_files'		=> 'files', // =home_lang
	'vpwd_duplicate_inc_files'	=> 'Include files', // =home_lang

	'main_search_file'			=> 'File', // =home_lang

	'v_mypwd_sidebar_favorite_pwds' => 'Favorite Passwords',

	'vpwd_list_toggle_fav'		=> 'Toggle Favorite', // =home_lang

	'main_search_favorite'		=> 'Favorite', // =home_lang

);