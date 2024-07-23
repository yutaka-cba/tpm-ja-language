<?php
$lang = array (
	// controllers/users
	'c_users_title'					=> 'Users',	// plural
	'c_users_user_title'			=> 'User',	// singular
	'c_users_num_active'			=> 'Number of <strong>active</strong> users',
	'c_users_total_create'			=> 'Total number of active users allowed by your license(s)',
	'c_users_left'					=> 'Number of users left',
	'c_users_cannot_more'			=> 'You cannot create more users with your current license(s).',
	'c_users_need_more'				=> 'If you need more users you should click the following link to purchase additional licenses from the Team Password Manager website:',
	'c_users_more_than_allowed'	 	=> 'You have more active users that the number allowed by your licenses(s). Until this situation is corrected you cannot use Team Password Manager.',
	'c_users_two_options'			=> 'You have 2 options',
	'c_users_del_dea_num' 			=> 'Delete or deactivate the following number of users',
	'c_users_increase' 				=> 'Increase the number of maximum active users with a new license. Click the following link to purchase additional licenses from the Team Password Manager website:',
	'c_users_view_user'				=> 'View User',
	'c_users_user_not_exists'		=> 'The selected user does not exist.',
	'c_users_renew_api_keys'		=> 'Renew API Keys',
	'c_users_api_keys_renewed'		=> 'The user\'s HMAC API Keys have been renewed. From now the user must use these new keys to authenticate API calls using HMAC.',
	'c_users_return_to_user'		=> 'Return to user',
	'c_users_error_renewing_api_keys' => 'There has been an error renewing the API Keys',
	'c_users_error_renewing_api_csrf' => 'There has been a CSRF error renewing the API Keys',

	'field_username' 				=> 'Username',
	'field_email'					=> 'E-mail Address',
	'field_ldap_server'				=> 'LDAP/AD server',
	'field_login_dn'				=> 'Login DN',
	'field_name'					=> 'Name',
	'field_role'					=> 'Role',
	'field_language'				=> 'Language',
	'field_pwd'						=> 'Password',
	'field_repeat_pwd'				=> 'Repeat Password',
	'field_new_pwd'					=> 'New password',
	'field_repeat_new_pwd'			=> 'Repeat new password',
	'field_cur_pwd'					=> 'Current password',

	'c_users_ildap_dn_username'		=> 'Login DN / Username',
	'c_users_ildap_anon'			=> 'Anonymous',
	'c_users_ildap_base_dn'			=> 'Base DN',
	'c_users_ildap_filter'			=> 'Filter',
	'c_users_ildap_name_1'			=> 'Name 1',
	'c_users_ildap_name_2'			=> 'Name 2',
	'c_users_ildap_size_limit' 		=> 'Size limit',

	'val_username_exists' 			=> 'The username already exists.',
	'val_username_invalid_chars'	=> 'The username contains invalid characters.',
	'val_email_exists' 				=> 'The e-mail address already exists.',
	'val_it_users_cannot_mg_admins' => 'IT users cannot manage (add, edit, change password, deactivate, delete, ...) Admin users',
	'val_it_users_cannot_mg_admins_title' => 'IT users cannot manage Admin users',

	'c_users_edit_user'				=> 'Edit User',
	'c_users_edit_user_error'		=> 'There has been an error saving the user information.',
	'c_users_edit_user_csrf_error'	=> 'There has been a CSRF error saving the user information.',

	'c_users_new_user'				=> 'New User',
	'c_users_cannot_add_user'		=> 'You cannot add new users.',
	'c_users_max_users_reached' 	=> 'The maximum number of active users has been reached',
	'c_users_click_to_purchase'		=> 'Click here to purchase more users',
	'c_users_add_user_error' 		=> 'There has been an error adding the user',
	'c_users_add_user_csrf_error'	=> 'There has been a CSRF error adding the user.',

	'c_users_new_user_all_options' 	=> 'New User - All the Options',

	'c_users_new_ldap_user'			=> 'New LDAP/AD User',

	'c_users_cpwd'					=> 'Change user password',
	'c_users_cpwd_cannot_ldap'		=> 'You cannot change the password of an LDAP/AD user.',
	'c_users_cpwd_ok'				=> 'Password changed correctly.',
	'c_users_cpwd_error'			=> 'There has been an error changing the password.',
	'c_users_cpwd_csrf_error'		=> 'There has been a CSRF error changing the password.',

	'c_users_clang'					=> 'Change Language',
	'c_users_clang_error'			=> 'There has been an error changing the language.',
	'c_users_clang_csrf_error'		=> 'There has been a CSRF error changing the language.',
	'c_users_default_language'		=> 'Default language',

	'c_users_del'					=> 'Delete User',
	'c_users_del_not_yourself' 		=> '<strong>You cannot delete yourself</strong>. Please choose another user.',
	'c_users_del_ok'				=> 'User deleted.',

	'c_users_del_user_from_group'	=> 'Delete User from Group',
	'c_users_del_user_from_group_cannot' => 'You cannot delete this group for this user.',
	'c_users_del_user_from_group_no_group' => 'The selected group does not exist.',
	'c_users_del_user_from_group_no_ug' => 'The selected user or group does not exist.',
	'c_users_del_user_from_group_ok' => 'The user has been deleted from the group',
	'c_users_del_user_from_group_error' => 'There has been an error deleting the user from the group',

	'c_users_add_user_to_group'		=> 'Add User to Group',
	'c_users_add_user_to_group_db_error' => 'It has not been possible to add the user to the group due to a database error.',
	'c_users_add_user_to_group_cannot' => 'You cannot add the user to the group.',
	'c_users_add_user_to_group_csrf_error' => 'There has been a CSRF error.',
	'c_users_add_user_to_group_no_groups' => 'There are no groups to add the user to.',
 
 	'c_users_set_api_only'			=> 'Set API Only User',
 	'c_users_set_api_only_already_api' => 'This user is already an API only user',
 	'c_users_set_api_only_not_yourself' => '<strong>You cannot set yourself as an API only user</strong>. Please choose another user.',

 	'c_users_unset_api_only'		=> 'Unset API Only User',
 	'c_users_unset_api_only_already' => 'This user is already a not API only user',
 	'c_users_unset_api_only_not_yourself' => '<strong>You cannot unset yourself as an API only user</strong>. Please choose another user.',

 	'c_users_activate'				=> 'Activate User',
 	'c_users_activate_not_yourself' => '<strong>You cannot activate yourself</strong>. Please choose another user.',
 	'c_users_activate_cannot_more'	=> 'You cannot activate more users.',

 	'c_users_deactivate'			=> 'Deactivate User',
 	'c_users_deactivate_not_yourself' => '<strong>You cannot deactivate yourself</strong>. Please choose another user.',

 	'c_users_disable_2fa'			=> 'Disable Two-Factor Authentication',
 	'c_users_disable_2fa_disabled_all' => 'Two-factor authentication is already disabled for all users.',
 	'c_users_disable_2fa_not_enabled' => "This user doesn't have two-factor authentication enabled.",
 	'c_users_disable_2fa_ok'		=> 'Two-factor authentication has been disabled for this user.',

 	'c_users_change_john'			=> 'Change John Boss',
 	'c_users_change_john_impossible' => 'In this demo, user John Boss cannot be edited, deleted, deactivated or have his password changed.',

 	'c_users_cnv_normal'			=> 'Convert to Normal (not LDAP) User',
 	'c_users_cnv_normal_already'	=> 'The user is already a normal (not LDAP) user',

 	'c_users_cnv_ldap' 				=> 'Convert to LDAP User',
 	'c_users_cnv_ldap_already'		=> 'The user is already an LDAP user',

 	'c_users_import_step_1'			=> 'Import LDAP Users. Step 1: data for getting the users',
 	'c_users_import_step_2_import'	=> 'Import LDAP Users. Step 2: select the users to import',
 	'c_users_import_step_2_debug'	=> 'Import LDAP Users. Step 2: debug fetched data',
 	'c_users_import_ldap_title'		=> 'Import LDAP Users',
 	'c_users_imported_ldap_title'	=> 'Imported LDAP Users',
 	'c_users_import_ldap_error_getting' => 'There has been an error getting the import data',
 	'c_users_import_ldap_csrf_error' => 'There has been a CSRF error. Please try again.',

 	// views/users

 	'tab_users'						=> 'Users',
 	'tab_groups'					=> 'Groups',

 	'v_users_btn_new_user'			=> 'New User',
 	'v_users_btn_new_user_options'	=> 'New User Options',
 	'v_users_btn_search_users'		=> 'Search Users',

 	'v_users_btn_new_user_desc'		=> 'Create a normal user.',
 	'v_users_btn_new_ldap_user'		=> 'New LDAP User',
 	// Deleted T#484 'v_users_btn_new_ldap_user_desc'=> 'Create a LDAP/AD user by manually entering the user DN.',
 	'v_users_btn_import_ldap_users'	=> 'Import LDAP Users',
 	// Deleted T#484 'v_users_btn_import_ldap_users_desc' => 'Create one or more LDAP/AD users by importing them from the LDAP/AD server.',

 	'v_users_num_groups'			=> 'N&ordm; Groups',
 	'v_users_state'					=> 'State',

 	// Responsive headers
 	'v_users_lhs_name'				=> 'Name',
 	'v_users_lhs_username'			=> 'Username',
 	'v_users_lhs_email'				=> 'E-mail',
 	'v_users_lhs_role'				=> 'Role',
 	'v_users_lhs_state'				=> 'State',

 	'v_users_sort_by_name'			=> 'Sort by Name',
 	'v_users_sort_by_username'		=> 'Sort by Username',
 	'v_users_sort_by_email'			=> 'Sort by E-mail',
 	'v_users_sort_by_role'			=> 'Sort by Role',
 	'v_users_sort_by_state'			=> 'Sort by State',

 	// Labels
 	'lbl_inactive'					=> 'Inactive',
 	'lbl_active'					=> 'Active',
 	'lbl_2fa'						=> '2FA',
 	'lbl_api_only'					=> 'API-Only',
 	'lbl_ldap'						=> 'LDAP',

 	'v_users_list_invalid_hash'		=> 'Attention: this user has an invalid hash value and will not be able to sign in. This is most probably caused by someone tampering the database. To correct this situation you need to edit the user.',
 	'v_users_uinfo_invalid_hash'	=> 'Attention: your user has an invalid hash value and will not be able to sign in the next time. This is most probably caused by someone tampering the database. Please inform an Admin user.',
 	'v_users_uinfo_invalid_hash_edit' => 'Attention: this user has an invalid hash value and will not be able to sign in. This is most probably caused by someone tampering the database. To correct this situation save the information, paying special attention to the <strong>username</strong> and <strong>role</strong> fields.',

 	'v_users_list_invalid_hash_edit' => 'Edit the user',

 	'v_users_sidebar_all'			=> 'All Users',
 	'v_users_sidebar_api_only'		=> 'API Only Users',
 	'v_users_sidebar_search_results' => 'Search Results',
 	'v_users_sidebar_filter_state'	=> 'Filter by State',
 	'v_users_sidebar_filter_role'	=> 'Filter by Role',
 	'v_users_sidebar_filter_ldap_server' => 'Filter by LDAP/AD Server',
 	'v_users_sidebar_filter_group'	=> 'Filter by Group',
 	'v_users_sidebar_server'		=> 'Server',

 	'v_users_no_users_filter'		=> 'There are no users with this filter or search.',

 	'v_users_roles_desc_admin'		=> 'can do anything',
 	'v_users_roles_desc_pm'			=> 'like normal users and also create/delete [PRJS]',
 	'v_users_roles_desc_normal'		=> 'work with passwords and [PRJS], but not create/delete [PRJS]',
 	'v_users_roles_desc_ro'			=> 'only read passwords on assigned [PRJS]',
 	'v_users_roles_desc_it'			=> 'like a [PRJ] manager plus access to Users/Groups, Log and Settings',

 	'v_users_cannot_create_new_users' => 'You cannot create new users',

 	'v_users_return_list'			=> 'Return to users list',
 	'v_users_return_my_acct'		=> 'Return to my account',

 	'v_users_del_user_from_group'	=> 'Delete the user from the group',
 	'v_users_add_user_to_group'		=> 'Add the User to a Group',

 	'v_users_about_roles'			=> 'About roles',

 	'v_users_ldap_disabled'			=> 'Note: LDAP/AD authentication is disabled',

 	'v_users_btn_edit'				=> 'Edit',
 	'v_users_btn_cpwd'				=> 'Change Password',
 	'v_users_btn_cnv_normal'		=> 'Convert to Normal (not LDAP) User',
 	'v_users_btn_cnv_ldap'			=> 'Convert to LDAP User',
 	'v_users_btn_unset_api_only'	=> 'Unset as API only User',
 	'v_users_btn_set_api_only'		=> 'Set as API only User',
 	'v_users_btn_deactivate'		=> 'Deactivate',
 	'v_users_btn_activate'			=> 'Activate',
 	'v_users_btn_del'				=> 'Delete',
 	'v_users_btn_disable_2fa'		=> 'Disable Two-Factor Authentication',
 	'v_users_btn_enable_2fa'		=> 'Enable Two-Factor Authentication',
 	'v_users_btn_enable_2fa_mobile'	=> 'Enable 2FA',

 	'v_users_tab_data'				=> 'Data',
 	'v_users_tab_2fa'				=> 'Two-Factor Authentication',
 	'v_users_tab_2fa_mobile'		=> '2FA',
 	'v_users_tab_log'				=> 'Log',
 	'v_users_tab_api_keys'			=> 'API Keys',
 	'v_users_tab_passwords'			=> 'Passwords',

 	'v_users_last_signed_in'		=> 'Last Signed in',
 	'v_users_last_api_request'		=> 'Last API request',
 	'v_users_created_on'			=> 'Created on',
 	'v_users_by'					=> 'By',
 	'v_users_updated_on'			=> 'Updated on',

 	'v_users_access_prjs'			=> 'this user has access to the following [PRJS]',
 	'v_users_access_no_prj'			=> "this user doesn't have access to any [PRJ].",
 	'v_users_access_all_prj'		=> 'this user is an <strong>Admin</strong> user and has access to all of the [PRJS].',
 	'v_users_access_prjs_error' 	=> 'here has been an error fetching the list of [PRJS] that this user has access to.',

 	'v_users_access_pwds'			=> 'This user has access to the following passwords',
 	'v_users_access_no_pwd'			=> "This user doesn't have access to any password.",
 	'v_users_access_all_pwd'		=> 'This user is an <strong>Admin</strong> user and has access to all the passwords.',
 	'v_users_access_pwd_error'		=> 'There has been an error fetching the list of passwords that this user has access to.',

 	'v_users_api_keys_not_api_only'	=> 'This user is not an API only user. The HMAC API Keys can be found on the user account.',
 	'v_users_hash_hmac_not_installed' => 'Note: the hash_hmac() function required for HMAC Authentication is not installed, you will not be able to authenticate using HMAC',
 	'v_users_sha256_not_installed'	=> 'Note: the sha256 hash algorithm required for HMAC Authentication is not installed, you will not be able to authenticate using HMAC',
 	'v_users_api_keys_lbl'			=> 'HMAC Authentication API Keys',
 	'v_users_public_key'			=> 'Public Key',
 	'v_users_private_key'			=> 'Private Key',
 	'v_users_renew_api_keys'		=> 'Renew API Keys',

 	'v_users_renew_api_keys_not_api_only' => 'This user is not an API only user. To renew the HMAC API Keys for the user, the user should sign in and check the "API Keys" tab in "My Account".',
 	'v_users_renew_api_keys_question' => 'Do you want to renew the HMAC API Keys?',
 	'v_users_renew_api_keys_warning1' => 'Warning: this action is permanent and cannot be un-done.',
 	'v_users_renew_api_keys_warning2' => 'Renewing the API Keys will prevent HMAC authentication from current applications.',

 	'v_users_no_log_entries'		=> 'There are no log entries for this user.',

 	'v_users_edit_enter_pwd'		=> 'Enter your Password',
 	'v_users_edit_sec_verif'		=> 'Security verification',

 	'v_users_dn_instructions'		=> 'Distinguished Name or Username of the user in the LDAP/AD server.',

 	'v_users_my_account'			=> 'My Account',
 	'v_users_my_settings'			=> 'My Settings',
 	'v_users_my_passwords'			=> 'My Passwords',

 	'v_users_activate_user_confirm'	=> 'Activate this user?',
 	'v_users_deactivate_user_confirm' => 'Deactivate this user?',
 	'v_users_deactivate_note'		=> 'An inactive user cannot sign in to Team Password Manager.',

 	'v_users_del_confirm'			=> 'Delete this user?',

 	'v_users_del_from_grp'			=> 'Delete from Group',
 	'v_users_delg_confirm'			=> 'Delete the user from the group?',

 	'v_users_add_to_group'			=> 'Add to Group',

 	'v_users_qr_code'				=> 'QR Code',
 	'v_users_cannot_qr'				=> 'The QR code cannot be generated because the PHP GD extension is not installed, but you can setup Google Authenticator with the Account Name and Secret Key below',
 	'v_users_ga_account_name'		=> 'Account Name',
 	'v_users_ga_secret_key'			=> 'Secret Key',

 	'v_users_btn_renew_secret_key'	=> 'Renew Secret Key',

 	'v_users_api_only_confirm'		=> 'Set this user as an API only user?',
 	'v_users_api_only_desc'			=> 'An API only user cannot sign in to Team Password Manager, can only access Team Password Manager via the API.',
 	'v_users_api_disabled_note'		=> 'Note: API access is disabled',
 	'v_users_unset_api_only_confirm' => 'Unset this user as an API only user?',
 	'v_users_unset_api_only_desc'	=> 'The user will be able to sign in to Team Password Manager, as well as access Team Password Manager via the API.',

 	'v_users_cnv_normal_desc_1'		=> 'This action will delete the <strong>Login DN</strong> of the user.',
 	'v_users_cnv_normal_desc_2'		=> 'The user will then be able to sign in using the password stored in the Team Password Manager database.',
 	'v_users_cnv_normal_desc_3'		=> '<strong>* Important: </strong>you should set the password for this user using the "Change password" button after converting the user to a normal user.',
 	'v_users_cnv_normal_confirm'	=> 'Convert this user to a normal (not LDAP) user?',

 	'v_users_cnv_ldap_enter'		=> 'To be able for this user to use LDAP authentication you should enter the following data',

 	'v_users_pwd_8_chars'			=> '8 characters minimum',

 	'v_users_disable_2fa_confirm'	=> 'Disable Two-Factor Authentication for this user?',
 	'v_users_disable_2fa_confirm_self' => 'Disable Two-Factor Authentication?',
 	'v_users_disable_2fa_confirm_self_desc' => 'You will be able to sign in but without two-factor authentication.',

 	'v_users_ga_generated_token'	=> 'Generated Token',
 	'v_users_ga_generated_token_desc' => 'Generated by Google Authenticator every 30 seconds',
 	'v_users_2fa_required'			=> 'It is required that you enable two-factor authentication for your user before you continue. If you need assistance please contact the administrator.',
 	'v_users_enable_2fa_instr_1'	=> 'Enter your current password for verification.',
 	'v_users_enable_2fa_instr_2'	=> 'On your smartphone, open <strong>Google Authenticator</strong>, tap the <strong>plus (+) button</strong> to Add a Token, and select <strong>Time Based</strong>.',
 	'v_users_enable_2fa_instr_3'	=> 'Scan the <strong>QR Code</strong> with your Google Authenticator device. If your device does not have a camera you can enter the <strong>Account Name</strong> and <strong>Secret Key</strong> manually.',
 	'v_users_enable_2fa_instr_4'	=> 'Enter the 6-digit Token that Google Authenticator generates every 30 seconds.',
 	'v_users_enable_2fa_instr_5'	=> 'Click on "Enable two-factor authentication".',

 	'v_users_new_will_be_active'	=> 'Will be <span class="label label-success" style="font-weight:normal">Active</span>',

 	'v_users_ildap_search_filter'	=> 'Search Filter',
 	'v_users_ildap_attr_username'	=> 'Attribute: Username',
 	'v_users_ildap_attr_email'		=> 'Attribute: E-mail',
 	'v_users_ildap_attr_name_1'		=> 'Attribute: Name 1',
 	'v_users_ildap_attr_name_2'		=> 'Attribute: Name 2',
 	'v_users_ildap_debug_mode'		=> 'Debug Mode',
 	'v_users_ildap_save_config'		=> 'Save Configuration',

 	'v_users_ilu_data_instr'		=> 'Enter the following data to search users in your LDAP/AD server',
 	'v_users_ildap_attr_username_help' => "If a username can't be assigned, the e-mail will be used",
 	'v_users_ildap_attr_name_2_help' => 'The name of the imported user will be: Name 1 + Name 2',
 	'v_users_ildap_size_limit_help' => 'Number of entries to fetch from the LDAP server. Note that this limit cannot override server-side preset limit.',
 	'v_users_ildap_role_help'		=> 'Role to be assigned to the imported users',
 	'v_users_ildap_debug_mode_help' => 'Will not import users, just output debug data to the screen',
 	'v_users_ildap_save_config_help' => 'Will save the data from this form to the database (encrypted)',
 	'v_users_ildap_goto_step_2'		=> 'Step 2: get users from the LDAP server',

 	'v_users_ldap_entries_found'	=> 'Number of entries found',
 	'v_users_ldap_entries_can_be_imported' => 'Number of entries that can be imported',

 	'v_users_ldap_import_error_lbl'	=> 'There has been the following error',
 	'v_users_ldap_import_cannot'	=> 'Users cannot be imported.',
 	'v_users_ldap_change_settings'	=> 'Change the settings and try again',

 	'v_users_ldap_no_entries_found'	=> 'There are no entries with the provided data. You might want to change the "Search filter" or "Base DN".',
 	'v_users_ldap_no_users_found'	=> 'There are no users with the provided data. You might want to change the "Search filter" or "Base DN".',

 	'v_users_ldap_users_imported'	=> 'Number of users imported',
 	'v_users_ldap_no_users_created'	=> 'No users have been created.',
 	'v_users_ldap_no_users_selected'=> 'No users were selected.',
 	'v_users_import_more_ldap'		=> 'Import more LDAP Users',	

 	'v_users_ldap_using_data'		=> 'Using the following data',
 	'v_users_ldap_change_ret_1'		=> 'change - return to step 1',
 	'v_users_ildap_anon_conn'		=> 'Anonymous connection',
 	'v_users_ldap_attributes'		=> 'Attributes',
 	'v_users_ldap_entry_is_user'	=> 'This entry is a user and can be imported',
 	'v_users_ldap_entry_cannot_be_imported'	=> 'This entry cannot be imported',
 	'v_users_ldap_no_dn_email'		=> 'No DN or email for entry',
 	'v_users_ldap_dn'				=> 'DN',
 	'v_users_ldap_max_import'		=> 'Maximum number of users that can be imported',
 	'v_users_ldap_select'			=> 'Select',
 	'v_users_ldap_exists'			=> 'exists',
 	'v_users_ldap_import_selected'	=> 'Import selected users',
 	'v_users_ldap_import_num_users_found' => 'Number of users found',
 	'v_users_ldap_import_num_users_exist' => 'Number of users that already exist',
 	'v_users_ldap_import_select_users' => 'Select the users you wish to import',
 	'v_users_ldap_import_cannot_select' => 'You cannot select any user because all of them already exist in Team Password Manager.',

 	// controllers/user_info
 	'c_uinfo_edit_my_account'		=> 'Edit my account',
 	'c_uinfo_edit_my_account_error'	=> 'There has been an error saving the data.',
 	'c_uinfo_edit_my_account_csrf_error' => 'There has been a CSRF error saving the data.',

 	'c_uinfo_cpwd_cur_pwd_not_ok'	=> 'The Current Password is not correct.',
 	'c_uinfo_cpwd'					=> 'Change my password',
 	'c_uinfo_cpwd_cannot_ldap'		=> 'You cannot change your password because you are an LDAP/AD user.',
 	'c_uinfo_cpwd_ok'				=> 'Password changed correctly.',
 	'c_uinfo_cpwd_error'			=> 'There has been an error changing the password.',
 	'c_uinfo_cpwd_csrf_error'		=> 'There has been a CSRF error changing the password.',

 	'c_uinfo_clang'					=> 'Change my language',
 	'c_uinfo_clang_error'			=> 'There has been an error changing the language.',
 	'c_uinfo_clang_csrf_error'		=> 'There has been a CSRF error changing the language.',

 	'c_uinfo_2fa_disable_ok'		=> 'Two-factor authentication has been disabled.',
 	'c_uinfo_2fa_disable_error'		=> 'There has been an error disabling two-factor authentication.',
 	'c_uinfo_2fa_disable_csrf_error' => 'There has been a CSRF error disabling two-factor authentication.',
 	'c_uinfo_2fa_disable_already'	=> 'Two-factor authentication is already disabled.',

 	'c_uinfo_error_qr'				=> 'Error generating the QR code',
 	'c_uinfo_token_not_valid'		=> 'The Generated Token is not valid.',
 	'c_uinfo_key_not_valid'			=> 'The Secret Key is not valid.',
 	'c_uinfo_renew_2fa'				=> 'Renew Two-Factor Authentication',
 	'c_uinfo_2fa_is_disabled'		=> 'Two-factor authentication is disabled',
 	'c_uinfo_2fa_disabled_admin'	=> 'Two-factor authentication has been disabled by the administrator.',
 	'c_uinfo_e2fa_error_gen_key'	=> 'There has been an error generating the Secret Key.',
 	'c_uinfo_e2fa_ok'				=> 'Two-factor authentication has been enabled.',
 	'c_uinfo_e2fa_error'			=> 'There has been an error enabling two-factor authentication.',
 	'c_uinfo_e2fa_csfr_error'		=> 'There has been a CSFR error enabling two-factor authentication.',

 	'c_users_renew_api_keys_ok'		=> 'Your HMAC API Keys have been renewed. From now on you have to use these new keys to authenticate your API calls using HMAC.',

 	'm_usr_lang_not_set'			=> 'Not set, using the default language',
 	'm_user_lang_no_desc'			=> 'No description',

 	// v6
 	'tab_ldap_sync'					=> 'LDAP Sync',

 	'v_users_ildap_attr_email_help' => 'A user needs to have an e-mail address to be imported into Team Password Manager',

 	'c_users_del_ldap_group_from_user' => "You cannot delete this group from this user because it's an LDAP group and this is done from LDAP Sync.",

 	'c_users_system'				=> 'This user is used in processes where a user is not logged in. For example in externally executed processes used for automation, like LDAP sync.',
 	
 	// v7
 	'v_user_ccproot'				=> 'Can create [PRJS] in root',

 	'v_users_sort_by_lsi'			=> 'Sort by Last Signed in',
	'v_users_sort_by_lar'			=> 'Sort by Last API request',

	// v11
	'v_users_btn_new_saml_user'		=> 'New SAML User',
	'c_users_new_saml_user'			=> 'New SAML User',
	'v_users_saml_email'			=> 'The e-mail address identifies the user in the SAML Identity Provider',
	'lbl_saml'						=> 'SAML',
	'v_users_saml_disabled'			=> 'Note: SAML authentication is disabled',
	'v_users_btn_cnv_normal_saml'	=> 'Convert to Normal (not SAML) User',
	'v_users_btn_cnv_saml'			=> 'Convert to SAML User',
	'v_users_sidebar_saml'			=> 'SAML users',
	'c_users_cpwd_cannot_saml'		=> 'You cannot change the password of a SAML user.',
	'c_users_setao_cannot_saml'		=> 'A SAML user cannot be set as an API only user.',
	'c_users_cnv_normal_saml'		=> 'Convert to normal (not SAML) user',
	'c_users_cnv_normal_saml_not' 	=> 'The user is not a SAML user.',
	'v_users_cnv_normal_saml_confirm' => 'Convert this user to a normal (not SAML) user?',
	'v_users_cnv_normal_saml_desc'	=> 'This action will convert the user from SAML user to normal user.',
	'c_users_cnv_normal_not'		=> 'The user is not an LDAP user.',
	'c_users_cnv_ldap_cannot_saml'	=> 'You cannot convert a SAML user to an LDAP user.',
	'c_users_cnv_saml' 				=> 'Convert to SAML User',
	'c_users_cnv_saml_cannot_ldap'	=> 'You cannot convert an LDAP user to a SAML user.',
	'c_users_cnv_saml_already'		=> 'The user is already a SAML user.',
	'c_users_cnv_saml_cannot_ao'	=> 'You cannot convert an API Only user to a SAML user.',
	'v_users_cnv_saml_confirm'		=> 'Convert this user to a SAML user?',
	'v_users_cnv_saml_desc'			=> 'This action will convert the user from normal user to SAML user.',
	'v_users_cnv_saml_desc_2'		=> 'The user will authenticate with the Identity Provider using the email: ',
	'c_uinfo_cpwd_cannot_saml'		=> 'You cannot change your password because you are a SAML user.',
	'c_2fa_disabled'				=> 'Two-factor authentication is disabled.',
	'v_users_note_ldap_saml'		=> '<strong>Note</strong>: This user is provisioned as an LDAP user but authenticates using SAML',

	// v12
	'v_ad_lowercase'				=> '<strong>Note</strong>: if you are using <strong>Active Directory</strong>, put the attributes in <strong>lowercase</strong>. Eg: samaccountname instead of sAMAccountName',

	// v13
	'v_upr_same'					=> 'Cannot be a part of the username or email address',
	'v_upr_min_len'					=> '%d characters minimum', // %d gets replaced by a number
	'v_upr_contain' 				=> 'Must contain at least',
	'v_upr_uppercase'				=> 'one uppercase letter <code>A-Z</code>',
	'v_upr_lowercase'				=> 'one lowercase letter <code>a-z</code>',
	'v_upr_number' 					=> 'one number <code>0-9</code>',
	'v_upr_symbol' 					=> 'one symbol',
	'v_upr_space' 					=> 'one space (not leading or trailing)',
	'v_upr_label'					=> 'Password requirements',

	'v_upr_load_error'				=> 'There has been an error loading the password rules.',

	'v_cpwd_does_not_check_upr'		=> 'The Password does not meet the requirements.',

	'v_notes_help'					=> 'Internal notes',

	// v15
	'c_users_del_error'				=> 'Error deleting user',

);