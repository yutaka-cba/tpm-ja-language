<?php
$lang = array (

	// controllers/mysettings
	'c_myset_export_mypwd'			=> 'パスワードのエクスポート',
	'c_myset_export_no_pwd'			=> 'マイパスワードセクションにパスワードがありません。',
	'c_myset_return'				=> 'マイ・セッティングに戻る',

	'c_myset_import_mypwd'			=> 'パスワードのインポート',
	'c_myset_import_mypwd_log'		=> 'マイパスワードログのインポート',
	'c_myset_import_mypwd_log_id_ko' => 'ログIDが見つからないか、エントリーがありません。',

	'c_myset_import_folder_missing'	=> 'インポートフォルダがありません。',
	'c_myset_import_folder_desc'	=> 'パスワードをインポートするには、以下のフォルダが存在し<strong>書き込み可能でなければならない</strong>',
	'c_myset_import_folder_create'	=> '手動でインポートフォルダを作成し、書き込み可能に設定してから、再度インポート手順を実行してください。',
	'c_myset_export_import_help'	=> 'マイパスワードのエクスポート/インポートに関するヘルプ',
	'c_myset_import_folder_not_writable' => 'インポートフォルダは書き込みできません。',
	'c_myset_import_folder_writable_desc' => 'パスワードをインポートするには、インポートフォルダが書き込み可能で、ウェブサーバーがその中にファイルを作成できる必要があります。',
	'c_myset_import_folder_set_writable' => '書き込み可能な状態に設定し、再度インポート手順を実行してください。',

	'c_myset_incorrect_verification' => '不正確な検証。',
	'c_myset_incorrect_pwd'			=> 'パスワードが正しくありません。',
	'c_myset_verification'			=> '検証',
	'c_myset_delete_all_mypwd'		=> 'すべてのパスワードを削除する',
	'c_myset_delete_all_mypwd_done'	=> 'すべてのマイパスワードが削除されました。',
	'c_myset_delete_all_mypwd_error' => 'すべてのマイパスワードを削除するエラーが発生しました。',
	'c_myset_delete_all_mypwd_csrf_error' => 'CSRFエラーが発生し、すべてのマイパスワードが削除されました。もう一度お試しください。',

	// views/my_settings
	'v_myset_my_account'			=> 'マイアカウント',	// = v_users_my_account
 	'v_myset_my_settings'			=> 'マイ・セッティング',	// = v_users_my_settings
 	'v_myset_my_passwords'			=> '私のパスワード',	// = v_users_my_passwords

 	'v_myset_export_all_mypwd'		=> 'すべてのパスワードをエクスポート（直接エクスポート）',

 	'v_myset_del_mypwd_confirm'		=> 'パスワードをすべて削除しますか？',
 	'v_myset_del_mypwd_warning'		=> '警告：このアクションは永続的であり、元に戻すことはできない。',
 	'v_myset_del_mypwd_enter_delete' => '削除を入力', // Do not translate DELETE
 	'v_myset_enter_pwd'				=> 'パスワードの入力',

 	'v_myset_import_outcome'		=> 'インポート処理が終了し、以下の結果が得られました。',
 	'v_myset_import_num_imported' 	=> 'インポートしたパスワードの数',
 	'v_myset_import_log_id' 		=> 'インポートはID',
 	'v_myset_import_download_log' 	=> 'インポートログのダウンロード',
 	'v_myset_import_file_deleted' 	=> 'セキュリティ上の理由から、アップロードされたファイルはインポートフォルダから削除されました。',
 	'v_myset_import_file_not_deleted' => 'インポートフォルダからアップロードされたファイルを削除することができませんでした。セキュリティ上の理由から、手動で削除してください。',

 	'v_myset_import_select_file'	=> 'マイパスワードにインポートするパスワードエントリを含むファイル（拡張子CSV）を選択します。',
 	'v_myset_upload_import'			=> 'アップロードとインポート',
 	'v_myset_export_import_full_help' => 'パスワードのインポートに関するヘルプを読む',
 	'v_myset_import_explain'		=> 'アップロードしてインポート」をクリックすると、選択したファイルがインポートフォルダにアップロードされ、インポート処理が実行されます。完了すると、インポート結果が表示された別の画面が表示されます。',

 	'v_myset_import_d1'				=> 'このファイルは、以下のプロパティを持つCSV（カンマ区切り値）ファイルでなければなりません。',
 	'v_myset_import_d2'				=> '各値は二重引用符（"）で囲み、カンマ（,）で区切らなければならない。',
 	'v_myset_import_d3'				=> 'ファイルはUTF-8でエンコードされていなければならない。',
 	'v_myset_import_d4'				=> 'ファイルの各行は、以下のフィールドを持つパスワード入力でなければならない。',
 	'v_myset_import_d5'				=> 'パスワード名',
 	'v_myset_import_d6'				=> 'オプション：アクセス情報（非暗号化）',
 	'v_myset_import_d7'				=> 'オプションユーザー名（非暗号化）',
 	'v_myset_import_d8'				=> 'オプション電子メール（暗号化なし）',
 	'v_myset_import_d9'				=> '任意：パスワード（非暗号化）',
 	'v_myset_import_d10'			=> 'オプション備考',
 	'v_myset_import_d11'			=> 'オプションタグ（カンマ区切り）',
 	'v_myset_import_d12'			=> 'ファイルの拡張子はcsvでなければならない。',

 	// v12
	'c_set_import_csrf_error'		=> 'パスワードのインポートでCSRFエラーが発生しました。',

	// v15
	'v_myset_trash_mypwd_confirm'	=> 'すべてのパスワードをゴミ箱へ？',
	'c_myset_trash_all_mypwd_done'	=> 'すべてのマイパスワードはゴミ箱に移動しました。',

	'c_myset_empty_my_trash'		=> 'ゴミ箱を空にする',
	'c_myset_trash_bin_already_empty' => 'ゴミ箱はもう空っぽだ。',
	'v_myset_empty_trash_confirm'	=> 'ゴミ箱を空にする（その中のパスワードをすべて永久に削除する）？',
	'c_myset_empty_trash_error'		=> 'ゴミ箱を空にする際にエラーが発生しました。',
	'c_myset_empty_my_trash_done'	=> 'ゴミ箱が空になりました。',
	'c_myset_empty_trash_csrf_error' => 'ゴミ箱を空にする際にCSRFエラーが発生しました。もう一度お試しください。',

	// v20
	'v_help_imp_optional'			=> 'オプション', // =help_lang
	'v_help_exp_cfnames'			=> 'カスタムフィールド名（カンマ区切り）', // =help_lang
	'v_help_exp_cf1'				=> 'カスタムフィールド1（非暗号化）', // =help_lang
	'v_help_exp_cf10'				=> 'カスタムフィールド10（非暗号化）', // =help_lang

);
