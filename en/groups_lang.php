<?php
$lang = array (
	// controllers/groups
	'c_groups_not_exist' 			=> 'The group does not exist.',
	'c_groups_del'					=> 'Delete Group',
	'c_groups_del_deleted'			=> 'Group deleted.',
	'c_groups_del_cannot'			=> 'You cannot delete this group.',
	'c_groups_delug'				=> 'Delete User from Group',
	'c_groups_delug_cannot_yourself' => 'You cannot delete yourself from this group.',
	'c_groups_delug_cannot'			=> 'You cannot delete users from this group.',
	'c_groups_user_not_exist'		=> 'The user does not exist.',
	'c_groups_ug_not_exist'		 	=> 'The user or group does not exist.',
	'c_groups_delug_done'			=> 'The user has been deleted from the group.',
	'c_groups_delug_error'			=> 'There has been an error deleting the user from the group.',
	'c_groups_return_group'			=> 'Return to group',
	'c_groups_addug'				=> 'Add User to Group',
	'c_groups_addug_error'			=> 'It has not been possible to add the user to the group due to a database error.',
	'c_groups_addug_csrf_error'		=> 'CSRF error, please try again.',
	'c_groups_addug_no_more_users'	=> 'There are no more users to add to the group.',
	'c_groups_addug_cannot'			=> 'You cannot add users to this group.',
	'field_name'					=> 'Name',
	'c_groups_group_exists'			=> 'This group already exists.',
	'c_groups_edit_group'			=> 'Edit Group',
	'c_groups_edit_group_error'		=> 'There has been an error saving the group data.',
	'c_groups_edit_group_csrf_error' => 'There has been a CSRF error saving the group data.',
	'c_groups_edit_group_cannot'	=> 'You cannot edit this group.',
	'c_groups_new_group'			=> 'New Group',
	'c_groups_new_group_error'		=> 'There has been an error adding the group.',
	'c_groups_new_group_csrf_error'	=> 'There has been a CSRF error adding the group.',

	// views/users
 	'tab_users'						=> 'Users',
 	'tab_groups'					=> 'Groups',

 	'v_groups_created_on'			=> 'Created on',
 	'v_groups_by'					=> 'By',
 	'v_groups_updated_on'			=> 'Updated on',

 	'v_groups_return_list'			=> 'Return to groups list',

 	'v_groups_sort_name'			=> 'Sort by Name',
 	'v_groups_sort_num_users'		=> 'Sort by Number of users',
 	'v_groups_num_users'			=> 'N&ordm; Users',
 	'v_groups_sidebar_all'			=> 'All Groups',
 	'v_groups_sidebar_search'		=> 'Search Results',
 	'v_groups_btn_new_group'		=> 'New Group',
 	'v_groups_btn_search_groups'	=> 'Search Groups',
 	'v_groups_btn_edit'				=> 'Edit',
 	'v_groups_btn_delete'			=> 'Delete',
 	'v_groups_choose_user'			=> 'Choose the user to add to the group (only <span class="label label-success" style="font-weight:normal">Active</span> users are shown)',
 	'v_groups_no_groups_filter'		=> 'There are no groups with this filter or search.',
 	'v_groups_del_confirm'			=> 'Delete this group?',
 	'v_groups_delug_confirm'		=> 'Delete the user from the group?',

 	// v6
 	'tab_ldap_sync'					=> 'LDAP Sync',

 	'lbl_ldap'						=> 'LDAP', // Same as in users_lang.php
 	'v_groups_ldap_disabled'		=> 'Note: LDAP/AD authentication is disabled',
 	'v_groups_ldap_dn'				=> 'Group DN',
 	'c_groups_edit_ldap_group_cannot' => 'LDAP groups cannot be edited, they are managed via LDAP Sync.',
 	'c_groups_cannot_delg_ldap_group' => 'Users cannot be deleted from LDAP groups, this is done via LDAP Sync.',
 	'c_groups_cannot_add_ldap_group' => 'Users cannot be added to LDAP groups, this is done via LDAP Sync.',
 	'v_users_sidebar_filter_ldap_server' => 'Filter by LDAP/AD Server', // Same as in users_lang.php
 	'v_users_sidebar_server'		=> 'Server', // Same as in users_lang.php
 	'field_ldap_server'				=> 'LDAP/AD server', // Same as in users_lang.php

);