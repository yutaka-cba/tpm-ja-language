<?php
$lang = array (

	// controllers/files
	'c_files_file_not_found'		=> 'File not found or no access',
	'c_files_files_notes_title'		=> 'File Notes',
	'c_files_upload_title'			=> 'Upload File',
	'c_files_unknown_entity'		=> 'Unknown entity. pp_type=',
	'c_files_pwd_prj_not_exist'		=> 'this password/[PRJ] does not exist or you cannot access it.',
	'c_files_pwd_not_exist'			=> 'The password does not exist or you cannot access it.',
	'c_files_prj_not_exist' 		=> 'the [PRJ] does not exist or you cannot access it.',
	'c_files_upload_pwd_archived'	=> 'You cannot upload files to this password because its [PRJ] is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_files_upload_pwd_perm' 		=> 'You cannot upload files to this password (you need to have Edit data or Manage permission).',
	'c_files_upload_prj_archived'	=> 'You cannot upload files to this [PRJ] because it is <span class="label label-warning tpm-archived">Archived</span>.',
	'c_files_upload_prj_perm' 		=> 'You cannot upload files to this [PRJ] (you need to have Manage permission).',
	'c_files_upload_cannot_create_folder' => 'Could not create folder, please check permissions on the uploads folder. The file could not be uploaded.',
	'c_files_upload_max_size_exceeded' => 'Maximum file size exceeded.',
	'c_files_upload_undefined_error' => 'Undefined error.',
	'c_files_upload_error_saving_db' => 'Error saving the file information to the database.',
	'c_files_upload_error_encrypting_file' => 'Error encrypting the file.',
	'c_files_upload_error_del_original' => 'Error deleting the original file. Check the permissions of the uploads folder.',
	'c_files_tpm_file_not_exists'	=> 'This file does not exist or you cannot access it.',
	'c_files_del'					=> 'Delete File',
	'c_files_del_cannot_del'		=> 'You cannot delete this file.',
	'c_files_del_error'				=> 'There has been an error deleting the file',
	'c_files_error_csrf' 			=> 'Error: CSRF validation, please try again.',
	'c_files_edit_notes'			=> 'Edit File Notes',
	'c_files_edit_notes_perm'		=> 'You cannot edit this file notes.',
	'c_files_edit_notes_error'		=> 'There has been an error saving the file notes',

	// model
	'm_files_dwn_error'				=> 'Error decrypting / downloading',
	'm_files_error_folder'			=> 'Error in folder',
	'm_files_error_folder_not_exist'=> 'Error in folder (does not exist or cannot be accessed)',
	'm_files_upload_folder_missing' => 'The uploads folder is missing',
	'm_files_upload_folder_must_exist' => 'to upload files to passwords or [PRJS] the uploads folder must exist and it must be writable.',
	'm_files_upload_check_config'	=> 'Please check the config.php file.',
	'm_files_upload_folder_not_writable' => 'The uploads folder is not writable',
	'm_files_upload_folder_must_writable' => 'to upload files to passwords or [PRJS] the uploads folder must be writable.',
	'm_files_upload_folder_set_writable' => 'Please set it writable.',

	// views/files
	'vfiles_del_confirm'			=> 'Delete the file?',
	'vfiles_del_warning'			=> 'Warning: this action is permanent and cannot be un-done.',

	'vfiles_upload_file'			=> 'File',
	'vfiles_max_file_size'			=> 'Maximum file size',
	'vfiles_upload_notes'			=> 'Notes',
	'vfiles_upload'					=> 'Upload',
	'vfiles_upload_formdata'		=> 'A browser that supports FormData is needed to do file uploads in Team Password Manager',
	'vfiles_upload_not_selected'	=> 'You did not select a file to upload',
	'vfiles_upload_uploaded'		=> 'uploaded',
	'vfiles_upload_encrypting'		=> 'Encrypting file - please wait',
	'vfiles_upload_failed'			=> 'Upload Failed',
	'vfiles_upload_aborted'			=> 'Upload Aborted',
	'vfiles_upload_alert_max' 		=> 'The size of the selected file is greater than the maximum allowed. Please select another file.',
	'vfiles_upload_uploading'		=> 'Uploading file, do not close this window',
	'vfiles_upload_uploading_encrypting' => 'Uploading and encrypting file',

	'vfiles_view'					=> 'View',

	// v9
	'c_files_linked_cannot_upload' => 'This is a linked password. You cannot upload files to linked passwords.',
	'c_files_linked_cannot_edit_file_notes' => 'This is a linked password. You cannot edit file notes in linked passwords.',
	'c_files_linked_cannot_del_files' => 'This is a linked password. You cannot delete files in linked passwords.',

	// v10
	'c_files_upload_pwd_pwdarchived'	=> 'You cannot upload files to this password because it is <span class="label label-warning tpm-archived">Archived</span>.',

	// v12
	'c_files_files_info_title'		=> 'File Info',
	'c_files_id' 					=> 'Id',
	'vfiles_size'					=> 'Size', // Same as in home_lang
	'c_files_created_on'			=> 'Uploaded on',
	'c_files_created_by'			=> 'Uploaded by',
	'c_files_updated_on'			=> 'Notes updated on',
	'c_files_updated_by'			=> 'Notes updated by',
	'c_files_deleted_user'			=> 'deleted user',
	'vfiles_edit'					=> 'Edit', // Same as in home_lang

	// v15
	'vfiles_allowed_extensions'		=> 'Allowed extensions',

	// v17
	'vfiles_upload_invalid_filetype' => 'The filetype you are attempting to upload is not allowed.',

);
