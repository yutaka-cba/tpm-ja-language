<?php
$lang = array (

	// Controllers
	'c_login_sign_in_title'			=> 'Sign In',
	'c_login_session_expired'		=> 'Sign in session expired, please try again',
	'c_login_username_pwd_incorrect' => 'The username or password you entered is incorrect',

	'c_login_auth_code_not_valid'	=> 'Authentication code not valid',
	'c_login_session_expired'		=> 'Session expired, try again',

	'c_login_email'					=> 'E-mail address',
	'c_login_new_pwd'				=> 'New password',
	'c_login_repeat_new_pwd'		=> 'Repeat new password',

	'c_login_reset_email_1'			=> 'An email message has been sent to the provided address with instructions on how to reset your password.',
	'c_login_reset_email_2'			=> "Please check your email client. Check your spam folder if you don't find the message in you inbox folder.",
	'c_login_reset_failed_1'		=> 'There has been an error sending the email message to the provided address.',
	'c_login_contact_admin'			=> 'Please contact your administrator.',
	'm_usr_reset_msg_1'				=> 'This message is sent from your installation of Team Password Manager, on your request to reset your password. ',
	'm_usr_reset_msg_2'				=> "Click the following link or copy and paste it on your browser's address bar to reset your password: ",
	'c_login_pwd_reset'				=> 'Password reset',
	'c_login_reset_in_ldap_server'	=> 'You should reset your password in the LDAP server.',
	'c_login_enter_2fa_code'		=> 'enter 2FA code',
	'c_login_pwd_reset_error'		=> 'There has been an error resetting your password.',
	'c_login_pwd_reset_ok'			=> 'You password has been reset, you may now sign in with your new password.',

	// Views
	'v_login_sign_in_lbl'			=> 'Sign In',
	'v_login_sign_in_btn'			=> 'Sign In',
	'v_login_username'				=> 'Username',
	'v_login_password'				=> 'Password',
	'v_login_forgot_pwd'			=> 'Forgot your password?',

	'v_login_free_line_1'			=> 'This is the FREE VERSION of Team Password Manager',
	'v_login_free_line_2' 			=> 'click here to get MORE than 2 users and 5 [PRJS]!',

	'v_login_auth_code'				=> 'Authentication code',
	'v_login_authenticate'			=> 'Authenticate',

	'v_login_back_sign_in'			=> 'Back to Sign In',

	'v_login_forgot_pwd_enter_email' => "Enter your email address and you'll receive instructions on how to reset your password",

	'v_login_submit'				=> 'Submit',

	'v_login_forgot_pwd_enter_data'	=> 'Enter the following data to reset your password',
	'v_login_8charsmin'				=> '8 chars. min.',
	'v_login_required'				=> 'required',

	// Automatic IP blocking
	'm_ipb_notif_header'			=> 'TPM Notification: IP address automatically blocked', // Careful with accents, etc.
 	'm_ipb_ip_added'				=> 'This IP address has been automatically added to the list of blocked IPs',
 	'm_ipb_failed_attempts'			=> 'Number of failed sign in attempts',
 	'm_ipb_period'					=> 'Period (seconds)',
 	'm_ipb_automated_message' 		=> 'This is an automated message from Team Password Manager.',

 	// v7
 	'm_set_new_version_available'	=> 'New version available', // Same as in settings_lang.php

 	// v9
 	'v_login_password_reset_disabled' => 'Password reset is disabled. Please contact your administrator.',

 	// v11
 	'saml_login_text'				=> 'Sign In via SAML',
 	'saml_error'					=> 'SAML Error: ',
 	'saml_no_settings'				=> 'SAML not configured',
 	'saml_disabled'					=> 'SAML is disabled',
 	'saml_no_email'					=> 'email address not found',
 	'user_not_found'				=> 'User not found',
 	'c_login_reset_in_saml_idp'		=> 'You should reset your password in the SAML Identity Provider.',
 	'v_login_normal_link'			=> 'Sign In using Username/Password',

 	// v14
 	// ** Same as in users_lang **
 	'v_upr_same'					=> 'Cannot be a part of the username or email address',
	'v_upr_min_len'					=> '%d characters minimum', // %d gets replaced by a number
	'v_upr_contain' 				=> 'Must contain at least',
	'v_upr_uppercase'				=> 'one uppercase letter <code>A-Z</code>',
	'v_upr_lowercase'				=> 'one lowercase letter <code>a-z</code>',
	'v_upr_number' 					=> 'one number <code>0-9</code>',
	'v_upr_symbol' 					=> 'one symbol',
	'v_upr_space' 					=> 'one space (not leading or trailing)',
	'v_upr_label'					=> 'Password requirements',
	'v_upr_load_error'				=> 'There has been an error loading the password rules.',
	'v_cpwd_does_not_check_upr'		=> 'The Password does not meet the requirements.',
	'field_new_pwd'					=> 'New password',
	'field_repeat_new_pwd'			=> 'Repeat new password',
	// ** Same as in users_lang **

	'v_fpr_invalid_inactive_user'	=> 'The user is not valid or is inactive.',


	// v15
	'v_login_forgot_pwd'			=> 'Team Password Manager: Forgot your password?', // replaces previous v_login_forgot_pwd

	// v16
	'v_login_remember_me'			=> 'Remember me',

	// v17
	'v_login_forgot_pwd'			=> 'Forgot your password?', // replaces previous v_login_forgot_pwd
	'v_login_forgot_pwd_mail'		=> 'Team Password Manager: Forgot your password?', // replaces previous v_login_forgot_pwd



);