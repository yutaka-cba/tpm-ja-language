<?php
$lang = array (

 	// v6
 	'tab_ldap_sync'					=> 'LDAP同期',
 	'tab_users'						=> 'ユーザー',
 	'tab_groups'					=> 'グループ',

 	'c_ldap_sync_title'				=> 'LDAP同期',

 	'c_ldap_sync_ldap_disabled'		=> '<strong>LDAP認証が無効</strong>.LDAP同期を使用するには、設定｜LDAP認証で有効にする必要があります：',
 	'c_ldap_sync_no_demo'			=> '<strong>このデモでは、LDAP Syncは使用できません。</strong>',

 	'v_ldap_settings_link'			=> '設定｜LDAP認証',
 	'v_ldap_sync_doc_link'			=> 'Team Password ManagerのLDAP同期について説明したドキュメントを読むにはここをクリックしてください。',
 	'v_ldap_sync_explanation'		=> 'LDAP Syncは、LDAP/ADサーバと同期してTeam Password ManagerのLDAPユーザとグループを作成/更新/削除します。',

 	'v_ldap_sync_disabled'			=> 'LDAP同期が無効になっている。',
 	'v_ldap_sync_enable'			=> 'LDAP同期を有効にする',
 	'v_ldap_sync_disable'			=> 'LDAP同期を無効にする',
 	'v_ldap_sync_enable_question'	=> 'LDAP同期を有効にしますか？',
 	'v_ldap_sync_disable_question'	=> 'LDAP同期を無効にしますか？',
 	'v_ldap_sync_disable_note'		=> '現在のオブジェクトは削除されない',

 	'm_ldap_sync_ldap_disabled'		=> 'LDAPは無効です。',
 	'm_ldap_sync_no_sync_object'	=> 'LDAP Syncオブジェクトが存在しないか、ロードできませんでした。',
 	'm_ldap_sync_no_ldap_settings'	=> 'LDAP設定をロードできませんでした。',
 	'm_ldap_sync_object_disabled'	=> 'LDAP同期オブジェクトが無効になっている。',
 	'm_ldap_sync_object_incorrect_type' => 'LDAP同期オブジェクトのタイプが正しくありません（1-4であるべきです）。',

 	'm_ldap_sync_no_ldap_users'		=> 'LDAPサーバーに指定されたフィルタを持つユーザーがいません。',
 	'm_ldap_sync_no_tpm_users'		=> 'Team Password Managerにはユーザーがいません。',

 	'm_ldap_sync_error_fetching_ldap_users' => 'LDAPユーザーの取得エラー',
 	'm_ldap_sync_error_fetching_db_users' => 'データベース・ユーザーの取得エラー',

 	'm_ldap_sync_repeat_username_in_ldap' => 'ユーザー名はLDAPの結果で繰り返される。',
 	'm_ldap_sync_repeat_email_in_ldap' => 'メールはLDAPの結果で繰り返される。',
 	'm_ldap_sync_username_not_ldap'	=> '一致するユーザー名がLDAPユーザーでないか、同じLDAPサーバー内にない。',
 	'm_ldap_sync_email_in_another_user' => 'LDAPユーザーからの電子メールは、すでに別のユーザーになっています。',
 	'm_ldap_sync_cannot_add_license' => 'ライセンスによってユーザーを作成することが許可されていないため、ユーザーを作成できません。',

 	'm_ldap_sync_server_not_defined' => 'サーバーが定義されていない',

 	'ldap_sync_type_1'				=> 'ユーザーの追加/更新',
 	'ldap_sync_type_2'				=> 'ユーザー削除',
 	'ldap_sync_type_3'				=> 'グループの追加/更新とメンバーの同期',
 	'ldap_sync_type_4'				=> 'グループ削除',
 	'ldap_sync_type_incorrect'		=> '同期タイプが正しくない',

 	'v_lds_btn_new_object'			=> '新しいLDAP同期オブジェクト',

 	'v_lds_sidebar_all'				=> 'すべてのオブジェクト',
 	'v_lds_sidebar_filter_state'	=> '州で絞り込む',
 	'v_lds_state_enabled'			=> '有効',
 	'v_lds_state_disabled'			=> '無効',
 	'v_lds_sidebar_filter_server'	=> 'LDAP/ADサーバーによるフィルタリング',
 	'v_lds_sidebar_server'			=> 'サーバー',
 	'v_lds_sidebar_filter_type'		=> 'タイプで絞り込む',
 	'v_lds_no_objects_filter'		=> 'このフィルターを持つオブジェクトはない。',

 	'v_lds_header_id'				=> 'アイド',
 	'v_lds_header_server'			=> 'LDAP/ADサーバー',
 	'v_lds_header_type'				=> 'アクション',
 	'v_lds_header_notes'			=> 'ショートノート',
 	'v_lds_header_executed'			=> '最新の執行',
 	'v_lds_header_state'			=> '州',

 	'v_lds_sort_by_id'				=> 'IDでソート',
 	'v_lds_sort_by_server'			=> 'LDAP/ADサーバーでソート',
 	'v_lds_sort_by_type'			=> '同期タイプで並べ替え',
 	'v_lds_sort_by_notes'			=> 'ショートノート順',
 	'v_lds_sort_by_executed'		=> '最新の実行順',
 	'v_lds_sort_by_state'			=> '州でソート',

 	'c_ldap_sync_view_object'		=> 'LDAP同期オブジェクトの表示',
 	'c_ldap_sync_object_not_exists' => '選択したLDAP同期オブジェクトが存在しません。',
 	'v_lds_return_list'				=> 'オブジェクトリストに戻る',
 	'm_lds_never_executed'			=> '未執行',
 	'c_ldap_sync_object'			=> 'LDAP同期オブジェクト',
 	'v_lds_lbl_action'				=> 'アクション',

 	'v_lds_btn_edit'				=> '編集',
 	'v_lds_btn_enable'				=> '有効にする',
 	'v_lds_btn_disable'				=> '無効',
 	'v_lds_btn_del'					=> '削除',
 	'v_lds_btn_test'				=> 'テスト',
 	'v_lds_btn_execute'				=> '実行する',

 	'v_lds_tab_data'				=> 'データ',
 	'v_lds_tab_log'					=> 'ログ',
 	'v_lds_tab_automate'			=> '自動化',

 	'v_lds_created_on'				=> '作成日',
 	'v_lds_updated_on'				=> '更新日',
 	'v_lds_by'						=> 'による',
 	'v_lds_latest_executed_on'		=> '最新処刑',

 	'c_ldap_sync_edit_object'		=> 'LDAP同期オブジェクトの編集',
 	'c_ldap_sync_new_object'		=> '新しいLDAP同期オブジェクト',
 	'v_ldap_sync_will_be'			=> 'そうなる', // For new objects: Will be (enabled)

 	'c_ldap_sync_csrf_error'		=> 'CSRFエラーが発生しました。',
 	'c_ldap_sync_edit_error'		=> 'オブジェクトの保存にエラーが発生しました。',
 	'c_ldap_sync_return_object'		=> 'オブジェクトに戻る',

 	'c_ldap_sync_disable_object'	=> 'LDAP同期オブジェクトを無効にする',
 	'c_ldap_sync_enable_object'		=> 'LDAP同期オブジェクトを有効にする',
 	'c_ldap_sync_object_already_disabled' => 'LDAP同期オブジェクトはすでに無効になっています。',
 	'c_ldap_sync_object_already_enabled' => 'LDAP同期オブジェクトはすでに有効になっています。',
 	'c_ldap_sync_disable_object_confirm' => 'このオブジェクトを無効にしますか？',
 	'c_ldap_sync_enable_object_confirm' => 'このオブジェクトを有効にするか？',
	'c_ldap_sync_disable_object_note' => '無効化されたオブジェクトは実行できない。',

	'c_ldap_sync_del_object' 		=> 'LDAP同期オブジェクトの削除',
	'c_ldap_sync_del_object_confirm' => 'このオブジェクトを削除しますか？',
	'c_ldap_sync_object_deleted'	=> 'LDAP Sync オブジェクトが削除されました。',

	'c_ldap_sync_test_object' 		=> 'テストLDAP同期オブジェクト',
	'c_ldap_sync_execute_object'	=> 'LDAP同期オブジェクトの実行',
	'c_ldap_sync_object_disabled'	=> 'LDAP同期オブジェクトは無効です。',
	'c_ldap_sync_object_enable_to_test' => 'テストするには有効化する必要がある。',
	'c_ldap_sync_object_enable_to_execute' => '実行するには有効にする必要がある。',
	'c_ldap_sync_test_object_confirm' => 'このオブジェクトをテストする？',
	'c_ldap_sync_execute_object_confirm' => 'このオブジェクトを実行するか？',

	'v_lds_test_end_error'			=> 'テストは以下のエラーで終了した。',
	'v_lds_test_results'			=> 'テスト結果',
	'v_lds_test_users_explanation' 	=> '次のリストには、LDAPシステムで見つかったユーザーが表示されます。同期アクション]は、Team Password Managerで何を実行するかを示します。マッチングはユーザー名で行われます。',
	'v_lds_test_del_users_explanation' => '次のリストには、このサーバーのTeam Password Managerで見つかったLDAPユーザーが表示されます。同期アクション]は、Team Password Managerで何を実行するかを示します。マッチングはユーザ名で行われます。',
	'v_lds_execute_end_error'		=> '実行は以下のエラーで終了した。',
	'v_lds_execute_results'			=> '実行結果',
	'v_lds_execute_users_explanation' => '次のリストは、LDAPシステムで見つかったユーザを示します。Syncアクション "はTeam Password Managerで実行されたことを示し、"完了 "フィールドは結果を示します。マッチングはユーザー名で行われます。',
	'v_lds_execute_del_users_explanation' => '次のリストには、このサーバーのTeam Password Managerで見つかったLDAPユーザーが表示されます。同期アクション]はTeam Password Managerで何を実行するかを示し、[完了]フィールドは結果を示します。マッチングはユーザ名で行われます。',
	'v_lds_sync_action'				=> 'シンクアクション',
	'v_lds_sync_done'				=> '完了',
	'v_lds_sync_action_error'		=> 'エラー',
	'v_lds_sync_action_add_user'	=> 'ユーザー追加',
	'v_lds_sync_action_update_user'	=> 'ユーザーを更新するデータ',
	'v_lds_sync_action_user_up_to_date' => '特になし。',
	'v_lds_sync_action_delete_user' => 'ユーザー削除',
	'v_lds_sync_action_none_do_not_delete' => 'なし、ユーザーはLDAPシステムにいる',
	'v_lds_user_deleted'			=> 'ユーザー削除',

	'v_lds_testing_wait'			=> 'テスト中です。',
	'v_lds_executing_wait'			=> '実行中です。',
	'v_lds_num_ldap_users_found'	=> '見つかったLDAPユーザーの数',

	'v_lds_matched_user_id'			=> '一致したユーザーID',

	'm_ldap_sync_no_tpm_users_server' => 'Team Password Managerには、このLDAPサーバのLDAPユーザは存在しません。',

	'v_lds_conditions_deleting_users' => 'ユーザーをインポートする際に使用した条件は、ユーザーを削除する際にも使用されます。',

	'v_lds_num_db_users_found_ldap_server' => 'このサーバーを使用しているTeam Password Manager LDAPユーザーの数',

	'v_lds_user_id'					=> 'ユーザーID',
	'v_lds_example'					=> '例',

	'v_lds_attr_groupname'			=> '属性グループ名',

	'v_lds_members_basedn'			=> 'メンバーベースDN',
	'v_lds_members_filter'			=> 'メンバー検索フィルター',
	'v_lds_members_a_username'		=> 'メンバー属性 ユーザー名',
	'v_lds_members_a_email'			=> 'メンバー属性Eメール',
	'v_lds_m_filter_explanation'	=> 'グループからユーザーを取得するために使用されるフィルタ。[DN]はグループのDN（識別名）に置き換えられます。例',
	'v_lds_conditions_membership'	=> 'ユーザーをインポートするときと同じ条件が、メンバーを同期するときにも使用されます。',

	'c_lds_incorrect_action'		=> 'アクションが正しくありません。',

	'v_lds_data_fetch_groups'		=> 'グループのフェッチに必要なデータ',
	'v_lds_data_fetch_members'		=> 'グループのメンバーを取得するために必要なデータ',

	'm_ldap_sync_no_ldap_groups' 	=> '指定されたフィルタを持つグループがLDAPサーバーにありません。',

	'm_ldap_sync_error_fetching_ldap_groups' => 'LDAPグループの取得エラー',
	'm_ldap_sync_error_fetching_ldap_group_members' => 'LDAPグループ・メンバーの取得エラー',

	'm_ldap_sync_error_fetching_db_groups' => 'データベースグループの取得エラー',

	'v_lds_action_addg_0'			=> '何もしない：グループは最新',
	'v_lds_action_addg_1'			=> 'グループを追加する',
	'v_lds_action_addg_2'			=> 'グループDNの更新',
	'v_lds_action_addg_3'			=> 'ユーザーをグループに追加する',
	'v_lds_action_addg_4'			=> 'グループからユーザーを削除する',
	'v_lds_action_addg_5'			=> '何もしない：グループが別のLDAPサーバーにあるか、LDAPグループではない',
	'v_lds_action_addg_6'			=> 'ユーザーをグループに追加しないでください。',
	'v_lds_action_addg_7'			=> 'ユーザーをグループに追加しないでください。そのユーザーはこのLDAPサーバーのデータベースに存在しません。',

	'v_lds_matched_group_id'		=> '一致したグループID',
	'v_lds_group_name'				=> 'グループ名',
	'v_lds_group_dn'				=> 'グループDN',
	'v_lds_username'				=> 'ユーザー名',

	'v_lds_test_groups_explanation' => '以下のリストには、LDAPシステムで見つかったグループとそのメンバが表示されます。同期アクション]は、Team Password Managerで何を実行するかを示します。マッチングは、グループの場合は名前、メンバーの場合はユーザー名で行われます。',

	'm_ldap_sync_no_tpm_groups_server' => 'このLDAPサーバーのTeam Password ManagerにはLDAPグループがありません。',

	'v_lds_test_del_groups_explanation' => '以下のリストは、このサーバのTeam Password Managerで見つかったLDAPグループを示します。同期アクション]は、Team Password Managerで何を実行するかを示します。マッチングはグループ名で行われます。',

	'v_lds_num_db_groups_found_ldap_server' => 'このサーバーを使用して見つかったTeam Password Manager LDAPグループの数',

	'v_lds_group_id'				=> 'グループID',

	'v_lds_sync_action_delete_group' => 'グループ削除',
	'v_lds_sync_action_none_do_not_delete_group' => 'なし、グループはLDAPシステムにある',
	'v_lds_group_deleted'			=> 'グループ削除',

	'v_lds_automate_label'			=> 'このURLを使用して、Team Password Managerにログインすることなくこのオブジェクトを実行できます：',
	'v_lds_automate_note'			=> '注：このURLを開いても出力は表示されませんので、ログで結果を確認してください。',

	'v_lds_role_help'				=> '新規ユーザーのみに割り当てられる役割',
);