<?php
$lang = array (

	// Controllers
	'c_login_sign_in_title'			=> 'サインイン',
	'c_login_session_expired'		=> 'サインインセッションの有効期限が切れました。',
	'c_login_username_pwd_incorrect' => '入力したユーザー名またはパスワードが間違っている',

	'c_login_auth_code_not_valid'	=> '認証コードが無効',
	'c_login_session_expired'		=> 'セッションの有効期限が切れました。',

	'c_login_email'					=> 'Eメールアドレス',
	'c_login_new_pwd'				=> '新しいパスワード',
	'c_login_repeat_new_pwd'		=> '新しいパスワードを繰り返す',

	'c_login_reset_email_1'			=> 'パスワードの再設定方法を記載したEメールが送信されました。',
	'c_login_reset_email_2'			=> "Please check your email client. Check your spam folder if you don't find the message in you inbox folder.",
	'c_login_reset_failed_1'		=> '入力されたアドレスへのメール送信にエラーが発生しました。',
	'c_login_contact_admin'			=> '管理者にご連絡ください。',
	'm_usr_reset_msg_1'				=> 'このメッセージは、Team Password Managerのインストールから、パスワードリセットのリクエストに対して送信されます。',
	'm_usr_reset_msg_2'				=> 'パスワードをリセットするには、以下のリンクをクリックするか、ブラウザのアドレスバーにコピー＆ペーストしてください：',
	'c_login_pwd_reset'				=> 'パスワードのリセット',
	'c_login_reset_in_ldap_server'	=> 'LDAPサーバーでパスワードをリセットしてください。',
	'c_login_enter_2fa_code'		=> '2FAコードを入力',
	'c_login_pwd_reset_error'		=> 'パスワードのリセットにエラーが発生しました。',
	'c_login_pwd_reset_ok'			=> 'パスワードがリセットされましたので、新しいパスワードでサインインしてください。',

	// Views
	'v_login_sign_in_lbl'			=> 'サインイン',
	'v_login_sign_in_btn'			=> 'サインイン',
	'v_login_username'				=> 'ユーザー名',
	'v_login_password'				=> 'パスワード',
	'v_login_forgot_pwd'			=> 'パスワードをお忘れですか？',

	'v_login_free_line_1'			=> 'これはTeam Password Managerの無料版です。',
	'v_login_free_line_2' 			=> '2人以上のユーザーと5人以上の[PRJS]を取得するには、ここをクリックしてください！',

	'v_login_auth_code'				=> '認証コード',
	'v_login_authenticate'			=> '認証',

	'v_login_back_sign_in'			=> 'サインインに戻る',

	'v_login_forgot_pwd_enter_email' => "Enter your email address and you'll receive instructions on how to reset your password",

	'v_login_submit'				=> '投稿する',

	'v_login_forgot_pwd_enter_data'	=> 'パスワードをリセットするには、以下のデータを入力してください。',
	'v_login_8charsmin'				=> '8文字以上',
	'v_login_required'				=> '必須',

	// Automatic IP blocking
	'm_ipb_notif_header'			=> 'TPMの通知：自動的にブロックされるIPアドレス', // Careful with accents, etc.
 	'm_ipb_ip_added'				=> 'このIPアドレスは自動的にブロックIPリストに追加されました。',
 	'm_ipb_failed_attempts'			=> 'サインインに失敗した回数',
 	'm_ipb_period'					=> '期間（秒）',
 	'm_ipb_automated_message' 		=> 'これはTeam Password Managerからの自動メッセージです。',

 	// v7
 	'm_set_new_version_available'	=> '新バージョン', // Same as in settings_lang.php

 	// v9
 	'v_login_password_reset_disabled' => 'パスワードリセットが無効になっています。管理者に連絡してください。',

 	// v11
 	'saml_login_text'				=> 'SAML経由のサインイン',
 	'saml_error'					=> 'SAML エラー：',
 	'saml_no_settings'				=> 'SAML が設定されていない',
 	'saml_disabled'					=> 'SAMLが無効',
 	'saml_no_email'					=> 'メールアドレスが見つかりません',
 	'user_not_found'				=> 'ユーザーが見つかりません',
 	'c_login_reset_in_saml_idp'		=> 'SAML ID プロバイダでパスワードをリセットする必要がある。',
 	'v_login_normal_link'			=> 'ユーザー名/パスワードを使用してサインイン',

 	// v14
 	// ** Same as in users_lang **
 	'v_upr_same'					=> 'ユーザー名やメールアドレスの一部にはできない',
	'v_upr_min_len'					=> '最小 %d 文字', // %d gets replaced by a number
	'v_upr_contain' 				=> '少なくとも以下を含むこと',
	'v_upr_uppercase'				=> '大文字1文字<code>A-Z</code>',
	'v_upr_lowercase'				=> '小文字1文字<code>a-z</code>',
	'v_upr_number' 					=> '一<code>0-9</code>',
	'v_upr_symbol' 					=> '一文字',
	'v_upr_space' 					=> '半角スペース',
	'v_upr_label'					=> 'パスワードの条件',
	'v_upr_load_error'				=> 'パスワード規則を読み込む際にエラーが発生しました。',
	'v_cpwd_does_not_check_upr'		=> 'パスワードが条件を満たしていない。',
	'field_new_pwd'					=> '新しいパスワード',
	'field_repeat_new_pwd'			=> '新しいパスワードを繰り返す',
	// ** Same as in users_lang **

	'v_fpr_invalid_inactive_user'	=> 'ユーザが有効でないか、非アクティブです。',


	// v15
	'v_login_forgot_pwd'			=> 'チームパスワードマネージャーパスワードをお忘れですか？', // replaces previous v_login_forgot_pwd

	// v16
	'v_login_remember_me'			=> 'リメンバー・ミー',

	// v17
	'v_login_forgot_pwd'			=> 'パスワードをお忘れですか？', // replaces previous v_login_forgot_pwd
	'v_login_forgot_pwd_mail'		=> 'チームパスワードマネージャーパスワードをお忘れですか？', // replaces previous v_login_forgot_pwd



);