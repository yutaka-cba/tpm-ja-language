<?php
$lang = array (
	// controllers/users
	'c_users_title'					=> 'ユーザー',	// plural
	'c_users_user_title'			=> 'ユーザー',	// singular
	'c_users_num_active'			=> '<strong>アクティブ</strong>ユーザー数',
	'c_users_total_create'			=> 'ライセンスで許可されているアクティブユーザーの総数',
	'c_users_left'					=> '残りのユーザー数',
	'c_users_cannot_more'			=> '現在のライセンスではユーザーを増やすことはできません。',
	'c_users_need_more'				=> 'さらにユーザーを追加する必要がある場合は、次のリンクをクリックし、Team Password Managerウェブサイトから追加ライセンスを購入してください。',
	'c_users_more_than_allowed'	 	=> 'ライセンスで許可されている数よりも多くのアクティブユーザーがいます。この状況が修正されるまで、Team Password Managerを使用することはできません。',
	'c_users_two_options'			=> '2つの選択肢があります',
	'c_users_del_dea_num' 			=> '以下のユーザー数を削除または無効化する。',
	'c_users_increase' 				=> '新しいライセンスで最大アクティブユーザー数を増やす。Team Password Managerウェブサイトから追加ライセンスを購入するには、次のリンクをクリックしてください：',
	'c_users_view_user'				=> 'ユーザーを見る',
	'c_users_user_not_exists'		=> '選択したユーザーは存在しません。',
	'c_users_renew_api_keys'		=> 'APIキーを更新する',
	'c_users_api_keys_renewed'		=> 'HMAC APIキーが更新されました。今後、HMACを使用したAPIコールの認証には、この新しいキーを使用する必要があります。',
	'c_users_return_to_user'		=> 'ユーザーに戻る',
	'c_users_error_renewing_api_keys' => 'APIキーの更新にエラーが発生しました。',
	'c_users_error_renewing_api_csrf' => 'APIキーの更新でCSRFエラーが発生しました。',

	'field_username' 				=> 'ユーザー名',
	'field_email'					=> 'Eメールアドレス',
	'field_ldap_server'				=> 'LDAP/ADサーバー',
	'field_login_dn'				=> 'ログインDN',
	'field_name'					=> '名前',
	'field_role'					=> '役割',
	'field_language'				=> '言語',
	'field_pwd'						=> 'パスワード',
	'field_repeat_pwd'				=> 'パスワードを再度入力してください',
	'field_new_pwd'					=> '新しいパスワード',
	'field_repeat_new_pwd'			=> '新しいパスワードを再度入力してください',
	'field_cur_pwd'					=> '現在のパスワード',

	'c_users_ildap_dn_username'		=> 'ログインDN/ユーザー名',
	'c_users_ildap_anon'			=> '匿名',
	'c_users_ildap_base_dn'			=> 'ベースDN',
	'c_users_ildap_filter'			=> 'フィルター',
	'c_users_ildap_name_1'			=> '名前 1',
	'c_users_ildap_name_2'			=> '名前 2',
	'c_users_ildap_size_limit' 		=> 'サイズ制限',

	'val_username_exists' 			=> 'ユーザー名はすでに存在しています。',
	'val_username_invalid_chars'	=> 'ユーザー名に無効な文字が含まれています。',
	'val_email_exists' 				=> 'このメールアドレスはすでに存在しています。',
	'val_it_users_cannot_mg_admins' => 'ITユーザーは、管理者ユーザーを管理（追加、編集、パスワード変更、無効化、削除など）することはできません。',
	'val_it_users_cannot_mg_admins_title' => 'ITユーザーは管理者ユーザーを管理できない',

	'c_users_edit_user'				=> '編集ユーザー',
	'c_users_edit_user_error'		=> 'ユーザー情報の保存でエラーが発生しました。',
	'c_users_edit_user_csrf_error'	=> 'ユーザー情報の保存でCSRFエラーが発生しました。',

	'c_users_new_user'				=> '新規ユーザー',
	'c_users_cannot_add_user'		=> '新しいユーザーを追加することはできません。',
	'c_users_max_users_reached' 	=> 'アクティブユーザー数が上限に達しました',
	'c_users_click_to_purchase'		=> 'その他のユーザーのご購入はこちら',
	'c_users_add_user_error' 		=> 'ユーザーの追加でエラーが発生しました。',
	'c_users_add_user_csrf_error'	=> 'ユーザーの追加でCSRFエラーが発生しました。',

	'c_users_new_user_all_options' 	=> '新規ユーザー - すべてのオプション',

	'c_users_new_ldap_user'			=> '新規LDAP/ADユーザー',

	'c_users_cpwd'					=> 'ユーザーパスワードの変更',
	'c_users_cpwd_cannot_ldap'		=> 'LDAP/ADユーザーのパスワードは変更できません。',
	'c_users_cpwd_ok'				=> 'パスワードが正しく変更されました。',
	'c_users_cpwd_error'			=> 'パスワードの変更でエラーが発生しました。',
	'c_users_cpwd_csrf_error'		=> 'パスワードの変更でCSRFエラーが発生しました。',

	'c_users_clang'					=> '言語の変更',
	'c_users_clang_error'			=> '言語の変更でエラーが発生しました。',
	'c_users_clang_csrf_error'		=> '言語の変更でCSRFエラーが発生しました。',
	'c_users_default_language'		=> 'デフォルト言語',

	'c_users_del'					=> 'ユーザー削除',
	'c_users_del_not_yourself' 		=> '<strong>自分自身を削除することはできません</strong>。他のユーザーを選択してください。',
	'c_users_del_ok'				=> 'ユーザーが削除されました。',

	'c_users_del_user_from_group'	=> 'グループからユーザーを削除する',
	'c_users_del_user_from_group_cannot' => 'このユーザーのグループを削除することはできません。',
	'c_users_del_user_from_group_no_group' => '選択したグループが存在しません。',
	'c_users_del_user_from_group_no_ug' => '選択したユーザーまたはグループが存在しません。',
	'c_users_del_user_from_group_ok' => 'ユーザーがグループから削除されました',
	'c_users_del_user_from_group_error' => 'グループからユーザーを削除する際にエラーが発生しました。',

	'c_users_add_user_to_group'		=> 'ユーザーをグループに追加する',
	'c_users_add_user_to_group_db_error' => 'データベースエラーにより、ユーザーをグループに追加できませんでした。',
	'c_users_add_user_to_group_cannot' => 'ユーザーをグループに追加することはできません。',
	'c_users_add_user_to_group_csrf_error' => 'CSRFエラーが発生しました。',
	'c_users_add_user_to_group_no_groups' => 'ユーザーを追加するグループがありません。',
 
 	'c_users_set_api_only'			=> 'API専用ユーザーの設定',
 	'c_users_set_api_only_already_api' => 'このユーザーはすでにAPI専用ユーザーです',
 	'c_users_set_api_only_not_yourself' => '<strong>API専用ユーザーとして設定することはできません</strong>。他のユーザーを選択してください。',

 	'c_users_unset_api_only'		=> '未設定API専用ユーザー',
 	'c_users_unset_api_only_already' => 'このユーザーはすでにAPI専用ユーザーではありません',
 	'c_users_unset_api_only_not_yourself' => '<strong>API専用ユーザーとしての設定を解除することはできません</strong>。他のユーザーを選択してください。',

 	'c_users_activate'				=> 'ユーザーをアクティブにする',
 	'c_users_activate_not_yourself' => '<strong>自分自身をアクティブにすることはできません</strong>。他のユーザーを選択してください。',
 	'c_users_activate_cannot_more'	=> 'これ以上のユーザーをアクティベートすることはできません。',

 	'c_users_deactivate'			=> 'ユーザーの無効化',
 	'c_users_deactivate_not_yourself' => '<strong>自分で自分を無効化することはできません</strong>。他のユーザーを選択してください。',

 	'c_users_disable_2fa'			=> '二要素認証を無効にする',
 	'c_users_disable_2fa_disabled_all' => '二要素認証はすべてのユーザーに対してすでに無効になっています。',
 	'c_users_disable_2fa_not_enabled' => 'このユーザーは二要素認証を有効にしていません。',
 	'c_users_disable_2fa_ok'		=> 'このユーザーは二要素認証が無効になっています。',

 	'c_users_change_john'			=> 'ユーザーの変更のデモ',
 	'c_users_change_john_impossible' => 'このデモでは、ユーザーJohn Bossは編集、削除、無効化、パスワードの変更ができません。',

 	'c_users_cnv_normal'			=> '通常（LDAPではない）ユーザーへの変換',
 	'c_users_cnv_normal_already'	=> 'そのユーザーはすでに通常（LDAPではない）ユーザーです。',

 	'c_users_cnv_ldap' 				=> 'LDAPユーザーへの変換',
 	'c_users_cnv_ldap_already'		=> 'このユーザーはすでにLDAPユーザーです',

 	'c_users_import_step_1'			=> 'LDAP ユーザのインポートステップ 1: ユーザを取得するためのデータ',
 	'c_users_import_step_2_import'	=> 'LDAPユーザーをインポートします。ステップ2：インポートするユーザーを選択する',
 	'c_users_import_step_2_debug'	=> 'LDAPユーザーをインポートします。ステップ 2: 取得したデータのデバッグ',
 	'c_users_import_ldap_title'		=> 'LDAPユーザーのインポート',
 	'c_users_imported_ldap_title'	=> 'インポートされたLDAPユーザー',
 	'c_users_import_ldap_error_getting' => 'インポートデータの取得にエラーが発生しました。',
 	'c_users_import_ldap_csrf_error' => 'CSRFエラーが発生しました。もう一度お試しください。',

 	// views/users

 	'tab_users'						=> 'ユーザー',
 	'tab_groups'					=> 'グループ',

 	'v_users_btn_new_user'			=> '新規ユーザー',
 	'v_users_btn_new_user_options'	=> '新規ユーザーオプション',
 	'v_users_btn_search_users'		=> '検索ユーザー',

 	'v_users_btn_new_user_desc'		=> '通常ユーザーを作成する。',
 	'v_users_btn_new_ldap_user'		=> '新しいLDAPユーザー',
 	// Deleted T#484 'v_users_btn_new_ldap_user_desc'=> 'ユーザーDNを手動で入力して、LDAP/ADユーザーを作成する。',
 	'v_users_btn_import_ldap_users'	=> 'LDAPユーザーのインポート',
 	// Deleted T#484 'v_users_btn_import_ldap_users_desc' => 'LDAP/ADサーバーからインポートして、1人以上のLDAP/ADユーザーを作成する。',

 	'v_users_num_groups'			=> 'グループ',
 	'v_users_state'					=> 'ステータス',

 	// Responsive headers
 	'v_users_lhs_name'				=> '名前',
 	'v_users_lhs_username'			=> 'ユーザー名',
 	'v_users_lhs_email'				=> 'Eメール',
 	'v_users_lhs_role'				=> '役割',
 	'v_users_lhs_state'				=> 'ステータス',

 	'v_users_sort_by_name'			=> '名前でソート',
 	'v_users_sort_by_username'		=> 'ユーザー名でソート',
 	'v_users_sort_by_email'			=> 'Eメールでソート',
 	'v_users_sort_by_role'			=> '役割でソート',
 	'v_users_sort_by_state'			=> 'ステータスでソート',

 	// Labels
 	'lbl_inactive'					=> '非アクティブ',
 	'lbl_active'					=> 'アクティブ',
 	'lbl_2fa'						=> '2FA',
 	'lbl_api_only'					=> 'API専用',
 	'lbl_ldap'						=> 'LDAP',

 	'v_users_list_invalid_hash'		=> '注意：このユーザーのハッシュ値は無効で、サインインできません。これはおそらく誰かがデータベースを改ざんしたことが原因です。この状況を修正するには、ユーザーを編集する必要があります。',
 	'v_users_uinfo_invalid_hash'	=> '注意: ユーザーのハッシュ値が無効で、次回サインインできません。これはおそらく誰かがデータベースを改ざんしたことが原因です。管理者にお知らせください。',
 	'v_users_uinfo_invalid_hash_edit' => '注意：このユーザーのハッシュ値は無効で、サインインできません。これはおそらく、誰かがデータベースを改ざんしたことが原因です。この状況を修正するには、情報を保存してください。<strong>ユーザー名</strong>そして<strong>役割</strong>のフィールドに特に注意してください。',

 	'v_users_list_invalid_hash_edit' => 'ユーザーを編集する',

 	'v_users_sidebar_all'			=> '全ユーザー',
 	'v_users_sidebar_api_only'		=> 'API専用ユーザー',
 	'v_users_sidebar_search_results' => '検索結果',
 	'v_users_sidebar_filter_state'	=> 'ステータスで絞り込む',
 	'v_users_sidebar_filter_role'	=> '役割で絞り込む',
 	'v_users_sidebar_filter_ldap_server' => 'LDAP/ADサーバーで絞り込む',
 	'v_users_sidebar_filter_group'	=> 'グループによる絞り込む',
 	'v_users_sidebar_server'		=> 'サーバー',

 	'v_users_no_users_filter'		=> 'このフィルターまたは検索を使用しているユーザーはいません。',

 	'v_users_roles_desc_admin'		=> 'すべての操作が可能',
 	'v_users_roles_desc_pm'			=> '通常ユーザーと同様に、[PRJS]を作成/削除することもできます。',
 	'v_users_roles_desc_normal'		=> 'パスワードと[PRJS]は使えるが、[PRJS]の作成と削除はできません。',
 	'v_users_roles_desc_ro'			=> '割り当てられた[PRJS]のパスワードの読み取りのみ',
 	'v_users_roles_desc_it'			=> '[PRJ]マネージャーのように、ユーザー/グループ、ログ、設定にアクセスできます。',

 	'v_users_cannot_create_new_users' => '新しいユーザーを作成することはできません。',

 	'v_users_return_list'			=> 'ユーザー一覧に戻る',
 	'v_users_return_my_acct'		=> 'アカウントに戻る',

 	'v_users_del_user_from_group'	=> 'グループからユーザーを削除する',
 	'v_users_add_user_to_group'		=> 'ユーザーをグループに追加する',

 	'v_users_about_roles'			=> '役割について',

 	'v_users_ldap_disabled'			=> '注：LDAP/AD認証は無効です。',

 	'v_users_btn_edit'				=> '編集',
 	'v_users_btn_cpwd'				=> 'パスワードの変更',
 	'v_users_btn_cnv_normal'		=> '通常（LDAPではない）ユーザーへの変換',
 	'v_users_btn_cnv_ldap'			=> 'LDAPユーザーへの変換',
 	'v_users_btn_unset_api_only'	=> 'API専用ユーザーとして設定解除',
 	'v_users_btn_set_api_only'		=> 'API専用ユーザーに設定',
 	'v_users_btn_deactivate'		=> '非アクティブ化',
 	'v_users_btn_activate'			=> 'アクティブ化',
 	'v_users_btn_del'				=> '削除',
 	'v_users_btn_disable_2fa'		=> '二要素認証を無効にする',
 	'v_users_btn_enable_2fa'		=> '二要素認証を有効にする',
 	'v_users_btn_enable_2fa_mobile'	=> '2FAを有効にする',

 	'v_users_tab_data'				=> 'データ',
 	'v_users_tab_2fa'				=> '二要素認証',
 	'v_users_tab_2fa_mobile'		=> '2FA',
 	'v_users_tab_log'				=> 'ログ',
 	'v_users_tab_api_keys'			=> 'APIキー',
 	'v_users_tab_passwords'			=> 'パスワード',

 	'v_users_last_signed_in'		=> '最後のサインイン',
 	'v_users_last_api_request'		=> '最後のAPIリクエスト',
 	'v_users_created_on'			=> '作成日',
 	'v_users_by'					=> '実行者',
 	'v_users_updated_on'			=> '更新日',

 	'v_users_access_prjs'			=> 'このユーザーは次の[PRJS]にアクセスできます。',
 	'v_users_access_no_prj'			=> 'このユーザーは[PRJ]にアクセスできません。',
 	'v_users_access_all_prj'		=> 'このユーザーは<strong>管理者</strong>ユーザーであり、すべての[PRJS]にアクセスできます。',
 	'v_users_access_prjs_error' 	=> 'このユーザがアクセスできる[PRJS]のリストを取得する際にエラーが発生しました。',

 	'v_users_access_pwds'			=> 'このユーザーは以下のパスワードにアクセスできます。',
 	'v_users_access_no_pwd'			=> 'このユーザーはパスワードにアクセスできません。',
 	'v_users_access_all_pwd'		=> 'このユーザーは<strong>管理者</strong>ユーザーであり、すべてのパスワードにアクセスできます。',
 	'v_users_access_pwd_error'		=> 'このユーザーがアクセスできるパスワードのリストを取得する際にエラーが発生しました。',

 	'v_users_api_keys_not_api_only'	=> 'このユーザーはAPI専用ユーザーではありません。HMAC API Keyはユーザーアカウントに記載されています。',
 	'v_users_hash_hmac_not_installed' => '注：HMAC認証に必要なhash_hmac()関数がインストールされていない場合、HMACを使った認証はできません。',
 	'v_users_sha256_not_installed'	=> '注：HMAC認証に必要なsha256ハッシュアルゴリズムがインストールされていない場合、HMACを使用した認証はできません。',
 	'v_users_api_keys_lbl'			=> 'HMAC認証APIキー',
 	'v_users_public_key'			=> '公開鍵',
 	'v_users_private_key'			=> '秘密鍵',
 	'v_users_renew_api_keys'		=> 'APIキーを更新する',

 	'v_users_renew_api_keys_not_api_only' => 'このユーザーはAPI専用ユーザーではありません。このユーザーのHMAC API Keysを更新するには、サインインして "My Account "の "API Keys "タブをチェックする必要があります。',
 	'v_users_renew_api_keys_question' => 'HMAC API キーを更新しますか？',
 	'v_users_renew_api_keys_warning1' => '警告：このアクションは永続的であり、元に戻すことはできません。',
 	'v_users_renew_api_keys_warning2' => 'APIキーを更新すると、現在のアプリケーションからのHMAC認証ができなくなります。',

 	'v_users_no_log_entries'		=> 'このユーザーのログエントリはありません。',

 	'v_users_edit_enter_pwd'		=> 'パスワードの入力',
 	'v_users_edit_sec_verif'		=> 'セキュリティ検証',

 	'v_users_dn_instructions'		=> 'LDAP/ADサーバー内のユーザーの識別名またはユーザー名。',

 	'v_users_my_account'			=> '私のアカウント',
 	'v_users_my_settings'			=> '私の設定',
 	'v_users_my_passwords'			=> '私のパスワード',

 	'v_users_activate_user_confirm'	=> 'このユーザーをアクティブにしますか？',
 	'v_users_deactivate_user_confirm' => 'このユーザーを停止しますか？',
 	'v_users_deactivate_note'		=> 'アクティブでないユーザは、Team Password Managerにサインインできません。',

 	'v_users_del_confirm'			=> 'このユーザーを削除しますか？',

 	'v_users_del_from_grp'			=> 'グループから削除',
 	'v_users_delg_confirm'			=> 'グループからユーザーを削除しますか？',

 	'v_users_add_to_group'			=> 'グループに追加',

 	'v_users_qr_code'				=> 'QRコード',
 	'v_users_cannot_qr'				=> 'PHP GDエクステンションがインストールされていないため、QRコードを生成することはできませんが、以下のアカウント名と秘密鍵を使用してGoogle Authenticatorをセットアップすることができます。',
 	'v_users_ga_account_name'		=> 'アカウント名',
 	'v_users_ga_secret_key'			=> '秘密鍵',

 	'v_users_btn_renew_secret_key'	=> '秘密鍵の更新',

 	'v_users_api_only_confirm'		=> 'このユーザーをAPI専用ユーザーに設定しますか？',
 	'v_users_api_only_desc'			=> 'API専用ユーザーはTeam Password Managerにサインインできず、API経由でのみTeam Password Managerにアクセスできます。',
 	'v_users_api_disabled_note'		=> '注：APIアクセスは無効',
 	'v_users_unset_api_only_confirm' => 'このユーザーをAPI専用ユーザーとして設定解除しますか？',
 	'v_users_unset_api_only_desc'	=> 'このユーザーはTeam Password Managerにサインインできるだけでなく、API経由でTeam Password Managerにアクセスできるようになります。',

 	'v_users_cnv_normal_desc_1'		=> 'このアクションにより、ユーザーの<strong>ログインDN</strong>が削除されます。',
 	'v_users_cnv_normal_desc_2'		=> 'ユーザーは、Team Password Managerデータベースに保存されているパスワードを使用してサインインできます。',
 	'v_users_cnv_normal_desc_3'		=> '<strong>* 重要：</strong>このユーザーを通常のユーザーに変更した後、「パスワードの変更」ボタンを使用して、このユーザーのパスワードを設定する必要があります。',
 	'v_users_cnv_normal_confirm'	=> 'このユーザーを通常（LDAPではない）ユーザーに変更しますか？',

 	'v_users_cnv_ldap_enter'		=> 'このユーザーがLDAP認証を使用できるようにするには、以下のデータを入力する必要があります。',

 	'v_users_pwd_8_chars'			=> '8文字以上',

 	'v_users_disable_2fa_confirm'	=> 'このユーザーの二要素認証を無効にしますか？',
 	'v_users_disable_2fa_confirm_self' => '二要素認証を無効にする？',
 	'v_users_disable_2fa_confirm_self_desc' => 'サインインはできますが、二要素認証はありません。',

 	'v_users_ga_generated_token'	=> '生成トークン',
 	'v_users_ga_generated_token_desc' => 'Google Authenticatorが30秒ごとに生成',
 	'v_users_2fa_required'			=> '続行する前に、ユーザーの二要素認証を有効にする必要があります。サポートが必要な場合は、管理者にお問い合わせください。',
 	'v_users_enable_2fa_instr_1'	=> '確認のため、現在のパスワードを入力してください。',
 	'v_users_enable_2fa_instr_2'	=> 'スマートフォンで<strong>Google Authenticator</strong>を開き、<strong>プラス（＋）ボタン</strong>をタップして、<strong>時間ベース</strong>を選択します。',
 	'v_users_enable_2fa_instr_3'	=> '<strong>QRコード</strong>を Google Authenticator デバイスでスキャンします。お使いの端末にカメラが搭載されていない場合は、<strong>アカウント名</strong>そして<strong>秘密鍵</strong>を手動で入力してください。',
 	'v_users_enable_2fa_instr_4'	=> 'Google Authenticator が 30 秒ごとに生成する 6 桁のトークンを入力します。',
 	'v_users_enable_2fa_instr_5'	=> '二要素認証を有効にする」をクリックする。',

 	'v_users_new_will_be_active'	=> '<span class="label label-success" style="font-weight:normal">アクティブ</span>になります',

 	'v_users_ildap_search_filter'	=> '検索フィルター',
 	'v_users_ildap_attr_username'	=> '属性：ユーザー名',
 	'v_users_ildap_attr_email'		=> '属性：Eメール',
 	'v_users_ildap_attr_name_1'		=> '属性：名前 1',
 	'v_users_ildap_attr_name_2'		=> '属性：名前 2',
 	'v_users_ildap_debug_mode'		=> 'デバッグモード',
 	'v_users_ildap_save_config'		=> '設定の保存',

 	'v_users_ilu_data_instr'		=> 'LDAP/ADサーバーのユーザーを検索するには、以下のデータを入力してください。',
 	'v_users_ildap_attr_username_help' => 'ユーザー名が割り当てられない場合は、Eメールが使用されます。',
 	'v_users_ildap_attr_name_2_help' => 'インポートされたユーザーの名前は次のようになります。名前1 + 名前2',
 	'v_users_ildap_size_limit_help' => 'LDAPサーバーからフェッチするエントリ数。この制限は、サーバー側であらかじめ設定されている制限を上書きすることはできません。',
 	'v_users_ildap_role_help'		=> 'インポートされたユーザーに割り当てられる役割',
 	'v_users_ildap_debug_mode_help' => 'ユーザーをインポートせず、デバッグデータをスクリーンに出力する。',
 	'v_users_ildap_save_config_help' => 'このフォームのデータをデータベースに保存する(暗号化)',
 	'v_users_ildap_goto_step_2'		=> 'ステップ2：LDAPサーバーからユーザーを取得する',

 	'v_users_ldap_entries_found'	=> '見つかったエントリーの数',
 	'v_users_ldap_entries_can_be_imported' => 'インポート可能なエントリー数',

 	'v_users_ldap_import_error_lbl'	=> '以下のエラーが発生しました。',
 	'v_users_ldap_import_cannot'	=> 'このユーザーをインポートできません。',
 	'v_users_ldap_change_settings'	=> '設定を変更して再試行してください',

 	'v_users_ldap_no_entries_found'	=> '提供されたデータを持つエントリがありません。「検索フィルター」または「ベースDN」を変更してください。',
 	'v_users_ldap_no_users_found'	=> '提供されたデータを持つユーザーがいません。「検索フィルター」または「ベースDN」を変更してください。',

 	'v_users_ldap_users_imported'	=> 'インポートされたユーザー数',
 	'v_users_ldap_no_users_created'	=> 'ユーザーが作成されていません。',
 	'v_users_ldap_no_users_selected'=> '選択されたユーザーがありません。',
 	'v_users_import_more_ldap'		=> 'LDAPユーザーのインポート',	

 	'v_users_ldap_using_data'		=> '以下のデータを使用',
 	'v_users_ldap_change_ret_1'		=> '変更 - ステップ1に戻る',
 	'v_users_ildap_anon_conn'		=> '匿名コネクション',
 	'v_users_ldap_attributes'		=> '属性',
 	'v_users_ldap_entry_is_user'	=> 'このエントリーはユーザーであり、インポートできます',
 	'v_users_ldap_entry_cannot_be_imported'	=> 'このエントリーはインポートできません',
 	'v_users_ldap_no_dn_email'		=> 'DNまたはEメールでのエントリーは不可',
 	'v_users_ldap_dn'				=> 'DN',
 	'v_users_ldap_max_import'		=> 'インポート可能な最大ユーザー数',
 	'v_users_ldap_select'			=> '選択',
 	'v_users_ldap_exists'			=> '存在する',
 	'v_users_ldap_import_selected'	=> '選択したユーザーをインポート',
 	'v_users_ldap_import_num_users_found' => '発見されたユーザー数',
 	'v_users_ldap_import_num_users_exist' => 'すでに存在するユーザー数',
 	'v_users_ldap_import_select_users' => 'インポートしたいユーザーを選択',
 	'v_users_ldap_import_cannot_select' => 'すべてのユーザがすでにTeam Password Managerに存在するため、ユーザを選択することはできません。',

 	// controllers/user_info
 	'c_uinfo_edit_my_account'		=> 'アカウントの編集',
 	'c_uinfo_edit_my_account_error'	=> 'データの保存にエラーが発生しました。',
 	'c_uinfo_edit_my_account_csrf_error' => 'データの保存にCSRFエラーが発生しました。',

 	'c_uinfo_cpwd_cur_pwd_not_ok'	=> '現在のパスワードが正しくありません。',
 	'c_uinfo_cpwd'					=> 'パスワードの変更',
 	'c_uinfo_cpwd_cannot_ldap'		=> 'LDAP/ADユーザーであるため、パスワードを変更することはできません。',
 	'c_uinfo_cpwd_ok'				=> 'パスワードが正しく変更されました。',
 	'c_uinfo_cpwd_error'			=> 'パスワードの変更でエラーが発生しました。',
 	'c_uinfo_cpwd_csrf_error'		=> 'パスワードの変更でCSRFエラーが発生しました。',

 	'c_uinfo_clang'					=> '言語を変更する',
 	'c_uinfo_clang_error'			=> '言語の変更でエラーが発生しました。',
 	'c_uinfo_clang_csrf_error'		=> '言語の変更でCSRFエラーが発生しました。',

 	'c_uinfo_2fa_disable_ok'		=> '二要素認証が無効になりました。',
 	'c_uinfo_2fa_disable_error'		=> '二要素認証を無効にする際にエラーが発生しました。',
 	'c_uinfo_2fa_disable_csrf_error' => '二要素認証を無効にする際にCSRFエラーが発生しました。',
 	'c_uinfo_2fa_disable_already'	=> '二要素認証はすでに無効になっています。',

 	'c_uinfo_error_qr'				=> 'QRコード生成エラー',
 	'c_uinfo_token_not_valid'		=> '生成されたトークンは無効です。',
 	'c_uinfo_key_not_valid'			=> '秘密鍵が有効ではありません。',
 	'c_uinfo_renew_2fa'				=> '二要素認証を更新する',
 	'c_uinfo_2fa_is_disabled'		=> '二要素認証が無効',
 	'c_uinfo_2fa_disabled_admin'	=> '二要素認証が管理者によって無効になっています。',
 	'c_uinfo_e2fa_error_gen_key'	=> '秘密鍵の生成にエラーが発生しました。',
 	'c_uinfo_e2fa_ok'				=> '二要素認証が有効になりました。',
 	'c_uinfo_e2fa_error'			=> '二要素認証を有効にする際にエラーが発生しました。',
 	'c_uinfo_e2fa_csfr_error'		=> '二要素認証を有効にする際にCSFRエラーが発生しました。',

 	'c_users_renew_api_keys_ok'		=> 'HMAC APIキーが更新されました。今後、HMACを使用してAPIコールを認証するには、この新しいキーを使用する必要があります。',

 	'm_usr_lang_not_set'			=> '未設定、デフォルト言語を使用',
 	'm_user_lang_no_desc'			=> '記述なし',

 	// v6
 	'tab_ldap_sync'					=> 'LDAP同期',

 	'v_users_ildap_attr_email_help' => 'Team Password Managerにインポートするには、Eメールアドレスが必要です。',

 	'c_users_del_ldap_group_from_user' => 'このグループはLDAPグループであり、LDAP同期から実行されるため、このユーザーからこのグループを削除することはできません。',

 	'c_users_system'				=> 'このユーザーは、ユーザーがログインしていないプロセスで使用される。例えば、LDAP 同期のような自動化に使用される外部実行プロセスで使用されます。',
 	
 	// v7
 	'v_user_ccproot'				=> 'ルートで[PRJS]を作成できる',

 	'v_users_sort_by_lsi'			=> '最終ログインでソート',
	'v_users_sort_by_lar'			=> '最終のAPIリクエストでソート',

	// v11
	'v_users_btn_new_saml_user'		=> '新しい SAML ユーザー',
	'c_users_new_saml_user'			=> '新しい SAML ユーザー',
	'v_users_saml_email'			=> 'Eメール・アドレスは、SAML ID プロバイダでユーザを識別します。',
	'lbl_saml'						=> 'SAML',
	'v_users_saml_disabled'			=> '注：SAML認証は無効',
	'v_users_btn_cnv_normal_saml'	=> '通常（SAML ではない）ユーザーへの変更',
	'v_users_btn_cnv_saml'			=> 'SAML ユーザーに変更する',
	'v_users_sidebar_saml'			=> 'SAMLユーザー',
	'c_users_cpwd_cannot_saml'		=> 'SAML ユーザーのパスワードは変更できません。',
	'c_users_setao_cannot_saml'		=> 'SAML ユーザーを API 専用ユーザとして設定することはできません。',
	'c_users_cnv_normal_saml'		=> '通常（SAML ではない）ユーザーへの変更',
	'c_users_cnv_normal_saml_not' 	=> 'ユーザーは SAML ユーザーではありません。',
	'v_users_cnv_normal_saml_confirm' => 'このユーザを通常（SAML ではない）ユーザーに変換しますか。',
	'v_users_cnv_normal_saml_desc'	=> 'このアクションにより、ユーザーは SAML ユーザーから通常ユーザーに変更されます。',
	'c_users_cnv_normal_not'		=> 'ユーザーはLDAPユーザーではありません。',
	'c_users_cnv_ldap_cannot_saml'	=> 'SAML ユーザーを LDAP ユーザーに変更することはできません。',
	'c_users_cnv_saml' 				=> 'SAML ユーザーに変更する',
	'c_users_cnv_saml_cannot_ldap'	=> 'LDAP ユーザーを SAML ユーザーに変更することはできません。',
	'c_users_cnv_saml_already'		=> 'ユーザーは既に SAML ユーザーです。',
	'c_users_cnv_saml_cannot_ao'	=> 'API専用ユーザーを SAML ユーザーに変更することはできません。',
	'v_users_cnv_saml_confirm'		=> 'このユーザをSAMLユーザーに変更しますか？',
	'v_users_cnv_saml_desc'			=> 'このアクションにより、ユーザは通常ユーザーから SAML ユーザーに変更されます。',
	'v_users_cnv_saml_desc_2'		=> 'ｋのユーザーはEメールを使用して ID プロバイダで認証します：',
	'c_uinfo_cpwd_cannot_saml'		=> 'SAML ユーザーであるため、パスワードを変更することはできません。',
	'c_2fa_disabled'				=> '二要素認証が無効になっている。',
	'v_users_note_ldap_saml'		=> '<strong>注</strong>:このユーザーはLDAPユーザーとしてプロビジョニングされますが、SAMLを使用して認証されます。',

	// v12
	'v_ad_lowercase'				=> '<strong>注</strong>：<strong>Active Directory</strong>を使用している場合、属性は<strong>小文字</strong>にしてください。例：sAMAccountNameではなくsamaccountname。',

	// v13
	'v_upr_same'					=> 'ユーザー名やメールアドレスの一部にはできません',
	'v_upr_min_len'					=> '最小 %d 文字', // %d gets replaced by a number
	'v_upr_contain' 				=> '少なくとも以下を含むこと',
	'v_upr_uppercase'				=> '大文字1文字<code>A-Z</code>',
	'v_upr_lowercase'				=> '小文字1文字<code>a-z</code>',
	'v_upr_number' 					=> '数字1文字<code>0-9</code>',
	'v_upr_symbol' 					=> '記号1文字',
	'v_upr_space' 					=> '半角スペース1つ',
	'v_upr_label'					=> 'パスワードの条件',

	'v_upr_load_error'				=> 'パスワード規則を読み込む際にエラーが発生しました。',

	'v_cpwd_does_not_check_upr'		=> 'パスワードが条件を満たしていません。',

	'v_notes_help'					=> '内部メモ',

	// v15
	'c_users_del_error'				=> 'ユーザー削除エラー',

);
