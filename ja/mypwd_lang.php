<?php
$lang = array (

	// controllers/mypwd
	'c_mypwd_invalid_pek_title'		=> 'マイ・パスワード：無効な個人暗号キー',
	'c_mypwd_invalid_pek_desc'		=> 'パーソナル暗号化キーが無効です。サポートにご連絡ください。',

	'c_mypwd'						=> 'パスワード',

	'c_mypwd_not_found_title'		=> 'パスワードが見つかりません',
	'c_mypwd_not_found_desc'		=> 'このパスワードが存在しないか、アクセスできません。',

	'c_mypwd_pwd_exists'			=> 'パスワードはすでに存在する。',
	'c_mypwd_new'					=> '新しいパスワード',
	'c_mypwd_edit'					=> 'パスワードの編集',
	'c_mypwd_edit_error'			=> 'パスワードの保存にエラーが発生しました。',
	'c_mypwd_edit_csrf_error'		=> 'パスワードの保存でCSRFエラーが発生しました。',

	'c_mypwd_return'				=> 'パスワードに戻る',

	'c_mypwd_del'					=> 'パスワードの削除',
	'c_mypwd_del_ok'				=> 'パスワードが削除されました。',
	'c_mypwd_del_error'				=> 'パスワードの削除にエラーが発生しました。',
	'c_mypwd_del_csrf_error'		=> 'パスワードの削除でCSRFエラーが発生しました。',

	'c_mypwd_goto_pwd'				=> 'パスワード',

	'c_mypwd_copy_archived'			=> 'デスティネーション[PRJ]は<span class="label label-warning tpm-archived">アーカイブ</span>.',
	'c_mypwd_copy_exists'			=> 'の場合、保存先[PRJ]に既にパスワードが存在する。',
	'c_mypwd_copy_cannot'			=> 'にパスワードを作成することはできません。',
	'c_mypwd_copy_prj_not_exists'	=> '宛先[PRJ]が存在しないか、アクセスできない。',
	'c_mypwd_copy'					=> 'パスワードをコピーする',
	'c_mypwd_copy_cannot_reason'	=> 'このパスワードは以下の理由でコピーできません。',
	'c_mypwd_copy_error'		 	=> 'パスワードのコピーでエラーが発生しました',
	'c_mypwd_copy_ro'			 	=> 'パスワードのコピーや作成はできません。',
	'c_mypwd_copy_csrf_error' 		=> 'パスワードがコピーされていません（CSRF検証）。',
	'c_mypwd_copy_ok_error'		 	=> 'パスワードはコピーされましたが、その際に次のようなエラーが発生しました。',
	'c_mypwd_copy_pwd_prj_not_exist' => 'パスワード/[PRJ]が存在しないか、アクセスできない。',

	'c_mypwd_move'					=> 'パスワードの移動',
	'c_mypwd_move_cannot_reason'	=> 'このパスワードは以下の理由で移動できません。',
	'c_mypwd_move_error'		 	=> 'パスワードの移動にエラーが発生しました',
	'c_mypwd_move_ro'			 	=> 'パスワードの移動や作成はできません。',
	'c_mypwd_move_csrf_error' 		=> 'パスワードが移動されていません（CSRF検証）。',
	'c_mypwd_move_ok_error'		 	=> 'パスワードは移動されましたが、その際に次のようなエラーが発生しました。',

	// views/mypwd
	'v_mypwd_my_account'			=> 'マイアカウント',	// = v_users_my_account
 	'v_mypwd_my_settings'			=> 'マイ・セッティング',	// = v_users_my_settings
 	'v_mypwd_my_passwords'			=> '私のパスワード',	// = v_users_my_passwords

 	'v_mypwd_return_list'			=> 'パスワードリストに戻る',

 	'v_mypwd_edit_btn'				=> '編集',
 	'v_mypwd_copy_btn'				=> 'コピー',
 	'v_mypwd_move_btn'				=> '移動',
 	'v_mypwd_del_btn'				=> '削除',
 	'v_mypwd_edit_title'			=> 'パスワードデータの編集',
 	'v_mypwd_copy_title'			=> 'パスワードを[PRJ]にコピーする',
 	'v_mypwd_move_title'			=> 'パスワードを[PRJ]に移す',
 	'v_mypwd_del_title'				=> 'パスワードの削除',

 	'v_mypwd_data'					=> 'データ',

 	'v_mypwd_no_data'				=> 'このパスワードにはデータはありません。',
 	'v_mypwd_no_notes'				=> 'このパスワードに関する注意事項はありません。',

 	'v_mypwd_created_on'			=> '作成日',
 	'v_mypwd_updated_on'			=> '更新日',
 	'v_mypwd_by'					=> 'による',

 	'v_mypwd_ccall_copied'			=> 'コピー',
 	'v_mypwd_ccall_nothing'			=> 'コピーするものは何もない！',
 	'v_mypwd_ccall_error'			=> 'コピーするデータの取得エラー',
 	'v_mypwd_cc_copied'				=> 'コピー',
 	'v_mypwd_cc_nothing'			=> 'コピーするものは何もない！',
 	'v_mypwd_cc_error'				=> 'コピーするデータの取得エラー',
 	'v_mypwd_cc_not_supported'		=> 'このクリップボードへのコピー方法は、このブラウザではサポートされていません。',
 	'v_mypwd_ccall'					=> 'すべてのフィールドをクリップボードにコピーする',
 	'v_mypwd_cc'					=> 'クリップボードにコピー',
 	'v_mypwd_ccnotes'				=> 'メモをクリップボードにコピー',
 	'v_mypwd_ccnotes_copied'		=> 'コピー',
 	'v_mypwd_ccnotes_nothing'		=> 'コピーするものは何もない！',
 	'v_mypwd_ccnotes_error'			=> 'コピーするデータの取得エラー',

 	'v_mypwd_sort_by_name'			=> '名前順',
 	'v_mypwd_list_auep'				=> 'アクセス / ユーザー名 / メールアドレス / パスワード',
 	'v_mypwd_sort_by_updated'		=> '更新日順',
 	'v_mypwd_updated'				=> '更新',
 	'v_mypwd_list_updated_ph'		=> '更新',

 	'v_mypwd_list_empty'			=> 'このフィルターや検索にはパスワードはありません。',

 	'v_mypwd_sidebar_all_pwds'		=> 'すべてのパスワード',
 	'v_mypwd_sidebar_search_res'	=> '検索結果',
 	'v_mypwd_sidebar_filter_tag'	=> 'タグで絞り込む',
 	'v_mypwd_sidebar_search_tags'	=> '検索タグ',

 	'v_mypwd_new_pwd'				=> '新しいパスワード',
 	'v_mypwd_new_pwd_phone'			=> '新しい',
 	'v_mypwd_search'				=> 'パスワード検索',
 	'v_mypwd_search_phone'			=> '検索',
 	'v_mypwd_adv_search_title'		=> '高度な検索',
 	'v_mypwd_search_adv'			=> '検索',
 	'v_mypwd_adv_help'				=> '高度な検索ヘルプ',
 	'v_mypwd_adv_search_any' 		=> 'どの分野でも',
 	'v_mypwd_adv_search_username_email' => 'ユーザー名またはEメール',
 	'v_mypwd_adv_search_tag'		=> 'タグ',

 	'v_mypwd_edit_info_saved_enc'	=> 'この情報は暗号化されて保存される',
 	'v_mypwd_edit_tags_instruct'	=> '新しいタグを追加する場合はカンマ（,）を、リストから選択する場合は "tab "を使用する。',
 	'v_mypwd_edit_access_examples'	=> '例： http://site, ftp://ip-address, 手動ログイン',
 	'v_mypwd_edit_click_gen_pwd'	=> 'クリックしてパスワードを生成する',
 	'v_mypwd_edit_del_gen_pwd' 		=> '新しいパスワードを作成する場合は、現在のパスワードを削除する必要があります！',
 	'v_mypwd_edit_pwd_generated'	=> 'パスワードが生成された！',
 	
 	'v_mypwd_del_confirm'			=> 'このパスワードを削除しますか？',
 	'v_mypwd_del_warning'			=> '警告：このアクションは永続的であり、元に戻すことはできない。',

 	// v15
 	'm_mypwd_trash_error_transaction' => 'トランザクションのエラー',
 	'm_mypwd_trash_not_found'		=> 'パスワードが見つかりません',

 	'v_mypwd_moved_trash'			=> 'パスワードはゴミ箱に移動しました。',
	'v_mypwd_trash_conf1'			=> 'このパスワードをゴミ箱に移動しますか？',

	'c_mypwd_trash_error'			=> 'パスワードのゴミ箱への移動エラー',

	'v_mypwd_trash_bin'				=> 'ゴミ箱',

	'v_mypwd_my_trash'				=> '私のゴミ箱',
	'v_mypwd_trash_empty'			=> 'ゴミ箱は空です。',

	'v_mypwd_sort_by_trashed_on'	=> '削除日順',
	'v_mypwd_trashed'				=> '削除',

	'v_mypwd_not_shown_trash'		=> 'ゴミ箱に入らない',

	'v_mypwd_trash_actions'			=> '行動',
	'v_mypwd_restore'				=> 'リストア',
	'v_mypwd_delperm'				=> '永久削除',
	'm_mypwd_trash_not_found_trash'	=> 'このパスワードはゴミ箱にはありません',

	'c_mypwd_restore'				=> 'パスワードの復元',
	'v_mypwd_restore_conf1'			=> 'このパスワードを復元しますか？',
	'c_mypwd_cannot_restore_same_name' => '同じ名前の別のパスワードがあるため、このパスワードは復元できない。',
	'c_mypwd_return_trash'			=> 'ゴミ箱に戻す',
	'c_mypwd_restore_csrf_error'	=> 'パスワードは<strong>違う</strong>が復活した。',
	'c_mypwd_restore_error'			=> 'パスワードの復元エラー',

	'c_mypwd_delperm'				=> 'パスワードを永久に削除する',
	'v_mypwd_delperm_conf1'			=> 'このパスワードを永久に削除しますか？',
	'c_mypwd_delperm_csrf_error'	=> 'パスワードは<strong>違う</strong>は永久に削除された。',
	'c_mypwd_delperm_error'			=> 'パスワードの永久削除エラー',
	'c_mypwd_delperm_ok'			=> 'パスワードは永久に削除されました。',

	'm_mypwd_trash_not_found_in_trash' => 'このパスワードはゴミ箱にはありません',


	// v18
	'v_mypwd_edit_access_note'		=> 'URLはカンマで区切って複数入力できます。',
	
	'v_mypwd_archive_title'			=> 'パスワードをアーカイブしますか？',
	'v_mypwd_archive_btn'			=> 'アーカイブ',
	'c_mypwd_archive'				=> 'パスワードをアーカイブする',
	'v_mypwd_archive_conf1'			=> 'パスワードをアーカイブしますか？',
	'v_mypwd_archive_conf2'			=> 'アーカイブされたパスワードは変更できません。',
	'c_mypwd_arch_csrf_error'		=> 'パスワードのアーカイブにCSRFエラーが発生しました。',
	'c_mypwd_archive_error'			=> 'パスワードのアーカイブエラー',
	'v_mypwd_archived'				=> 'アーカイブ',

	'v_mypwd_unarchive_title'		=> 'パスワードのアーカイブを解除しますか？',
	'v_mypwd_unarchive_btn'			=> 'アン・アーカイブ',
	'c_mypwd_unarchive'				=> 'パスワードのアーカイブを解除する',
	'v_mypwd_unarchive_conf1'		=> 'パスワードのアーカイブを解除しますか？',
	'c_mypwd_unarch_csrf_error'		=> 'パスワードのアーカイブ解除でCSRFエラーが発生しました。',
	'c_mypwd_unarchive_error'		=> 'パスワードのアーカイブ解除エラー',

	'v_mypwd_sidebar_active_pwds'	=> 'アクティブなパスワード',
	'v_mypwd_sidebar_archived_pwds'	=> 'アーカイブパスワード',

	'v_mypwd_search_aaa_all'		=> 'すべて',
	'v_mypwd_search_aaa_active'		=> 'アクティブのみ',
	'v_mypwd_search_aaa_archived'	=> 'アーカイブのみ',

	// v20
	'vpwd_custom_fields_title'		=> 'カスタムフィールドの設定', // =home_lang
	'vpwd_custom_fields'			=> 'カスタムフィールド', // =home_lang
	'c_mypwd_cf_config'				=> 'カスタムフィールドの編集', 
	'c_pwd_cf_config_pwdarchived'	=> 'パスワードのカスタムフィールド設定は、以下のように変更できない。<span class="label label-warning tpm-archived">アーカイブ</span>.',

	'vpwd_cf_instructions'		=> '必要なカスタムフィールドのラベルとタイプを入力します。注意：フィールドタイプを「カスタムフィールドを使用しない」に設定しても、そのフィールドのデータは削除されません（フィールドにデータがある場合）。', // =home_lang
	'vpwd_cf_template'			=> 'テンプレート', // =home_lang
	'vpwd_cf_select'			=> 'フィールドに記入するテンプレートを選択する', // =home_lang
	'vpwd_cf_label'				=> 'ラベル', // =home_lang
	'vpwd_cf_type'				=> 'タイプ', // =home_lang
	'vpwd_cf_custom_field'		=> 'カスタムフィールド', // =home_lang

	'c_mypwd_csrf_error'		=> 'CSRFエラーが発生しました。',

	'c_pwd_custom_label'		=> 'カスタムラベル', // =home_lang
	'c_pwd_custom_type'			=> 'カスタムタイプ', // =home_lang
	'c_pwd_cflabel_empty'		=> 'について<strong>ラベル</strong>を空にすることはできない：<strong>カスタムフィールド', // <strong> gets closed in code // =home_lang

	'c_mypwd_cf_error'			=> 'カスタムフィールドの設定を保存する際にエラーが発生しました。',

	'vpwd_edit_basic_data_label' => '基本データ', // =home_lang
	'vpwd_edit_cf_label'		=> 'カスタムフィールド', // =home_lang
	'vpwd_secret_key'			=> 'シークレット・キー',  // =home_lang
	'vpwd_edit_expdate_format'	=> 'フォーマット：mm-dd-yyyy', // =home_lang

	'c_pwd_repeat'				=> 'リピート', // =home_lang

	'vpwd_get_otp_value'		=> '値を取得する', // =home_lang

	'vpwd_listcc_copied'		=> 'コピー', // =home_lang
	'vpwd_listcc_nothing'		=> 'コピーするものは何もない！', // =home_lang
	'vpwd_listcc_error'			=> 'コピーするデータの取得エラー', // =home_lang
	'vpwd_listcc_not_sup'		=> 'このクリップボードへのコピー方法は、このブラウザではサポートされていません。', // =home_lang
	'vpwd_listcc_copy'			=> 'クリップボードにコピー', // =home_lang

	'v_mypwd_duplicate_title'	=> 'パスワードの重複',
	'v_mypwd_duplicate_btn'		=> '重複',

	'c_mypwd_duplicate'			=> 'パスワードの複製',

	'c_pwd_vrd_gen_pwd'			=> '新しいパスワードを生成する', // =home_lang
	'c_pwd_vrd_dup_custom'		=> 'カスタムフィールドの重複', // =home_lang
	'c_pwd_dup_pwd_copy_of' 	=> 'コピー', // =home_lang

	'vpwd_duplicate_new_name'	=> '新名称', // =home_lang
	'vpwd_duplicate_options'	=> 'オプション', // =home_lang
	'vpwd_duplicate_gen_pwd'	=> 'パスワードフィールドに新しいパスワードを生成する。', // =home_lang
	'vpwd_duplicate_cf' 		=> 'カスタムフィールドの重複', // =home_lang

	'c_mypwd_duplicate_error'	=> 'パスワードの複製エラーが発生しました。',

	'vpwd_upload_title'			=> 'ファイルのアップロード', // =home_lang
	'vpwd_upload'				=> 'ファイルのアップロード', // =home_lang

	'vpwd_tab_files'			=> 'ファイル', // =home_lang

	'vpwd_files_no_files' 		=> 'このパスワードにはファイルはありません。', // =home_lang

	'vfiles_filename'			=> 'ファイル名', // =home_lang
	'vfiles_size'				=> 'サイズ', // =home_lang
	'vfiles_notes'				=> '備考', // =home_lang
	'vfiles_updated'			=> '更新', // =home_lang
	'vfiles_download'			=> 'ダウンロード', // =home_lang
	'vfiles_edit'				=> '編集', // =home_lang
	'vfiles_del'				=> '削除', // =home_lang
	'vfiles_view'				=> '表示', // =home_lang
	'vfiles_info'				=> 'インフォメーション', // =home_lang
	'vpwd_list_sort_by'			=> '並べ替え', // =home_lang
	'vpwd_list_file'			=> 'ファイル', // =home_lang
	'vpwd_list_files'			=> 'ファイル', // =home_lang

	'c_pwd_vrd_dup_files'		=> '重複ファイル', // =home_lang
	'vpwd_duplicate_file'		=> 'ファイル', // =home_lang
	'vpwd_duplicate_files'		=> 'ファイル', // =home_lang
	'vpwd_duplicate_inc_files'	=> 'ファイルを含む', // =home_lang

	'main_search_file'			=> 'ファイル', // =home_lang

	'v_mypwd_sidebar_favorite_pwds' => 'お気に入りのパスワード',

	'vpwd_list_toggle_fav'		=> 'お気に入り', // =home_lang

	'main_search_favorite'		=> 'お気に入り', // =home_lang

);