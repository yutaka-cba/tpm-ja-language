<?php
$lang = array (

	// Controller
	'c_set_ret_lic'					=> 'ライセンスに戻る',

	'c_set_2fa_enabled'				=> 'Google Authenticatorによる二要素認証は次のとおりです。<strong>使用可能</strong>.',
	'c_set_2fa_disabled'			=> 'Google Authenticatorによる二要素認証は次のとおりです。<strong>使用不能</strong>.',
	'c_set_2fa_enforced'			=> '<strong>強制</strong>を全ユーザーに適用する。',
	'c_set_2fa_not_enforced'		=> '<strong>実施しない</strong>を全ユーザーに適用する。',

	'c_set_smtp_not_configured'		=> 'SMTPサーバーが設定されていません。メッセージは送信できますが、システムによっては動作しない場合があります。',
	'c_set_smtp_configured'			=> 'SMTPサーバーが設定されている。',

	'c_set_num_ip_blocked'			=> 'ブロックされているIPアドレスの数',

	'c_set_auto_ip_blocking_disabled' => 'IPアドレスの自動ブロックは<strong>使用不能</strong>.',
	'c_set_auto_ip_blocking_enabled' => 'IPアドレスの自動ブロックは<strong>使用可能</strong>.',
	
	'c_set_ldap_php_not_installed'	=> 'LDAP PHP サポートがインストールされていない。',
	'c_set_ldap_disabled'			=> 'LDAP認証が無効になっている。',
	'c_set_ldap_enabled'			=> 'LDAP認証が有効になっている。',

	'c_set_timeout_disabled'		=> 'タイムアウトは無効です（PHPのini設定で管理されます）。',
	'c_set_timeout_set_to'			=> 'タイムアウトは',
	'c_set_timeout_seconds'			=> 'おかわり',

	'c_set_db_not_encrypted'		=> 'config.phpのデータベース設定パラメータは暗号化されていません。',
	'c_set_db_encrypted'			=> 'config.phpのデータベース設定パラメータは暗号化されています。',

	'c_set_version_checking_manual'	=> 'バージョンチェックは手動。',

	'c_set_api_enabled'				=> 'APIアクセスが有効になっている。',
	'c_set_api_disabled'			=> 'APIアクセスは無効です。',

	'c_set_exp_days_remind'			=> '有効期限までの日数',
	'c_set_exp_disabled'			=> '無効',

	'c_set_default_template'		=> '新しいパスワードのデフォルトテンプレート',
	'c_set_default_templante_none'	=> 'なし',

	'c_set_ext_sha_enabled'			=> 'パスワードの外部共有が有効になっている。',
	'c_set_ext_sha_disabled'		=> 'パスワードの外部共有は無効。',

	'c_set_vcheck_title' 			=> 'バージョンチェッカー',
	'c_set_licenses_title'			=> 'ライセンス',
	'c_set_export_import_title'		=> '輸出入',
	'c_set_email_title'				=> '電子メール',
	'c_set_2fa_title'				=> '二要素認証',
	'c_set_ipba_title' 				=> 'IPアドレスの自動ブロック',
	'c_set_ipb_title' 				=> 'IPアドレス・ブロッキング',
	'c_set_pgen_title' 				=> 'パスワードジェネレーター',
	'c_set_ldap_title'				=> 'LDAP認証',
	'c_set_timeout_title'			=> 'タイムアウト',
	'c_set_edb_config_title'		=> 'DB設定の暗号化',
	'c_set_api_title'				=> 'API',
	'c_set_expiration_title'		=> 'パスワードの有効期限',
	'c_set_cft_title'				=> 'カスタム・フィールド・テンプレート',
	'c_set_external_sharing_title' 	=> 'パスワードの外部共有',
	'c_set_languages_title'			=> '言語',

	'c_set_license'					=> 'ライセンス',
	'c_set_lic_not_found'			=> 'ライセンスが見つかりません',
	'c_set_lic_not_exist'			=> 'このライセンスは存在しない。',

	'c_set_lic_deleted_title'		=> 'ライセンス削除',
	'c_set_lic_deleted_desc'		=> 'このライセンスは削除されました',
	'c_set_lic_not_deleted_title'	=> 'ライセンスが削除されない',
	'c_set_lic_not_deleted_desc'	=> 'ライセンスが削除されていません。もう一度お試しください。',

	'c_set_lic_email'				=> '電子メール',
	'c_set_lic_id'					=> 'アイド',
	'c_set_lic_code'				=> 'コード',

	'c_set_lic_already_exists'		=> 'ライセンスIDはすでに存在する。',
	'c_set_add_lic'					=> 'ライセンスを追加する',
	'c_set_su_lic_error_1'			=> '追加しようとしているライセンスは「サポートとアップデート」ライセンスであり、既存のライセンスに追加する必要があります。',
	'c_set_su_lic_error_2'			=> 'ライセンス一覧から既存のライセンスの「サポートとアップデートのライセンスを添付する」ボタンをクリックしてください。',
	'c_set_lic_added_title'			=> 'ライセンス追加',
	'c_set_lic_added_desc'			=> 'このライセンスは追加された',
	'c_set_lic_added_error'			=> 'ライセンスの追加にエラーが発生しました。',
	'c_set_lic_data_incorrect'		=> '入力されたライセンスデータが正しくありません。',
	'c_set_trial_expired'			=> '試用期間が終了しました。',
	'c_set_already_trial'			=> 'このインストールにはすでに試用ライセンスがあり、別のライセンスを適用することはできません。',
	'c_set_add_lic_csrf_error'		=> 'ライセンスの追加でCSRFエラーが発生しました。',
	
	'c_set_attach_su'				=> 'サポートとアップデートのライセンスを添付する',
	'c_set_lic_attached'			=> 'ライセンスに添付されている',
	'c_set_attach_su_error'			=> 'ライセンスの添付に誤りがありました。',
	'c_set_attach_su_users_mismatch' => '通常のライセンスのユーザー数と、添付しようとしているライセンスのユーザー数が一致しません。',
	'c_set_attach_su_not_su'		=> '添付しようとしているライセンスは「サポート＆アップデート」ライセンスではありません。',
	'c_set_attach_su_lic_not_exists' => 'このライセンスが存在しないか、サポートおよびアップデートのライセンスを添付することができません。',

	'c_set_export_disabled_title'	=> 'エクスポートが無効',
	'c_set_export_disabled_desc'	=> 'パスワードをエクスポートすることはできません。',
	'c_set_return_exp_imp'			=> '輸出入に戻る',
	'c_set_export'					=> 'パスワードのエクスポート',
	'c_set_export_no_pwd'			=> '選択された[PRJ]にはパスワードがありません。',
	'c_set_export_csrf_error'		=> 'パスワードのエクスポートでCSRFエラーが発生しました。',

	'c_set_import_disabled_title'	=> 'インポート不可',
	'c_set_import_disabled_desc'	=> 'パスワードをインポートすることはできません。',

	'c_set_import'					=> 'パスワードのインポート',
	'c_set_import_log'				=> 'パスワードログインポート',
	'c_set_import_log_not_found'	=> 'ログIDが見つからないか、エントリがない',

	'c_set_import_folder_missing'	=> 'インポートフォルダがありません。',
	'c_set_import_folder_desc'		=> 'パスワードをインポートするには、以下のフォルダが存在し<strong>書き込み可能でなければならない</strong>',
	'c_set_import_folder_create'	=> '手動でインポートフォルダを作成し、書き込み可能に設定してから、再度インポート手順を実行してください。',
	'c_set_export_import_help'		=> 'パスワードのエクスポート/インポートに関するヘルプ',
	'c_set_import_folder_not_writable' => 'インポートフォルダは書き込みできません。',
	'c_set_import_folder_writable_desc' => 'パスワードをインポートするには、インポートフォルダが書き込み可能で、ウェブサーバーがその中にファイルを作成できる必要があります。',
	'c_set_import_folder_set_writable' => '書き込み可能な状態に設定し、再度インポート手順を実行してください。',

	'c_set_email_test'				=> 'テストメールを送信する',
	'c_set_email_return'			=> 'Eメール設定に戻る',
	'c_set_email_test_ok'			=> 'テストメッセージは正常に送信されました。配信を確認するには、このメッセージが受信トレイに届いているか確認してください。',
	'c_set_email_test_error'		=> 'テストメッセージの送信にエラーが発生しました。メールの設定を確認してください。',
	'c_set_email_test_response'		=> 'これはメッセージを送信しようとしたときの応答である。',

	'm_set_email_test_header'		=> 'Team Password Managerからのテストメッセージ',
	'm_set_email_test_body'			=> 'これはTeam Password Managerインストールからのテストメッセージです。これを読むことができれば、メッセージを送信できることを意味します。',

	'c_set_email_edit'				=> 'SMTPサーバーの設定を編集する',
	'c_set_email_edit_error'		=> 'コンフィギュレーションの編集でエラーが発生しました。',
	'c_set_email_edit_csrf_error'	=> '設定の編集でCSRFエラーが発生しました。',

	'c_set_enable_2fa'				=> '二要素認証を有効にする',
	'c_set_disable_2fa'				=> '二要素認証を無効にする',
	'c_set_return_2fa'				=> '二要素認証の設定に戻る',
	'c_set_2fa_already_enabled'		=> '二要素認証はすでに有効になっています。',
	'c_set_2fa_already_disabled'	=> '二要素認証はすでに無効になっています。',
	'c_set_enforce_2fa'				=> '二要素認証の導入',
	'c_set_stop_enforcing_2fa'		=> '二要素認証の強制停止',
	'c_set_2fa_already_enforced'	=> '二要素認証はすでに全ユーザーに実施されている。',
	'c_set_2fa_already_not_enforced'=> '二要素認証はすでに全ユーザーに強制されていない。',
	'c_set_2fa_not_enabled'			=> '二要素認証が有効になっていない。',

	'c_set_blocked_ips'				=> 'ブロックされたIPアドレス',
	'c_set_ip_address'				=> 'IPアドレス',
	'c_set_ip_address_already_exists' => 'IPアドレスはすでに存在する。',
	'c_set_new_ip'					=> 'ブロックする新しいIPアドレス',
	'c_set_ip_added_1'				=> 'IPアドレスが追加され、そこからTeam Password Managerのこのインストールへのアクセスがブロックされている',
	'c_set_ip_added_2'				=> 'この検証は「サインイン」画面で行われることに注意してください。このIPアドレスからすでにログインしているユーザーはブロックされません。',
	'c_set_new_ip_error'			=> 'IPアドレスの保存にエラーが発生しました。',
	'c_set_new_ip_csrf_error'		=> 'IPアドレスの保存でCSRFエラーが発生しました。',

	'c_set_del_ip'					=> 'ブロックされたIPアドレスの削除',
	'c_set_ip_not_exists'			=> 'IPアドレスが存在しない。',
	'c_set_del_ip_ok'				=> 'IPアドレスが削除された。',
	'c_set_del_ip_error'			=> 'IPアドレスを削除することはできなかった。',

	'c_set_enable_ipba'				=> '自動IPアドレスブロックを有効にする',
	'c_set_disable_ipba'			=> '自動IPアドレスブロックを無効にする',
	'c_set_return_ipba'				=> '自動IPアドレスブロック設定に戻る',
	'c_set_ipba_already_enabled'	=> '自動IPアドレスブロックはすでに有効になっています。',
	'c_set_ipba_already_disabled'	=> '自動IPアドレスブロックはすでに無効になっています。',
	'c_set_ipba_disabled'			=> 'IPアドレスの自動ブロックは無効になっています。設定を編集したい場合は有効にしてください。',

	'c_set_ipba_failed_attempts'	=> '失敗した試み',
	'c_set_ipba_period'				=> '期間',
	'c_set_ipba_valid_ips'			=> 'について<strong>例外</strong>フィールドには、有効なIPアドレスのリストが含まれていなければならない。',
	'c_set_ipba'					=> '自動IPアドレスブロック設定の編集',
	'm_ipb_no_one'					=> '誰も',
	'c_set_ipba_error'				=> '設定の保存にエラーが発生しました。',
	'c_set_ipba_csrf_error'			=> '設定を保存する際にCSRFエラーが発生しました。',

	'c_set_pgen_min_length' 		=> '最小の長さ',
	'c_set_pgen_max_length' 		=> '最大長',
	'c_set_pgen_uppercase' 			=> '大文字',
	'c_set_pgen_lowercase' 			=> '小文字',
	'c_set_pgen_numbers' 			=> '数字',
	'c_set_pgen_symbols' 			=> 'シンボル',
	'c_set_pgen_allowed_symbols' 	=> '使用可能な記号',

	'c_set_pgen_min_len_smaller_max' => '最小の長さは最大の長さより小さくなければならない。',
	'c_set_pgen_require_one_group'	=> '少なくとも1つの文字グループをチェックしなければならない。',
	'c_set_pgen_allowed_symbols_only' => 'Allowed symbols（許可されたシンボル）」フィールドには、文字、数字、スペースを含めず、シンボルのみを入力する。',
	'c_set_pgen_allowed_symbols_no_repeated' => '許可されたシンボル」フィールドには、シンボルを繰り返すことはできない。',

	'c_set_pgen_edit'				=> 'パスワード・ジェネレーターの設定を編集する',
	'c_set_pgen_edit_error'			=> '設定の保存にエラーが発生しました。',
	'c_set_pgen_edit_csrf_error'	=> '設定の保存でCSRFエラーが発生しました。',
	'c_set_pgen_return'				=> 'パスワード・ジェネレーターの設定に戻る',

	'c_set_ldap_enable'				=> 'LDAP認証を有効にする',
	'c_set_ldap_disable'			=> 'LDAP認証を無効にする',

	'c_set_ldap_edit_server'		=> 'LDAPサーバーの設定を編集します：サーバー',
	'c_set_ldap_edit_server_error'	=> 'サーバー設定の保存でエラーが発生しました。',
	'c_set_ldap_edit_server_csrf_error' => 'サーバー設定の保存でCSRFエラーが発生しました。',
	'c_set_ldap_return'				=> 'LDAP認証の設定に戻る',

	'c_set_ldap_test'				=> 'LDAP/ADサーバーの接続性をテストする：サーバー',
	'c_set_ldap_test_error'			=> '提供された設定でLDAPサーバーの認証にエラーが発生しました。',
	'c_set_ldap_test_ok'			=> '提供された設定でLDAPサーバーに正しく認証できました。',
	'c_set_ldap_test_csrf_error'	=> '設定のテストでCSRFエラーが発生しました。',

	'c_set_timeout_field'			=> 'タイムアウト',
	'c_set_timeout_edit'			=> '編集タイムアウト',
	'c_set_timeout_edit_csrf_error'	=> 'タイムアウトを保存するCSRFエラーが発生しました。',
	'c_set_timeout_return'			=> 'タイムアウト設定に戻る',

	'c_set_vcheck_set_auto'			=> '自動バージョンチェックを設定する',
	'c_set_vcheck_set_manual'		=> '手動バージョンチェックを設定する',

	'c_set_api_enable'				=> 'APIアクセスを有効にする',
	'c_set_api_disable'				=> 'APIアクセスを無効にする',
	'c_set_api_cannot_free'			=> '無料版ではAPIアクセスを有効/無効にすることはできません。',
	'c_set_api_return'				=> 'API設定に戻る',

	'c_set_exp_days_field'			=> '思い出させる日数',
	'c_set_exp_edit'				=> 'パスワード有効期限設定の編集',
	'c_set_exp_edit_csrf_error'		=> 'パスワードの有効期限設定を保存する際にCSRFエラーが発生しました。',
	'c_set_exp_return'				=> '期限切れ設定に戻る',

	'c_set_cft_name'				=> '名称',
	'c_set_cft_custom_label'		=> 'カスタムラベル',
	'c_set_cft_custom_type'			=> 'カスタムタイプ',
	'c_set_cft_at_leat_one_field'	=> '少なくとも1つのカスタムフィールドが定義されていなければならない。',
	'c_set_cft_template_exists'		=> 'テンプレートはすでに存在する。',
	'c_set_cft_label_cannot_empty'	=> 'について<strong>ラベル</strong>を空にすることはできません：カスタムフィールド',

	'c_set_cft_add'					=> 'カスタムフィールドテンプレートの追加',
	'c_set_cft_edit'				=> 'カスタムフィールドテンプレートの編集',
	'c_set_cft_edit_ok'				=> 'テンプレートが正しく保存されました。テンプレート名',
	'c_set_cft_return'				=> 'カスタム・フィールド・テンプレートに戻る',
	'c_set_cft_edit_error'			=> 'テンプレートの保存でエラーが発生しました。',
	'c_set_cft_edit_csrf_error'		=> 'テンプレートを保存する際にCSRFエラーが発生しました。',
	'c_set_cft_not_found_title'		=> 'テンプレートが見つかりません',
	'c_set_cft_not_found_desc'		=> 'このテンプレートは存在しません。',

	'c_set_cft_del'					=> 'カスタムフィールドテンプレートの削除',
	'c_set_cft_del_ok'				=> 'テンプレートが削除されました。',
	'c_set_cft_del_error'			=> 'テンプレートを削除することはできませんでした。',

	'c_set_cft_set_default'			=> '新しいパスワードのデフォルトカスタムフィールドテンプレートを設定する',
	'c_set_cft_set_default_csrf_error' => 'デフォルトテンプレートの設定でCSRFエラーが発生しました。',
	'c_set_cft_set_default_no_templates' => 'カスタムフィールドのテンプレートはありません。',

	'c_set_enable_ext_sha'			=> 'パスワードの外部共有を有効にする',
	'c_set_disable_ext_sha'			=> 'パスワードの外部共有を無効にする',

	'm_set_not_possible_to_get'		=> 'Team Password Managerのウェブサイトから最新バージョンの情報を入手することはできません。',
	'm_set_latest_version'			=> 'Team Password Managerのインストールが実行されている<strong>利用可能な最新バージョン</strong>',
	'm_set_theres_a_new_version'	=> 'Team Password Managerの新しいバージョンがあります。インストールはバージョン',
	'm_set_latest_version_is'		=> '最新バージョンは',
	'm_set_new_version_available'	=> '新バージョン',

	// Views
	'v_set_return'					=> '設定の概要に戻る',

	// Tabs	
	'v_set_tabs_overview'			=> '概要',
	'v_set_tab_vcheck' 				=> 'バージョンチェッカー',
	'v_set_tab_licenses'			=> 'ライセンス',
	'v_set_tab_export_import'		=> '輸出/輸入',
	'v_set_tab_email'				=> '電子メール',
	'v_set_tab_2fa'					=> '二要素認証',
	'v_set_tab_ipb' 				=> 'IPアドレス・ブロッキング',
	'v_set_tab_pgen' 				=> 'パスワードジェネレーター',
	'v_set_tab_ldap'				=> 'LDAP認証',
	'v_set_tab_timeout'				=> 'タイムアウト',
	'v_set_tab_edb_config'			=> 'DB設定の暗号化',
	'v_set_tab_api'					=> 'API',
	'v_set_tab_expiration'			=> '有効期限',
	'v_set_tab_cft'					=> 'カスタム・フィールド・テンプレート',
	'v_set_tab_external_sharing' 	=> '外部共有',
	'v_set_tab_languages'			=> '言語',

	// Overview
	'v_set_overview'				=> '設定の概要',
	'v_set_set_menu'				=> '設定メニュー',

	'v_set_lic_free'				=> 'チームパスワードマネージャの無料版を使用している場合、2ユーザと5[PRJS]しか使用できません。',
	'v_set_lic_num_licenses'		=> '有効ライセンス数',
	'v_set_lic_num_users'			=> '指名ユーザー総数',

	'v_set_version_info_1'			=> 'このインストールでは、Team Password Managerのバージョン',
	'v_set_version_info_2'			=> 'リリース',

	'v_set_main_config_file'		=> 'メイン設定ファイル',
	'v_set_all_params'				=> 'config.phpで使用可能なすべてのパラメータを見る',

	'v_set_unlimited'				=> '無制限', // users

	// Version checker
	'v_set_vcheck_check_now'		=> '今すぐバージョンをチェック',	
	'v_set_vcheck_is_automatic'		=> 'バージョンチェックは自動',
	'v_set_vcheck_is_manual'		=> 'バージョンチェックは手動',
	'v_set_vcheck_automatic_desc'	=> 'バージョンチェックは、「管理者」または「IT」ユーザーがサインインするたびに実行されるように設定されています。新しいバージョンが利用可能な場合は、右側のフッターに注記が表示されます。バージョンチェックを手動で実行するには"Check version now" button above.',
	'v_set_vcheck_manual_desc' 		=> 'バージョンチェックは、上の「今すぐバージョンをチェック」ボタンを使って手動で実行するように設定されています。',
	'v_set_vcheck_change_to_manual'	=> '手動バージョンチェックへの変更',
	'v_set_vcheck_change_to_automatic' => '自動バージョンチェックへの変更',
	'v_set_vcheck_more_info'		=> 'Team Password Managerのバージョンに関する詳細情報',
	'v_set_vcheck_url'				=> 'ソフトウェアがバージョンを確認するために使用するURL',
	'v_set_vcheck_changelog'		=> '変更履歴',
	'v_set_vcheck_download'			=> 'ダウンロード',
	'v_set_vcheck_upgrade'			=> 'アップグレード方法',
	'v_set_vcheck_proxy_set'		=> 'プロキシ設定',
	'v_set_vcheck_proxy_desc'		=> 'Team Password Managerのインストールがプロキシ経由でインターネットにアクセスする場合、以下のパラメータを<code>config.php</code>バージョンチェッカーが正しく動作するように',
	'v_set_example'					=> '例',
	'v_set_vcheck_proxy_desc_2'		=> 'プロキシを使用する場合、VCHECK_PROXY_HOSTとVCHECK_PROXY_PORTは必須である。VCHECK_PROXY_LOGINとVCHECK_PROXY_PWDはオプションである。',
	'v_set_vcheck_proxy_current'	=> 'これらのパラメーターの現在の値は',
	'v_set_not_defined'				=> '定義されていない',

	'v_set_vcheck_set_auto_question' => 'バージョンチェックを自動に設定しますか？',
	'v_set_vcheck_set_auto_question_desc' => 'バージョンチェックは、「管理者」または「IT」ユーザーがサインインするたびに自動的に実行されます。新しいバージョンが利用可能な場合は、右側のフッターに注記が表示されます。',
	'v_set_vcheck_set_manual_question' => 'バージョンチェックを手動に設定しますか？',
	'v_set_vcheck_set_manual_question_desc' => 'バージョンチェックは、"Check version now "ボタンをクリックして手動で実行する必要があります。',

	// Licenses
	'v_set_lic_you_have'			=> 'あなたは以下のライセンスを持っています。',
	'v_set_lic_type'				=> 'タイプ',
	'v_set_lic_eic' 				=> '電子メール / ID / コード',
	'v_set_lic_email'				=> '電子メール',
	'v_set_lic_id'					=> 'アイド',
	'v_set_lic_code'				=> 'コード',
	'v_set_lic_no_users' 			=> 'ユーザー数',
	'v_set_lic_limit' 				=> '制限',
	'v_set_lic_status' 				=> 'ステータス',
	'v_set_lic_actions' 			=> '行動',

	'v_set_lic_valid'				=> '有効',
	'v_set_lic_not_valid'			=> '無効',
	'v_set_lic_forever'				=> '永遠に',
	'm_set_lic_year'				=> '年',
	'm_set_lic_years'				=> '年',
	'm_set_lic_unl_years'			=> '無制限',
	'm_set_lic_num_users_not_match' => 'エラー：ユーザー数が一致しません。',
	'v_set_lic_normal'				=> 'ノーマル',
	'v_set_lic_upgrade_to_unlimited' => '無制限へのアップグレード',
	'v_set_lic_free_user'			=> '無料ユーザー',
	'v_set_lic_trial'				=> 'トライアル',
	'v_set_lic_su'					=> 'サポートとアップデート',

	'v_set_lic_delete'				=> '削除',
	'v_set_lic_attach_su'			=> 'サポートとアップデートのライセンスを添付する',

	'v_set_lic_date_current_version' => 'このバージョンのTeam Password Managerがリリースされた日付',
	'v_set_lic_date_updates_covered' => 'このライセンスがアップデートをカバーするまでの日付',
	'v_set_lic_you_should_attach_su' => 'このバージョンをカバーするために、サポートとアップデートのライセンスを添付する必要があります。',
	'v_set_lic_buy_su'				=> 'サポートとアップデートのライセンスを購入する',

	'v_set_lic_limit_desc'			=> '<strong>制限</strong>= 通常ライセンス」の場合は、サポート/アップデートの終了日。サポートとアップデートのライセンス」の場合は、期間。トライアルライセンス」の場合は、有効期限。',
	'v_set_lic_need_more_users'		=> 'より多くのユーザーが必要な場合は、Team Password Managerのウェブサイトからライセンスを購入することができます。',
	'v_set_lic_notification_approaching' => '各ライセンスについて、サポートとアップデートの期日が近づくと、オプションでサポートとアップデートを更新するための電子メールが届きます。',
	'v_set_lic_using_free'			=> 'を使用しています。<strong>無料版</strong>を持つことができる。<strong>2ユーザーと5 [PRJS]</strong>.より多くのユーザーと[PRJS]を持つためにライセンスを追加する必要があります。',
	'v_set_lic_can_buy'				=> 'Team Password Managerのウェブサイトからライセンスを購入できます。',
	'v_set_lic_if_you_have'			=> 'ライセンスをお持ちの方は、下のボタンをクリックして追加してください。',

	'v_set_lic_delete_question'		=> 'このライセンスを削除しますか？',

	'v_set_lic_received'			=> 'Eメールでライセンスデータが届いているはずです。これらのデータを以下に入力してください。',
	'v_set_lic_add_btn'				=> 'ライセンスの追加',
	'v_set_lic_attach_btn'			=> 'ライセンス',
	'v_lic_su_desc_1'				=> 'サポートとアップデートのライセンスは、ライセンスのサポートとアップデートの期日を延長します。',
	'v_lic_su_desc_2'				=> '<strong>注：</strong>このライセンスには現在、サポートとアップデートのライセンスが付属しています。今追加するライセンスは、現在のライセンスと置き換わります。',

	// Export/import
	'v_set_exp_imp_title'			=> 'パスワードのエクスポート/インポート',
	'v_set_exp_imp_desc'			=> 'CSVファイルへのパスワードのエクスポートとインポート',
	'v_set_ei_help_link'			=> 'ヘルプ',

	'v_set_imp_sel_file'			=> 'インポートするパスワードを含むファイルを選択する。',
	'v_set_imp_csv_ext'				=> 'CSV拡張機能',
	
	'v_set_imp_select_parent_btn'	=> '親［PRJ]を選択する',	
	'v_set_imp_current_parent'		=> '現在選択中',
	'v_set_imp_root'				=> '(ルート)',
	'v_set_imp_not_access_selected' => '(選択した[PRJ]にはアクセスできません）',
	'v_set_imp_parent_desc'			=> 'インポート処理で作成された新しい[PRJS]は、この[PRJS]を親に持ちます。',
	'v_set_imp_process_desc'		=> 'アップロードしてインポート」をクリックすると、選択したファイルがインポートフォルダにアップロードされ、インポート処理が実行されます。インポートが完了すると、インポート結果が表示されます。',
	'v_set_imp_upl_btn'				=> 'アップロードとインポート',

	'v_set_imp_outcome'				=> 'インポート処理が終了し、以下の結果が得られました。',
	'v_set_imp_num_prj_created'		=> '[PRJS]の作成数',
 	'v_set_imp_num_imported' 		=> 'インポートされたパスワードの数',
 	'v_set_imp_log_id' 				=> 'インポートはID',
 	'v_set_imp_download_log' 		=> 'インポートログのダウンロード',
 	'v_set_imp_file_deleted' 		=> 'セキュリティ上の理由から、アップロードされたファイルはインポートフォルダから削除されました。',
 	'v_set_imp_file_not_deleted' 	=> 'インポートフォルダからアップロードされたファイルを削除することができませんでした。セキュリティ上の理由から、手動で削除することをお勧めします。',

 	'v_set_exp_all'					=> 'すべて', // referring to projects
 	'v_set_exp_sel_prj'				=> 'からパスワードをエクスポートするには、[PRJ]を選択します。',
 	'v_set_exp_not_locked'			=> '注：*ロックされた*パスワードは完全にはエクスポートされません（名前とプロジェクトのみがエクスポートされます）。',
 	'v_set_exp_process_desc'		=> 'エクスポート」をクリックすると、パスワードが記載されたCSV（カンマ区切り）ファイルがダウンロードされます。',
 	'v_set_exp_process_btn'			=> '輸出',

 	// Email
 	'v_set_email_title'				=> '電子メール設定',
 	'v_set_email_desc_1'			=> 'Team Password Managerはパスワードリセットと通知メッセージをユーザに送信するために電子メールを使用します。',
 	'v_set_email_desc_2'			=> 'SMTPメールサーバーを使用するか(推奨オプション)、サーバーが設定されていない場合は直接(PHPのmail()関数を使用)メッセージを送信することができます。',
 	'v_set_email_current_config'	=> '現在の電子メールの設定は',
 	'v_set_email_test'				=> 'テストメールを送信する（自分宛）',

 	'v_set_email_smtp_host'			=> 'SMTPホスト',
 	'v_set_email_smtp_host_blank' 	=> 'SMTP設定を削除する場合は空白のままにします。',
 	'v_set_email_tls_ssl' 			=> 'TLS/SSL暗号化',
 	'v_set_email_tls_ssl_none'	 	=> 'なし',
 	'v_set_email_smtp_port' 		=> 'SMTPポート',
 	'v_set_email_smtp_user' 		=> 'SMTPユーザー',
 	'v_set_email_smtp_pwd' 			=> 'SMTPパスワード',
 	'v_set_email_smtp_user_sender' 	=> 'SMTPユーザを電子メールの送信者として使用します（そうでない場合は、ユーザの電子メールを使用します）。選択した場合、SMTP Userはメールアドレスでなければなりません。',
 	'v_set_email_typical_config' 	=> '典型的な電子メールサービスの設定値',
 	'v_set_email_your_email' 		=> 'のように、あなたの電子メールアドレスを入力します。',
 	'v_set_email_your_pwd' 			=> 'パスワード',
 	'v_set_email_enc_note' 			=> '* 重要：これらのデータはすべて暗号化されて保存されます',

 	// 2FA
 	'v_set_2fa_title'				=> 'Google Authenticatorによる二要素認証の設定',
 	'v_set_2fa_user_enable'			=> 'ユーザーに対して二要素認証を有効にするには、ユーザーは「マイアカウント」を選択し、「二要素認証を有効にする」をクリックする必要があります。',
 	'v_set_2fa_exempt_enforcement'	=> '管理者/ITユーザは二要素認証の実施から除外される',
 	'v_set_2fa_can_stop_enforcing'	=> 'このボタンをクリックすると、すべてのユーザーに対して二要素認証の適用を停止できます。',
 	'v_set_2fa_can_enforce'			=> 'このボタンをクリックすると、すべてのユーザーに二要素認証を適用できます。',
 	'v_set_2fa_can_disble'			=> '二要素認証は、グローバルに（すべてのユーザーに対して）無効にすることができます。',
 	'v_set_2fa_enable_question'		=> '二要素認証を有効にするか？',
 	'v_set_2fa_disable_question'	=> '二要素認証を無効にする？',
 	'v_set_2fa_disable_desc'		=> 'ユーザーはサインインできるが、二要素認証はない。',

 	'v_set_2fa_enforce_question'	=> '全ユーザーに二要素認証を強制するか？',
 	'v_set_2fa_enforce_desc'		=> '2ファクタ認証を有効にしていないユーザーは、次回サインイン時に2ファクタ認証を強制される。',
 	'v_set_2fa_user_exempt'			=> '管理者/ITユーザー免除',
 	'v_set_2fa_stop_enforcing_question' => '全ユーザーへの2要素認証の強制をやめる？',

 	// IP Blocking
 	'v_set_ipb_tab_blocked'			=> 'ブロックされたIPアドレス',
 	'v_set_ipb_tab_blocked_phone'	=> 'ブロックされたIP',
 	'v_set_ipb_tab_auto'			=> '自動ブロック設定',
 	'v_set_ipb_tab_auto_phone'		=> '自動ブロック',

 	'v_set_ipb_title'				=> 'IPアドレスブロックの設定',
 	'v_set_your_ip'					=> 'あなたのIPアドレス',

 	'v_set_ipb_listed'				=> 'ここにリストされたIPアドレスは、Team Password Managerのこのインストールにアクセスできません。',
 	'v_set_ipb_note_blocking'		=> 'ブロックの検証は「サインイン」画面でのみ行われるため、アドレスが追加されたときにすでにログインしているユーザーはブロックされないことに注意してください。',
 	'v_set_ipb_no_ips_filter'		=> 'このフィルターや検索ではIPはありません。',

 	'v_set_ipb_all_ips'				=> 'すべてのIP',
 	'v_set_ipb_search_results'		=> '検索結果',
 	'v_set_ipb_filter_type'			=> 'タイプで絞り込む',
 	'v_set_ipb_filter_type_manual'	=> 'マニュアル',
 	'v_set_ipb_filter_type_auto'	=> '自動',

 	'v_set_ipb_sort_ip'				=> 'IPアドレスでソート',
 	'v_set_ipb_sort_type'			=> 'タイプ別',
 	'v_set_ipb_sort_creator'		=> 'クリエイター順',
 	'v_set_ipb_sort_dtm'			=> '日付/時間でソート',

 	'v_set_ipb_field_ip'			=> 'IPアドレス',
 	'v_set_ipb_field_type'			=> 'タイプ',
 	'v_set_ipb_field_creator'		=> 'クリエイター',
 	'v_set_ipb_field_dtm'			=> '日時',

 	'v_set_ipb_delete_btn'			=> '削除',
 	'v_set_ipb_return'				=> 'ブロックIPリストに戻る',

 	'v_set_ipb_new_btn'				=> 'ブロックする新しいIP',
 	'v_set_ipb_search_btn'			=> '検索IP',

 	'v_set_ipb_enter_ip'			=> 'ブロックするIPアドレスを入力します。保存後すぐに反映されます。',
 	'v_set_ipb_valid_ipv46'			=> '有効なIPv4またはIPv6アドレス',

 	'v_set_ipb_del_question'		=> 'このIPアドレスを削除しますか？',

 	'v_set_ipba_current_config'		=> '現在の構成',
 	'v_set_ipba_rule'				=> 'ルール',
 	'v_set_ipba_rule_desc'			=> 'IPアドレスは、そのIPアドレスからの署名に、この期間内にこの回数失敗した場合、ブロックされる。',
 	'v_set_ipba_exceptions'			=> '例外',
 	'v_set_ipba_who_notify'			=> '通知先',
 	'v_set_ipba_rule_failed_attempts' => '失敗した試み',
 	'v_set_ipba_rule_period'		=> '期間（秒）',
 	'v_set_ipba_desc'				=> '自動IPアドレスブロックにより、Team Password ManagerはユーザがY秒間にX回サインインに失敗したIPアドレスをブロックすることができます。(XとYは設定可能）。',
 	
 	'm_ipb_none'					=> 'なし',
 	'm_ipb_no_one'					=> '誰も',

 	'v_set_ipba_rule_failed_attempts_help' => 'IPブロックのトリガーとなるサインイン失敗回数 (3-999)',
 	'v_set_ipba_rule_period_help'	=> '失敗した試行回数に達した場合にIPブロックをトリガーする秒数 (10-999)',
 	'v_set_ipba_exceptions_help'	=> '自動ブロックから除外するIPアドレス。コンマで区切ってください。例：1.2.3.4、5.6.7.8',
 	'v_set_ipba_who_notify_help'	=> '管理者/ITユーザーが電子メールでブロックを通知する（通知時にユーザーがアクティブでなければならない）',

 	'v_set_ipba_enable_question'	=> '自動IPアドレスブロックを有効にしますか？',
 	'v_set_ipba_disable_question'	=> '自動IPアドレスブロックを無効にしますか？',
 	'v_set_ipba_disable_desc'		=> '現在自動的にブロックされているIPアドレスは、引き続きブロックされます。',

 	// Password generator
 	'v_set_pgen_title'				=> 'パスワード・ジェネレーターの設定',
 	'v_set_pgen_desc'				=> 'パスワードジェネレーターは、パスワードを編集する際に、ランダムで強力なパスワードを生成することができます。',
 	'v_set_pgen_uses_config'		=> '以下の設定を使用する。',	
 	'v_set_pgen_min_len'			=> '最小の長さ',
 	'v_set_pgen_max_len'			=> '最大長',
 	'v_set_pgen_ucase'				=> '大文字',
 	'v_set_pgen_lcase'				=> '小文字',
 	'v_set_pgen_num'				=> '数字',
 	'v_set_pgen_sym'				=> 'シンボル',
 	'v_set_pgen_allowed_sym'		=> '使用可能な記号',
 	'v_set_pgen_test'				=> 'パスワード生成テスト',
 	'v_set_pgen_gen10'				=> '上記の設定を使って10個のパスワードを生成する。',
 	'v_set_pgen_generated'			=> '生成されたパスワード',

 	'v_set_pgen_edit_desc'			=> '少なくとも1つの文字グループ（大文字、小文字、数字、記号）をチェックしてください。',
 	'v_set_pgen_min'				=> '最小',
 	'v_set_pgen_max'				=> 'マックス',
 	'v_set_pgen_only_sym'			=> '記号のみ、文字、数字、スペースは不可',

 	// LDAP auth
 	'v_set_ldap_title'				=> 'LDAP認証の設定',
 	'v_set_ldap_desc'				=> 'LDAP認証により、Team Password ManagerのユーザはLDAPまたはActive Directory (AD)サーバに対して認証されます。',
 	'v_set_ldap_site_link'			=> 'Team Password ManagerのLDAP認証について説明した文書を読むにはここをクリックしてください。',
 	'v_set_ldap_not_installed'		=> 'LDAP PHP サポートはインストールされていません。LDAP 認証を使用するには、LDAP for PHP をインストールする必要があります。',
 	'v_set_ldap_url'				=> '以下のURLをご参照ください。',
 	'v_set_ldap_upto9'				=> '最大9台のLDAP/ADサーバーを定義可能',
 	'v_set_ldap_edit_server_btn'	=> 'LDAP/ADサーバー設定の編集',
 	'v_set_ldap_test_server_btn'	=> 'LDAP/ADサーバー接続のテスト',

 	'v_set_ldap_field_server'		=> 'LDAP/ADサーバー',
 	'v_set_ldap_field_port'			=> 'LDAPポート',
 	'v_set_ldap_field_ssl'			=> 'SSL接続',
 	'v_set_ldap_field_prot'			=> 'プロトコル・バージョン',

 	'v_set_ldap_ssl_ldaps'			=> 'SSLを使用する（ldaps）',
 	'v_set_ldap_ssl_tls'			=> 'TLSを使用する（プロトコルバージョン3のみ）',
 	'v_set_ldap_ssl_no_ssl'			=> 'SSL接続なし',
 	'v_set_ldap_std_port'			=> '標準LDAPポート（389、SSLは636）',

 	'v_set_ldap_server_not_defined'	=> '定義なし',

 	'v_set_ldap_field_server_help_1' => 'サーバのDNS名またはIPアドレス。例：ldap.mydomain.com、192.168.0.10',
 	'v_set_ldap_field_server_help_2' => 'バックアップサーバーをスペースで区切って入れます。例：192.168.0.10 192.168.0.11',
 	'v_set_ldap_field_server_help_3' => 'サーバー構成を削除する場合は空白のままにします。',
 	'v_set_ldap_port_help'			=> '空の場合、標準のLDAPポート（389、SSLの場合は636）を使用します。',
 	'v_set_ldap_prot_help'			=> '可能な限りプロトコル・バージョン3を使用すること。',
 	'v_set_ldap_important_enc'		=> '* 重要：これらのデータはすべて暗号化されて保存されます',

 	'v_set_ldap_enable_question'	=> 'LDAP認証を有効にしますか？',
 	'v_set_ldap_disable_question'	=> 'LDAP認証を無効にしますか？',

 	'v_set_ldap_test_desc'			=> 'このフォームを使って、LDAP/ADサーバーへの認証を試み、サーバー接続をテストすることができます。',
 	'v_set_ldap_test_imp'			=> '重要：ここで入力した値はどこにも保存されません。',
 	'v_set_ldap_login_dn_username'	=> 'ログインDN/ユーザー名',
 	'v_set_ldap_anonymous'			=> '匿名',
 	'v_set_ldap_server_settings'	=> 'サーバー設定',
 	'v_set_ldap_test_btn'			=> 'テスト認証',

 	// Timeout
 	'v_set_timeout_title'			=> 'タイムアウトの設定',
 	'v_set_timeout_desc'			=> 'この設定は、非アクティブ・ユーザー・セッションの継続時間を定義するために使用されます。すべてのユーザーに同じように影響します。',
 	'v_set_timeout_ini_title'		=> 'タイムアウトに影響するPHPのini設定',
 	'c_set_timeout_until_browser_closed' => 'ブラウザを閉じるまで',
 	'v_set_timeout_gc_maxlifetime'	=> 'データがゴミとみなされ、クリーンアップされるまでの秒数を指定します。この設定はしばしば非アクティブなユーザセッションのタイムアウトとして使用されますが、PHPのガベージコレクタを使用するため、正確なタイムアウトを信頼することはできません。これがTeam Password Managerが独自のセッションタイムアウトを実装する理由です。この設定は、少なくともタイムアウトフィールドで指定したものと同じ大きさにする必要があります。',
 	'v_set_timeout_cookie_lifetime'	=> '非アクティブか否かにかかわらず、セッションの継続時間を定義する。0の場合、「ブラウザを閉じるまで」を意味します。Team Password Managerのタイムアウト設定でタイムアウトを管理する場合は、0にする必要があります。',
 	'v_set_timeout_set_cookie_lifetime_0' => 'この設定は0にするべきだ。',

 	'v_set_timeout_field_help_1'	=> 'タイムアウトを無効にするには 0 を設定します (PHP の ini 設定で管理します)。',
 	'v_set_timeout_field_help_2'	=> '60秒未満は0秒とみなされる。',

 	// Encrypt DB config
 	'v_set_edb_title'				=> 'config.phpでDBの設定を暗号化する',
 	'v_set_edb_inst_to_encrypt' 	=> '暗号化したい場合は、以下のように<strong>config.php</strong>ファイル',
 	'v_set_edb_inst_to_not_encrypt' => 'プレーンテキスト（暗号化されていない）で使用したい場合は、以下のように<strong>config.php</strong>ファイル',
 	'v_set_edb_enter_instruction'	=> '次の指示を入力する。',
 	'v_set_edb_enter_next'			=> '次に、次の指示を入力する。',
 	'v_set_edb_set_unencrypted'		=> '以下の定数を暗号化されていない値に設定する。',
 	'v_set_edb_example'				=> '例（安全のため、実際の値は示していない）',

 	'v_set_edb_example_hostname'	=> 'DB ホスト名 通常は localhost',
 	'v_set_edb_example_username'	=> 'dbユーザー名',
 	'v_set_edb_example_pwd'			=> 'DBパスワード',
 	'v_set_edb_example_db'			=> 'チーム・パスワード・マネージャー・データベース',
 	'v_set_edb_example_port'		=> 'データベースが使用する特定のポート',

 	// API
 	'v_set_api_title'				=> 'API設定',
 	'v_set_api_desc'				=> 'チームパスワード管理者<strong>アプリケーションプログラミングインタフェース</strong>これにより、他のアプリケーションは、ソフトウェアのオブジェクト（パスワード、プロジェクト、その他）をプログラムで操作することができます。',
 	'v_set_api_available'			=> '利用可能なAPIバージョン',
 	'v_set_api_doc'					=> 'ドキュメンテーション',
 	'v_set_api_v3_note'				=> '注：<strong>API v3は非推奨</strong>また、Team Password Managerの将来のバージョンでは使用できません。新しいプロジェクトにはv4を使用し、現在のプロジェクトはv4に変換してください。',
 	'v_set_api_hash_hmac_note'		=> '注意：HMAC認証に必要なhash_hmac()関数がインストールされていないと、HMACを使った認証ができません。',
 	'v_set_api_sha256_note'			=> '注：HMAC認証に必要なsha256ハッシュ・アルゴリズムがインストールされていない場合、HMACを使用した認証はできません。',
 	'v_set_api_free'				=> '無料版ではAPIアクセスを有効にすることはできません。',

 	'v_set_api_enable_question'		=> 'APIアクセスを有効にするか？',
 	'v_set_api_disable_question'	=> 'APIアクセスを無効にしますか？',

 	// External sharing
 	'v_set_ext_sha_title'			=> 'パスワードの外部共有設定',
 	'v_set_ext_sha_desc_1'			=> 'パスワードの外部共有により、特別な URL を使用して、Team Password Manager に登録されていないユーザーが一部のパスワードを閲覧できるようになります。デフォルトでは、すべてのパスワードが外部共有されるわけではないことに注意してください。パスワードの外部共有は、外部共有が必要なパスワードごとに設定する必要があります。',
 	'v_set_ext_sha_desc_2'			=> 'この設定により、この機能を有効または無効にすることができます。',

 	'v_set_ext_sha_enable_question' => 'パスワードの外部共有を有効にするか？',
 	'v_set_ext_sha_disable_question' => 'パスワードの外部共有を無効にする？',

 	// Expiration
 	'm_notif_expiry_date'			=> '有効期限',
 	'm_notif_expired_or_today'		=> '以下のパスワードは有効期限が切れているか、または今日までとなっています。',
 	'm_notif_expire_soon'			=> '以下のパスワードの有効期限がまもなく切れます。',
 	'm_notif_expired_or_soon'		=> '期限切れまたは期限切れ間近のパスワード', // email subject: careful about accents

 	'v_set_exp_title'				=> 'パスワードの有効期限設定',
 	'v_set_exp_days'				=> '有効期限までの日数',
 	'v_set_exp_days_disabled'		=> '無効',
 	'v_set_exp_will'				=> 'この設定は',
 	'v_set_exp_desc_1'				=> '有効期限がX日以内のパスワードには、有効期限の横に以下のラベルを表示する。',
 	'v_set_exp_desc_2'				=> 'もし<code>遺伝子エキス</code>が定期的に実行されている場合、パスワード・マネージャーとその[PRJ]マネージャーに、パスワードの有効期限が間もなく切れることを思い出させる通知メールを送る。',

 	'v_set_exp_genexp_title'		=> 'genexp：メールで期限切れ通知を送信する方法',
 	'v_set_exp_genexp_desc'			=> 'パスワード管理者および[PRJ]管理者に、パスワードの有効期限切れや有効期限リマインダーの通知を定期的にメールで送信するように設定する必要があります。<code>遺伝子エキス</code>を毎日実行する。',
 	'v_set_exp_genexp_location'		=> '<code>遺伝子エキス</code>は以下のアドレスにあります。',
 	'v_set_exp_genexp_cron_1'		=> 'Linuxを使用している場合は、毎日実行するcronジョブを設定できます。<code>カール</code>でこのアドレスを開く。そのためには、crontab設定ファイルを次のように編集する。<code>sudo crontab -e</code>そして次の行を入力する。',
 	'v_set_exp_genexp_cron_2'		=> 'これで<code>遺伝子エキス</code>を毎日午前6時に実行する。',
 	'v_set_exp_genexp_more_info'	=> '詳細については、以下の文書をお読みください。',

 	'v_set_exp_days_field'			=> '思い出させる日数',
 	'v_set_exp_days_field_help'		=> '期限切れリマインダーを無効にするには 0 を設定します。',

 	// Custom Field Templates
 	'v_set_cft_none'				=> 'なし',
 	'v_set_cft_default_lbl'			=> '新しいパスワードのデフォルトテンプレート',
 	'v_set_cft_set_default'			=> 'デフォルトテンプレートの設定',

 	'v_set_cft_title'				=> 'カスタム・フィールド・テンプレート',
 	'v_set_cft_templates'			=> 'テンプレート',
 	'v_set_cft_no_templates_search'	=> '現在の検索語を含むテンプレートはありません。',
 	'v_set_cft_no_templates'		=> 'テンプレートはない。',
 	'v_set_cft_new_template'		=> '新しいテンプレート',
 	'v_set_cft_search_templates'	=> '検索テンプレート',
 	'v_set_cft_sort_name'			=> '名前順',
 	'v_set_cft_sort_updated'		=> '更新日順',
 	'v_set_cft_name'				=> '名称',
 	'v_set_cft_fields'				=> 'フィールド',
 	'v_set_cft_updated'				=> '更新',
 	'v_set_cft_edit'				=> '編集',
 	'v_set_cft_delete'				=> '削除',
 	'v_set_cft_default'				=> 'デフォルト',

 	'v_set_cft_delete_question'		=> 'このカスタムフィールド・テンプレートを削除しますか？',

 	'v_set_cft_edit_desc'			=> 'テンプレートのカスタムフィールドのラベルとタイプを入力します。<strong>少なくとも1つのフィールドが定義されていなければならない</strong>.',
 	'v_set_cft_template_name'		=> 'テンプレート名',
 	'v_set_cft_label'				=> 'ラベル',
 	'v_set_cft_type'				=> 'タイプ',
 	'v_set_cft_custom_field'		=> 'カスタムフィールド',

 	'v_set_cft_select_template'		=> 'テンプレートを選択する（または選択しない）',

	// Languages
	'v_set_lang_help' 				=> 'Team Password Managerで言語がどのように機能するかを説明した文書を読むには、ここをクリックしてください。',	
	'v_set_lang_version'			=> '言語バージョン',
	'v_set_lang_version_note'		=> '言語ファイルのバージョン<code>lang_files_version</code>値<code>config_lang.php</code>- はこのバージョンと一致しなければならない。',
	'v_set_lang_default'			=> 'デフォルト言語',
	'v_set_lang_default_note'		=> "デフォルト言語は<code>config.php</code>という指示がある：<code>define('TPM_DEFAULT_LANG', 'XX');</code>, where <code>XX</code> is the language code.",
	'v_set_lang_available'			=> '使用可能言語',
	'v_set_lang_available_note'		=> 'Team Password Managerのインストールには以下の言語があります。',
	'v_set_lang_v'					=> 'v.', // version
	'v_set_lang_incorrect_version'	=> '不正解',

	// v7
	'v_set_imp_select_parent'		=> '親［PRJ]を選択する', // Changed, not new in v7
	'v_set_imp_none'				=> 'なし',
	'v_set_imp_select_parent_error' => '親［PRJ]を選択しなかった',

	// v8
	'v_set_api_sec'					=> 'APIセキュリティ',
	'v_set_api_sec_all'				=> 'すべてのアクティブユーザーがAPIにアクセスできる',
	'v_set_api_sec_ao'				=> 'アクティブな 「API only 」ユーザーのみがAPIにアクセスできる',
	'v_set_api_sec_edit'			=> 'APIセキュリティの編集',
	'v_api_sec_edit_csrf_error'		=> 'APIセキュリティの編集でCSRFエラーが発生しました。',
	'v_api_sec_edit_error'			=> 'APIセキュリティの編集でエラーが発生しました。',

	// v9
	'c_set_linked_passwords_enabled' => 'リンクされたパスワードの作成が有効になっている。',
	'c_set_linked_passwords_disabled' => 'リンクされたパスワードの作成は無効です。',
	'c_set_linked_passwords_title' 	=> 'リンクされたパスワード',
	'v_set_linked_passwords_title'	=> 'リンクされたパスワードの設定',
	'v_set_tab_linked_passwords' 	=> 'リンクされたパスワード',
	'v_set_linked_passwords_desc_1'	=> 'リンクされたパスワードとは、ある[PRJ]内のパスワードを別の[PRJ]から参照することである。',
	'v_set_linked_passwords_desc_2' => 'この設定は、リンクされたパスワードの作成を有効または無効にします。新しいパスワードの作成を無効にしても、既存のリンクされたパスワードは表示されることに注意してください。',
	'c_set_enable_linked_passwords'	=> 'リンクされたパスワードの作成を有効にする',
	'c_set_disable_linked_passwords' => 'リンクされたパスワードの作成を無効にする',
	'v_set_linked_passwords_site_link' => 'Team Password Managerのリンクパスワードについて説明した文書を読むには、ここをクリックしてください。',
	'v_set_linked_passwords_enable_question' => 'リンクされたパスワードの作成を有効にするか？',
	'v_set_linked_passwords_disable_question' => 'リンクされたパスワードの作成を無効にしますか？',

	'c_set_password_reset_enabled' => 'パスワードリセットが有効になっている。',
	'c_set_password_reset_disabled' => 'パスワードリセットは無効です。',
	'c_set_password_reset_title' 	=> 'パスワードリセット',
	'c_set_enable_password_reset'	=> 'パスワードリセットを有効にする',
	'c_set_disable_password_reset'	=> 'パスワードリセットを無効にする',
	'v_set_tab_password_reset'		=> 'パスワードリセット',
	'v_set_password_reset_title'	=> 'パスワードリセットの設定',
	'v_set_password_reset_desc_1'	=> 'この設定では、ユーザーのパスワードリセットを有効または無効にすることができます（サインイン画面の "パスワードをお忘れですか？"リンク）。',
	'c_set_enable_password_reset'	=> 'パスワードリセットを有効にする',
	'c_set_disable_password_reset'	=> 'パスワードリセットを無効にする',
	'v_set_password_reset_enable_question' => 'パスワードリセットを有効にしますか？',
	'v_set_password_reset_disable_question' => 'パスワードリセットを無効にしますか？',

	// v10
	'v_set_email_doc_link'			=> 'Team Password ManagerのEメール設定について説明した文書を読むには、ここをクリックしてください。',
	'v_set_email_sender_address'	=> '送信者アドレス',
	'v_set_email_sender_name'		=> '送信者名',
	'v_set_email_sender_address_def'=> '空欄の場合、宛先アドレスが使用されます。',
	'v_set_email_sender_name_def'	=> 'a-z、A-Z、0-9文字とスペースのみ。空白の場合、デフォルトは "Team Password Manager "になります。',
	'v_set_email_sender_name_ic'	=> '送信者名に無効な文字が含まれています',

	// v11
	'c_set_saml_missing_modules'	=> 'SAML 認証を使用するには、以下の PHP モジュールが必要です：',
	'c_set_saml_disabled'			=> 'SAML 認証が無効になっている。',
	'c_set_saml_enabled'			=> 'SAML 認証が有効になっている。',
	'v_set_tab_saml'				=> 'SAML 認証',
	'c_set_saml_title'				=> 'SAML 認証',
	'v_set_saml_title'				=> 'SAML シングルサインオン認証の構成',
	'v_set_saml_desc'				=> 'SAML認証により、Team Password ManagerのユーザはSAMLアイデンティティプロバイダに対して認証されます。',
	'v_set_saml_site_link'			=> 'Team Password ManagerのSAML認証について説明した文書を読むには、ここをクリックしてください。',
	'c_set_saml_disable'			=> 'SAML 認証を無効にする',
	'c_set_saml_enable'				=> 'SAML 認証を有効にする',
	'v_set_saml_enable_question'	=> 'SAML認証を有効にするか？',
	'v_set_saml_disable_question' 	=> 'SAML認証を無効にしますか？',
	'v_2fa_disabled_saml_users'		=> '注：2 要素認証は、SAML ユーザには無効です。この機能は、ID プロバイダ（IdP）が提供する必要がある。',

	'saml_login_text'				=> 'SAML経由のサインイン',	// Same as in login_lang.php
	'v_saml_set_other'				=> 'その他の設定',
	'v_saml_set_login_text'			=> 'SAML サインイン・テキスト',
	'v_saml_set_login_text_help'	=> 'SAML Sign In リンクまたはボタンに表示されるテキスト',
	'v_saml_set_custom_help'		=> 'カスタム設定を1行に1つずつ、次の書式で入力する：custom.setting=value',
	'v_saml_set_default_login'		=> 'デフォルトのサインイン画面',
	'v_saml_set_normal_login'		=> '通常のユーザー名/パスワードによるサインイン画面',
	'v_saml_set_saml_login'			=> 'SAML サインイン画面',
	'v_saml_set_sp'					=> 'サービスプロバイダ（Team Password Manager）の設定',
	'c_set_saml_edit_server_error'	=> 'SAML 設定の編集でエラーが発生しました。',
	'c_set_saml_return'				=> 'SAML 認証構成に戻る',
	'c_set_saml_edit_server_csrf_error' => 'SAML 設定の編集で CSRF エラーが発生しました。',
	'v_saml_set_idp'				=> 'アイデンティティ・プロバイダ（IdP）の設定',
	'v_saml_set_saml_not_configured' => 'SAML 認証が構成されていません。必要な ID プロバイダ設定を入力する必要があります。',
	'v_saml_set_sp_eid'				=> 'エンティティID',
	'v_saml_set_sp_acs_url'			=> 'アサーション・コンシューマー・サービスURL',
	'v_saml_set_sp_sls_url'			=> 'シングル・ログアウト・サービスURL',
	'v_saml_set_idp_eid'			=> 'エンティティID',
	'v_saml_set_idp_sso_url'		=> 'シングルサインオンURL',
	'v_saml_set_idp_slo_url'		=> 'シングル・ログアウト・サービスURL',
	'v_saml_set_idp_cert'			=> '証明書',
	'v_saml_set_idp_not_set_required' => '設定されていない。必須。',
	'v_saml_set_idp_not_set'		=> '設定されていない。',
	'v_saml_set_idp_cert_set'		=> '設定し、編集して表示する。',
	'v_saml_set_notes'				=> '備考',
	'v_saml_set_notes_help'			=> '内部メモ',
	'v_saml_set_idp_slo_disabled' 	=> 'SAML シングルログアウトを無効にするか、IdP がサポートしていない場合は、空のままにする。',
	'v_saml_set_edit_sp'			=> 'サービス・プロバイダ SAML 設定の編集',
	'v_saml_set_edit_idp'			=> 'ID プロバイダ SAML 設定の編集',
	'v_saml_set_edit_other'			=> 'その他の SAML 設定の編集',
	'v_saml_set_sp_cert'			=> '証明書',
	'v_saml_set_sp_pk'				=> 'プライベート・キー',
	'v_saml_set_sp_nif'				=> '名前 ID 形式',
	'v_saml_set_sp_set'				=> '設定し、編集して表示する。',
	'v_saml_set_sp_not_set'			=> '設定されていない。',
	'v_saml_set_custom'				=> 'カスタム設定',
	'v_saml_set_idp_x509'			=> 'ID プロバイダの公開 x509 証明書',
	'v_saml_set_sp_x509'			=> 'サービス・プロバイダーの公開x509証明書',
	'v_saml_set_sp_pk_help'			=> 'サービス・プロバイダーの秘密鍵',
	'v_saml_set_sp_nif_help'		=> '空白のままだとデフォルトになる：',

	'v_set_cc_copied'				=> 'コピー',
	'v_set_cc_nothing_copy'			=> 'コピーするものは何もない！',
	'v_set_cc_error'				=> 'コピーするデータの取得エラー',
	'v_set_cc_copy_clipboard' 		=> 'クリップボードにコピー',

	'v_set_ldap_field_aut'			=> '認証',
	'v_set_ldap_field_aut_ldap'		=> 'LDAP：このサーバーのLDAPユーザーは、LDAP経由で認証されます。',
	'v_set_ldap_field_aut_saml'		=> 'SAML：このサーバの LDAP ユーザは SAML 経由で認証され、LDAP ユーザのようにプロビジョニングできる。',
	'v_users_saml_disabled'			=> '注：SAML認証は無効', // Same as in users_lang.php

	// v12
	'c_set_import_csrf_error'		=> 'パスワードのインポートでCSRFエラーが発生しました。',
	'c_set_pwd_reset_url_set'		=> 'パスワードリセットURLが設定されている。',
	'c_set_pwd_reset_url_not_set'	=> 'パスワードリセットURLが設定されていない。',
	'v_set_pwd_reset_url'			=> 'パスワード再設定URL',
	'v_set_set_pwd_reset_url'		=> 'パスワードリセットURLの編集',
	'v_set_pwd_reset_info'			=> 'パスワードリセットのURLは<strong>パスワードリセットポイズニング</strong>パスワードのリセットに使用されるURLを生成するために、Hostヘッダーの代わりにこれを使用する。',
	'v_set_pwd_reset_info_2'		=> 'config.phpでTPM_BASE_URLパラメータを使用している場合は、パスワードリセットURLを設定する必要はないことに注意してください。',
	'c_set_pwres_url_field'			=> 'パスワード再設定URL',
	'c_set_pwd_reset_url_edit'		=> 'パスワード再設定URLの編集',
	'v_set_pwres_url_field_help_1'	=> 'httpまたはhttpsである必要があります。スラッシュ（/）で終わる必要はありません。',
	'v_set_pwres_url_field_help_2'	=> '削除する場合は空白のままにする',
	'v_set_pwd_reset_url_suggested'	=> '推奨値',
	'v_set_pwres_url_suggested_help' => '推奨値は、index.phpより前のTeam Password ManagerのインストールURLです。',
	'c_set_edit_pwd_reset_csrf_error' => 'パスワードリセットURLを保存する際にCSRFエラーが発生しました。',
	'c_set_pwd_reset_return' 		=>'Return to password reset configuration',
	'c_set_edit_pwd_reset_error'	=> 'パスワードリセットURLの保存にエラーが発生しました。',
	'c_set_pwe_reset_http_error'	=> 'パスワードリセットのURLはhttpまたはhttpsである必要があります。',
	'v_set_api_deprecated'			=> '非推奨',

	// v13
	'v_set_tab_password_rules'		=> 'ユーザーパスワード規則',
	'v_set_password_rules_desc_1'	=> 'この設定により、Team Password Managerユーザのパスワードのルールを定義することができます(SAML/LDAPサーバで定義されたルールを使用するSAMLまたはLDAPユーザには適用されません)。',
	'v_set_password_rules_desc_2'	=> '現在、ユーザーパスワードには以下のルールがある：',

	'v_set_password_rules_username'	=> 'ユーザー名やEメールアドレスの一部であってはならない。',
	'v_set_password_rules_min_len'	=> '最小の長さ',
	'v_set_password_rules_contain' 	=> '以下のセットから少なくとも1つの文字を含まなければならない。',
	'v_set_password_rules_uppercase'=> '大文字',
	'v_set_password_rules_lowercase'=> '小文字',
	'v_set_password_rules_numbers' 	=> '数字',
	'v_set_password_rules_symbols' 	=> 'シンボル',
	'v_set_password_rules_spaces' 	=> 'スペース',
	'v_set_password_rules_spaces_except' => '(先頭または末尾を除く。）',

	'c_set_upr_edit'				=> 'ユーザーパスワード規則の編集',
	'v_set_upr_min'					=> '最小',
	'v_set_upr_max'					=> 'マックス',
	
	'c_set_upr_edit_error'			=> '設定の保存エラー',
	'c_set_upr_return'				=> 'ユーザーパスワードルールの設定に戻る',
	'c_set_upr_edit_csrf_error'		=> '設定の保存でCSRFエラーが発生しました。',

	'v_upr_load_error'				=> 'パスワード規則の読み込みエラーが発生しました。',

	// v14
	'v_set_tab_manager'				=> '新しいパスワードの管理者',
	'v_set_pwm_explanation'			=> 'この設定では、新しいパスワードの管理者となるユーザーを設定できます。パスワードの管理者は、パスワードを完全に管理することができます。',
	'v_set_pwm_currently'			=> '現在、新しいパスワードの管理者は以下の通りです：',
	'v_set_pwmedit'					=> '新しいパスワードの管理者を変更する',
	'c_set_pwm_creator'				=> 'パスワードを作成するユーザー',
	'c_set_pwm_pm'					=> 'パスワードのプロジェクトのマネージャー',
	'c_set_pwm_this_user'			=> 'このユーザー',
	'v_set_pwm_field'				=> '新しいパスワードの管理者',
	'v_set_pwm_specific_user'		=> '特定のユーザー（以下から選択）',
	'v_set_pwmedit_error'			=> '新しいパスワードのマネージャーを変更する際にエラーが発生しました。',
	'c_set_pwm_return'				=> '新しいパスワード設定のマネージャーに戻る',
	'v_set_pwmedit_incorrect'		=> '不正確な値',
	'v_set_pwmedit_csrf_error'		=> '新しいパスワードのマネージャーを変更する際にCSRFエラーが発生しました。',
	'v_set_pwm_user'				=> 'ユーザー',
	'v_set_pwd_select_user'			=> 'ユーザーを選択',
	'c_set_pwm_user_does_not_exist'	=> '選択したユーザーが存在しない',
	'c_set_pwm_user_read_only'		=> '選択されたユーザーは、読み取り専用ロールを持つユーザーではありません。',
	'c_set_pwm_user_required'		=> 'ユーザーを選択する必要があります。',
	'v_set_pwd_select_user_title'	=> '新しいパスワードの管理者となるユーザーを選択する。',
	'v_set_notes_pm_user' 			=> '注意：パスワード作成時にこのユーザーが存在しないか、読み取り専用ユーザーであった場合、パスワードの管理者はパスワードを作成したユーザーになります。',

	// v18
	'v_set_exp_desc_2'				=> 'もし<code>遺伝子エキス</code>が定期的に実行されている場合、パスワード・マネージャーとその[PRJ]マネージャー（および/またはグローバルに設定された電子メールアドレス）に、パスワードの有効期限が間もなく切れることを思い出させる通知電子メールを送信する。',

	'v_set_exp_global_email'		=> '期限切れ通知や期限切れリマインダーを送信するためのグローバルメールアドレス',
	'v_set_exp_global_email_not_set' => '(未設定)',
	'v_set_exp_global_also'			=> 'パスワード・マネージャーと[PRJ]マネージャーにも期限切れ通知を送る',

	'v_set_exp_genexp_desc'			=> 'パスワード管理者と[PRJ]管理者（および/またはグローバルに設定された電子メールアドレス）に、パスワードの有効期限または有効期限リマインダーの定期的な通知を電子メールで受け取りたい場合は、次のように設定する必要があります。<code>遺伝子エキス</code>を毎日実行する。',

	'v_set_exp_days_field_help'		=> '期限切れリマインダーを無効にするには 0 を設定します。',

	'v_set_exp_global_email_1'		=> 'グローバルメールアドレス',
	'v_set_exp_global_email_2'		=> '期限切れ通知や期限切れリマインダーの送信',

	'v_set_exp_global_also_mgrs'	=> 'マネージャーにも通知',

	// v21
	'v_set_tab_pstren'				=> 'パスワード強度',
	'v_set_pstren_title'			=> 'パスワードの強度',
	'c_set_pstren_title'			=> 'パスワード強度',

	'pstren_enabled'				=> '有効',
	'pstren_disabled'				=> '無効',

	'v_set_pstren_enabled'			=> 'パスワードの強度は<strong>有効</strong>.',
	'v_set_pstren_disabled'			=> 'パスワードの強度は<strong>無効</strong>.',

	'v_set_pstren_explain1'			=> 'パスワードの強度を有効にするには、システム内のすべてのパスワードの強度を計算するプロセスを実行する必要があります。',
	'v_set_pstren_explain2'			=> '以下のボタンをクリックして、この処理を実行する：',	

	'v_set_pstren_enable'			=> 'パスワードの強度を有効にする',

	'v_set_pstren_calc_title'		=> 'パスワード強度の計算',

	'v_set_pstren_calc_exec_prog'	=> '実行中：',
	'v_set_pstren_calc_exec_stopped'=> 'で実行が止まった：',
	'v_set_pstren_calc_stopping'	=> '執行停止...',

	'v_set_pstren_calc_explain1'	=> 'このプロセスは、システム内のすべてのパスワードの強度を計算します。ボタンをクリックして開始します：',
	'v_set_pstren_calc_explain2'	=> '実行が停止しました。ボタンをクリックして再開してください：',
	'v_set_pstren_calc_ended'		=> 'パスワード強度の計算が終了しました。パスワード強度は現在<strong>有効</strong>.',

	'v_set_pstren_calc_btn_execute'	=> 'パスワード強度計算の実行',
	'v_set_pstren_calc_btn_stop'	=> '実行停止',

	'v_set_pstren_calc_do_not_close_tab' => 'このタブを閉じると実行は停止する。',

);