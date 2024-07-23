<?php
$lang = array (

 	// v6
 	'tab_ldap_sync'					=> 'LDAP Sync',
 	'tab_users'						=> 'Users',
 	'tab_groups'					=> 'Groups',

 	'c_ldap_sync_title'				=> 'LDAP Sync',

 	'c_ldap_sync_ldap_disabled'		=> '<strong>LDAP Authentication is disabled</strong>. To be able to use LDAP Sync you should enable it in Settings | LDAP Authentication:',
 	'c_ldap_sync_no_demo'			=> '<strong>LDAP Sync cannot be used in this demo.</strong>',

 	'v_ldap_settings_link'			=> 'Settings | LDAP Authentication',
 	'v_ldap_sync_doc_link'			=> 'Click here to read the document explaining LDAP Sync in Team Password Manager.',
 	'v_ldap_sync_explanation'		=> 'LDAP Sync creates/updates/deletes LDAP users and groups in Team Password Manager in sync with your LDAP/AD server.',

 	'v_ldap_sync_disabled'			=> 'LDAP Sync is disabled.',
 	'v_ldap_sync_enable'			=> 'Enable LDAP Sync',
 	'v_ldap_sync_disable'			=> 'Disable LDAP Sync',
 	'v_ldap_sync_enable_question'	=> 'Enable LDAP Sync?',
 	'v_ldap_sync_disable_question'	=> 'Disable LDAP Sync?',
 	'v_ldap_sync_disable_note'		=> 'Current objects will not be deleted',

 	'm_ldap_sync_ldap_disabled'		=> 'LDAP is disabled.',
 	'm_ldap_sync_no_sync_object'	=> 'LDAP Sync object does not exist or could not load it.',
 	'm_ldap_sync_no_ldap_settings'	=> 'Could not load LDAP settings.',
 	'm_ldap_sync_object_disabled'	=> 'LDAP Sync object is disabled.',
 	'm_ldap_sync_object_incorrect_type' => 'LDAP Sync object type is not correct (should be 1-4).',

 	'm_ldap_sync_no_ldap_users'		=> 'There are no users in the LDAP server with the specified filter.',
 	'm_ldap_sync_no_tpm_users'		=> 'There are no users in Team Password Manager.',

 	'm_ldap_sync_error_fetching_ldap_users' => 'Error fetching LDAP users',
 	'm_ldap_sync_error_fetching_db_users' => 'Error fetching database users',

 	'm_ldap_sync_repeat_username_in_ldap' => 'The username is repeated in the LDAP results.',
 	'm_ldap_sync_repeat_email_in_ldap' => 'The email is repeated in the LDAP results.',
 	'm_ldap_sync_username_not_ldap'	=> 'The matching username is not an LDAP user or it is not in the same LDAP server.',
 	'm_ldap_sync_email_in_another_user' => 'The email from the LDAP user is already in another user.',
 	'm_ldap_sync_cannot_add_license' => 'Cannot create user because it is not allowed to create more users by your license(s).',

 	'm_ldap_sync_server_not_defined' => 'Server not defined',

 	'ldap_sync_type_1'				=> 'Add/update users',
 	'ldap_sync_type_2'				=> 'Delete users',
 	'ldap_sync_type_3'				=> 'Add/update groups and sync members',
 	'ldap_sync_type_4'				=> 'Delete groups',
 	'ldap_sync_type_incorrect'		=> 'Incorrect sync type',

 	'v_lds_btn_new_object'			=> 'New LDAP Sync Object',

 	'v_lds_sidebar_all'				=> 'All objects',
 	'v_lds_sidebar_filter_state'	=> 'Filter by State',
 	'v_lds_state_enabled'			=> 'Enabled',
 	'v_lds_state_disabled'			=> 'Disabled',
 	'v_lds_sidebar_filter_server'	=> 'Filter by LDAP/AD Server',
 	'v_lds_sidebar_server'			=> 'Server',
 	'v_lds_sidebar_filter_type'		=> 'Filter by Type',
 	'v_lds_no_objects_filter'		=> 'There are no objects with this filter.',

 	'v_lds_header_id'				=> 'Id',
 	'v_lds_header_server'			=> 'LDAP/AD Server',
 	'v_lds_header_type'				=> 'Action',
 	'v_lds_header_notes'			=> 'Short Notes',
 	'v_lds_header_executed'			=> 'Latest Execution',
 	'v_lds_header_state'			=> 'State',

 	'v_lds_sort_by_id'				=> 'Sort by Id',
 	'v_lds_sort_by_server'			=> 'Sort by LDAP/AD Server',
 	'v_lds_sort_by_type'			=> 'Sort by Sync Type',
 	'v_lds_sort_by_notes'			=> 'Sort by Short Notes',
 	'v_lds_sort_by_executed'		=> 'Sort by Latest Execution',
 	'v_lds_sort_by_state'			=> 'Sort by State',

 	'c_ldap_sync_view_object'		=> 'View LDAP Sync Object',
 	'c_ldap_sync_object_not_exists' => 'The selected LDAP Sync object does not exist.',
 	'v_lds_return_list'				=> 'Return to objects list',
 	'm_lds_never_executed'			=> 'Never executed',
 	'c_ldap_sync_object'			=> 'LDAP Sync Object',
 	'v_lds_lbl_action'				=> 'Action',

 	'v_lds_btn_edit'				=> 'Edit',
 	'v_lds_btn_enable'				=> 'Enable',
 	'v_lds_btn_disable'				=> 'Disable',
 	'v_lds_btn_del'					=> 'Delete',
 	'v_lds_btn_test'				=> 'Test',
 	'v_lds_btn_execute'				=> 'Execute',

 	'v_lds_tab_data'				=> 'Data',
 	'v_lds_tab_log'					=> 'Log',
 	'v_lds_tab_automate'			=> 'Automate',

 	'v_lds_created_on'				=> 'Created on',
 	'v_lds_updated_on'				=> 'Updated on',
 	'v_lds_by'						=> 'By',
 	'v_lds_latest_executed_on'		=> 'Latest executed on',

 	'c_ldap_sync_edit_object'		=> 'Edit LDAP Sync object',
 	'c_ldap_sync_new_object'		=> 'New LDAP Sync object',
 	'v_ldap_sync_will_be'			=> 'Will be', // For new objects: Will be (enabled)

 	'c_ldap_sync_csrf_error'		=> 'There has been a CSRF error, please try again.',
 	'c_ldap_sync_edit_error'		=> 'There has been an error saving the object',
 	'c_ldap_sync_return_object'		=> 'Return to the object',

 	'c_ldap_sync_disable_object'	=> 'Disable LDAP Sync object',
 	'c_ldap_sync_enable_object'		=> 'Enable LDAP Sync object',
 	'c_ldap_sync_object_already_disabled' => 'The LDAP Sync object is already disabled.',
 	'c_ldap_sync_object_already_enabled' => 'The LDAP Sync object is already enabled.',
 	'c_ldap_sync_disable_object_confirm' => 'Disable this object?',
 	'c_ldap_sync_enable_object_confirm' => 'Enable this object?',
	'c_ldap_sync_disable_object_note' => 'A disabled object cannot be executed.',

	'c_ldap_sync_del_object' 		=> 'Delete LDAP Sync object',
	'c_ldap_sync_del_object_confirm' => 'Delete this object?',
	'c_ldap_sync_object_deleted'	=> 'The LDAP Sync object has been deleted.',

	'c_ldap_sync_test_object' 		=> 'Test LDAP Sync object',
	'c_ldap_sync_execute_object'	=> 'Execute LDAP Sync object',
	'c_ldap_sync_object_disabled'	=> 'The LDAP Sync object is disabled.',
	'c_ldap_sync_object_enable_to_test' => 'You need to enabled it to test it.',
	'c_ldap_sync_object_enable_to_execute' => 'You need to enable it to execute it.',
	'c_ldap_sync_test_object_confirm' => 'Test this object?',
	'c_ldap_sync_execute_object_confirm' => 'Execute this object?',

	'v_lds_test_end_error'			=> 'The test has ended with the following error',
	'v_lds_test_results'			=> 'Test results',
	'v_lds_test_users_explanation' 	=> 'The following list shows the users found in the LDAP system. The "Sync action" tells you what should be done in Team Password Manager. Matching is done by Username',
	'v_lds_test_del_users_explanation' => 'The following list shows the LDAP users found in Team Password Manager for this server. The "Sync action" tells you what should be done in Team Password Manager. Matching is done by Username',
	'v_lds_execute_end_error'		=> 'The execution has ended with the following error',
	'v_lds_execute_results'			=> 'Execution results',
	'v_lds_execute_users_explanation' => 'The following list shows the users found in the LDAP system. The "Sync action" tells you what should have been done in Team Password Manager, the "Done" field shows the result. Matching is done by Username',
	'v_lds_execute_del_users_explanation' => 'The following list shows the LDAP users found in Team Password Manager for this server. The "Sync action" tells you what should be done in Team Password Manager, the "Done" field shows the result. Matching is done by Username',
	'v_lds_sync_action'				=> 'Sync action',
	'v_lds_sync_done'				=> 'Done',
	'v_lds_sync_action_error'		=> 'Error',
	'v_lds_sync_action_add_user'	=> 'Add user',
	'v_lds_sync_action_update_user'	=> 'Update user. Data',
	'v_lds_sync_action_user_up_to_date' => 'None, user is up to date',
	'v_lds_sync_action_delete_user' => 'Delete user',
	'v_lds_sync_action_none_do_not_delete' => 'None, the user is in the LDAP system',
	'v_lds_user_deleted'			=> 'User deleted',

	'v_lds_testing_wait'			=> 'Testing, please wait ...',
	'v_lds_executing_wait'			=> 'Executing, please wait ...',
	'v_lds_num_ldap_users_found'	=> 'Number of LDAP users found',

	'v_lds_matched_user_id'			=> 'Matched user id',

	'm_ldap_sync_no_tpm_users_server' => 'There are no LDAP users in Team Password Manager for this LDAP server.',

	'v_lds_conditions_deleting_users' => 'The same conditions used when importing users are used when deleting them',

	'v_lds_num_db_users_found_ldap_server' => 'Number of Team Password Manager LDAP users found using this server',

	'v_lds_user_id'					=> 'User Id',
	'v_lds_example'					=> 'Example',

	'v_lds_attr_groupname'			=> 'Attribute: Group Name',

	'v_lds_members_basedn'			=> 'Members: Base DN',
	'v_lds_members_filter'			=> 'Members: Search Filter',
	'v_lds_members_a_username'		=> 'Members: Attribute Username',
	'v_lds_members_a_email'			=> 'Members: Attribute E-mail',
	'v_lds_m_filter_explanation'	=> 'Filter used to get the users from the group. [DN] will be replaced by the DN (Distinguished Name) of the group. Example',
	'v_lds_conditions_membership'	=> 'The same conditions used when importing users are used when syncing members',

	'c_lds_incorrect_action'		=> 'Incorrect action, please try again',

	'v_lds_data_fetch_groups'		=> 'Data needed to fetch the groups',
	'v_lds_data_fetch_members'		=> 'Data needed to fetch the members of the groups',

	'm_ldap_sync_no_ldap_groups' 	=> 'There are no groups in the LDAP server with the specified filter',

	'm_ldap_sync_error_fetching_ldap_groups' => 'Error fetching LDAP groups',
	'm_ldap_sync_error_fetching_ldap_group_members' => 'Error fetching LDAP group members',

	'm_ldap_sync_error_fetching_db_groups' => 'Error fetching database groups',

	'v_lds_action_addg_0'			=> 'Do nothing: the group is up to date',
	'v_lds_action_addg_1'			=> 'Add the group',
	'v_lds_action_addg_2'			=> 'Update the group DN',
	'v_lds_action_addg_3'			=> 'Add the user to the group',
	'v_lds_action_addg_4'			=> 'Delete the user from the group',
	'v_lds_action_addg_5'			=> 'Do nothing: the group is in another LDAP server or it is not a LDAP group',
	'v_lds_action_addg_6'			=> 'Do not add the user to the group, the user is already in the group',
	'v_lds_action_addg_7'			=> 'Do not add the user to the group, the user is not in the database for this LDAP server',

	'v_lds_matched_group_id'		=> 'Matched group id',
	'v_lds_group_name'				=> 'Group name',
	'v_lds_group_dn'				=> 'Group DN',
	'v_lds_username'				=> 'Username',

	'v_lds_test_groups_explanation' => 'The following list shows the groups and its members found in the LDAP system. The "Sync action" tells you what should be done in Team Password Manager. Matching is done by Name in the case of groups and Username in the case of members',

	'm_ldap_sync_no_tpm_groups_server' => 'There are no LDAP groups in Team Password Manager for this LDAP server.',

	'v_lds_test_del_groups_explanation' => 'The following list shows the LDAP groups found in Team Password Manager for this server. The "Sync action" tells you what should be done in Team Password Manager. Matching is done by group name',

	'v_lds_num_db_groups_found_ldap_server' => 'Number of Team Password Manager LDAP groups found using this server',

	'v_lds_group_id'				=> 'Group id',

	'v_lds_sync_action_delete_group' => 'Delete group',
	'v_lds_sync_action_none_do_not_delete_group' => 'None, the group is in the LDAP system',
	'v_lds_group_deleted'			=> 'Group deleted',

	'v_lds_automate_label'			=> 'You can execute this object without having to login into Team Password Manager using this URL:',
	'v_lds_automate_note'			=> 'Note: no output will be shown if you open this URL, you should check the results in the Log.',

	'v_lds_role_help'				=> 'Role to be assigned only to the new users',
);