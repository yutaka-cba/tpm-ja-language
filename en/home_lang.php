<?php
$lang = array (

	// views/main
	'main_new_password' 		=> 'New Password',
	'main_new_project' 			=> 'new [PRJ]',
	'main_search_results'		=> 'Search Results',
	'main_search_projects'		=> 'search [PRJS]',
	'main_search_passwords' 	=> 'Search Passwords',
	'main_adv_search_title'		=> 'Advanced search',
	'main_search'				=> 'Search',
	'main_search_any_field'		=> 'Any Field',
	'main_search_name'			=> 'Name',
	'main_search_access'		=> 'Access',
	'main_search_username_email'=> 'Username or E-mail',
	'main_search_tag'			=> 'Tag',
	'main_search_aaa_all'		=> 'All',
	'main_search_aaa_active'	=> 'Only active',
	'main_search_aaa_archived'	=> 'Only archived',
	'main_search_favorite'		=> 'Favorite',
	'main_search_locked'		=> 'Locked',
	'main_search_file'			=> 'File',
	'main_search_expiry_date'	=> 'Expiry date',
	'main_search_ext_sharing'	=> 'External sharing',
	'main_search_search'		=> 'Search',
	'main_search_adv_help'		=> 'Advanced Search Help',
	'main_show_tree'			=> 'Show Tree',
	'main_hide_tree'			=> 'Hide Tree',
	'main_refresh_tree'	 		=> 'Refresh Tree',
	'main_filter_tree'	 		=> 'Filter Tree',
	'main_noprj_welcome_title'	=> 'Welcome to Team Password Manager',
	'main_noprj_welcome_line11' => "<strong>Team Password Manager</strong> helps you manage your organizations' passwords.",
	'main_noprj_welcome_line12'	=> 'each password belongs to a <strong>[PRJ]</strong>.',
	'main_noprj_welcome_line21' => 'So, the first thing you might want to do is to create a [PRJ]:',
	'main_noprj_welcome_line22' => 'new [PRJ]',
	'main_noprj_welcome_line31' => 'If you have 5 minutes, take a look at the help page for a quick summary of Team Password Manager:',
	'main_noprj_welcome_line32' => 'help page',
	'main_uselector_search'		=> 'Search Users',

	// controllers/tree
	'c_tree_search_results'		=> 'Search Results',
	'c_tree_recent'				=> 'Recent',
	'c_tree_favorite'			=> 'Favorite',
	'c_tree_active'				=> 'Active',
	'c_tree_all'				=> 'All',
	'c_tree_archived'			=> 'Archived',
	'c_tree_passwords'			=> 'Passwords',
	'c_tree_search_results_prj'	=> 'Search Results',
	'c_tree_recent_prj'			=> 'Recent',
	'c_tree_favorite_prj'		=> 'Favorite',
	'c_tree_active_prj'			=> 'Active',
	'c_tree_archived_prj'		=> 'Archived',

	// controllers/pwd
	'c_pwd_search_results'		=> 'Search Results',
	'c_pwd_all_pwds'			=> 'All Passwords',
	'c_pwd_favorite_pwds'		=> 'Favorite Passwords',
	'c_pwd_archived_pwds'		=> 'Archived Passwords',
	'c_pwd_recent_pwds'			=> 'Recent Passwords',
	'c_pwd_active_pwds'			=> 'Active Passwords',
	'c_pwd_all'					=> 'All',
	'c_pwd_favorite'			=> 'Favorite',
	'c_pwd_archived'			=> 'Archived',
	'c_pwd_recent'				=> 'Recent',
	'c_pwd_active'				=> 'Active',
	'c_pwd_not_found_title'		=> 'Password Not Found',
	'c_pwd_not_found_desc'		=> 'This password does not exist or you cannot access it.',
	'c_pwd_history_record'		=> 'History Record',
	'c_pwd_view_history_record' => 'View History Record',
	'c_pwd_ro_hr'				=> 'Read Only users cannot view history records.',

	'c_pwd_repeat'				=> 'Repeat',
	'c_pwd_expiry_error'		=> 'The expiry date is not correct. Use the following format: mm-dd-yyyy',
	'c_pwd_pwd_exists'			=> 'this password already exists in this [PRJ].',
	'c_pwd_edit_pwd'			=> 'Edit Password',
	'c_pwd_locked_edit'			=> 'This password is locked. To edit it you need to unlock it.',
	'c_pwd_archived_edit'		=> 'this password cannot be edited because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_perm_edit'			=> 'You do not have the required permission to edit this password.',
	'c_pwd_new_pwd'				=> 'New Password',
	'c_pwd_cannot_create_pwd_ro' => 'Sorry, you cannot create passwords.',
	'c_pwd_cannot_create_pwd_prj' => 'you cannot create passwords in this [PRJ], you do not have the required permission to do so.',
	'c_pwd_cannot_create_pwd_noprja' => 'the [PRJ] that you are trying to create the password in does not exist, or you do not have access to it, or it is archived.',
	'c_pwd_cannot_create_pwd_noprj'=> 'the [PRJ] that you are trying to create the password in does not exist or you do not have access to it.',
	'c_pwd_error_saving_pwd'	=> 'There has been an error saving the password',
	'c_pwd_error_csrf_saving'	=> 'Error: CSRF validation, please try again.',
	'c_pwd_edit_pwd_notes'		=> 'Edit Password Notes',
	'c_pwd_locked_notes_edit'	=> 'This password is locked. To edit its notes you need to unlock it.',
	'c_pwd_error_saving_pwd_notes' => 'There has been an error saving the password notes',

	'c_pwd_vres_managed_by'		=> 'Managed by',
	'c_pwd_edit_pwd_sec'		=> 'Edit Password Security',
	'c_pwd_edit_pwd_sec_locked'	=> 'This password is locked. To edit its security you need to unlock it.',
	'c_pwd_edit_pwd_sec_archived'=> 'Password security cannot be changed for this password because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_sec_perm'	=> 'You do not have the required permission to edit the security for this password.',
	'c_pwd_edit_pwd_sec_error'	=> 'There has been an error editing the password security',

	'c_pwd_vrel_locking'		=> 'Locked',
	'c_pwd_edit_pwd_locking'	=> 'Edit Password Locking',
	'c_pwd_edit_pwd_locking_locked'	=> 'This password is locked. To edit its locking status you need to unlock it.',
	'c_pwd_edit_pwd_locking_archived' => 'Password locking cannot be changed for this password because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_locking_eshared' => 'Password locking cannot be changed because the password is externally shared. If you want to set it locked you need to first edit external sharing and set it as not externally shared.',
	'c_pwd_edit_pwd_locking_perm' => 'You do not have the required permission to edit the locking status of this password.',
	'c_pwd_edit_pwd_locking_error' => 'There has been an error editing password locking',

	'c_pwd_vrur'				=> 'Reason',
	'c_pwd_unlock_pwd'			=> 'Unlock Password',

	'm_pwd_notif_unlocked'		=> 'password unlocked',
	
	'm_pwd_notif_desc'			=> 'The following user has unlocked the following password',
	'm_pwd_notif_user'			=> 'User',
	'm_pwd_notif_reason'		=> 'Reason',

	'c_pwd_delete_pwd'			=> 'Delete Password',
	'c_pwd_delete_pwd_locked'	=> 'This password is locked. To delete it you need to unlock it.',
	'c_pwd_delete_pwd_archived'	=> 'This password cannot be deleted because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_delete_pwd_perm'		=> 'You do not have the required permission to delete this password (you need Manage permission).',
	'c_pwd_delete_pwd_error' => 'Error: the password has <strong>NOT</strong> been deleted due to database errors.',

	'c_pwd_copy_pwd'			=> 'Copy Password',
	'c_pwd_copy_pwd_locked'		=> 'This password is locked. To copy it you need to unlock it.',
	'c_pwd_copy_pwd_dest_archived' => 'the destination [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_copy_pwd_dest_exists' => 'the password already exists in the destination [PRJ].',
	'c_pwd_copy_pwd_dest_cannot' => 'you cannot create passwords in the destination [PRJ].',
	'c_pwd_copy_pwd_dest_not_found' => 'the destination [PRJ] does not exist or you cannot access it.', 
	'c_pwd_copy_pwd_copied_error' => 'The password has been copied, but there has been this error doing so',
	'c_pwd_copy_pwd_error'		=> 'There has been an error copying the password',
	'c_pwd_copy_pwd_cannot'		=> 'This password cannot be copied for the following reason',
	'c_pwd_copy_pwd_ro'			=> 'You cannot copy/create passwords, you have a read only role.',
	'c_pwd_copy_pwd_nf_pwd_prj'	=> 'The password/[PRJ] does not exist or you cannot access it.',
	'c_pwd_copy_pwd_csrf' 		=> 'The password has NOT been copied (CSRF validation). Please try again.',

	'c_pwd_move_pwd'			=> 'Move Password',
	'c_pwd_move_pwd_locked'		=> 'This password is locked. To move it you need to unlock it.',
	'c_pwd_move_pwd_error'		=> 'There has been an error moving the password',
	'c_pwd_move_pwd_cannot'		=> 'This password cannot be moved for the following reason',
	'c_pwd_move_manage' 		=> 'You need manage permission on the password to be able to move it.',
	'c_pwd_move_pwd_ro' 		=> 'You cannot move/create passwords, you have a read only role.',
	'c_pwd_move_pwd_csrf' 		=> 'The password has NOT been moved (CSRF validation). Please try again.',

	'c_pwd_vrd_dup_files'		=> 'Duplicate files',
	'c_pwd_vrd_gen_pwd'			=> 'Generate new password',
	'c_pwd_vrd_dup_custom'		=> 'Duplicate custom fields',
	'c_pwd_dup_pwd'				=> 'Duplicate Password',
	'c_pwd_dup_pwd_locked'		=> 'This password is locked. To duplicate it you need to unlock it.',
	'c_pwd_dup_pwd_archived' 	=> 'This password cannot be duplicated because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_dup_pwd_perm' 		=> 'You do not have the required permission to duplicate this password (you need permission to create passwords in this [PRJ]).',
	'c_pwd_dup_pwd_error'		=> 'There has been an error duplicating the password',
	'c_pwd_dup_pwd_copy_of' 	=> 'Copy of',

	'c_pwd_custom_label'		=> 'Custom Label',
	'c_pwd_custom_type'			=> 'Custom Type',
	'c_pwd_cflabel_empty'		=> 'The <strong>Label</strong> for this field cannot be empty: <strong>Custom Field', // <strong> gets closed in code
	'c_pwd_cf_config'			=> 'Custom Fields',
	'c_pwd_cf_config_locked'	=> 'This password is locked. To change its custom fields configuration you need to unlock it.',
	'c_pwd_cf_config_archived' 	=> 'the custom fields configuration for the password cannot be changed because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_cf_config_perm' 		=> 'You do not have the required permission to change the custom fields configuration of this password (you need permission to manage the password).',
	'c_pwd_cf_config_error' 	=> 'There has been an error saving the custom fields configuration',

	'c_pwd_vrees' 				=> 'Exernally shared',
	'c_pwd_ext_sharing'			=> 'Edit External Sharing',
	'c_pwd_ext_sharing_disab'	=> 'External sharing is disabled. It needs to be enabled in Settings | External Sharing.',
	'c_pwd_ext_sharing_locked'	=> 'External sharing cannot be changed because the password is locked. If you want to share this password externally you need to edit locking and set it unlocked.',
	'c_pwd_ext_sharing_archived'=> 'External sharing for this password cannot be edited because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_ext_sharing_perm'	=> 'You do not have the required permission to edit external sharing.',
	'c_pwd_ext_sharing_error' 	=> 'There has been an error editing external sharing',	

	// views/pwd
	'vpwd_edit_title'			=> 'Edit password data',
	'vpwd_edit'					=> 'Edit',
	'vpwd_edit_notes_title'		=> 'Edit password notes',
	'vpwd_edit_notes'			=> 'Notes',
	'vpwd_upload_title'			=> 'Upload file',
	'vpwd_upload'				=> 'Upload File',
	'vpwd_custom_fields_title'	=> 'Custom fields configuration',
	'vpwd_custom_fields'		=> 'Custom Fields',
	'vpwd_edit_security_title'	=> 'Edit password security',
	'vpwd_edit_security' 		=> 'Security',
	'vpwd_edit_locking_title' 	=> 'Edit password locking',
	'vpwd_edit_locking' 		=> 'Locking',
	'vpwd_edit_extsha_title' 	=> 'Edit external sharing',
	'vpwd_edit_extsha' 			=> 'Ext. Sharing',
	'vpwd_duplicate_title' 		=> 'duplicate password in the [PRJ]',
	'vpwd_duplicate' 			=> 'Duplicate',
	'vpwd_copy_title' 			=> 'copy password to another [PRJ]',
	'vpwd_copy' 				=> 'Copy',
	'vpwd_move_title' 			=> 'move password to another [PRJ]',
	'vpwd_move' 				=> 'Move',
	'vpwd_delete_title' 		=> 'Delete password',
	'vpwd_delete' 				=> 'Delete',
	'vpwd_other_actions'		=> 'Other Actions',

	'vpwd_no_name'				=> '(no name)', // In case a password/project has no name (unlikely)
	'vpwd_cf_instructions'		=> 'Enter the labels and types for the custom fields you need. Note: setting a field type to "Do not use custom field" will not delete its data (if the field has any).',
	'vpwd_cf_template'			=> 'Template',
	'vpwd_cf_select'			=> 'Select a template to fill in the fields',
	'vpwd_cf_prj_template'		=> '* [PRJ] template *',
	'vpwd_cf_label'				=> 'Label',
	'vpwd_cf_type'				=> 'Type',
	'vpwd_cf_custom_field'		=> 'Custom Field',

	'vpwd_delete_pwd_conf1'		=> 'Delete this password?',
	'vpwd_delete_pwd_conf2'		=> 'Warning: this action is permanent and cannot be un-done.',

	'vpwd_duplicate_btn'		=> 'Duplicate',
	'vpwd_duplicate_new_name'	=> 'New Name',
	'vpwd_duplicate_options'	=> 'Options',
	'vpwd_duplicate_file'		=> 'file',
	'vpwd_duplicate_files'		=> 'files',
	'vpwd_duplicate_inc_files'	=> 'Include files',
	'vpwd_duplicate_gen_pwd'	=> 'Generate new password(s) for the password field(s)',
	'vpwd_duplicate_cf' 		=> 'Duplicate custom fields',

	'vpwd_edit_cf_label'		=> 'CUSTOM FIELDS',
	'vpwd_edit_click_gen_pwd'	=> 'Click to generate password',
 	'vpwd_edit_del_gen_pwd' 	=> 'You need to delete the current password if you want to generate a new one!',
 	'vpwd_edit_pwd_generated'	=> 'Password generated!',
 	'vpwd_edit_info_saved_enc'	=> 'this information is saved encrypted',
 	'vpwd_edit_tags_instruct'	=> 'Use a comma (,) for new tags, "tab" for selecting from the list',
 	'vpwd_edit_basic_data_label' => 'BASIC DATA',
 	'vpwd_edit_access_examples'	=> 'Examples: http://site, ftp://ip-address, manual login',
 	'vpwd_edit_expdate_format'	=> 'Format: mm-dd-yyyy',

 	'vpwd_share_ext_check'		=> 'Share externally',
 	'vpwd_share_ext_notes1'		=> 'If shared externally, the URL to access this password will be available in the "External Sharing" tab after editing.',
	'vpwd_share_ext_notes2'		=> 'Externally shared passwords have this world link icon next to the star icon, to the right of the password name.',
	'vpwd_share_ext_notes3'		=> 'The following data are shown when accessing a password externally: password name, project name, access, username, e-mail, password, expiry date, custom fields, notes and files.', 	

	'vpwd_locking_check'		=> 'Lock password',
	'vpwd_locking_notes1'		=> 'Any user who wants to use a locked password will have to unlock it by entering a reason.',
	'vpwd_locking_notes3'		=> 'An unlocked password remains unlocked for the rest of the session of the user.',
	'vpwd_locking_notes4'		=> 'Locked passwords have this lock icon (locked/unlocked) next to the star icon, to the right of the password name.',

	'vpwd_security_select_pm'	=> 'Select the Password Manager',
	'vpwd_security_managed_by'	=> 'Managed by',
	'vpwd_security_change_pm'	=> 'Change',
	'vpwd_security_pwd_sec'		=> 'Password Security',
	'vpwd_security_pwd_sec_desc'=> '<strong>Set permissions</strong> on this password to individual <strong>users</strong> and/or <strong>groups</strong>',
	'vpwd_security_show_with_perm' => 'Show users/groups that have a permission',
	'vpwd_security_show_all' 	=> 'Show all users/groups',
	'vpwd_security_help_perm'	=> 'Help on Permissions',
	'vpwd_security_users'		=> 'Users',
	'vpwd_security_groups'		=> 'Groups',
	'vpwd_security_members' 	=> 'members',
	'vpwd_security_members_in' 	=> 'Members in',
	'vpwd_security_ind_not1'	=> 'Individual permissions cannot be set.',
	'vpwd_security_ind_not2'	=> 'All the users are managers of the [PRJ] of this password and there are no groups.',

	'vpwd_sec_help_donotset1'	=> 'an explicit permission is not set for the user/group.',
	'vpwd_sec_help_donotset2'	=> 'The effective permission for users is calculated based on their membership in groups and the permission set in those groups, or the permission set in the [PRJ] of the password.',
	'vpwd_sec_help_donotset3'	=> 'If no permission is found, no access will be given.',
	'vpwd_sec_help_noaccess'	=> 'the user/group cannot access the password.',
	'vpwd_sec_help_read'		=> 'the user/group can only read password data and download its files.',
	'vpwd_sec_help_edit' 		=> 'the user/group can edit the password data and upload files to it (but not manage it).',
	'vpwd_sec_help_manage' 		=> 'the user/group has total control over the password.',
	'vpwd_sec_help_notes_lbl' 	=> 'Notes',
	'vpwd_sec_help_notes1' 		=> 'User permissions have precedence over group permissions.',
	'vpwd_sec_help_notes2' 		=> 'A specific password permission takes precedence over the one set in the [PRJ] for its passwords. Exception: [PRJ] managers have total control over the [PRJ] and its passwords and this cannot be overridden in the password.',
	'vpwd_sec_help_notes3' 		=> 'Effective permissions on the password for each user are shown on the security tab of the password.',

	'vpwd_select_pm_user_role'	=> '<strong>User</strong> / Role',
	'vpwd_select_pm_users'		=> 'users',
	'vpwd_select_pm_not_found'	=> 'No users found',

	'vpwd_listcc_copied'		=> 'Copied',
	'vpwd_listcc_nothing'		=> 'Nothing to copy!',
	'vpwd_listcc_error'			=> 'Error getting data to copy',
	'vpwd_listcc_not_sup'		=> 'This copy to clipboard method is not supported in this browser',
	'vpwd_listcc_copy'			=> 'Copy to clipboard',

	'vpwd_ccall_copy'			=> 'Copy all the fields to clipboard',
	'vpwd_ccnotes_copy'			=> 'Copy notes to clipboard',
	'vpwd_ccall_copied'			=> 'Copied',
	'vpwd_ccnotes_copied'		=> 'Copied',

	'vpwd_list_empty'			=> 'There are no passwords with this filter or search.',
	'vpwd_list_sort_name'		=> 'Sort by Name',
	'vpwd_list_pwd_name'		=> 'Password Name',
	'vpwd_list_sort_prj'		=> 'sort by [PRJ]',
	'vpwd_list_auep'			=> 'Access / Username / Email / Password',
	'vpwd_list_expiry'			=> 'Expiry',
	'vpwd_list_sport_expiry'	=> 'Sort by Expiry date',
	'vpwd_list_updated'			=> 'Updated',
	'vpwd_list_sort_updated'	=> 'Sort by Update Date',
	'vpwd_list_sort_by'			=> 'Sort by',
	'vpwd_filter_expired'		=> 'Filter Expired',
	'vpwd_filter_soon_expire'	=> 'Filter Soon to Expire',
	'vpwd_filter_project'		=> 'Filter by [CAP_PRJ]',
	'vpwd_filter_tag'			=> 'Filter by Tag',
	'vpwd_search_tags'			=> 'Search tags',

	'vpwd_list_locked'			=> 'Locked',
	'vpwd_list_shared_ext'		=> 'Shared Externally',
	'vpwd_list_toggle_fav'		=> 'Toggle Favorite',
	'vpwd_list_enter_reason_locked' => 'Locked: enter reason to unlock',
	'vpwd_list_updated_ph' 		=> 'Updated',
	'vpwd_list_file'			=> 'file',
	'vpwd_list_files'			=> 'files',

	'vpwd_pwd_deleted'			=> 'The password has been deleted.',
	'vpwd_pwd_deleted_ret_prj'	=> 'return to the [PRJ] of password',
	'vpwd_pwd_deleted_ret_list'	=> 'Return to the passwords list',

	'vpwd_unlock_yes'			=> 'Unlock Password',
	
	'vpwd_unlock_reason_lbl'	=> 'Enter reason to unlock',
	'vpwd_unlock_reason_note'	=> 'Note: the password will remain unlocked for the rest of your session',

	'vpwd_no_data'				=> "This password doesn't have any data",

	'vpwd_select_in_tree'		=> 'Select in Tree',

	'vpwd_pwd_locked'			=> 'This password is locked. You need to enter a reason to unlock it.',
	'vpwd_pwd_enter_reason'		=> 'Enter Reason to Unlock',

	'vpwd_tab_data'				=> 'Data',
	'vpwd_tab_notes'			=> 'Notes',
	'vpwd_tab_files'			=> 'Files',
	'vpwd_tab_external_sharing'	=> 'External Sharing',
	'vpwd_tab_ext'				=> 'Ext', // Same as external sharing but reduced for mobile screens
	'vpwd_tab_security'			=> 'Security',
	'vpwd_tab_history'			=> 'History',
	'vpwd_tab_log'				=> 'Log',
	'vpwd_tabs_more'			=> 'More',

	'vpwd_no_notes'				=> 'There are no notes for this password.',

	'vpwd_no_log'				=> 'There are no log entries for this password.',

	'vpwd_managed'				=> 'Managed',
	'vpwd_created'				=> 'Created',
	'vpwd_updated'				=> 'Updated',
	'vpwd_on'					=> 'on',
	'vpwd_by'					=> 'by',

	'vpwd_ext_url'				=> 'This password can be viewed without signing in Team Password Manager using the following URL',
	'vpwd_not_shared_ext'		=> 'This password is not shared externally.',
	'vpwd_ccurl_ext_copied'		=> 'Copied',

	'vpwd_history_description'	=> 'Whenever the data in the password fields change, the <strong>previous values</strong> are saved in this password history',
	'vpwd_history_date_time'	=> 'Date/Time',
	'vpwd_history_user'			=> 'User',
	'vpwd_history_changed_fields' => 'Changed Fields',
	'vpwd_history_view_values'	=> 'View Values',
	'vpwd_history_no_history'	=> 'This password has no history.',
	'vpwd_history_only_changed_shown' => 'only the fields that changed are shown',
	'vpwd_history_record_not_exist' => 'This history record for this password does not exist.',

	'vpwd_files_no_files' 		=> "This password doesn't have any files.",

	'vpwd_security_description'	=> 'Effective permissions on this password are',
	'vpwd_security_name'		=> 'Name',
	'vpwd_security_role'		=> 'Role',
	'vpwd_security_permission'	=> 'Permission',
	'vpwd_security_granted_via'	=> 'Granted Via',
	'vpwd_security_error'		=> 'There has been an error getting security data for this password.',

	// controllers/prj
	'c_prj_in'					=> 'In',
	'c_prj_search_results'		=> 'Search Results',
	'c_prj_favorite_prjs'		=> 'Favorite [CAP_PRJS]',
	'c_prj_archived_prjs'		=> 'Archived [CAP_PRJS]',
	'c_prj_recent_prjs'			=> 'Recent [CAP_PRJS]',
	'c_prj_active_prjs'			=> 'Active [CAP_PRJS]',
	'c_prj_favorite'			=> 'Favorite',
	'c_prj_archived'			=> 'Archived',
	'c_prj_recent'				=> 'Recent',
	'c_prj_active'				=> 'Active',
	'c_prj_not_found_title'		=> '[PRJ] Not Found',
	'c_prj_not_found_desc'		=> 'This [PRJ] does not exist or you cannot access it.',
	'c_prj_prj_exists_level' 	=> 'the [PRJ] already exists in this level.',

	'c_prj_edit_project'		=> 'edit [PRJ]',
	'c_prj_edit_archived'		=> 'this [PRJ] cannot be edited because it is <span class="label label-warning tpm-archived">Archived</span>',
	'c_prj_edit_permission' 	=> 'you do not have the required permission to edit this [PRJ].',
	'c_prj_new_project'			=> 'new [PRJ]',
	'c_prj_new_no_more_projects'=> 'sorry, you cannot create any more [PRJS].',
	'c_prj_new_free'			=> 'you are using the <strong>free version</strong>, which only allows you to have <strong>2 users and 5 [PRJS]</strong>, and you already have 5 [PRJS]. You need to add a license to have more users and unlimited [PRJS].',
	'c_prj_new_buy' 			=> 'You can buy licenses from the Team Password Manager website',
	'c_prj_new_cannot'			=> 'Sorry, you cannot create [PRJS].',
	'c_prj_new_no_access_parent'=> 'you do not have access to the parent [PRJ].',
	'c_prj_edit_error'			=> 'There has been an error saving the [PRJ].',

	'c_prj_edit_sec_managed_by'	=> 'Managed by',
	'c_prj_eps' 				=> 'edit [PRJ] security',
	'c_prj_eps_archived'		=> 'the security of this [PRJ] cannot be edited because it is <span class="label label-warning tpm-archived">Archived</span>',
	'c_prj_eps_perm' 			=> 'you do not have the required permission to edit the security of this [PRJ] (you need manage permission).',
	'c_prj_eps_error_saving'	=> 'There has been an error saving the security of the [PRJ]',
	'c_prj_eps_no_members'		=> 'There are no members in this group',

	'c_prj_delete'				=> 'delete [PRJ]',
	'c_prj_delete_archived'		=> 'the [PRJ] cannot be deleted because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_prj_delete_not_leaf'		=> 'This [PRJ] cannot be deleted because it has [SUBPRJS].',
	'c_prj_delete_not_leaf_explain'	=> 'Currently only [PRJS] at the end of a hierarchy can be deleted.',
	'c_prj_delete_perm'			=> 'you do not have the required permission to delete this [PRJ] (you need manage permission and role Admin, [CAP_PRJ] Manager or IT).',
	'c_prj_delete_error'		=> 'error: the [PRJ] has <strong>NOT</strong> been deleted due to database errors.',

	'c_prj_archive'				=> 'archive [PRJ]',
	'c_prj_archive_archived'	=> 'the [PRJ] is already <span class="label label-warning tpm-archived">Archived</span>.',
	'c_prj_archive_perm'		=> 'you do not have the required permission to archive this [PRJ] (you need manage permission).',
	'c_prj_archive_error'		=> 'there has been an error archiving the [PRJ]',

	'c_prj_unarchive'			=> 'un-archive [PRJ]',
	'c_prj_unarchive_unarchived'=> 'the [PRJ] is already <strong>Un-Archived</strong>.',
	'c_prj_unarchive_perm'		=> 'you do not have the required permission to un-archive this [PRJ] (you need manage permission).',
	'c_prj_unarchive_error'		=> 'there has been an error un-archiving the [PRJ]',

	'c_prj_cft'					=> 'Custom fields template for new passwords',
	'c_prj_cft_archived'		=> 'the custom fields template of this [PRJ] cannot be edited because the [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_prj_cft_perm'			=> 'you do not have the required permission to edit the custom fields template of this [PRJ] (you need manage permission).',
	'c_prj_cft_error'			=> 'There has been an  error saving the template',

	'c_prj_tree_select_project'	=> 'select [PRJ]',
	'c_prj_tree_root'			=> 'Root',
	'c_prj_tree_all'			=> 'All',

	'c_prj_change_parent'		=> 'Change Parent',
	'c_prj_select_new_parent'	=> 'Select new parent for',
	'c_prj_copy_pwd_select_prj'	=> 'Select the [PRJ] to copy the password to',
	'c_prj_copy_pwd_grayed'		=> '[PRJS] where you cannot copy passwords to are grayed',
	'c_prj_copy_my_pwd'			=> 'Copy My Password',
	'c_prj_move_pwd_select_prj'	=> 'Select the [PRJ] to move the password to',
	'c_prj_move_pwd_grayed'		=> '[PRJS] where you cannot move passwords to are grayed',
	'c_prj_move_my_pwd'			=> 'Move My Password',
	'c_prj_new_pwd_select_prj'	=> 'Select the [PRJ] to create a new password in',
	'c_prj_new_pwd_grayed' 		=> '[PRJS] where you cannot create passwords are grayed',
	'c_prj_new_prj_select_prj'	=> 'Select the parent [PRJ] (or Root) to create a new [PRJ] in',
	'c_prj_tree_select_parent_project' => 'select parent [PRJ]',
	'c_prj_tree_select_parent_project_importing' => 'Select the parent [PRJ] (or Root) to use for importing',
	'c_prj_select_prj_export'	=> 'Select the [PRJ] (or All) to export passwords from',
	'c_prj_select_prj_export_grayed' => '[PRJS] where you cannot export passwords from are grayed',

	'c_prj_change_parent_error'	=> 'There has been an error changing the parent of the [PRJ]',
	'c_prj_change_parent_no_access_parent' => 'you do not have access to the chosen new parent, so you cannot change the parent of the [PRJ] to it.',
	'c_prj_change_parent_incorrect_parent' => 'Incorrect new parent',
	'c_prj_change_parent_perm'	=> 'you do not have the required permission to change the parent of this [PRJ].',
	'c_prj_change_parent_archived' => 'the [PRJ] is archived, its parent cannot be changed.',

	// views/prj
	'vprj_new_pwd_phone'		=> 'New Pwd',	// =new password but reduced for phones
	'vprj_new_pwd_title'		=> 'Create a Password in this [CAP_PRJ]',

	'vprj_unarchive'			=> 'Un-Archive',
	'vprj_unarchive_title'		=> 'Un-Archive this [CAP_PRJ]',	

	'vprj_new_subprj'			=> 'new [CAP_SUBPRJ]',

	'vprj_edit_title'			=> 'Edit [PRJ] data',
	'vprj_edit'					=> 'Edit',

	'vprj_edit_security'		=> 'Security',
	'vprj_edit_security_title'	=> 'edit [PRJ] security',

	'vprj_cft_title'			=> 'Custom fields template for new passwords',
	'vprj_cft'					=> 'C.F. Template',

	'vprj_archive'				=> 'Archive',
	'vprj_archive_title'		=> 'Archive this [CAP_PRJ]',

	'vprj_delete'				=> 'Delete',
	'vprj_delete_title'			=> 'Delete this [PRJ] and all its passwords',

	'vprj_no_pwd_filter'		=> 'this [PRJ] has no passwords with the current filter.',
	'vprj_no_pwd'				=> 'this [PRJ] has no passwords.',

	'vprj_list_toggle_fav'		=> 'Toggle Favorite',
	'vprj_archived'				=> 'Archived', // prj main screen

	'vprj_tab_passwords'		=> 'Passwords',
	'vprj_tab_pwds'				=> 'Pwds', // Same as vprj_tab_passwords but reduced for mobile
	'vprj_tab_notes'			=> 'Notes',
	'vprj_tab_files'			=> 'Files',
	'vprj_tab_security'			=> 'Security',
	'vprj_tab_log'				=> 'Log',

	'vprj_search_filter_pwds'	=> 'Search / Filter Passwords',
	'vprj_search'				=> 'Search',
	'vprj_managed'				=> 'Managed',
	'vprj_created'				=> 'Created',
	'vprj_updated'				=> 'Updated',
	'vprj_on'					=> 'on',
	'vprj_by'					=> 'by',

	'vprj_no_notes'				=> 'There are no notes for this [PRJ].',
	'vprj_files_no_files' 		=> "This [PRJ] doesn't have any files.",

	'vpr_sec_select_pm'			=> 'select the [PRJ] manager',
	'vprj_sec_set_to'			=> '[PRJ] security is set to',
	'vprj_sec_grant_all'		=> 'grant all users the following permission',
	'vprj_sec_individual'		=> 'set permissions on this [PRJ] to individual users and/or groups',
	'vprj_sec_effective'		=> 'effective permissions on this [PRJ] are:',

	'vprj_sec_name'				=> 'Name',
	'vprj_sec_role'				=> 'Role',
	'vprj_sec_prj_perm'			=> '[PRJ] permission',
	'vprj_sec_pwds_perm'		=> 'Passwords Permission',
	'vprj_sec_granted_via'		=> 'Granted Via',
	'vprj_sec_error'			=> 'there has been an error obtaining security data for this [PRJ]',
	'vprj_log_no_entries'		=> 'there are no log entries for this [PRJ]',

	'vprj_enter_prj_search'		=> 'enter [PRJ] to search',
	'vprj_edit_sec_prj_security' => '[PRJ] security',

	'vprj_sec_help_donotset1'	=> 'an explicit permission is not set for the user/group.',
	'vprj_sec_help_donotset2'	=> 'The effective permission for users is calculated based on their membership in groups and the permission set in those groups.',
	'vprj_sec_help_donotset3'	=> 'If no permission is found, no access will be given.',
	'vprj_sec_help_no_access'	=> 'the user/group cannot access the [PRJ] or any of its passwords.',
	'vprj_sec_help_traverse'	=> 'the user/group can see the [PRJ] name only.',
	'vprj_sec_help_read'		=> 'the user/group can only read [PRJ] data and its passwords.',
	'vprj_sec_help_create_pwd'	=> 'the user/group can read [PRJ] data and create passwords in it.',
	'vprj_sec_help_edit_pwd'	=> 'the user/group can read [PRJ] data and edit the data of its passwords (and also create passwords).',
	'vprj_sec_help_manage_pwd'	=> 'the user/group can read [PRJ] data and manage its passwords (and also create passwords).',
	'vprj_sec_help_manage'		=> 'the user/group has total control over the [PRJ] and its passwords.',
	'vprj_sec_help_inherit'		=> 'the user/group inherits the permission set on the parent [PRJ].',
	'vprj_sec_help_notes1'		=> 'User permissions have precedence over group permissions.',
	'vprj_sec_help_notes2'		=> 'effective permissions on the [PRJ] for each user are  shown on the security tab of the [PRJ].',

	'vprj_archive_project'		=> 'archive this [PRJ]?',
	'vprj_archive_project_desc'	=> 'an archived [PRJ] (and its passwords) cannot be changed.',
	'vprj_unarchive_project'	=> 'un-archive this [PRJ]?',

	'vprj_del_has_pwd'			=> 'this [PRJ] has the following number of passwords',
	'vprj_del_no_pwd'			=> "this [PRJ] doesn't have any passwords.",
	'vprj_del_confirm_pwds'		=> 'delete this [PRJ] and all of its passwords?',
	'vprj_del_confirm_no_pwds'	=> 'delete this [PRJ]?',
	'vprj_del_warning'			=> 'Warning: this action is permanent and cannot be un-done.',
	'vprj_del_deleted'			=> 'the [PRJ] has been deleted.',
	'vprj_del_goto_list'		=> 'go to the active [PRJS] list.',

	'vprj_cft_instructions'		=> 'new passwords in this [PRJ] will have the following custom fields',
	'vprj_cft_select'			=> 'Select a global template to fill in the fields',

	'vprj_list_empty'			=> 'there are no [PRJS] with this filter or search.',
	'vprj_list_sort_name'		=> 'Sort by Name',
	'vprj_list_sort_managed_by'	=> 'Sort by Managed by',
	'vprj_list_sort_updated'	=> 'Sort by Update date',
	'vprj_list_managed_by'		=> 'Managed by',
	'vprj_list_updated'			=> 'Updated',

	// views/files
	'vfiles_filename'			=> 'Filename',
	'vfiles_size'				=> 'Size',
	'vfiles_notes'				=> 'Notes',
	'vfiles_updated'			=> 'Updated',
	'vfiles_download'			=> 'Download',
	'vfiles_edit'				=> 'Edit',
	'vfiles_del'				=> 'Delete',
	'vfiles_view'				=> 'View',

	// External access
	'c_pwde_file_not_exist'		=> 'The requested file does not exist or you cannot access it.',
	'v_pwde_file'				=> 'File',
	'v_pwde_ret_files_list'		=> 'Return to the password files list',

	// v4
	'vpwd_locking_perm_check'	=> 'Requires permission to unlock',
	'vpwd_locking_notes21'		=> 'If "Requires permission to unlock" is checked, a request is sent to the password manager to grant permission to unlock.',
	'vpwd_locking_notes2'		=> 'If "Requires permission to unlock" is not checked, when a password is unlocked an email message is sent to the password manager with the entered reason.', // Changed

	'vpwd_list_enter_reason_locked_perm' => 'Locked: request permission to unlock',

	'vpwd_pwd_locked_perm'		=> 'This password is locked. You need to request its manager permission to unlock it.',
	'vpwd_pwd_enter_reason_perm' => 'Request Permission to Unlock',

	'vpwd_unlock_yes_perm'		=> 'Request Permission to Unlock',
	'vpwd_unlock_perm_lbl1'		=> 'Request permission to unlock this password to its manager',
	'vpwd_unlock_perm_lbl2'		=> 'You will receive an email when the manager grants you permission to unlock the password',

	'c_pwd_not_valid_requester1' => 'To unlock this password you need permission from its manager (or the one in its [PRJ]), but there\'s not a valid manager to request permission to. Here, valid means: that the manager exists, with a role that is not Read only, not API only and active.',
	'c_pwd_not_valid_requester2' => 'Set a valid manager in the [PRJ] of the password and try again.',

	'm_pwd_notif_unlock_perm' 	=> 'permission to unlock password',
	'm_pwd_notif_desc_perm'		=> 'The following user is requesting you permission to unlock the following password',
	'm_pwd_notif_why'			=> 'You are receiving it because you are the password manager of the password.',
	'm_pwd_notif_action_perm'	=> 'Click here to grant or revoke the permission to unlock this password for the user',

	'c_pwd_ur_not_found_title'	=> 'Unlocking Request Not Found',
	'c_pwd_ur_not_found_desc'	=> 'This unlocking request does not exist or you cannot access it.',
	'c_pwd_ur_title'			=> 'Unlocking Request',

	'vpwd_ur_notif_desc_perm'	=> 'The following user is requesting permission to unlock this password',
	'vpwd_ur_not_locked'		=> 'This password is not locked any more',
	'vpwd_ur_already_granted'	=> 'Permission to unlock has been <strong>granted</strong> for this request',
	'vpwd_ur_already_revoked'	=> 'Permission to unlock has been <strong>revoked</strong> for this request',

	'vpwd_pwd_unlock_grant_btn'	=> 'Grant Permission to Unlock',
	'vpwd_pwd_unlock_revoke_btn'=> 'Revoke Permission to Unlock',
	'vpwd_pwd_unlock_grant_confirm'	=> 'Grant Permission to Unlock?',
	'vpwd_pwd_unlock_revoke_confirm'=> 'Revoke Permission to Unlock?',
	'vpwd_pwd_unlock_grant_desc'	=> 'When you confirm, email will be sent to the user with a link to unlock the password and access it.',
	'vpwd_pwd_unlock_revoke_desc'	=> 'When you confirm, email will be sent to the user informing of your decision.',
	'vpwd_pwd_granted_on'		=> 'Granted on',
	'vpwd_pwd_revoked_on'		=> 'Revoked on',

	'm_pwd_perm_unlock_granted'	=> 'permission to unlock password granted',
	'm_pwd_perm_unlock_granted_desc' => 'You\'ve been granted permission to unlock the following password',
	'm_pwd_unlockview'			=> 'Click here to unlock the password and access it',
	'm_pwd_notif_grant_why'		=> 'You are receiving it because you requested permission to unlock this password.',
	'm_pwd_granted_by'			=> 'Granted by',

	'm_pwd_perm_unlock_revoked'	=> 'permission to unlock password revoked',
	'm_pwd_perm_unlock_revoked_desc' => 'You\'ve been revoked permission to unlock the following password',
	'm_pwd_revoked_by'			=> 'Revoked by',

	'vpwd_unlock_perm_lbl_self' => 'You are the manager of this password, so you only need to enter a reason to unlock it',

	'vpwd_unlock_request_sent'	=> 'Your request has been sent, you\'ll receive an email message when the manager grants or revokes it.',

	// v5
	'vpwd_locking_notify'		=> 'When unlocked notify',
	'vpwd_locking_request'		=> 'Request permission to',
	'vpwd_locking_notify_pm'	=> 'The password manager',
	'vpwd_locking_notify_manage'=> 'All the users with manage permission on the password',
	'm_pwd_notif_manage_why'	=> 'You are receiving it because you have manage permission on the unlocked password.',

	'vpwd_unlock_sending_notif'	=> 'Sending notifications ... please wait',
	'vpwd_unlock_sending_req'	=> 'Sending permission requests ... please wait',

	'vpwd_unlock_perm_lbl1_manage' => 'Request permission to unlock this password to any of its managers',
	'vpwd_unlock_perm_lbl2_manage' => 'You will receive an email when any manager grants you permission to unlock the password',

	'm_pwd_notif_manage_why_req' => 'You are receiving it because you have manage permission on the password.',
	'm_pwd_notif_why_req'		=> 'You are receiving it because you are the password manager of the password.',

	'c_pwd_not_valid_requester1all' => 'To unlock this password you need permission from a manager (that is not yourself), but there\'s not a valid manager to request permission to. Here, valid means: that the manager exists, with a role that is not Read only, not API only and active.',

	// v7
	'c_prj_new_prj_select_prj_no_root'	=> 'Select the parent [PRJ] to create a new [PRJ] in',
	'c_prj_tree_select_parent_project_importing_no_root' => 'Select the parent [PRJ] to use for importing',
	'c_prj_new_no_root' 		=> 'You cannot create [PRJS] in root.',
	'c_prj_change_parent_not_root' => 'You cannot set root as the new parent',

	'vpwd_list_shared_ext_exp'	=> 'Shared Externally (Expired)',

	'pwde_view_page'			=> 'View Page',
	'pwde_csrf_validation_error' => 'Session expired, please try again',
	'pwde_incorrect_pwd'		=> 'Incorrect password, please try again',

	'pwde_external_sharing_url'	=> 'External sharing URL',
	'pwde_external_sharing_exp_date' => 'External sharing expiry date',
	'pwde_external_sharing_pwd' => 'External sharing password',

	'pwde_external_sharing_url_not_valid' => 'The external sharing URL is no longer valid',
	'pwde_external_sharing_url_not_valid_after' => 'The external sharing URL will no longer be valid after this date',

	'pwde_expiry_date' 			=> 'Expiry date',
	'pwde_ess_no_longer_valid' 	=> 'External sharing will no longer be valid after this date (optional)',
	'pwde_protect_external_view' => 'To protect the external view (optional)',

	'vpwd_share_ext_notes22'	=> 'Externally shared passwords that have expired have this icon instead.',

	// v9
	'vpwd_link_title' 			=> 'link password to another [PRJ]',
	'vpwd_link' 				=> 'Link',
	'c_prj_link_pwd_select_prj'	=> 'Select the [PRJ] to link the password to',
	'c_prj_link_pwd_grayed'		=> '[PRJS] where you cannot link passwords to are grayed',
	'c_pwd_link_pwd'			=> 'Link Password',
	'c_pwd_link_pwd_locked'		=> 'This password is locked. To link it you need to unlock it.',
	'c_pwd_link_pwd_linked_error' => 'The password has been linked, but there has been this error doing so',
	'c_pwd_link_pwd_error'		=> 'There has been an error linking the password',
	'c_pwd_link_pwd_cannot' 	=> 'This password cannot be linked for the following reason',
	'c_pwd_link_pwd_csrf'		=> 'The password has NOT been linked (CSRF validation). Please try again.',
	'c_pwd_link_pwd_manage'		=> 'You need manage permission on the password to be able to link it.',
	'v_pwd_linked_password'		=> 'Linked Password',
	'v_pwd_source_password'		=> 'Source Password',
	'v_pwd_go_to_source_password' => 'Go to the Source Password',
	'vpwd_tab_linked_passwords' => 'Linked Passwords', // Tab in passwords
	'vpwd_tab_linked_passwords_short' => 'Linked', // Tab in passwords (short version, for responsive)
	'vpwd_not_linked_passwords'	=> "This password doesn't have any linked passwords.",
	'vpwd_not_perm_linked_passwords' => "You don't have enough permission to view the linked passwords.",
	'v_pwd_linked_pwd_from' 	=> 'This password is linked from the following [PRJS]:',
	'vpwd_linked_actions'		=> 'Actions',
	'vpwd_linked_passwords_list_error' => 'There has been an error getting the linked passwords for this password.',
	'v_pwd_linked_prj_no_access' => "(You don't have access to this [PRJ])",
	'v_pwd_goto_linked_password' => 'Go to the Linked Password',
	'v_pwd_unlink'				=> 'Unlink',
	'v_pwd_unlink_title'		=> 'Unlink Password',

	'c_pwd_linked_cannot_edit'	=> 'This is a linked password. Linked passwords are read only and cannot be edited.',
	'c_pwd_linked_cannot_del' 	=> 'This is a linked password. Linked passwords are read only and cannot be deleted, but they can be unlinked.',
	'c_pwd_linked_cannot_dup' 	=> 'This is a linked password. Linked passwords cannot be duplicated.',
	'c_pwd_linked_cannot_copy' 	=> 'This is a linked password. Linked passwords cannot be copied.',
	'c_pwd_linked_cannot_move' 	=> 'This is a linked password. Linked passwords cannot be moved.',
	'c_pwd_linked_cannot_link' 	=> 'This is a linked password. Linked passwords cannot be linked.',

	'c_pwd_move_pwd_archived' 	=> 'This password cannot be moved because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_link_pwd_archived' => 'You cannot link this password to another [PRJ] because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',

	'v_pwd_sec_linked_notes'	=> 'Linked passwords are read only, so even if a user has edit/manage permission on the password, they cannot be edited.',
	'vpwd_sec_help_manage_linked' => 'Note that linked passwords cannot be edited as they are read only.',

	'c_pwd_unlink_pwd'			=> 'Unlink Password',
	'vpwd_unlink_pwd_conf1'		=> 'Unlink this password?',
	'c_pwd_unlink_pwd_locked'	=> 'This password is locked. To unlink it you need to unlock it.',
	'c_pwd_unlink_pwd_archived'	=> 'This password cannot be unlinked because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unlink_pwd_perm'		=> 'You do not have the required permission to unlink this password (you need Manage permission).',
	'c_pwd_notlinked_cannot_unlink' => 'This is a not a linked password, so it cannot be unlinked.',
	'c_pwd_unlink_pwd_error'	=> 'Error: the password has <strong>NOT</strong> been unlinked due to database errors.',

	'vpwd_pwd_unlinked'			=> 'The password has been unlinked.',
	'c_pwd_link_pwd_not_enabled' => 'Linked passwords creation is not enabled',

	// v10
	'vpwd_archive'				=> 'Archive',
	'vpwd_archive_title'		=> 'Archive this Password',
	'vpwd_archived'				=> 'Archived',

	'c_pwd_pwdarchived_edit'	=> 'This password cannot be edited because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_sec_pwdarchived'=> 'Password security cannot be changed for this password because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_locking_pwdarchived' => 'Password locking cannot be changed for this password because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_delete_pwd_pwdarchived'	=> 'This password cannot be deleted because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unlink_pwd_pwdarchived'	=> 'This password cannot be unlinked because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_move_pwd_pwdarchived' 	=> 'This password cannot be moved because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_link_pwd_pwdarchived' => 'You cannot link this password to another [PRJ] because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_cf_config_pwdarchived' 	=> 'The custom fields configuration for the password cannot be changed because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_ext_sharing_pwdarchived'=> 'External sharing for this password cannot be edited because it is <span class="label label-warning tpm-archived">Archived</span>.',

	'c_pwd_archive_pwd'			=> 'Archive Password',
	'c_pwd_archive_pwd_locked'	=> 'This password is locked. To archive it you need to unlock it.',
	'c_pwd_archive_pwd_pwdarchived'	=> 'This password cannot be archived because it is already <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_archive_pwd_archived'	=> 'This password cannot be archived because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_archive_pwd_perm'		=> 'You do not have the required permission to archive this password (you need Manage permission).',

	'vpwd_archive_pwd_conf1'		=> 'Archive this password?',
	'vpwd_unarchive_pwd_conf1'		=> 'Un-Archive this password?',
	'vpwd_archive_pwd_conf2'		=> 'An archived password cannot be changed.',

	'c_pwd_archive_pwd_error' 		=> 'Error: the password has <strong>NOT</strong> been archived due to database errors.',

	'vpwd_unarchive_title'			=> 'Un-Archive this password',
	'vpwd_unarchive'				=> 'Un-Archive',

	'c_pwd_unarchive_pwd'			=> 'Un-Archive Password',
	'c_pwd_unarchive_pwd_locked'	=> 'This password is locked. To un-archive it you need to unlock it.',
	'c_pwd_unarchive_pwd_perm'		=> 'You do not have the required permission to un-archive this password (you need Manage permission).',
	'c_pwd_unarchive_pwd_archived'	=> 'This password cannot be un-archived because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unarchive_pwd_not_archived' => 'This password cannot be un-archived because it is not <span class="label label-warning tpm-archived">Archived</span>.',

	'c_pwd_unarchive_pwd_error' 		=> 'Error: the password has <strong>NOT</strong> been un-archived due to database errors.',

	'v_security_configuration'		=> 'Security Configuration',
	'v_user_permissions'			=> 'User Permissions',
	'v_group_permissions'			=> 'Group Permissions',
	'v_show_users_with_permission'	=> 'Show users that have a permission',
	'v_show_all_users'				=> 'Show all users',
	'v_show_groups_with_permission'	=> 'Show groups that have a permission',
	'v_show_all_groups'				=> 'Show all groups',
	'vprj_project_permissions'		=> '[PRJ] Permissions',

	// Changed vprj_edit_sec_only_pm_adm
	'vprj_edit_sec_only_pm_adm'		=> 'currently only the [PRJ] manager and admin users have access to this [PRJ]',

	'v_set_perm_bulk_users'			=> 'Set Permission to Selected Users',
	'v_set_perm_bulk_groups'		=> 'Set Permission to Selected Groups',

	'vpwd_password_permissions'		=> 'Password Permissions',

	// v12
	'vfiles_info'					=> 'Info',
	'vpwd_secret_key'				=> 'Secret Key',
	'vpwd_get_otp_value'			=> 'Get value',

	// v15
	'm_pwd_trash_not_found'			=> 'Password not found',
	'm_pwd_trash_not_linked'		=> 'Linked passwords cannot be deleted',
	'm_pwd_trash_prj_not_found'		=> '[PRJ] not found',
	'm_pwd_trash_error_unlink'		=> 'Error unlinking password',
	'c_pwd_trash_pwd_error'			=> 'Error moving the password to trash: ',
	'm_pwd_trash_error_transaction'	=> 'Error in the transaction',
	'vpwd_pwd_trash'				=> 'The password has been moved to the trash bin.',
	'vpwd_trash_pwd_conf1'			=> 'Move this password to the trash bin?',

	'vprj_tab_trash_bin'			=> 'Trash Bin',
	'vprj_trash_no_entries'			=> 'The trash bin of this [PRJ] is empty',
	'vtrash_list_sort_deleted'		=> 'Click to sort by Deleted Date',
	'vtrash_list_deleted'			=> 'Deleted On',
	'vtrash_deleted_by'				=> 'Deleted By',
	'vtrash_by'						=> 'By',
	'vtrash_pwd_not_shown'			=> 'not shown in the trash bin',
	'vtrash_pwd_list_basic_data'	=> 'Basic Data',
	'vtrash_actions'				=> 'Actions',
	'vtrash_restore'				=> 'Restore',
	'vtrash_delete_permanently'		=> 'Permanently Delete',
	'v_trash_prj_title'				=> 'There are %d passwords in the trash bin of this [PRJ]:', // %d gets replaced by the number of passwords
	'v_trash_prj_title_sing'		=> 'There is 1 password in the trash bin of this [PRJ]:',
	'vtrash_empty_project_trash_bin' => 'Empty the trash bin of this [PRJ]',
	'c_pwd_delperm_pwd'				=> 'Permanently Delete Password',
	'c_pwd_not_found_trash_delperm'	=> 'This password is not in the trash bin or you do not have permissions to permanently delete it.',
	'c_pwd_not_found_trash_restore'	=> 'This password is not in the trash bin or you do not have permissions to restore it.',
	'vpwd_delperm_conf1'			=> 'Permanently delete this password?',
	'c_pwd_delperm_pwd_error'		=> 'Error deleting the password permanently:',
	'c_pwd_delperm_ok'				=> 'The password has been permanently deleted.',
	'm_pwd_trash_not_found_in_trash' => 'Password not found in the trash bin',
	'c_pwd_restore_pwd'				=> 'Restore Password',
	'vpwd_restore_conf'				=> 'Restore this password?',
	'c_pwd_restore_pwd_error'		=> 'Error restoring the password:',
	'c_pwd_restore_ok'				=> 'The password has been restored.',
	'c_pwd_cannot_restore_same_name' => 'The password cannot be restored because there is another password in the [PRJ] with the same name.',
	'c_prj_empty_trash_bin'			=> 'Empty trash bin of [PRJ]',
	'c_prj_empty_trash_bin_perm'	=> 'you do not have the required permission to empty the trash bin of this [PRJ] (you need manage permission).',
	'c_pwd_cannot_restore_archived'	=> 'The password cannot be restored because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_prj_empty_trash_bin_empty'	=> 'the trash bin of this [PRJ] is already empty.',
	'vprj_empty_trash_bin_project'	=> 'empty the trash bin of this [PRJ]?',
	'vprj_empty_trash_bin_project_note' => 'Warning: this will permanently delete all of the passwords in the trash bin of this [PRJ]. This action cannot be un-done.',
	'vpwd_trash_pwd_note_linked'	=> '<strong>Note</strong>: this password has linked passwords, which will be unlinked if the password is moved to the trash bin',

	'm_prj_trash_not_leaf'			=> 'The [PRJ] is not a leaf [PRJ], it cannot be deleted',
	'vprj_del_has_pwd_not_linked'	=> 'this [PRJ] has the following number of passwords (not linked)',
	'vprj_del_has_pwd_linked'		=> 'this [PRJ] has the following number of linked passwords',
	'vprj_trash_confirm_pwds'		=> 'Move this [PRJ] and its passwords to the trash bin?',
	'vprj_trash_confirm_no_pwds'	=> 'Move this [PRJ] to the trash bin?', 
	'vprj_trash_note_linked'		=> '<strong>Note</strong>: linked passwords will be unlinked if the [PRJ] is moved to the trash bin',

	'c_prj_delete_error'			=> 'Error deleting [PRJ]',

	'c_tree_trash_bin'				=> 'Trash Bin',

	'vtrash_list_empty'				=> 'The Trash Bin is empty',
	'vtrash_title_admin'			=> 'Trash Bin',
	'vtrash_title_non_admin'		=> 'Your Trash Bin',
	'vtrash_note_admin'				=> 'All the passwords and [PRJS] in the trash bin',
	'vtrash_note_non_admin'			=> 'The passwords and [PRJS] you have moved to the trash bin',

	'v_in_trash'					=> 'In the trash bin',

	'vtrash_list_sort_type'			=> 'Click to sort by Type',
	'vtrash_type'					=> 'Type',
	'vtrash_list_sort_name'			=> 'Click to sort by Name',
	'vtrash_name'					=> 'Name',
	'vtrash_prj_parent'				=> '[PRJ] or Parent',
	'vtrash_list_sort_pp'			=> 'Click to sort by [CAP_PRJ] or Parent',
	'vtrash_list_sort_user'			=> 'Click to sort by the User who deleted the element',


	'v_trash_element_pwd'			=> 'Password',
	'v_trash_element_prj'			=> '[PRJ]',

	'v_deleted'						=> '(deleted)',
	
	'c_trash_delperm'				=> 'Permanently Delete',
	'c_trash_not_found_delperm' 	=> 'This element is not in the trash bin or you do not have permissions to permanently delete it.',

	'm_prj_trash_not_found_in_trash' => '[PRJ] not found in the trash bin',

	'c_trash_delperm_prj'			=> 'Permanently Delete [CAP_PRJ]',
	'c_trash_not_found_trash_delperm_prj' => 'This [PRJ] is not in the trash bin or you do not have permissions to permanently delete it.',

	'vtrash_delperm_conf1_prj'		=> 'Permanently delete this [PRJ] and all of its passwords?',

	'c_trash_delperm_prj_ok'		=> 'The [PRJ] has been permanently deleted.',
	'c_trash_delperm_prj_error'		=> 'Error deleting the [PRJ] permanently:',

	'c_trash_restore'				=> 'Restore',
	'c_trash_not_found_restore' 	=> 'This element is not in the trash bin or you do not have permissions to restore it.',

	'c_trash_restore_prj'			=> 'Restore [PRJ]',
	'c_trash_not_found_trash_restore_prj' => 'This [PRJ] is not in the trash bin or you do not have permissions to restore it.',

	'vtrash_restore_conf_prj'		=> 'Restore this [PRJ] and all of its passwords?',

	'c_trash_restore_pwd_archived' => 'The [PRJ] where you are trying to restore the password to is <span class="label label-warning tpm-archived">Archived</span>. Un-archive it to be able to restore the password.',

	'c_trash_cannot_restore_pwd_permission' => 'You cannot restore this password to the selected [PRJ] because you cannot create passwords in it, you do not have the required permission.',

	'c_trash_restore_pwd_select_prj1' => 'The [PRJ] of this password was deleted or is in the trash bin, select a [PRJ] to restore this password to',
	'c_trash_restore_pwd_select_prj2' => '[PRJS] where you cannot restore the password to are grayed',
	'c_trash_restore_pwd_select_prj3' => 'Select [PRJ]',

	'c_trash_restore_pwd_prj_needed' => 'The [PRJ] of this password was deleted or is in the trash bin, a new [PRJ] is needed to restore this password to. Refresh the trash bin and try restoring again.',

	'm_prj_trash_not_found_in_trash' => '[PRJ] not found in the trash bin',

	'c_trash_restore_prj_select_prj1' => 'The parent of this [PRJ] was deleted or is in the trash bin, select a parent to restore this [PRJ] to',
	'c_trash_restore_prj_select_prj2' => 'parents where you cannot restore the [PRJ] to are grayed',
	'c_trash_restore_prj_select_prj3' => 'Select Parent',

	'c_prj_restore_cannot'			=> 'You cannot restore [PRJS] because you cannot create [PRJS] (you do not have the appropriate role).',

	'c_trash_restore_prj_parent_needed' => 'The parent of this [PRJ] was deleted or is in the trash bin, a new parent is needed to restore this [PRJ] to. Refresh the trash bin and try restoring again.',

	'c_trash_restore_prj_no_root'	=> 'You cannot restore [PRJS] in root.',

	'c_trash_cannot_restore_prj_same_name' => 'The [PRJ] cannot be restored because there is another [PRJ] in the same level with the same name.',

	'c_trash_restore_prj_ok'		=> 'The [PRJ] has been restored.',
	'c_trash_restore_prj_error'		=> 'Error restoring the [PRJ]:',

	'm_trash_empty_error_deleting_prj' => 'Error deleting [PRJ] id',
	'm_trash_empty_error_deleting_pwd' => 'Error deleting password id',

	'v_trash_empty_trash_bin'		=> 'Empty the Trash Bin',
	'c_trash_only_admins_can_empty'	=> 'Only users with Admin role can empty the trash bin.',
	'v_trash_empty_trash_bin_conf'	=> 'Empty the trash bin?',
	'c_trash_already_empty'			=> 'The trash bin is already empty.',
	'v_trash_num_pwds'				=> 'Number of passwords in the trash bin',
	'v_trash_num_prjs'				=> 'Number of [PRJS] in the trash bin',


	// v18
	'vpwd_edit_access_note'			=> 'You can enter more than one URL, separate each one with a comma.',

	// v19
	'vbulk_manager'					=> 'Set Manager',
	'vbulk_password_selected'		=> 'password selected',
	'vbulk_passwords_selected'		=> 'passwords selected',

	'v_bulk_archive_pwds'			=> 'Bulk Archive Passwords',
	'v_bulk_actions_prj_no_perm'	=> 'You do not have the required permissions to execute bulk actions on this [PRJ] (must be a manager).',
	'v_bulk_actions_prj_archived'	=> 'This [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',

	'v_bulk_num_passwords_selected'	=> 'Number of passwords selected:',

	'v_bulk_archive_pwds_confirm'	=> 'Archive the selected passwords?',

	'm_bulk_action_no_pwds'			=> 'There are no passwords to execute the bulk action.',

	'm_bulk_pwd_not_found_desc'		=> 'Does not exist or you cannot access it',
	'm_bulk_pwd_not_in_prj'			=> 'Not in the [PRJ]',
	'm_bulk_pwd_archived_already'	=> 'Already archived',
	'm_bulk_pwd_archived'			=> 'Archived',
	'm_bulk_pwd_locked'				=> 'Locked',
	'm_bulk_pwd_permissions'		=> 'Not enough permissions, you need to be manager',
	'm_bulk_pwd_error_archiving'	=> 'Error archiving',

	'm_bulk_num_pwd_archived'		=> 'Number of passwords archived',
	'm_bulk_pwds_not_archived'		=> 'The following passwords haven\'t been archived',

	'c_bulk_action_error'			=> 'Bulk action error',

	'v_bulk_unarchive_pwds'			=> 'Bulk Un-Archive Passwords',

	'v_bulk_unarchive_pwds_confirm'	=> 'Un-Archive the selected passwords?',

	'm_bulk_pwd_unarchived'			=> 'Already un-archived',
	'm_bulk_pwd_error_unarchiving'	=> 'Error un-archiving',

	'm_bulk_num_pwd_unarchived'		=> 'Number of passwords un-archived',
	'm_bulk_pwds_not_unarchived'	=> 'The following passwords haven\'t been un-archived',

	'v_bulk_delete_pwds'			=> 'Bulk Delete Passwords',

	'v_bulk_delete_pwds_confirm'	=> 'Move the selected passwords to the trash bin?',
	'v_bulk_delete_pwds_note'		=> '<strong>Note</strong>: if a selected password has linked passwords, they will be unlinked.',

	'm_bulk_pwd_linked'				=> 'Linked (must be unlinked, not deleted)',

	'm_bulk_pwd_error_deleting'		=> 'Error deleting',

	'm_bulk_num_pwd_deleted'		=> 'Number of passwords deleted',
	'm_bulk_pwds_not_deleted'		=> 'The following passwords haven\'t been deleted',

	
	'v_bulk_unlink_pwds'			=> 'Bulk Unlink Passwords',

	'v_bulk_unlink_pwds_confirm'	=> 'Unlink the selected passwords?',
	
	'm_bulk_pwd_not_linked'			=> 'Not linked',

	'm_bulk_pwd_error_unlinking'	=> 'Error unlinking',

	'm_bulk_num_pwd_unlinked'		=> 'Number of passwords unlinked',
	'm_bulk_pwds_not_unlinked'		=> 'The following passwords haven\'t been unlinked',

	'c_bulk_prj_copy_pwds_select_prj' => 'Select the [PRJ] to bulk copy the passwords to',
	'c_bulk_prj_copy_pwds'			=> 'Bulk Copy Passwords',

	'c_bulk_prj_select_prj'			=> 'Select [PRJ]',

	'v_bulk_destination_project'	=> 'Destination [PRJ]',

	'v_bulk_copy_pwds_confirm'		=> 'Copy the selected passwords to the destination [PRJ]?',

	'm_bulk_pwd_linked_copy'		=> 'Linked (cannot be copied)',

	'm_bulk_pwd_copy_exists'		=> 'Already exists in the destination [PRJ]',

	'm_bulk_num_pwd_copied'			=> 'Number of passwords copied',
	'm_bulk_pwds_not_copied'		=> 'The following passwords haven\'t been copied',

	'm_bulk_pwd_error_copying'		=> 'Error copying',
	'm_bulk_pwd_copied_with_error'	=> 'Copied with error',

	'v_bulk_destination_open'		=> '<strong>Note</strong>: you\'ll be taken to the destination [PRJ] after executing the bulk action',

	'c_bulk_prj_move_pwds_select_prj' => 'Select the [PRJ] to bulk move the passwords to',
	'c_bulk_prj_move_pwds'			=> 'Bulk Move Passwords',

	'v_bulk_move_pwds_confirm'		=> 'Move the selected passwords to the destination [PRJ]?',

	'm_bulk_pwd_linked_move'		=> 'Linked (cannot be moved)',

	'm_bulk_pwd_error_moving'		=> 'Error moving',

	'm_bulk_num_pwd_moved'			=> 'Number of passwords moved',
	'm_bulk_pwds_not_moved'			=> 'The following passwords haven\'t been moved',

	'v_bulk_setmgr_pwds'			=> 'Bulk Set Manager of Passwords',

	'v_bulk_setmgr_pwds_confirm'	=> 'Set the manager of the selected passwords to the chosen user?',

	'c_bulk_setmgr_incorrect_mgr'	=> 'The selected user cannot be manager or doesn\'t exist.',

	'm_bulk_pwd_error_setmgr'		=> 'Error setting the manager',

	'm_bulk_num_pwd_setmgr'			=> 'Number of passwords in which the manager has been set',
	'm_bulk_pwds_not_setmgr'		=> 'It hasn\'t been possible to set the manager for the following passwords',

	'v_bulk_cfields_pwds'			=> 'Bulk Edit Custom Fields Configuration of Passwords',
	'v_bulk_use_configuration'		=> 'Use Configuration',

	'v_bulk_cfields_pwds_confirm'	=> 'Set the custom fields configuration of the selected passwords to the one above?',

	'm_bulk_cfields_incorrect'		=> 'The custom fields configuration is not correct.',

	'm_bulk_pwd_error_cfields'		=> 'Error editing custom fields',

	'm_bulk_num_pwd_cfields'		=> 'Number of passwords in which the custom fields configuration has been edited',
	'm_bulk_pwds_not_cfields'		=> 'It hasn\'t been possible to edit the custom fields configuration for the following passwords',

	'm_bulk_pwd_linked_cfields'		=> 'Linked (cannot edit custom fields configuration)',

	'v_bulk_action_results'			=> 'Bulk Action Results',
	'v_bulk_action_confirm'			=> 'Bulk Action Confirm',


);