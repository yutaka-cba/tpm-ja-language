<?php
$lang = array (
	// Controllers/models
	'c_install_title'				=> 'インストール',

	'c_install_session_data_expired' => 'セッションデータの有効期限切れ',
	'c_install_try_again' 			=> 'もう一度お試しください',

	'c_install_username'			=> 'ユーザー名',
	'c_install_email'				=> 'Eメールアドレス',
	'c_install_pwd'					=> 'パスワード',
	'c_install_repeat_pwd'			=> 'リピートパスワード',
	'c_install_name'				=> '名称',
	'c_install_eula_agreement'		=> 'EULA同意書',
	'c_install_username_invalid'	=> 'ユーザー名に無効な文字が含まれています。',

	'm_install_incorrect_version' 	=> "Incorrect version. This indicates that the index.php file doesn't match the rest of the software. Debug info",
	'm_install_php_version_56'		=> 'PHPのバージョンは5.6.0以上でなければなりません。',
	'm_install_always_populate_raw_post_data' => 'php.iniのalways_populate_raw_post_dataパラメータは-1でなければなりません。php.iniでalways_populate_raw_post_data=-1に設定し、ウェブサーバーを再起動してください。',
	'm_install_db_not_set_config'	=> 'データベース接続パラメータが設定されていません。config.phpで設定してください。',
	'm_install_tables_exist'		=> 'データベースのテーブルの一部または全部がすでに存在する。空のデータベースを選び、config.phpで設定してください。',
	'm_install_db_not_correctly'	=> 'config.phpでデータベースが正しく設定されていません（存在しないか、アクセスできません）。',
	'm_install_problem_testing_db'	=> 'データベース操作のテストに問題があります（通常、データベース権限が正しくないことが原因ですが、別の問題の可能性もあります）。この操作は失敗しました',
	'm_install_cannot_install'		=> '以下のエラーにより、Team Password Managerをインストールできません。',
	'm_install_cannot_upgrade'		=> '以下のエラーにより、Team Password Managerをアップグレードできません。',
	'm_install_correct_execute'		=> 'それらを修正し、インストール手順を再度実行してください。',
	'm_install_correct_execute_upgrade'	=> 'それらを修正し、再度アップグレード手順を実行してください。',

	'm_install_error_creating_table' => 'テーブル作成エラー',
	'm_install_verify_priv_table' 	=> 'データベース・ユーザーがテーブルを作成するのに十分な権限を持っていることを確認してください。',
	'm_install_error_creating_tables' => 'テーブル作成エラー。データベース・ユーザにテーブル作成権限があることを確認してください。',
	'm_install_error_options'		=> 'オプション・テーブルの書き込みエラー。データベース・ユーザに挿入権限があることを確認してください。',
	'm_install_error_roles'			=> 'ロール・テーブルの書き込みエラー。データベース・ユーザに挿入権限があることを確認してください。',
	'm_install_error_ekey'			=> '暗号化キーの作成エラー。データベース・ユーザに挿入権限があることを確認してください。',
	'm_install_error_admin'			=> '管理者ユーザーの作成エラー',
	'm_install_exception_admin'		=> 'adminユーザーの作成エラー。データベース・ユーザーに挿入権限があることを確認してください。',
	'm_install_errors_during_install' => 'インストール中に以下のエラーが発生しました。',
	'm_install_correct_support'		=> 'それらを修正し（またはサポートに連絡し）、インストール手順を再度実行してください。',
	'm_install_error_inserting_counters' => 'カウンターの挿入エラー',

	'c_upgrade_title'				=> 'アップグレード',
	'c_upgrade_incorrect_user'		=> '入力されたユーザーが管理者/ITユーザーでないか、ユーザー名またはパスワードが間違っています。',

	'm_install_tpm_uptodate'		=> 'Team Password Managerは最新です。アップグレードの必要はありません。',
	'm_install_table_not_exists'	=> 'このテーブルは存在しない',
	'm_install_keyphp_not_exists'	=> 'key.phpファイルが存在しない',
	'm_install_db_not_found'		=> 'データベースが見つかりません。',
	'm_install_upgrading_smaller'	=> "The version you are upgrading to is smaller than the one that's installed.",
	'm_install_upgrading_smaller_to' => 'へのアップグレード',
	'm_install_upgrading_smaller_from' => '設置済み',

	'm_install_enc_key_not_defined'	=> '暗号化キーが定義されていません（key.phpがないか、暗号化キーが設定されていません）。',
	'm_install_errors_upgrading' 	=> 'クエリやプロセスのアップグレードにエラーがあった。',
	'm_install_contact_support'		=> 'サポートまでご連絡ください。',
	'm_install_upgrade_stopped'		=> 'アップグレードが停止しました。サポートに連絡してください。',
	'm_install_failed_query'		=> '失敗したクエリ',

	'c_upgrade_admin_it_username'	=> '管理者/ITユーザー名',
	'c_upgrade_admin_it_email'		=> '管理/ITメール',

	// Views
	'v_install_v'					=> 'v.', // for version, eg v. xxx
	'v_install_enter_data'			=> 'のデータを入力する。<strong>管理ユーザー</strong>チームパスワードマネージャー<strong>は必須項目です。</strong>)',
	'v_install_8cm'					=> '8文字以上',
	'v_install_agree_eula'			=> 'エンドユーザーライセンス契約に同意します',
	'v_install_submit_data'			=> '設置完了のためのデータ提出',

	'v_install_tpm_installed_ok'	=> 'Team Password Managerが正しくインストールされました。',
	'v_install_tpm_installed_del_files' => 'Team Password Managerフォルダから次のファイルを削除することをお勧めします: install.txt、eula.txt、upgrade.txt。',
	'v_install_tpm_installed_lic'	=> 'ライセンスを購入された場合は、サインイン後、[設定]-[ライセンス]メニューからライセンスを登録することができます。',
	'v_install_tpm_installed_maysignin' => '前のステップで作成したユーザでTeam Password Managerにログインできます。',
	'v_install_tpm_installed_signin' => 'チームパスワード管理 ログイン',

	'v_upgrade_ok'					=> 'Team Password Managerはバージョンに正しくアップグレードされました。',
	'v_upgrade_keyphp_not_needed'	=> 'key.phpファイルは新しいバージョンでは不要になりましたので、削除することをお勧めします。手動で削除してください。',
	'v_upgrade_old_hashing_system'	=> 'Team Password Managerの古いバージョンをアップグレードした。その結果、残りのユーザはTeam Password Managerにアクセスするためにパスワードをリセットする必要があります。',

	'v_upgrade_btn'					=> 'アップグレード',
	'v_upgrade_process_desc'		=> 'このプロセスは、Team Password Managerのインストールをアップグレードします。',
	'v_upgrade_from_version'		=> 'バージョンから',
	'v_upgrade_to_version'			=> 'バージョンへ',
	'v_upgrade_expired_note_1'		=> '<strong>注：</strong>以下のライセンスは、サポートおよびアップデートの期間が終了しました。',
	'v_upgrade_expired_note_2'		=> 'アップグレードしようとしているバージョンでこれらのライセンスを使用するには、それぞれのライセンスに「サポートとアップデート」ライセンスを添付する必要があります。これはアップグレード後に行うことができます。',
	'v_upgrade_purchase_su'			=> 'サポート＆アップデート」ライセンスの購入',
	'v_upgrade_more_information'	=> '詳細情報',
	'v_upgrade_backup_note'			=> 'Team Password Managerをアップグレードすると、データベースの構造（場合によってはデータ）が変更される可能性があるため、データベースのバックアップコピーを作成することをお勧めします。データベースのバックアップを作成する方法を参照してください。',
	'v_upgrade_enter_adminit_desc'	=> '管理者またはIT部門のユーザー名とパスワードを入力し、「アップグレード」ボタンをクリックして次に進みます。',

	'm_install_json_not_installed'	=> 'PHP JSON 拡張モジュールがインストールされていません。',
	'm_install_filter_not_installed' => 'PHP Filter 拡張モジュールがインストールされていません。',
	'm_install_session_not_installed' => 'PHP Session 拡張モジュールがインストールされていません。',
	'm_install_hash_not_installed'	=> 'PHP Hash 拡張モジュールがインストールされていません。',

	// v9
	'm_install_error_enabling_linked_passwords' => 'リンクされたパスワードの有効化エラー',
	'm_install_error_enabling_password_reset' => 'パスワードリセットの有効化エラー',
	
);