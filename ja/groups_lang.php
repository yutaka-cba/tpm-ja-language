<?php
$lang = array (
	// controllers/groups
	'c_groups_not_exist' 			=> 'グループは存在しません。',
	'c_groups_del'					=> 'グループを削除',
	'c_groups_del_deleted'			=> 'グループは削除されました。',
	'c_groups_del_cannot'			=> 'このグループは削除できません。',
	'c_groups_delug'				=> 'グループからユーザーを削除する',
	'c_groups_delug_cannot_yourself' => 'このグループからあなたを削除することはできません。',
	'c_groups_delug_cannot'			=> 'このグループからユーザーを削除することはできません。',
	'c_groups_user_not_exist'		=> 'ユーザーが存在しません。',
	'c_groups_ug_not_exist'		 	=> 'ユーザーまたはグループが存在しません。',
	'c_groups_delug_done'			=> 'ユーザーがグループから削除されました。',
	'c_groups_delug_error'			=> 'グループからユーザーを削除する際にエラーが発生しました。',
	'c_groups_return_group'			=> 'グループに戻る',
	'c_groups_addug'				=> 'ユーザーをグループに追加する',
	'c_groups_addug_error'			=> 'データベースエラーにより、ユーザーをグループに追加できませんでした。',
	'c_groups_addug_csrf_error'		=> 'CSRFエラーです。再度お試しください',
	'c_groups_addug_no_more_users'	=> 'グループに追加するユーザーはもういません。',
	'c_groups_addug_cannot'			=> 'このグループにユーザーを追加することはできません。',
	'field_name'					=> '名称',
	'c_groups_group_exists'			=> 'このグループはすでに存在していません。',
	'c_groups_edit_group'			=> 'グループを編集する',
	'c_groups_edit_group_error'		=> 'グループデータの保存時にエラーが発生しました。',
	'c_groups_edit_group_csrf_error' => 'グループデータの保存時にCSRFエラーが発生しました。',
	'c_groups_edit_group_cannot'	=> 'このグループは編集できません。',
	'c_groups_new_group'			=> '新しいグループ',
	'c_groups_new_group_error'		=> 'グループの追加時にエラーが発生しました。',
	'c_groups_new_group_csrf_error'	=> 'グループの追加時にCSRFエラーが発生しました。',

	// views/users
 	'tab_users'						=> 'ユーザー',
 	'tab_groups'					=> 'グループ',

 	'v_groups_created_on'			=> '作成日',
 	'v_groups_by'					=> 'による',
 	'v_groups_updated_on'			=> '更新日',

 	'v_groups_return_list'			=> 'グループリストに戻る',

 	'v_groups_sort_name'			=> '名前順',
 	'v_groups_sort_num_users'		=> 'ユーザー数順',
 	'v_groups_num_users'			=> 'N&ordm; ユーザー',
 	'v_groups_sidebar_all'			=> '全グループ',
 	'v_groups_sidebar_search'		=> '検索結果',
 	'v_groups_btn_new_group'		=> '新しいグループ',
 	'v_groups_btn_search_groups'	=> 'グループを検索',
 	'v_groups_btn_edit'				=> '編集',
 	'v_groups_btn_delete'			=> '削除',
 	'v_groups_choose_user'			=> 'グループに追加するユーザーを選択します（<span class="label label-success" style="font-weight:normal">Active</span> ユーザーのみ表示)',
 	'v_groups_no_groups_filter'		=> 'このフィルターまたは検索ではグループが見つかりません。',
 	'v_groups_del_confirm'			=> 'このグループを削除しますか？',
 	'v_groups_delug_confirm'		=> 'グループからユーザーを削除しますか？',

 	// v6
 	'tab_ldap_sync'					=> 'LDAP同期',

 	'lbl_ldap'						=> 'LDAP', // Same as in users_lang.php
 	'v_groups_ldap_disabled'		=> '注：LDAP/AD認証は無効です。',
 	'v_groups_ldap_dn'				=> 'グループDN',
 	'c_groups_edit_ldap_group_cannot' => 'LDAPグループは編集できず、LDAP同期によって管理されます。',
 	'c_groups_cannot_delg_ldap_group' => 'LDAPグループからユーザを削除することはできません。これはLDAP同期によって行われます。',
 	'c_groups_cannot_add_ldap_group' => 'ユーザをLDAPグループに追加することはできません。',
 	'v_users_sidebar_filter_ldap_server' => 'LDAP/ADサーバーによるフィルタリング', // Same as in users_lang.php
 	'v_users_sidebar_server'		=> 'サーバー', // Same as in users_lang.php
 	'field_ldap_server'				=> 'LDAP/ADサーバー', // Same as in users_lang.php

);
