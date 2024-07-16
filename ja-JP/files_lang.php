<?php
$lang = array (

	// controllers/files
	'c_files_file_not_found'		=> 'ファイルが見つからない、またはアクセスできない',
	'c_files_files_notes_title'		=> 'ファイルノート',
	'c_files_upload_title'			=> 'ファイルのアップロード',
	'c_files_unknown_entity'		=> '不明なエンティティ。',
	'c_files_pwd_prj_not_exist'		=> 'このパスワード/[PRJ]が存在しないか、アクセスできません。',
	'c_files_pwd_not_exist'			=> 'パスワードが存在しないか、アクセスできません。',
	'c_files_prj_not_exist' 		=> '[PRJ]が存在しないか、アクセスできない場合。',
	'c_files_upload_pwd_archived'	=> '[PRJ]が[PRJ]であるため、このパスワードにファイルをアップロードすることはできません。<span class="label label-warning tpm-archived">アーカイブ</span>.',
	'c_files_upload_pwd_perm' 		=> 'このパスワードにファイルをアップロードすることはできません（Edit dataまたはManage権限が必要です）。',
	'c_files_upload_prj_archived'	=> 'この[PRJ]にファイルをアップロードすることはできません。<span class="label label-warning tpm-archived">アーカイブ</span>.',
	'c_files_upload_prj_perm' 		=> 'この[PRJ]にはファイルをアップロードできません（管理権限が必要です）。',
	'c_files_upload_cannot_create_folder' => 'フォルダを作成できませんでした。uploadsフォルダのパーミッションを確認してください。ファイルをアップロードできませんでした。',
	'c_files_upload_max_size_exceeded' => '最大ファイルサイズを超えました。',
	'c_files_upload_undefined_error' => '未定義のエラー。',
	'c_files_upload_error_saving_db' => 'ファイル情報のデータベースへの保存エラー。',
	'c_files_upload_error_encrypting_file' => 'ファイルの暗号化エラー。',
	'c_files_upload_error_del_original' => 'オリジナルファイルの削除エラー。uploadsフォルダのパーミッションを確認してください。',
	'c_files_tpm_file_not_exists'	=> 'このファイルが存在しないか、アクセスできません。',
	'c_files_del'					=> 'ファイルの削除',
	'c_files_del_cannot_del'		=> 'このファイルは削除できない。',
	'c_files_del_error'				=> 'ファイルを削除する際にエラーが発生しました。',
	'c_files_error_csrf' 			=> 'エラーが発生しました：CSRFの検証です。',
	'c_files_edit_notes'			=> 'ファイルノートの編集',
	'c_files_edit_notes_perm'		=> 'このファイルノートを編集することはできない。',
	'c_files_edit_notes_error'		=> 'ファイルノートの保存にエラーが発生しました。',

	// model
	'm_files_dwn_error'				=> '復号化/ダウンロードのエラー',
	'm_files_error_folder'			=> 'フォルダ内のエラー',
	'm_files_error_folder_not_exist'=> 'フォルダ内のエラー（存在しない、またはアクセスできない）',
	'm_files_upload_folder_missing' => 'uploadsフォルダがありません。',
	'm_files_upload_folder_must_exist' => 'passwordsまたは[PRJS]にファイルをアップロードするには、uploadsフォルダが存在し、書き込み可能でなければなりません。',
	'm_files_upload_check_config'	=> 'config.phpファイルを確認してください。',
	'm_files_upload_folder_not_writable' => 'uploadsフォルダが書き込みできません。',
	'm_files_upload_folder_must_writable' => 'passwordsまたは[PRJS]にファイルをアップロードするには、uploadsフォルダが書き込み可能でなければなりません。',
	'm_files_upload_folder_set_writable' => '書き込み可能に設定してください。',

	// views/files
	'vfiles_del_confirm'			=> 'ファイルを削除しますか？',
	'vfiles_del_warning'			=> '警告：このアクションは永続的であり、元に戻すことはできない。',

	'vfiles_upload_file'			=> 'ファイル',
	'vfiles_max_file_size'			=> '最大ファイルサイズ',
	'vfiles_upload_notes'			=> '備考',
	'vfiles_upload'					=> 'アップロード',
	'vfiles_upload_formdata'		=> 'Team Password Managerでファイルをアップロードするには、FormDataをサポートするブラウザが必要です。',
	'vfiles_upload_not_selected'	=> 'アップロードするファイルが選択されていません。',
	'vfiles_upload_uploaded'		=> 'アップロード済み',
	'vfiles_upload_encrypting'		=> 'ファイルを暗号化しています。',
	'vfiles_upload_failed'			=> 'アップロード失敗',
	'vfiles_upload_aborted'			=> 'アップロード中止',
	'vfiles_upload_alert_max' 		=> '選択したファイルのサイズが最大許容量を超えています。別のファイルを選択してください。',
	'vfiles_upload_uploading'		=> 'ファイルをアップロードしています。',
	'vfiles_upload_uploading_encrypting' => 'ファイルのアップロードと暗号化',

	'vfiles_view'					=> '表示',

	// v9
	'c_files_linked_cannot_upload' => 'これはリンクされたパスワードです。リンクされたパスワードにファイルをアップロードすることはできません。',
	'c_files_linked_cannot_edit_file_notes' => 'これはリンクされたパスワードです。リンクされたパスワードのファイルノートを編集することはできません。',
	'c_files_linked_cannot_del_files' => 'これはリンクされたパスワードです。リンクされたパスワードのファイルは削除できません。',

	// v10
	'c_files_upload_pwd_pwdarchived'	=> 'このパスワードにファイルをアップロードすることはできません。<span class="label label-warning tpm-archived">アーカイブ</span>.',

	// v12
	'c_files_files_info_title'		=> 'ファイル情報',
	'c_files_id' 					=> 'アイド',
	'vfiles_size'					=> 'サイズ', // Same as in home_lang
	'c_files_created_on'			=> 'アップロード日',
	'c_files_created_by'			=> 'アップロード者',
	'c_files_updated_on'			=> 'ノート更新日',
	'c_files_updated_by'			=> 'ノート更新者',
	'c_files_deleted_user'			=> '削除ユーザー',
	'vfiles_edit'					=> '編集', // Same as in home_lang

	// v15
	'vfiles_allowed_extensions'		=> '許可された拡張子',

	// v17
	'vfiles_upload_invalid_filetype' => 'アップロードしようとしているファイル形式は許可されていません。',

);
