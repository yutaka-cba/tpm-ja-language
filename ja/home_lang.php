<?php
$lang = array (

	// views/main
	'main_new_password' 		=> '新しいパスワード',
	'main_new_project' 			=> 'new [PRJ］',
	'main_search_results'		=> '検索結果',
	'main_search_projects'		=> '検索 [PRJS］',
	'main_search_passwords' 	=> 'パスワード検索',
	'main_adv_search_title'		=> '高度な検索',
	'main_search'				=> '検索',
	'main_search_any_field'		=> 'どの分野でも',
	'main_search_name'			=> '名称',
	'main_search_access'		=> 'アクセス',
	'main_search_username_email'=> 'ユーザー名またはEメール',
	'main_search_tag'			=> 'タグ',
	'main_search_aaa_all'		=> 'すべて',
	'main_search_aaa_active'	=> 'アクティブのみ',
	'main_search_aaa_archived'	=> 'アーカイブのみ',
	'main_search_favorite'		=> 'お気に入り',
	'main_search_locked'		=> 'ロック',
	'main_search_file'			=> 'ファイル',
	'main_search_expiry_date'	=> '有効期限',
	'main_search_ext_sharing'	=> '外部共有',
	'main_search_search'		=> '検索',
	'main_search_adv_help'		=> '高度な検索ヘルプ',
	'main_show_tree'			=> 'ショーツリー',
	'main_hide_tree'			=> 'ヒデ・ツリー',
	'main_refresh_tree'	 		=> 'リフレッシュツリー',
	'main_filter_tree'	 		=> 'フィルターツリー',
	'main_noprj_welcome_title'	=> 'チームパスワードマネージャーへようこそ',
	'main_noprj_welcome_line11' => '<strong>チームパスワード管理者</strong>組織運営に役立つ' passwords.",
	'main_noprj_welcome_line12'	=> '各パスワードは<strong>[PRJ］</strong>.',
	'main_noprj_welcome_line21' => 'そこで、まずやっておきたいのが[PRJ]の作成だ：',
	'main_noprj_welcome_line22' => 'new [PRJ］',
	'main_noprj_welcome_line31' => '5分ほどお時間があれば、ヘルプページでTeam Password Managerの概要をご覧ください：',
	'main_noprj_welcome_line32' => 'ヘルプページ',
	'main_uselector_search'		=> '検索ユーザー',

	// controllers/tree
	'c_tree_search_results'		=> '検索結果',
	'c_tree_recent'				=> '最近',
	'c_tree_favorite'			=> 'お気に入り',
	'c_tree_active'				=> 'アクティブ',
	'c_tree_all'				=> 'すべて',
	'c_tree_archived'			=> 'アーカイブ',
	'c_tree_passwords'			=> 'パスワード',
	'c_tree_search_results_prj'	=> '検索結果',
	'c_tree_recent_prj'			=> '最近',
	'c_tree_favorite_prj'		=> 'お気に入り',
	'c_tree_active_prj'			=> 'アクティブ',
	'c_tree_archived_prj'		=> 'アーカイブ',

	// controllers/pwd
	'c_pwd_search_results'		=> '検索結果',
	'c_pwd_all_pwds'			=> 'すべてのパスワード',
	'c_pwd_favorite_pwds'		=> 'お気に入りのパスワード',
	'c_pwd_archived_pwds'		=> 'アーカイブパスワード',
	'c_pwd_recent_pwds'			=> '最近のパスワード',
	'c_pwd_active_pwds'			=> 'アクティブなパスワード',
	'c_pwd_all'					=> 'すべて',
	'c_pwd_favorite'			=> 'お気に入り',
	'c_pwd_archived'			=> 'アーカイブ',
	'c_pwd_recent'				=> '最近',
	'c_pwd_active'				=> 'アクティブ',
	'c_pwd_not_found_title'		=> 'パスワードが見つかりません',
	'c_pwd_not_found_desc'		=> 'このパスワードが存在しないか、アクセスできません。',
	'c_pwd_history_record'		=> '歴史記録',
	'c_pwd_view_history_record' => '履歴を見る',
	'c_pwd_ro_hr'				=> '読み取り専用ユーザーは、履歴レコードを表示できません。',

	'c_pwd_repeat'				=> 'リピート',
	'c_pwd_expiry_error'		=> '有効期限が正しくありません。次のフォーマットを使用してください：mm-dd-yyyy',
	'c_pwd_pwd_exists'			=> 'このパスワードはすでにこの[PRJ]に存在する。',
	'c_pwd_edit_pwd'			=> 'パスワードの編集',
	'c_pwd_locked_edit'			=> 'このパスワードはロックされています。編集するにはロックを解除する必要があります。',
	'c_pwd_archived_edit'		=> 'このパスワードは[PRJ]が<span class=]であるため編集できない。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_perm_edit'			=> 'このパスワードを編集する権限がありません。',
	'c_pwd_new_pwd'				=> '新しいパスワード',
	'c_pwd_cannot_create_pwd_ro' => '申し訳ありませんが、パスワードを作成することはできません。',
	'c_pwd_cannot_create_pwd_prj' => 'この[PRJ]でパスワードを作成できない場合は、パスワードを作成するために必要な権限を持っていません。',
	'c_pwd_cannot_create_pwd_noprja' => 'パスワードを作成しようとしている[PRJ]が存在しないか、アクセス権がないか、アーカイブされています。',
	'c_pwd_cannot_create_pwd_noprj'=> 'パスワードを作成しようとしている[PRJ]が存在しないか、アクセス権がありません。',
	'c_pwd_error_saving_pwd'	=> 'パスワードの保存にエラーが発生しました。',
	'c_pwd_error_csrf_saving'	=> 'エラーが発生しました：CSRFの検証です。',
	'c_pwd_edit_pwd_notes'		=> 'パスワードノートの編集',
	'c_pwd_locked_notes_edit'	=> 'このパスワードはロックされています。ノートを編集するには、ロックを解除する必要があります。',
	'c_pwd_error_saving_pwd_notes' => 'パスワードノートの保存にエラーが発生しました。',

	'c_pwd_vres_managed_by'		=> 'マネージメント',
	'c_pwd_edit_pwd_sec'		=> 'パスワード・セキュリティの編集',
	'c_pwd_edit_pwd_sec_locked'	=> 'このパスワードはロックされています。セキュリティを編集するには、ロックを解除する必要があります。',
	'c_pwd_edit_pwd_sec_archived'=> 'このパスワードは、[PRJ]が<span class=]であるため、パスワードのセキュリティを変更できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_sec_perm'	=> 'このパスワードのセキュリティを編集するのに必要な権限がありません。',
	'c_pwd_edit_pwd_sec_error'	=> 'パスワードセキュリティの編集エラーが発生しました。',

	'c_pwd_vrel_locking'		=> 'ロック',
	'c_pwd_edit_pwd_locking'	=> '編集パスワードロック',
	'c_pwd_edit_pwd_locking_locked'	=> 'このパスワードはロックされています。ロック状態を編集するには、ロックを解除する必要があります。',
	'c_pwd_edit_pwd_locking_archived' => 'このパスワードは[PRJ]が<span class=]のため、パスワードロックを変更できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_locking_eshared' => 'パスワードのロックは、パスワードが外部共有されているため変更できません。ロックを設定したい場合は、まず外部共有を編集し、外部共有しないように設定する必要があります。',
	'c_pwd_edit_pwd_locking_perm' => 'このパスワードのロック状態を編集するのに必要な権限がありません。',
	'c_pwd_edit_pwd_locking_error' => 'パスワードロックの編集でエラーが発生しました',

	'c_pwd_vrur'				=> '理由',
	'c_pwd_unlock_pwd'			=> 'パスワードロック解除',

	'm_pwd_notif_unlocked'		=> 'パスワードロック解除',
	
	'm_pwd_notif_desc'			=> '次のユーザーは、次のパスワードを解除しました。',
	'm_pwd_notif_user'			=> 'ユーザー',
	'm_pwd_notif_reason'		=> '理由',

	'c_pwd_delete_pwd'			=> 'パスワードの削除',
	'c_pwd_delete_pwd_locked'	=> 'このパスワードはロックされています。削除するにはロックを解除する必要があります。',
	'c_pwd_delete_pwd_archived'	=> 'このパスワードは、[PRJ]が<span class=]であるため削除できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_delete_pwd_perm'		=> 'このパスワードを削除する権限がありません（管理権限が必要です）。',
	'c_pwd_delete_pwd_error' => 'エラー: パスワードが<strong>違う</strong>データベースエラーにより削除されました。',

	'c_pwd_copy_pwd'			=> 'パスワードのコピー',
	'c_pwd_copy_pwd_locked'		=> 'このパスワードはロックされています。コピーするにはロックを解除する必要があります。',
	'c_pwd_copy_pwd_dest_archived' => '宛先[PRJ]は<span class='label label-warning tpm-archived">Archived</span>.',
	'c_pwd_copy_pwd_dest_exists' => 'の場合、保存先[PRJ]に既にパスワードが存在する。',
	'c_pwd_copy_pwd_dest_cannot' => 'にパスワードを作成することはできません。',
	'c_pwd_copy_pwd_dest_not_found' => '宛先[PRJ]が存在しないか、アクセスできない。', 
	'c_pwd_copy_pwd_copied_error' => 'パスワードはコピーされましたが、その際に次のようなエラーが発生しました。',
	'c_pwd_copy_pwd_error'		=> 'パスワードのコピーでエラーが発生しました',
	'c_pwd_copy_pwd_cannot'		=> 'このパスワードは以下の理由でコピーできません。',
	'c_pwd_copy_pwd_ro'			=> 'パスワードのコピーや作成はできません。',
	'c_pwd_copy_pwd_nf_pwd_prj'	=> 'パスワード/[PRJ]が存在しないか、アクセスできない。',
	'c_pwd_copy_pwd_csrf' 		=> 'パスワードがコピーされていません（CSRF検証）。もう一度お試しください。',

	'c_pwd_move_pwd'			=> 'パスワードの移動',
	'c_pwd_move_pwd_locked'		=> 'このパスワードはロックされています。移動するにはロックを解除する必要があります。',
	'c_pwd_move_pwd_error'		=> 'パスワードの移動にエラーが発生しました',
	'c_pwd_move_pwd_cannot'		=> 'このパスワードは以下の理由で移動できません。',
	'c_pwd_move_manage' 		=> 'パスワードを移動するには、パスワードの管理権限が必要です。',
	'c_pwd_move_pwd_ro' 		=> 'パスワードの移動や作成はできません。',
	'c_pwd_move_pwd_csrf' 		=> 'パスワードが移動されていません（CSRF検証）。もう一度お試しください。',

	'c_pwd_vrd_dup_files'		=> '重複ファイル',
	'c_pwd_vrd_gen_pwd'			=> '新しいパスワードを生成する',
	'c_pwd_vrd_dup_custom'		=> 'カスタムフィールドの重複',
	'c_pwd_dup_pwd'				=> 'パスワードの重複',
	'c_pwd_dup_pwd_locked'		=> 'このパスワードはロックされています。複製するにはロックを解除する必要があります。',
	'c_pwd_dup_pwd_archived' 	=> 'このパスワードは[PRJ]が<span class=]であるため、複製できない。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_dup_pwd_perm' 		=> 'このパスワードを複製するために必要な権限がありません（この[PRJ]でパスワードを作成する権限が必要です）。',
	'c_pwd_dup_pwd_error'		=> 'パスワードの複製エラーが発生しました。',
	'c_pwd_dup_pwd_copy_of' 	=> 'コピー',

	'c_pwd_custom_label'		=> 'カスタムラベル',
	'c_pwd_custom_type'			=> 'カスタムタイプ',
	'c_pwd_cflabel_empty'		=> 'について<strong>ラベル</strong>を空にすることはできない：<strong>カスタムフィールド', // <strong> gets closed in code
	'c_pwd_cf_config'			=> 'カスタムフィールド',
	'c_pwd_cf_config_locked'	=> 'このパスワードはロックされています。カスタムフィールドの設定を変更するには、ロックを解除する必要があります。',
	'c_pwd_cf_config_archived' 	=> 'パスワードのカスタムフィールド設定は、[PRJ]が<span class=]であるため変更できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_cf_config_perm' 		=> 'このパスワードのカスタムフィールド設定を変更するのに必要な権限がありません（パスワードを管理する権限が必要です）。',
	'c_pwd_cf_config_error' 	=> 'カスタムフィールドの設定を保存する際にエラーが発生しました。',

	'c_pwd_vrees' 				=> '外部共有',
	'c_pwd_ext_sharing'			=> '外部共有の編集',
	'c_pwd_ext_sharing_disab'	=> '外部共有が無効になっています。設定]-[外部共有]で有効にする必要があります。',
	'c_pwd_ext_sharing_locked'	=> 'パスワードがロックされているため、外部共有は変更できません。このパスワードを外部と共有したい場合は、ロックを編集し、ロックを解除する必要があります。',
	'c_pwd_ext_sharing_archived'=> 'このパスワードの外部共有は、[PRJ]が<span class=]のため編集できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_ext_sharing_perm'	=> '外部共有の編集に必要な権限がありません。',
	'c_pwd_ext_sharing_error' 	=> '外部共有の編集でエラーが発生しました',	

	// views/pwd
	'vpwd_edit_title'			=> 'パスワードデータの編集',
	'vpwd_edit'					=> '編集',
	'vpwd_edit_notes_title'		=> 'パスワードのメモを編集する',
	'vpwd_edit_notes'			=> '備考',
	'vpwd_upload_title'			=> 'ファイルのアップロード',
	'vpwd_upload'				=> 'ファイルのアップロード',
	'vpwd_custom_fields_title'	=> 'カスタムフィールドの設定',
	'vpwd_custom_fields'		=> 'カスタムフィールド',
	'vpwd_edit_security_title'	=> 'パスワード・セキュリティの編集',
	'vpwd_edit_security' 		=> 'セキュリティ',
	'vpwd_edit_locking_title' 	=> '編集パスワードロック',
	'vpwd_edit_locking' 		=> 'ロック',
	'vpwd_edit_extsha_title' 	=> '外部共有の編集',
	'vpwd_edit_extsha' 			=> 'エクステンション・シェアリング',
	'vpwd_duplicate_title' 		=> '[PRJ]のパスワードの複製',
	'vpwd_duplicate' 			=> '重複',
	'vpwd_copy_title' 			=> 'パスワードを別の[PRJ]にコピーする',
	'vpwd_copy' 				=> 'コピー',
	'vpwd_move_title' 			=> 'パスワードを別の[PRJ]に移す',
	'vpwd_move' 				=> '移動',
	'vpwd_delete_title' 		=> 'パスワードの削除',
	'vpwd_delete' 				=> '削除',
	'vpwd_other_actions'		=> 'その他の措置',

	'vpwd_no_name'				=> '(名前なし)', // In case a password/project has no name (unlikely)
	'vpwd_cf_instructions'		=> '必要なカスタムフィールドのラベルとタイプを入力します。注：フィールド・タイプを'Do not use custom field" will not delete its data (if the field has any).',
	'vpwd_cf_template'			=> 'テンプレート',
	'vpwd_cf_select'			=> 'フィールドに記入するテンプレートを選択する',
	'vpwd_cf_prj_template'		=> '* PRJ]テンプレート',
	'vpwd_cf_label'				=> 'ラベル',
	'vpwd_cf_type'				=> 'タイプ',
	'vpwd_cf_custom_field'		=> 'カスタムフィールド',

	'vpwd_delete_pwd_conf1'		=> 'このパスワードを削除しますか？',
	'vpwd_delete_pwd_conf2'		=> '警告：このアクションは永続的であり、元に戻すことはできない。',

	'vpwd_duplicate_btn'		=> '重複',
	'vpwd_duplicate_new_name'	=> '新名称',
	'vpwd_duplicate_options'	=> 'オプション',
	'vpwd_duplicate_file'		=> 'ファイル',
	'vpwd_duplicate_files'		=> 'ファイル',
	'vpwd_duplicate_inc_files'	=> 'ファイルを含む',
	'vpwd_duplicate_gen_pwd'	=> 'パスワードフィールドに新しいパスワードを生成する。',
	'vpwd_duplicate_cf' 		=> 'カスタムフィールドの重複',

	'vpwd_edit_cf_label'		=> 'カスタムフィールド',
	'vpwd_edit_click_gen_pwd'	=> 'クリックしてパスワードを生成する',
 	'vpwd_edit_del_gen_pwd' 	=> '新しいパスワードを作成する場合は、現在のパスワードを削除する必要があります！',
 	'vpwd_edit_pwd_generated'	=> 'パスワードが生成された！',
 	'vpwd_edit_info_saved_enc'	=> 'この情報は暗号化されて保存される',
 	'vpwd_edit_tags_instruct'	=> '新しいタグにはカンマ（,）を使用する、'tab" for selecting from the list',
 	'vpwd_edit_basic_data_label' => '基本データ',
 	'vpwd_edit_access_examples'	=> '例： http://site, ftp://ip-address, 手動ログイン',
 	'vpwd_edit_expdate_format'	=> 'フォーマット：mm-dd-yyyy',

 	'vpwd_share_ext_check'		=> '外部と共有する',
 	'vpwd_share_ext_notes1'		=> '外部で共有されている場合、このパスワードにアクセスするためのURLは'External Sharing" tab after editing.',
	'vpwd_share_ext_notes2'		=> '外部で共有されているパスワードには、パスワード名の右側、星のアイコンの隣にこのワールドリンクアイコンがあります。',
	'vpwd_share_ext_notes3'		=> 'パスワード名、プロジェクト名、アクセス、ユーザー名、電子メール、パスワード、有効期限、カスタムフィールド、メモ、ファイル。', 	

	'vpwd_locking_check'		=> 'ロックパスワード',
	'vpwd_locking_notes1'		=> 'ロックされたパスワードを使いたいユーザーは、理由を入力してロックを解除しなければならない。',
	'vpwd_locking_notes3'		=> 'ロック解除されたパスワードは、そのユーザーのセッションが終わるまでロック解除されたままである。',
	'vpwd_locking_notes4'		=> 'ロックされたパスワードには、パスワード名の右側にある星のアイコンの隣に、このロックアイコン（ロック済み／ロック解除）が表示されます。',

	'vpwd_security_select_pm'	=> 'パスワードマネージャーを選択する',
	'vpwd_security_managed_by'	=> 'マネージメント',
	'vpwd_security_change_pm'	=> '変更',
	'vpwd_security_pwd_sec'		=> 'パスワード・セキュリティ',
	'vpwd_security_pwd_sec_desc'=> '<strong>パーミッションの設定</strong>このパスワードで<strong>ユーザー</strong>または<strong>グループ</strong>',
	'vpwd_security_show_with_perm' => 'パーミッションを持っているユーザー/グループを表示する',
	'vpwd_security_show_all' 	=> 'すべてのユーザー/グループを表示する',
	'vpwd_security_help_perm'	=> 'パーミッションに関するヘルプ',
	'vpwd_security_users'		=> 'ユーザー',
	'vpwd_security_groups'		=> 'グループ',
	'vpwd_security_members' 	=> 'メンバー',
	'vpwd_security_members_in' 	=> 'メンバー',
	'vpwd_security_ind_not1'	=> '個別のパーミッションは設定できない。',
	'vpwd_security_ind_not2'	=> 'すべてのユーザーはこのパスワードの[PRJ]の管理者であり、グループは存在しない。',

	'vpwd_sec_help_donotset1'	=> 'ユーザー/グループに明示的なパーミッションが設定されていない。',
	'vpwd_sec_help_donotset2'	=> 'ユーザーの有効権限は、そのユーザーが所属するグループとそのグループに設定されている権限、またはパスワードの[PRJ]に設定されている権限に基づいて計算されます。',
	'vpwd_sec_help_donotset3'	=> 'パーミッションが見つからなければ、アクセスはできない。',
	'vpwd_sec_help_noaccess'	=> 'の場合、ユーザー/グループはパスワードにアクセスできません。',
	'vpwd_sec_help_read'		=> 'の場合、ユーザー/グループはパスワードデータの読み取りとファイルのダウンロードのみ可能です。',
	'vpwd_sec_help_edit' 		=> 'ユーザー/グループはパスワードデータを編集し、ファイルをアップロードすることができます（ただし、管理はできません）。',
	'vpwd_sec_help_manage' 		=> 'の場合、ユーザー/グループはパスワードを完全に管理できる。',
	'vpwd_sec_help_notes_lbl' 	=> '備考',
	'vpwd_sec_help_notes1' 		=> 'ユーザー権限はグループ権限よりも優先されます。',
	'vpwd_sec_help_notes2' 		=> '特定のパスワードパーミッションは、そのパスワードに対して[PRJ]で設定されたものより優先される。例外：例外：[PRJ]管理者は[PRJ]とそのパスワードを完全に管理することができ、パスワードでこれを上書きすることはできない。',
	'vpwd_sec_help_notes3' 		=> '各ユーザーのパスワードに対する有効な権限は、パスワードのセキュリティタブに表示されます。',

	'vpwd_select_pm_user_role'	=> '<strong>ユーザー</strong>/ 役割',
	'vpwd_select_pm_users'		=> 'ユーザー',
	'vpwd_select_pm_not_found'	=> 'ユーザーが見つかりません',

	'vpwd_listcc_copied'		=> 'コピー',
	'vpwd_listcc_nothing'		=> 'コピーするものは何もない！',
	'vpwd_listcc_error'			=> 'コピーするデータの取得エラー',
	'vpwd_listcc_not_sup'		=> 'このクリップボードへのコピー方法は、このブラウザではサポートされていません。',
	'vpwd_listcc_copy'			=> 'クリップボードにコピー',

	'vpwd_ccall_copy'			=> 'すべてのフィールドをクリップボードにコピーする',
	'vpwd_ccnotes_copy'			=> 'メモをクリップボードにコピー',
	'vpwd_ccall_copied'			=> 'コピー',
	'vpwd_ccnotes_copied'		=> 'コピー',

	'vpwd_list_empty'			=> 'このフィルターや検索にはパスワードはありません。',
	'vpwd_list_sort_name'		=> '名前順',
	'vpwd_list_pwd_name'		=> 'パスワード名',
	'vpwd_list_sort_prj'		=> '[PRJ]で並べ替える',
	'vpwd_list_auep'			=> 'アクセス / ユーザー名 / メールアドレス / パスワード',
	'vpwd_list_expiry'			=> '期限切れ',
	'vpwd_list_sport_expiry'	=> '有効期限順',
	'vpwd_list_updated'			=> '更新',
	'vpwd_list_sort_updated'	=> '更新日順',
	'vpwd_list_sort_by'			=> '並べ替え',
	'vpwd_filter_expired'		=> 'フィルター期限切れ',
	'vpwd_filter_soon_expire'	=> 'フィルター期限切れ間近',
	'vpwd_filter_project'		=> 'CAP_PRJ]で絞り込む',
	'vpwd_filter_tag'			=> 'タグで絞り込む',
	'vpwd_search_tags'			=> '検索タグ',

	'vpwd_list_locked'			=> 'ロック',
	'vpwd_list_shared_ext'		=> '外部との共有',
	'vpwd_list_toggle_fav'		=> 'お気に入り',
	'vpwd_list_enter_reason_locked' => 'ロックされている：ロック解除の理由を入力',
	'vpwd_list_updated_ph' 		=> '更新',
	'vpwd_list_file'			=> 'ファイル',
	'vpwd_list_files'			=> 'ファイル',

	'vpwd_pwd_deleted'			=> 'パスワードが削除されました。',
	'vpwd_pwd_deleted_ret_prj'	=> 'パスワードの[PRJ]に戻る',
	'vpwd_pwd_deleted_ret_list'	=> 'パスワードリストに戻る',

	'vpwd_unlock_yes'			=> 'パスワードロック解除',
	
	'vpwd_unlock_reason_lbl'	=> 'ロック解除の理由を入力',
	'vpwd_unlock_reason_note'	=> '注：パスワードはセッションの間、解除されたままになります。',

	'vpwd_no_data'				=> 'このパスワードは't have any data",

	'vpwd_select_in_tree'		=> 'ツリーで選択',

	'vpwd_pwd_locked'			=> 'このパスワードはロックされています。解除するには理由を入力する必要があります。',
	'vpwd_pwd_enter_reason'		=> 'ロック解除の理由を入力',

	'vpwd_tab_data'				=> 'データ',
	'vpwd_tab_notes'			=> '備考',
	'vpwd_tab_files'			=> 'ファイル',
	'vpwd_tab_external_sharing'	=> '外部共有',
	'vpwd_tab_ext'				=> 'エクステンション', // Same as external sharing but reduced for mobile screens
	'vpwd_tab_security'			=> 'セキュリティ',
	'vpwd_tab_history'			=> '歴史',
	'vpwd_tab_log'				=> 'ログ',
	'vpwd_tabs_more'			=> 'もっと見る',

	'vpwd_no_notes'				=> 'このパスワードに関する注意事項はありません。',

	'vpwd_no_log'				=> 'このパスワードのログエントリーはありません。',

	'vpwd_managed'				=> 'マネージド',
	'vpwd_created'				=> '作成',
	'vpwd_updated'				=> '更新',
	'vpwd_on'					=> 'オン',
	'vpwd_by'					=> 'によって',

	'vpwd_ext_url'				=> 'このパスワードは、Team Password Managerにサインインしなくても、以下のURLを使用して確認することができます。',
	'vpwd_not_shared_ext'		=> 'このパスワードは外部には公開されない。',
	'vpwd_ccurl_ext_copied'		=> 'コピー',

	'vpwd_history_description'	=> 'パスワード・フィールドのデータが変更されるたびに<strong>以前の値</strong>はこのパスワード履歴に保存される。',
	'vpwd_history_date_time'	=> '日時',
	'vpwd_history_user'			=> 'ユーザー',
	'vpwd_history_changed_fields' => '変更されたフィールド',
	'vpwd_history_view_values'	=> '価値を見る',
	'vpwd_history_no_history'	=> 'このパスワードには履歴がない。',
	'vpwd_history_only_changed_shown' => '変更されたフィールドのみが表示される',
	'vpwd_history_record_not_exist' => 'このパスワードの履歴レコードは存在しません。',

	'vpwd_files_no_files' 		=> 'このパスワードは't have any files.",

	'vpwd_security_description'	=> 'このパスワードの有効なパーミッションは以下の通りです。',
	'vpwd_security_name'		=> '名称',
	'vpwd_security_role'		=> '役割',
	'vpwd_security_permission'	=> '許可',
	'vpwd_security_granted_via'	=> '許可する',
	'vpwd_security_error'		=> 'このパスワードのセキュリティデータの取得にエラーが発生しました。',

	// controllers/prj
	'c_prj_in'					=> 'で',
	'c_prj_search_results'		=> '検索結果',
	'c_prj_favorite_prjs'		=> 'お気に入り【CAP_PRJS',
	'c_prj_archived_prjs'		=> 'アーカイブ【CAP_PRJS',
	'c_prj_recent_prjs'			=> '最近の【CAP_PRJS',
	'c_prj_active_prjs'			=> 'アクティブ【CAP_PRJS',
	'c_prj_favorite'			=> 'お気に入り',
	'c_prj_archived'			=> 'アーカイブ',
	'c_prj_recent'				=> '最近',
	'c_prj_active'				=> 'アクティブ',
	'c_prj_not_found_title'		=> '[PRJ] 見つかりません',
	'c_prj_not_found_desc'		=> 'この[PRJ]が存在しないか、アクセスできません。',
	'c_prj_prj_exists_level' 	=> '[PRJ]はすでにこのレベルに存在している。',

	'c_prj_edit_project'		=> '[PRJ]を編集する',
	'c_prj_edit_archived'		=> 'この[PRJ]は<span class=]なので編集できない。'label label-warning tpm-archived">Archived</span>',
	'c_prj_edit_permission' 	=> 'この[PRJ]を編集するために必要な権限がありません。',
	'c_prj_new_project'			=> 'new [PRJ］',
	'c_prj_new_no_more_projects'=> '申し訳ありませんが、これ以上[PRJS]を作成することはできません。',
	'c_prj_new_free'			=> 'を使用しています。<strong>無料版</strong>を持つことができる。<strong>2ユーザーと5 [PRJS］</strong>すでに5つの[PRJS]を持っています。より多くのユーザーと無制限の[PRJS]を持つためにライセンスを追加する必要があります。',
	'c_prj_new_buy' 			=> 'Team Password Managerのウェブサイトからライセンスを購入できます。',
	'c_prj_new_cannot'			=> '申し訳ありませんが、[PRJS]は作成できません。',
	'c_prj_new_no_access_parent'=> 'の場合、親の[PRJ]にはアクセスできない。',
	'c_prj_edit_error'			=> '[PRJ]の保存にエラーが発生しました。',

	'c_prj_edit_sec_managed_by'	=> 'マネージメント',
	'c_prj_eps' 				=> '編集 [PRJ] セキュリティ',
	'c_prj_eps_archived'		=> 'この[PRJ]のセキュリティは、<span class="PRJ">であるため編集できない。'label label-warning tpm-archived">Archived</span>',
	'c_prj_eps_perm' 			=> 'この[PRJ]のセキュリティを編集するのに必要な権限がありません（管理権限が必要です）。',
	'c_prj_eps_error_saving'	=> '[PRJ]のセキュリティ保存にエラーが発生しました。',
	'c_prj_eps_no_members'		=> 'このグループにはメンバーはいません',

	'c_prj_delete'				=> '削除 [PRJ］',
	'c_prj_delete_archived'		=> '[PRJ]を削除することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_prj_delete_not_leaf'		=> 'この[PRJ]は[SUBPRJS]を持っているので削除できない。',
	'c_prj_delete_not_leaf_explain'	=> '現在、削除できるのは階層の末尾にある[PRJS]のみである。',
	'c_prj_delete_perm'			=> 'この[PRJ]を削除するのに必要な権限がありません（管理権限と管理者、[CAP_PRJ]マネージャ、またはITロールが必要です）。',
	'c_prj_delete_error'		=> 'エラー： [PRJ]は<strong>違う</strong>データベースエラーにより削除されました。',

	'c_prj_archive'				=> 'アーカイブ[PRJ］',
	'c_prj_archive_archived'	=> '[PRJ]はすでに<span class='label label-warning tpm-archived">Archived</span>.',
	'c_prj_archive_perm'		=> 'この[PRJ]をアーカイブするのに必要な権限がありません（管理権限が必要です）。',
	'c_prj_archive_error'		=> '[PRJ]のアーカイブにエラーが発生しました。',

	'c_prj_unarchive'			=> 'アン・アーカイブ[PRJ］',
	'c_prj_unarchive_unarchived'=> '[PRJ]はすでに<strong>未アーカイブ</strong>.',
	'c_prj_unarchive_perm'		=> 'この[PRJ]をアーカイブ解除するのに必要な権限がありません（管理権限が必要です）。',
	'c_prj_unarchive_error'		=> '[PRJ]のアーカイブ解除にエラーが発生しました。',

	'c_prj_cft'					=> '新しいパスワード用のカスタム・フィールド・テンプレート',
	'c_prj_cft_archived'		=> '[PRJ]が<span class="PRJ "であるため、この[PRJ]のカスタムフィールドテンプレートを編集することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_prj_cft_perm'			=> 'この[PRJ]のカスタム・フィールド・テンプレートを編集するのに必要な権限がありません（管理権限が必要です）。',
	'c_prj_cft_error'			=> 'テンプレートの保存でエラーが発生しました。',

	'c_prj_tree_select_project'	=> '[PRJ]を選択する。',
	'c_prj_tree_root'			=> 'ルート',
	'c_prj_tree_all'			=> 'すべて',

	'c_prj_change_parent'		=> '親を変える',
	'c_prj_select_new_parent'	=> 'の新しい親を選択する。',
	'c_prj_copy_pwd_select_prj'	=> '[PRJ]を選択し、パスワードをコピーする。',
	'c_prj_copy_pwd_grayed'		=> 'パスワードをコピーできない[PRJS]がグレー表示になっている',
	'c_prj_copy_my_pwd'			=> 'パスワードをコピーする',
	'c_prj_move_pwd_select_prj'	=> '[PRJ]を選択し、パスワードを',
	'c_prj_move_pwd_grayed'		=> '[PRJS]パスワードの移動先がグレーになっている',
	'c_prj_move_my_pwd'			=> 'パスワードの移動',
	'c_prj_new_pwd_select_prj'	=> '[PRJ]を選択し、新しいパスワードを作成する。',
	'c_prj_new_pwd_grayed' 		=> 'パスワードを作成できない[PRJS]がグレー表示される',
	'c_prj_new_prj_select_prj'	=> 'の中に新しい[PRJ]を作成するために、親[PRJ]（またはルート）を選択する。',
	'c_prj_tree_select_parent_project' => 'セレクトペアレント[PRJ］',
	'c_prj_tree_select_parent_project_importing' => 'インポートに使用する親の[PRJ]（またはルート）を選択する。',
	'c_prj_select_prj_export'	=> 'からパスワードをエクスポートするには、[PRJ]（またはすべて）を選択します。',
	'c_prj_select_prj_export_grayed' => 'パスワードをエクスポートできない[PRJS]がグレー表示されています。',

	'c_prj_change_parent_error'	=> '[PRJ]の親を変更するエラーが発生しました。',
	'c_prj_change_parent_no_access_parent' => 'そのため、[PRJ]の親をその親に変更することはできない。',
	'c_prj_change_parent_incorrect_parent' => '新しい親が正しくない',
	'c_prj_change_parent_perm'	=> 'この[PRJ]の親を変更するために必要な許可を持っていません。',
	'c_prj_change_parent_archived' => '[PRJ]がアーカイブされた場合、その親を変更することはできない。',

	// views/prj
	'vprj_new_pwd_phone'		=> '新しいパスワード',	// =new password but reduced for phones
	'vprj_new_pwd_title'		=> 'この[CAP_PRJ]にパスワードを作成する。',

	'vprj_unarchive'			=> 'アン・アーカイブ',
	'vprj_unarchive_title'		=> 'この[CAP_PRJ]のアーカイブを解除する',	

	'vprj_new_subprj'			=> '新しい[CAP_SUBPRJ]。',

	'vprj_edit_title'			=> '[PRJ]データを編集する',
	'vprj_edit'					=> '編集',

	'vprj_edit_security'		=> 'セキュリティ',
	'vprj_edit_security_title'	=> '編集 [PRJ] セキュリティ',

	'vprj_cft_title'			=> '新しいパスワード用のカスタム・フィールド・テンプレート',
	'vprj_cft'					=> 'C.F.テンプレート',

	'vprj_archive'				=> 'アーカイブ',
	'vprj_archive_title'		=> 'この[CAP_PRJ]をアーカイブする',

	'vprj_delete'				=> '削除',
	'vprj_delete_title'			=> 'この[PRJ]とすべてのパスワードを削除する',

	'vprj_no_pwd_filter'		=> 'この[PRJ]は、現在のフィルターではパスワードを持っていない。',
	'vprj_no_pwd'				=> 'この[PRJ]にはパスワードがない。',

	'vprj_list_toggle_fav'		=> 'お気に入り',
	'vprj_archived'				=> 'アーカイブ', // prj main screen

	'vprj_tab_passwords'		=> 'パスワード',
	'vprj_tab_pwds'				=> 'パスワード', // Same as vprj_tab_passwords but reduced for mobile
	'vprj_tab_notes'			=> '備考',
	'vprj_tab_files'			=> 'ファイル',
	'vprj_tab_security'			=> 'セキュリティ',
	'vprj_tab_log'				=> 'ログ',

	'vprj_search_filter_pwds'	=> 'パスワードの検索・絞り込み',
	'vprj_search'				=> '検索',
	'vprj_managed'				=> 'マネージド',
	'vprj_created'				=> '作成',
	'vprj_updated'				=> '更新',
	'vprj_on'					=> 'オン',
	'vprj_by'					=> 'によって',

	'vprj_no_notes'				=> 'この[PRJ]に関する注釈はない。',
	'vprj_files_no_files' 		=> 'この[PRJ]は't have any files.",

	'vpr_sec_select_pm'			=> '[PRJ]マネージャーを選択する',
	'vprj_sec_set_to'			=> '[PRJ]セキュリティが設定されている',
	'vprj_sec_grant_all'		=> 'すべてのユーザーに以下の権限を与える。',
	'vprj_sec_individual'		=> 'この[PRJ]のパーミッションを個々のユーザーおよび/またはグループに設定する。',
	'vprj_sec_effective'		=> 'この[PRJ]の有効なパーミッションは以下の通り：',

	'vprj_sec_name'				=> '名称',
	'vprj_sec_role'				=> '役割',
	'vprj_sec_prj_perm'			=> '[PRJ]許可',
	'vprj_sec_pwds_perm'		=> 'パスワード許可',
	'vprj_sec_granted_via'		=> '許可する',
	'vprj_sec_error'			=> 'この[PRJ]のセキュリティデータの取得にエラーが発生しました。',
	'vprj_log_no_entries'		=> 'この[PRJ]に関するログ・エントリーはありません。',

	'vprj_enter_prj_search'		=> '[PRJ]を入力して検索する',
	'vprj_edit_sec_prj_security' => '[PRJ] セキュリティ',

	'vprj_sec_help_donotset1'	=> 'ユーザー/グループに明示的なパーミッションが設定されていない。',
	'vprj_sec_help_donotset2'	=> 'ユーザーの有効なパーミッションは、グループ内のメンバーシップと、それらのグループに設定されているパーミッションに基づいて計算されます。',
	'vprj_sec_help_donotset3'	=> 'パーミッションが見つからなければ、アクセスはできない。',
	'vprj_sec_help_no_access'	=> 'そのユーザー/グループは、[PRJ]またはそのパスワードにアクセスできません。',
	'vprj_sec_help_traverse'	=> 'ユーザー/グループには[PRJ]名のみが表示されます。',
	'vprj_sec_help_read'		=> 'の場合、ユーザー/グループは[PRJ]データとそのパスワードのみを読むことができます。',
	'vprj_sec_help_create_pwd'	=> 'このユーザー/グループは、[PRJ]データを読み取り、その中にパスワードを作成することができます。',
	'vprj_sec_help_edit_pwd'	=> 'このユーザー/グループは、[PRJ]データの読み取りとパスワードデータの編集が可能です（パスワードの作成も可能です）。',
	'vprj_sec_help_manage_pwd'	=> 'このユーザー/グループは、[PRJ]データの読み取りとパスワードの管理が可能です（パスワードの作成も可能です）。',
	'vprj_sec_help_manage'		=> 'ユーザー/グループが[PRJ]とそのパスワードを完全にコントロールできる。',
	'vprj_sec_help_inherit'		=> 'の場合、ユーザー/グループは親[PRJ]に設定された権限を継承します。',
	'vprj_sec_help_notes1'		=> 'ユーザー権限はグループ権限よりも優先されます。',
	'vprj_sec_help_notes2'		=> '各ユーザの「PRJ」に対する有効な権限は、「PRJ」のセキュリティタブに表示されます。',

	'vprj_archive_project'		=> '[PRJ]のアーカイブ？',
	'vprj_archive_project_desc'	=> 'アーカイブされた[PRJ]（とそのパスワード）は変更できない。',
	'vprj_unarchive_project'	=> 'この[PRJ]のアーカイブを解除する？',

	'vprj_del_has_pwd'			=> 'この[PRJ]には以下のパスワードがある。',
	'vprj_del_no_pwd'			=> 'この[PRJ]は't have any passwords.",
	'vprj_del_confirm_pwds'		=> 'この[PRJ]とすべてのパスワードを削除しますか？',
	'vprj_del_confirm_no_pwds'	=> 'この[PRJ]を削除しますか？',
	'vprj_del_warning'			=> '警告：このアクションは永続的であり、元に戻すことはできない。',
	'vprj_del_deleted'			=> '[PRJ]は削除された。',
	'vprj_del_goto_list'		=> 'アクティブな[PRJS]リストに移動する。',

	'vprj_cft_instructions'		=> 'この[PRJ]の新しいパスワードには、以下のカスタムフィールドがあります。',
	'vprj_cft_select'			=> 'グローバル・テンプレートを選択し、フィールドを埋める',

	'vprj_list_empty'			=> 'このフィルターまたは検索を使用した[PRJS]はありません。',
	'vprj_list_sort_name'		=> '名前順',
	'vprj_list_sort_managed_by'	=> '管理順',
	'vprj_list_sort_updated'	=> '更新日順',
	'vprj_list_managed_by'		=> 'マネージメント',
	'vprj_list_updated'			=> '更新',

	// views/files
	'vfiles_filename'			=> 'ファイル名',
	'vfiles_size'				=> 'サイズ',
	'vfiles_notes'				=> '備考',
	'vfiles_updated'			=> '更新',
	'vfiles_download'			=> 'ダウンロード',
	'vfiles_edit'				=> '編集',
	'vfiles_del'				=> '削除',
	'vfiles_view'				=> '表示',

	// External access
	'c_pwde_file_not_exist'		=> '要求されたファイルが存在しないか、アクセスできません。',
	'v_pwde_file'				=> 'ファイル',
	'v_pwde_ret_files_list'		=> 'パスワードファイル一覧に戻る',

	// v4
	'vpwd_locking_perm_check'	=> 'ロック解除の許可が必要',
	'vpwd_locking_notes21'		=> 'もし'Requires permission to unlock" is checked, a request is sent to the password manager to grant permission to unlock.',
	'vpwd_locking_notes2'		=> 'もし'Requires permission to unlock" is not checked, when a password is unlocked an email message is sent to the password manager with the entered reason.', // Changed

	'vpwd_list_enter_reason_locked_perm' => 'ロックされている：ロック解除の許可を求める',

	'vpwd_pwd_locked_perm'		=> 'このパスワードはロックされています。ロックを解除するには、管理者に許可を求める必要があります。',
	'vpwd_pwd_enter_reason_perm' => 'ロック解除許可の申請',

	'vpwd_unlock_yes_perm'		=> 'ロック解除許可の申請',
	'vpwd_unlock_perm_lbl1'		=> 'このパスワードを解除する許可をマネージャーに要求する',
	'vpwd_unlock_perm_lbl2'		=> 'マネージャーがパスワードの解除を許可すると、メールが届きます。',

	'c_pwd_not_valid_requester1' => 'このパスワードのロックを解除するには、そのマネージャ（またはその[PRJ]内のマネージャ）からのパーミッションが必要ですが、パーミッションを要求する有効なマネージャが存在しません。ここで、有効とは、マネージャが存在し、読み取り専用ではなく、API専用でもなく、アクティブなロールを持つことを意味します。',
	'c_pwd_not_valid_requester2' => 'パスワードの[PRJ]に有効なマネージャーを設定し、再度お試しください。',

	'm_pwd_notif_unlock_perm' 	=> 'パスワードロック解除許可',
	'm_pwd_notif_desc_perm'		=> '以下のユーザーは、以下のパスワードの解除許可を求めています。',
	'm_pwd_notif_why'			=> 'あなたがそれを受け取っているのは、あなたがパスワードの管理者だからです。',
	'm_pwd_notif_action_perm'	=> 'このパスワードの解除を許可または取り消すには、ここをクリックしてください。',

	'c_pwd_ur_not_found_title'	=> 'ロック解除要求が見つかりません',
	'c_pwd_ur_not_found_desc'	=> 'このロック解除リクエストは存在しないか、アクセスできません。',
	'c_pwd_ur_title'			=> 'ロック解除リクエスト',

	'vpwd_ur_notif_desc_perm'	=> '次のユーザーは、このパスワードのロック解除の許可を求めています。',
	'vpwd_ur_not_locked'		=> 'このパスワードはもうロックされていない',
	'vpwd_ur_already_granted'	=> 'ロック解除の許可が下りた<strong>付与</strong>このリクエストに対して',
	'vpwd_ur_already_revoked'	=> 'ロック解除の許可が下りた<strong>取り消し</strong>このリクエストに対して',

	'vpwd_pwd_unlock_grant_btn'	=> 'ロック解除の許可を与える',
	'vpwd_pwd_unlock_revoke_btn'=> 'ロック解除許可の取り消し',
	'vpwd_pwd_unlock_grant_confirm'	=> 'ロック解除の許可を与えるか？',
	'vpwd_pwd_unlock_revoke_confirm'=> 'ロック解除の許可を取り消すか？',
	'vpwd_pwd_unlock_grant_desc'	=> '確認すると、パスワードを解除してアクセスするためのリンクが記載されたEメールがユーザーに送信されます。',
	'vpwd_pwd_unlock_revoke_desc'	=> '確定すると、その旨を知らせるメールが送信されます。',
	'vpwd_pwd_granted_on'		=> '付与日',
	'vpwd_pwd_revoked_on'		=> '失効日',

	'm_pwd_perm_unlock_granted'	=> 'パスワードロック解除許可',
	'm_pwd_perm_unlock_granted_desc' => '以下のパスワードのロック解除が許可されました。',
	'm_pwd_unlockview'			=> 'パスワードを解除してアクセスするにはここをクリック',
	'm_pwd_notif_grant_why'		=> 'このパスワードを解除する許可を要求したため、あなたはこのパスワードを受け取っています。',
	'm_pwd_granted_by'			=> '助成金',

	'm_pwd_perm_unlock_revoked'	=> 'パスワードロック解除許可の取り消し',
	'm_pwd_perm_unlock_revoked_desc' => '以下のパスワードの解除許可が取り消されました。',
	'm_pwd_revoked_by'			=> 'によって取り消された。',

	'vpwd_unlock_perm_lbl_self' => 'このパスワードの管理者はあなたなので、パスワードを解除するには理由を入力するだけです。',

	'vpwd_unlock_request_sent'	=> 'リクエストは送信され、マネージャーが許可または取り消すと、Eメールメッセージが届きます。',

	// v5
	'vpwd_locking_notify'		=> 'ロック解除時に通知',
	'vpwd_locking_request'		=> 'への許可を要請する。',
	'vpwd_locking_notify_pm'	=> 'パスワード・マネージャー',
	'vpwd_locking_notify_manage'=> 'パスワードの管理権限を持つすべてのユーザー',
	'm_pwd_notif_manage_why'	=> 'ロック解除されたパスワードの管理権限を持っているため、あなたはそれを受け取っているのです。',

	'vpwd_unlock_sending_notif'	=> '通知を送信中 ... しばらくお待ちください',
	'vpwd_unlock_sending_req'	=> '許可リクエストの送信 ... しばらくお待ちください',

	'vpwd_unlock_perm_lbl1_manage' => 'このパスワードの解除許可を管理者に要求する。',
	'vpwd_unlock_perm_lbl2_manage' => 'マネージャーがパスワードの解除を許可すると、Eメールが送信されます。',

	'm_pwd_notif_manage_why_req' => 'あなたはパスワードの管理権限を持っているため、それを受け取っているのです。',
	'm_pwd_notif_why_req'		=> 'あなたがそれを受け取っているのは、あなたがパスワードの管理者だからです。',

	'c_pwd_not_valid_requester1all' => 'このパスワードを解除するには、（自分自身ではない）マネージャーからの権限が必要ですが、権限を要求する有効なマネージャーが存在しません。ここで、有効とは、マネージャが存在し、読み取り専用でもなく、API専用でもなく、アクティブなロールを持つことを意味します。',

	// v7
	'c_prj_new_prj_select_prj_no_root'	=> 'の中に新しい[PRJ]を作成するために、親[PRJ]を選択する。',
	'c_prj_tree_select_parent_project_importing_no_root' => 'インポートに使用する親[PRJ]を選択する',
	'c_prj_new_no_root' 		=> '[PRJS]はrootでは作成できません。',
	'c_prj_change_parent_not_root' => 'rootを新しい親に設定することはできません。',

	'vpwd_list_shared_ext_exp'	=> '外部共有（期限切れ）',

	'pwde_view_page'			=> 'ページを見る',
	'pwde_csrf_validation_error' => 'セッションの有効期限が切れました。',
	'pwde_incorrect_pwd'		=> 'パスワードが正しくありません。',

	'pwde_external_sharing_url'	=> '外部共有URL',
	'pwde_external_sharing_exp_date' => '外部共有の有効期限',
	'pwde_external_sharing_pwd' => '外部共有パスワード',

	'pwde_external_sharing_url_not_valid' => '外部共有URLはもはや有効ではありません',
	'pwde_external_sharing_url_not_valid_after' => 'この日を過ぎると、外部共有URLは無効になります。',

	'pwde_expiry_date' 			=> '有効期限',
	'pwde_ess_no_longer_valid' 	=> 'この日を過ぎると外部共有は無効となる（オプション）',
	'pwde_protect_external_view' => '外観を保護する（オプション）',

	'vpwd_share_ext_notes22'	=> '期限切れの外部共有パスワードには、代わりにこのアイコンが表示される。',

	// v9
	'vpwd_link_title' 			=> 'パスワードを別の[PRJ]にリンクする',
	'vpwd_link' 				=> 'リンク',
	'c_prj_link_pwd_select_prj'	=> '[PRJ]を選択し、パスワードとリンクさせる。',
	'c_prj_link_pwd_grayed'		=> '[PRJS]パスワードのリンク先がグレーになっている',
	'c_pwd_link_pwd'			=> 'リンクパスワード',
	'c_pwd_link_pwd_locked'		=> 'このパスワードはロックされています。リンクするにはロックを解除する必要があります。',
	'c_pwd_link_pwd_linked_error' => 'パスワードはリンクされましたが、このようなエラーが発生しました。',
	'c_pwd_link_pwd_error'		=> 'パスワードのリンクにエラーが発生しました。',
	'c_pwd_link_pwd_cannot' 	=> 'このパスワードは以下の理由でリンクできません。',
	'c_pwd_link_pwd_csrf'		=> 'パスワードがリンクされていません（CSRF検証）。もう一度お試しください。',
	'c_pwd_link_pwd_manage'		=> 'パスワードをリンクするには、パスワードの管理権限が必要です。',
	'v_pwd_linked_password'		=> 'リンクパスワード',
	'v_pwd_source_password'		=> 'ソースパスワード',
	'v_pwd_go_to_source_password' => 'ソースパスワードへ',
	'vpwd_tab_linked_passwords' => 'リンクされたパスワード', // Tab in passwords
	'vpwd_tab_linked_passwords_short' => '連動', // Tab in passwords (short version, for responsive)
	'vpwd_not_linked_passwords'	=> 'このパスワードは't have any linked passwords.",
	'vpwd_not_perm_linked_passwords' => 'あなたは't have enough permission to view the linked passwords.",
	'v_pwd_linked_pwd_from' 	=> 'このパスワードは以下の[PRJS]からリンクされています：',
	'vpwd_linked_actions'		=> '行動',
	'vpwd_linked_passwords_list_error' => 'このパスワードのリンク先パスワードの取得にエラーが発生しました。',
	'v_pwd_linked_prj_no_access' => '(あなたは't have access to this [PRJ])",
	'v_pwd_goto_linked_password' => 'リンクされたパスワードへ',
	'v_pwd_unlink'				=> 'リンク解除',
	'v_pwd_unlink_title'		=> 'パスワードの解除',

	'c_pwd_linked_cannot_edit'	=> 'これはリンクされたパスワードです。リンクされたパスワードは読み取り専用で、編集することはできません。',
	'c_pwd_linked_cannot_del' 	=> 'これはリンクされたパスワードです。リンクされたパスワードは読み取り専用で、削除することはできませんが、リンクを解除することはできます。',
	'c_pwd_linked_cannot_dup' 	=> 'これはリンクされたパスワードです。リンクされたパスワードは複製できません。',
	'c_pwd_linked_cannot_copy' 	=> 'これはリンクされたパスワードです。リンクされたパスワードはコピーできません。',
	'c_pwd_linked_cannot_move' 	=> 'これはリンクされたパスワードです。リンクされたパスワードは移動できません。',
	'c_pwd_linked_cannot_link' 	=> 'これはリンクされたパスワードです。リンクされたパスワードはリンクできません。',

	'c_pwd_move_pwd_archived' 	=> 'このパスワードは[PRJ]が<span class=]であるため移動できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_link_pwd_archived' => '[PRJ]が<span class="PRJ "であるため、このパスワードを別の[PRJ]にリンクすることはできません。'label label-warning tpm-archived">Archived</span>.',

	'v_pwd_sec_linked_notes'	=> 'リンクされたパスワードは読み取り専用なので、ユーザーがパスワードの編集/管理権限を持っていても、編集することはできません。',
	'vpwd_sec_help_manage_linked' => 'リンクされたパスワードは読み取り専用なので編集できないことに注意。',

	'c_pwd_unlink_pwd'			=> 'パスワードの解除',
	'vpwd_unlink_pwd_conf1'		=> 'このパスワードを解除しますか？',
	'c_pwd_unlink_pwd_locked'	=> 'このパスワードはロックされています。解除するにはロックを解除する必要があります。',
	'c_pwd_unlink_pwd_archived'	=> 'このパスワードは[PRJ]が<span class=]であるため、リンクを解除できない。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unlink_pwd_perm'		=> 'このパスワードのリンクを解除するのに必要な権限がありません（管理権限が必要です）。',
	'c_pwd_notlinked_cannot_unlink' => 'これはリンクされたパスワードではないので、リンクを解除することはできません。',
	'c_pwd_unlink_pwd_error'	=> 'エラー: パスワードが<strong>違う</strong>データベースエラーによりリンクが解除された。',

	'vpwd_pwd_unlinked'			=> 'パスワードのリンクが解除されました。',
	'c_pwd_link_pwd_not_enabled' => 'リンクされたパスワードの作成が有効になっていない',

	// v10
	'vpwd_archive'				=> 'アーカイブ',
	'vpwd_archive_title'		=> 'このパスワードをアーカイブする',
	'vpwd_archived'				=> 'アーカイブ',

	'c_pwd_pwdarchived_edit'	=> 'このパスワードは<span class=>であるため、編集することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_sec_pwdarchived'=> 'このパスワードは<span class=>であるため、パスワードのセキュリティを変更することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_edit_pwd_locking_pwdarchived' => 'このパスワードは<span class=>であるため、パスワードロックを変更することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_delete_pwd_pwdarchived'	=> 'このパスワードは<span class=>であるため、削除できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unlink_pwd_pwdarchived'	=> 'このパスワードは<span class=>であるため、リンクを解除することはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_move_pwd_pwdarchived' 	=> 'このパスワードは<span class=>であるため移動できない。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_link_pwd_pwdarchived' => 'このパスワードを別の[PRJ]にリンクすることはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_cf_config_pwdarchived' 	=> 'パスワードのカスタムフィールド設定は、<span class="パスワード">であるため変更できません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_ext_sharing_pwdarchived'=> 'このパスワードの外部共有は、<span class=>であるため編集できません。'label label-warning tpm-archived">Archived</span>.',

	'c_pwd_archive_pwd'			=> 'アーカイブパスワード',
	'c_pwd_archive_pwd_locked'	=> 'このパスワードはロックされています。アーカイブするにはロックを解除する必要があります。',
	'c_pwd_archive_pwd_pwdarchived'	=> 'このパスワードは、すでに<span class=>であるため、アーカイブすることはできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_archive_pwd_archived'	=> 'このパスワードは、[PRJ]が<span class=]であるため、アーカイブできません。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_archive_pwd_perm'		=> 'このパスワードをアーカイブするのに必要な権限がありません（管理権限が必要です）。',

	'vpwd_archive_pwd_conf1'		=> 'このパスワードをアーカイブしますか？',
	'vpwd_unarchive_pwd_conf1'		=> 'このパスワードのアーカイブを解除しますか？',
	'vpwd_archive_pwd_conf2'		=> 'アーカイブされたパスワードは変更できません。',

	'c_pwd_archive_pwd_error' 		=> 'エラー: パスワードが<strong>違う</strong>データベースエラーによりアーカイブされた。',

	'vpwd_unarchive_title'			=> 'このパスワードのアーカイブを解除する',
	'vpwd_unarchive'				=> 'アン・アーカイブ',

	'c_pwd_unarchive_pwd'			=> 'パスワードのアーカイブ解除',
	'c_pwd_unarchive_pwd_locked'	=> 'このパスワードはロックされています。アーカイブを解除するには、ロックを解除する必要があります。',
	'c_pwd_unarchive_pwd_perm'		=> 'このパスワードをアーカイブ解除するのに必要な権限がありません（管理権限が必要です）。',
	'c_pwd_unarchive_pwd_archived'	=> 'このパスワードは[PRJ]が<span class=]であるため、アーカイブを解除できない。'label label-warning tpm-archived">Archived</span>.',
	'c_pwd_unarchive_pwd_not_archived' => 'このパスワードは<span class=>ではないため、アーカイブを解除することはできない。'label label-warning tpm-archived">Archived</span>.',

	'c_pwd_unarchive_pwd_error' 		=> 'エラー: パスワードが<strong>違う</strong>データベースのエラーによりアーカイブされなかった。',

	'v_security_configuration'		=> 'セキュリティ設定',
	'v_user_permissions'			=> 'ユーザー権限',
	'v_group_permissions'			=> 'グループ権限',
	'v_show_users_with_permission'	=> 'パーミッションを持っているユーザーを表示する',
	'v_show_all_users'				=> 'すべてのユーザーを表示する',
	'v_show_groups_with_permission'	=> 'パーミッションを持つグループを表示する',
	'v_show_all_groups'				=> 'すべてのグループを表示',
	'vprj_project_permissions'		=> '[PRJ] パーミッション',

	// Changed vprj_edit_sec_only_pm_adm
	'vprj_edit_sec_only_pm_adm'		=> '現在、この[PRJ]にアクセスできるのは、[PRJ]マネージャーとアドミンユーザーのみである。',

	'v_set_perm_bulk_users'			=> '選択したユーザーにアクセス許可を設定する',
	'v_set_perm_bulk_groups'		=> '選択したグループにアクセス許可を設定する',

	'vpwd_password_permissions'		=> 'パスワード許可',

	// v12
	'vfiles_info'					=> 'インフォメーション',
	'vpwd_secret_key'				=> 'シークレット・キー',
	'vpwd_get_otp_value'			=> '値を取得する',

	// v15
	'm_pwd_trash_not_found'			=> 'パスワードが見つかりません',
	'm_pwd_trash_not_linked'		=> 'リンクされたパスワードは削除できない',
	'm_pwd_trash_prj_not_found'		=> '[PRJ]が見つからない',
	'm_pwd_trash_error_unlink'		=> 'パスワードのリンク解除エラー',
	'c_pwd_trash_pwd_error'			=> 'パスワードのゴミ箱への移動エラー：',
	'm_pwd_trash_error_transaction'	=> 'トランザクションのエラー',
	'vpwd_pwd_trash'				=> 'パスワードはゴミ箱に移動しました。',
	'vpwd_trash_pwd_conf1'			=> 'このパスワードをゴミ箱に移動しますか？',

	'vprj_tab_trash_bin'			=> 'ゴミ箱',
	'vprj_trash_no_entries'			=> 'この[PRJ]のゴミ箱は空っぽだ',
	'vtrash_list_sort_deleted'		=> 'クリックすると削除日でソートされます。',
	'vtrash_list_deleted'			=> '削除',
	'vtrash_deleted_by'				=> '削除者',
	'vtrash_by'						=> 'による',
	'vtrash_pwd_not_shown'			=> 'ゴミ箱に入らない',
	'vtrash_pwd_list_basic_data'	=> '基本データ',
	'vtrash_actions'				=> '行動',
	'vtrash_restore'				=> 'リストア',
	'vtrash_delete_permanently'		=> '永久削除',
	'v_trash_prj_title'				=> 'この[PRJ]のゴミ箱には %d 個のパスワードがあります：', // %d gets replaced by the number of passwords
	'v_trash_prj_title_sing'		=> 'この[PRJ]のゴミ箱には1つのパスワードがある：',
	'vtrash_empty_project_trash_bin' => 'この[PRJ]のゴミ箱を空にする。',
	'c_pwd_delperm_pwd'				=> 'パスワードの永久削除',
	'c_pwd_not_found_trash_delperm'	=> 'このパスワードはゴミ箱に入っていないか、永久に削除する権限がありません。',
	'c_pwd_not_found_trash_restore'	=> 'このパスワードはゴミ箱に入っていないか、復元する権限がありません。',
	'vpwd_delperm_conf1'			=> 'このパスワードを永久に削除しますか？',
	'c_pwd_delperm_pwd_error'		=> 'パスワードの永久削除エラー：',
	'c_pwd_delperm_ok'				=> 'パスワードは永久に削除されました。',
	'm_pwd_trash_not_found_in_trash' => 'ゴミ箱にパスワードが見つからない',
	'c_pwd_restore_pwd'				=> 'パスワードの復元',
	'vpwd_restore_conf'				=> 'このパスワードを復元しますか？',
	'c_pwd_restore_pwd_error'		=> 'パスワードの復元エラー：',
	'c_pwd_restore_ok'				=> 'パスワードが復元されました。',
	'c_pwd_cannot_restore_same_name' => '[PRJ]に同じ名前の別のパスワードがあるため、パスワードを復元できない。',
	'c_prj_empty_trash_bin'			=> '[PRJ]のゴミ箱を空にする',
	'c_prj_empty_trash_bin_perm'	=> 'この[PRJ]のゴミ箱を空にするのに必要な権限がありません（管理権限が必要です）。',
	'c_pwd_cannot_restore_archived'	=> 'パスワードの[PRJ]が<span class=]であるため、パスワードを復元できません。'label label-warning tpm-archived">Archived</span>.',
	'c_prj_empty_trash_bin_empty'	=> 'この[PRJ]のゴミ箱はすでに空っぽだ。',
	'vprj_empty_trash_bin_project'	=> 'この[PRJ]のゴミ箱を空にする？',
	'vprj_empty_trash_bin_project_note' => '警告：この操作を行うと、この[PRJ]のゴミ箱にあるすべてのパスワードが永久に削除されます。この操作は元に戻せません。',
	'vpwd_trash_pwd_note_linked'	=> '<strong>注</strong>このパスワードにはリンクされているパスワードがあり、そのパスワードがゴミ箱に移動されるとリンクが解除されます。',

	'm_prj_trash_not_leaf'			=> '[PRJ]はリーフ[PRJ]ではないので削除できない',
	'vprj_del_has_pwd_not_linked'	=> 'この[PRJ]には以下のパスワードがある（リンクされていない）。',
	'vprj_del_has_pwd_linked'		=> 'この[PRJ]には、以下のリンク・パスワードがある。',
	'vprj_trash_confirm_pwds'		=> 'この[PRJ]とパスワードをゴミ箱に移動しますか？',
	'vprj_trash_confirm_no_pwds'	=> 'この[PRJ]をゴミ箱へ？', 
	'vprj_trash_note_linked'		=> '<strong>注</strong>PRJ]がゴミ箱に移動されると、リンクされたパスワードは解除されます。',

	'c_prj_delete_error'			=> '[PRJ]の削除エラー',

	'c_tree_trash_bin'				=> 'ゴミ箱',

	'vtrash_list_empty'				=> 'ゴミ箱が空です',
	'vtrash_title_admin'			=> 'ゴミ箱',
	'vtrash_title_non_admin'		=> 'ゴミ箱',
	'vtrash_note_admin'				=> 'すべてのパスワードと[PRJS]をゴミ箱へ',
	'vtrash_note_non_admin'			=> 'ゴミ箱に移動したパスワードと[PRJS]について',

	'v_in_trash'					=> 'ゴミ箱の中',

	'vtrash_list_sort_type'			=> 'クリックしてタイプ別に並べ替える',
	'vtrash_type'					=> 'タイプ',
	'vtrash_list_sort_name'			=> '名前をクリックするとソートされます。',
	'vtrash_name'					=> '名称',
	'vtrash_prj_parent'				=> '[PRJ]または親',
	'vtrash_list_sort_pp'			=> 'CAP_PRJ]または[親]でソートする場合はクリックしてください。',
	'vtrash_list_sort_user'			=> '要素を削除したユーザーでソートするにはクリックしてください。',


	'v_trash_element_pwd'			=> 'パスワード',
	'v_trash_element_prj'			=> '[PRJ］',

	'v_deleted'						=> '(削除済み)',
	
	'c_trash_delperm'				=> '永久削除',
	'c_trash_not_found_delperm' 	=> 'この要素はゴミ箱にないか、永久に削除する権限がありません。',

	'm_prj_trash_not_found_in_trash' => '[PRJ] ゴミ箱に見当たらない',

	'c_trash_delperm_prj'			=> '永久削除 [CAP_PRJ］',
	'c_trash_not_found_trash_delperm_prj' => 'この[PRJ]はゴミ箱にないか、永久に削除する権限がありません。',

	'vtrash_delperm_conf1_prj'		=> 'この[PRJ]とすべてのパスワードを永久に削除しますか？',

	'c_trash_delperm_prj_ok'		=> '[PRJ]は永久に削除された。',
	'c_trash_delperm_prj_error'		=> '[PRJ]の永久削除エラー：',

	'c_trash_restore'				=> 'リストア',
	'c_trash_not_found_restore' 	=> 'この要素はゴミ箱にないか、復元する権限がありません。',

	'c_trash_restore_prj'			=> 'リストア[PRJ］',
	'c_trash_not_found_trash_restore_prj' => 'この[PRJ]はゴミ箱に入っていないか、復元する権限がありません。',

	'vtrash_restore_conf_prj'		=> 'この[PRJ]とすべてのパスワードを復元しますか？',

	'c_trash_restore_pwd_archived' => 'パスワードを復元しようとしている[PRJ]は<span class='label label-warning tpm-archived">Archived</span>. Un-archive it to be able to restore the password.',

	'c_trash_cannot_restore_pwd_permission' => '選択した[PRJ]にパスワードを作成できないため、このパスワードを復元することはできません。',

	'c_trash_restore_pwd_select_prj1' => 'このパスワードの[PRJ]が削除されたか、ゴミ箱に入っている場合は、[PRJ]を選択してこのパスワードを復元してください。',
	'c_trash_restore_pwd_select_prj2' => 'パスワードの復元ができない[PRJS]はグレーで表示されます。',
	'c_trash_restore_pwd_select_prj3' => '[PRJ]を選択する。',

	'c_trash_restore_pwd_prj_needed' => 'このパスワードの[PRJ]が削除されたか、ゴミ箱に入っているため、このパスワードを復元するには新しい[PRJ]が必要です。ゴミ箱をリフレッシュして、再度復元をお試しください。',

	'm_prj_trash_not_found_in_trash' => '[PRJ] ゴミ箱に見当たらない',

	'c_trash_restore_prj_select_prj1' => 'この[PRJ]の親が削除されたか、ゴミ箱にあります。この[PRJ]を復元する親を選択してください。',
	'c_trash_restore_prj_select_prj2' => '[PRJ]をリストアできない親はグレーで表示されます。',
	'c_trash_restore_prj_select_prj3' => '親を選択',

	'c_prj_restore_cannot'			=> '[PRJS]を作成できない（適切なロールを持っていない）ため、[PRJS]をリストアできません。',

	'c_trash_restore_prj_parent_needed' => 'この[PRJ]の親が削除されたか、ゴミ箱にあるため、この[PRJ]を復元するには新しい親が必要です。ゴミ箱をリフレッシュして、復元をやり直してください。',

	'c_trash_restore_prj_no_root'	=> 'rootで[PRJS]をリストアすることはできません。',

	'c_trash_cannot_restore_prj_same_name' => '同じレベルに同じ名前の別の[PRJ]があるため、[PRJ]をリストアできない。',

	'c_trash_restore_prj_ok'		=> '[PRJ]が復活した。',
	'c_trash_restore_prj_error'		=> '[PRJ]のリストアエラー：',

	'm_trash_empty_error_deleting_prj' => '[PRJ]IDの削除エラー',
	'm_trash_empty_error_deleting_pwd' => 'パスワードIDの削除エラー',

	'v_trash_empty_trash_bin'		=> 'ゴミ箱を空にする',
	'c_trash_only_admins_can_empty'	=> 'ゴミ箱を空にできるのは、管理者ロールを持つユーザーだけです。',
	'v_trash_empty_trash_bin_conf'	=> 'ゴミ箱を空にする？',
	'c_trash_already_empty'			=> 'ゴミ箱はすでに空だ。',
	'v_trash_num_pwds'				=> 'ゴミ箱のパスワード数',
	'v_trash_num_prjs'				=> 'ゴミ箱の[PRJS]の数',


	// v18
	'vpwd_edit_access_note'			=> 'URLはカンマで区切って複数入力できます。',

	// v19
	'vbulk_manager'					=> 'セット・マネージャー',
	'vbulk_password_selected'		=> 'パスワード選択',
	'vbulk_passwords_selected'		=> '選択されたパスワード',

	'v_bulk_archive_pwds'			=> 'パスワードの一括アーカイブ',
	'v_bulk_actions_prj_no_perm'	=> 'この[PRJ]で一括アクションを実行するのに必要な権限がありません（管理者である必要があります）。',
	'v_bulk_actions_prj_archived'	=> 'この[PRJ]は<span class='label label-warning tpm-archived">Archived</span>.',

	'v_bulk_num_passwords_selected'	=> '選択されたパスワードの数：',

	'v_bulk_archive_pwds_confirm'	=> '選択したパスワードをアーカイブしますか？',

	'm_bulk_action_no_pwds'			=> 'バルクアクションを実行するためのパスワードはありません。',

	'm_bulk_pwd_not_found_desc'		=> '存在しないか、アクセスできない',
	'm_bulk_pwd_not_in_prj'			=> '[PRJ]にはない',
	'm_bulk_pwd_archived_already'	=> 'すでにアーカイブされている',
	'm_bulk_pwd_archived'			=> 'アーカイブ',
	'm_bulk_pwd_locked'				=> 'ロック',
	'm_bulk_pwd_permissions'		=> 'パーミッションが足りない。',
	'm_bulk_pwd_error_archiving'	=> 'エラーアーカイブ',

	'm_bulk_num_pwd_archived'		=> 'アーカイブされたパスワードの数',
	'm_bulk_pwds_not_archived'		=> '以下のパスワードはアーカイブされていません。',

	'c_bulk_action_error'			=> '一括アクションエラー',

	'v_bulk_unarchive_pwds'			=> 'パスワードの一括アーカイブ解除',

	'v_bulk_unarchive_pwds_confirm'	=> '選択したパスワードのアーカイブを解除しますか？',

	'm_bulk_pwd_unarchived'			=> 'すでに未アーカイブ',
	'm_bulk_pwd_error_unarchiving'	=> 'アーカイブ解除エラー',

	'm_bulk_num_pwd_unarchived'		=> 'アーカイブされていないパスワードの数',
	'm_bulk_pwds_not_unarchived'	=> '以下のパスワードはアーカイブが解除されていません。',

	'v_bulk_delete_pwds'			=> 'パスワードの一括削除',

	'v_bulk_delete_pwds_confirm'	=> '選択したパスワードをゴミ箱に移動しますか？',
	'v_bulk_delete_pwds_note'		=> '<strong>注</strong>選択されたパスワードがリンクされている場合、リンクは解除されます。',

	'm_bulk_pwd_linked'				=> 'リンクされている（リンクは解除されなければならない。）',

	'm_bulk_pwd_error_deleting'		=> '削除エラー',

	'm_bulk_num_pwd_deleted'		=> '削除されたパスワードの数',
	'm_bulk_pwds_not_deleted'		=> '以下のパスワードは削除されていません。',

	
	'v_bulk_unlink_pwds'			=> 'パスワードの一括解除',

	'v_bulk_unlink_pwds_confirm'	=> '選択したパスワードのリンクを解除しますか？',
	
	'm_bulk_pwd_not_linked'			=> 'リンクなし',

	'm_bulk_pwd_error_unlinking'	=> 'リンク解除エラー',

	'm_bulk_num_pwd_unlinked'		=> 'リンク解除されたパスワードの数',
	'm_bulk_pwds_not_unlinked'		=> '以下のパスワードはリンクが解除されていません。',

	'c_bulk_prj_copy_pwds_select_prj' => '[PRJ]を選択し、パスワードを一括コピーする。',
	'c_bulk_prj_copy_pwds'			=> 'パスワードの一括コピー',

	'c_bulk_prj_select_prj'			=> '[PRJ]を選択する。',

	'v_bulk_destination_project'	=> '行き先 [PRJ］',

	'v_bulk_copy_pwds_confirm'		=> '選択したパスワードをコピー先[PRJ]にコピーしますか？',

	'm_bulk_pwd_linked_copy'		=> 'リンク済み（コピー不可）',

	'm_bulk_pwd_copy_exists'		=> 'デスティネーション[PRJ]にすでに存在する',

	'm_bulk_num_pwd_copied'			=> 'コピーされたパスワードの数',
	'm_bulk_pwds_not_copied'		=> '以下のパスワードはコピーされていません。',

	'm_bulk_pwd_error_copying'		=> 'エラーコピー',
	'm_bulk_pwd_copied_with_error'	=> 'エラーコピー',

	'v_bulk_destination_open'		=> '<strong>注</strong>バルクアクションを実行すると、デスティネーション[PRJ]に移動します。',

	'c_bulk_prj_move_pwds_select_prj' => '[PRJ]を選択し、パスワードを一括移動する。',
	'c_bulk_prj_move_pwds'			=> 'パスワードの一括移動',

	'v_bulk_move_pwds_confirm'		=> '選択したパスワードを移動先[PRJ]に移動しますか？',

	'm_bulk_pwd_linked_move'		=> 'リンク済み（移動不可）',

	'm_bulk_pwd_error_moving'		=> 'エラー移動',

	'm_bulk_num_pwd_moved'			=> '移動したパスワードの数',
	'm_bulk_pwds_not_moved'			=> '以下のパスワードは移動されていません。',

	'v_bulk_setmgr_pwds'			=> 'パスワード一括設定マネージャー',

	'v_bulk_setmgr_pwds_confirm'	=> '選択したパスワードの管理者を選択したユーザーに設定しますか？',

	'c_bulk_setmgr_incorrect_mgr'	=> '選択されたユーザーはマネージャになれないか、存在しません。',

	'm_bulk_pwd_error_setmgr'		=> 'マネージャー設定エラー',

	'm_bulk_num_pwd_setmgr'			=> 'マネージャーが設定されたパスワードの数',
	'm_bulk_pwds_not_setmgr'		=> '以下のパスワードのマネージャーを設定することはできませんでした。',

	'v_bulk_cfields_pwds'			=> 'カスタムフィールドの一括編集 パスワードの設定',
	'v_bulk_use_configuration'		=> '使用構成',

	'v_bulk_cfields_pwds_confirm'	=> '選択したパスワードのカスタムフィールド設定を上記のものに設定しますか？',

	'm_bulk_cfields_incorrect'		=> 'カスタムフィールドの設定が正しくありません。',

	'm_bulk_pwd_error_cfields'		=> 'カスタムフィールドの編集エラー',

	'm_bulk_num_pwd_cfields'		=> 'カスタムフィールドの設定が編集されたパスワードの数',
	'm_bulk_pwds_not_cfields'		=> '以下のパスワードのカスタムフィールド設定を編集することができませんでした。',

	'm_bulk_pwd_linked_cfields'		=> 'リンク済み（カスタムフィールドの設定を編集できない）',

	'v_bulk_action_results'			=> '一括アクションの結果',
	'v_bulk_action_confirm'			=> '一括アクション確認',


);