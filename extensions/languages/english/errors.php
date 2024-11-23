<?php

return [
    'mail_error' => 'Error sending mail: {ERROR}',
    'image_error' => 'Error processing image',

    'file_error_invalid_chars' => 'Invalid filename! File {FILE} contains invalid characters!',
    'file_error_invalid_maxchars' => 'Invalid filename! File {FILE} contains invalid characters!',
    'file_error_invalid_basedir' => 'Invalid filename! Filename {FILE} is not inside the base dir: {BASEDIR}',
    'file_error_read' => 'Error reading file: {FILE}',
    'file_error_write' => 'Error writing file: {FILE}.',
    'file_error_delete' => 'Error deleting file {FILE}',
    'file_error_copy' => 'Error copying file {SOURCE} to {DESTINATION}',
    'file_error_move' => 'Error moving file {SOURCE} to {DESTINATION}',

    'dir_error_open' => 'Error opening folder: {DIR}',
    'dir_error_create' => 'Error creating folder: {DIR}',
    'dir_error_delete' => 'Error deleting folder: {DIR}',
    'dir_error_move' => 'Error moving folder {SOURCE} to {DESTINATION}',

    'upload_error_generic' => 'Error uploading file {FILE}',
    'upload_error_size' => 'Upload error. File too big! Max. filesize allowed: {SIZE}',
    'upload_error_partial' => 'Upload error. The uploaded file was only partially uploaded',
    'upload_error_nofile' => 'Upload error. No file was uploaded',
    'upload_error_tmp' => 'Upload error. Error writing the uploaded file to the tmp dir',
    'upload_error_invalid_type' => 'Upload error. Invalid file type for file: {FILE}. You are not allowed to upload files with this extension',
];
