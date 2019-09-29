<?php

$ApiErrorMessages = array(
    //user
    'unauthorized' => 'The account is unauthorized.',
    'userId_required' => 'The user ID is required',
    'userId_integer' => 'The user ID is integer',
    'userId_min' => 'The user ID min is 1',
    'can_not_delete_user' => 'Can not delete user. Minimum admin is 1',
    'can_not_edit_user' =>  'Can not edit user. Minimum admin is 1',
    'middleware_users_not_found' => "The user was deleted from the system",
    'username_string' => 'The username must be string',

    'active_required' => 'The active field is required',
    'active_boolean' => 'The active field is boolean',

    'avatar_required' => 'The avatar is required',
    'avatar_image' => 'The avatar must be an image',
    'avatar_mime' => 'The avatar must be "jpeg,png,jpg,gif,svg" file',
    'avatar_max' => 'The size of avatar is too large (>2MB)',

    // / Validator Errors Message /
    'users_not_found' => 'The user is not found.',
    'id_not_found' => 'The id user is not found.',
    'that_is_your_id' => 'The id user is your id.',
    'users_not_create' => 'The user is not create.',
    'users_name_required' => 'The name is required.',
    'users_name_min' => 'The name must be at least 3 characters',
    'users_name_max' => 'The name may not be greater than 30 characters',
    'users_email_required' => 'The email is required.',
    'users_email_unique' => 'The email has already been taken.',
    'users_email_string' => 'The email must be a string.',
    'users_email_regex' => 'The email format is invalid.',
    'users_password_required' => 'The password is required.',
    'users_password_min' => 'The password must be at least 6 characters.',
    'users_password_max' => 'The password may not be greater than 16 characters.',
    'users_password_incorrect' => 'The password is incorrect.',
    'users_password_string' => 'The password must be a string.',
    'users_newPassword_required' => 'The new password is required.',
    'users_newPassword_min' => 'The new password must be at least 6 characters.',
    'users_newPassword_max' => 'The new password may not be greater than 16 characters.',
    'users_newPassword_string' => 'The new password must be a string.',
    'users_confirmNewPassword_required' => 'The confirm new password again is required.',
    'users_confirmNewPassword_min' => 'The confirm new password again must be at least 6 characters.',
    'users_confirmNewPassword_max' => 'The confirm new password again may not be greater than 16 characters.',
    'users_confirmNewPassword_string' => 'The confirm new password again must be a string.',
    'users_confirmNewPassword_same' => 'The confirm new password and new password must match.',
    'users_confirmPassword_required' => 'The confirm password again is required.',
    'users_confirmPassword_min' => 'The confirm password again must be at least 6 characters.',
    'users_confirmPassword_max' => 'The confirm password again may not be greater than 16 characters.',
    'users_confirmPassword_string' => 'The confirm password again must be a string.',
    'users_confirmPassword_same' => 'The confirm password and password must match.',
    'users_currentPassword_required' => 'The current password is required.',
    'users_currentPassword_min' => 'The current password must be at least 6 characters.',
    'users_currentPassword_incorrect' => 'The current password is incorrect',
    'users_currentPassword_max' => 'The current password may not be greater than 16 characters.',
    'users_currentPassword_string' => 'The current password must be a string.',
    'user_email_or_password_incorrect' => "The email or password is incorrect",
    'friend_not_found' => 'The friend is not found',
    'admin_required' => 'The admin field is required',
    'admin_boolean' => 'The admin field must be boolean value',

    // / Token Errors Message /
    'tokens_not_found' => 'The token is not found.',
    'tokens_not_create' => 'The token is not create.',
    'tokens_expired' => 'The token is expired.',
    'tokens_token_required' => 'The token is required.',
    'tokens_invalid' => 'The token is invalid.',
    'tokens_invalid_credentials' => 'The token is invalid credentials',

    'tokens_reset_password_not_found' => 'The token is not found.',
    'tokens_reset_password_not_create' => 'The token is not create.',
    'tokens_reset_password_expired' => 'The token is expired.',
    'tokens_reset_password_token_required' => 'The token is required.',
    'tokens_reset_password_invalid' => 'The token is invalid.',
    'tokens_reset_password_invalid_credentials' => 'The token is invalid credentials',

    'tokens_create_user_invalid' => 'The token is invalid. Please check email again',

    // / Asks Errors Message /
    "ask_image_not_found" => 'The image is not found',
    "ask_image_image" => 'The file upload must be image',
    'ask_image_mimes' => 'The image must be a file of type: jpeg,png,jpg,gif,svg.',
    "ask_image_size" => "The image must be 2048 kilobytes.",
    'ask_content_required' => 'The content is required.',
    'ask_content_max' => 'The content may not be greater than 1000 characters.',
    'ask_content_string' => 'The content must be string',
    'image_required_without_content' => 'Require image if there are not content',
    'content_required_without_image' => 'Require content if there are not image',
    'ask_not_found' => 'The ask is not found',

    'learn_not_found' => 'The learn is not found',
    'learn_priority_required' => 'The priority is required.',
    'learn_priority_boolean' => 'The priority field must be true or false.',
    'learn_priority_numberic' => 'The priority must be a number',
    'learn_priority_between' => 'The priority must be between 1 and 10',
    "learn_image_not_found" => 'The image is not found',
    "learn_image_image" => 'The file upload must be image',
    'learn_image_mimes' => 'The image must be a file of type: jpeg,png,jpg,gif,svg.',
    "learn_image_size" => "The image must be 2048 kilobytes.",
    'learn_content_required' => 'The content is required.',
    'learn_content_max' => 'The content may not be greater than 5000 characters.',
    'learn_title_required' => 'The title is required.',
    'learn_title_max' => 'The title may not be greater than 100 characters.',
    'learn_content_string' => 'The content must be string',
    'learn_title_string' => 'The title must be string',

    'video_not_found' => 'The video is not found',
    'video_priority_required' => 'The priority is required.',
    'video_priority_boolean' => 'The priority field must be true or false.',
    'video_title_max' => 'The title may not be greater than 70 characters.',
    'video_title_required' => 'The title is required.',
    'video_title_string' => 'Thetitle must be a string.',

    'video_link_max' => 'The link may not be greater than 500 characters.',
    'video_link_required' => 'The link is required.',
    'video_link_string' => 'The link must be a string.',
    "video_image_image" => 'The video image must be image',
    'video_image_mimes' => 'The video image must be a file of type: jpeg,png,jpg,gif,svg.',
    "video_image_size" => "The video image must be 2048 kilobytes.",

    'comment_not_found' => "The comment is not found",
    'comment_content_required' => 'The content is required.',
    'comment_content_max' => 'The content may not be greater than 3000 characters.',
    'comment_string' => 'The content must be string',
    //id
    'askId_required' => 'Ask ID is required',
    'askId_integer' => 'Ask ID must be integer',
    'askId_exists' => 'Ask ID not exists',
    'learnId_required' => 'Learn ID is required',
    'learnId_integer' => 'Learn ID must be integer',
    'learnId_exists' => 'Learn ID not exists',
    'commentId_required' => 'Comment ID is required',
    'commentId_integer' => 'Comment ID must be integer',
    'commentId_exists' => 'Comment ID not exists',
    'reactionId_required' => 'Reaction ID is required',
    'reactionId_integer' => 'Reaction ID must be integer',
    'reactionId_exists' => 'Reaction ID not exists',
    'videoId_required' => 'Video ID is required',
    'videoId_integer' => 'Video ID must be integer',
    'videoId_exists' => 'Video ID not exists',
    //filter
    'offset_integer' => 'Offset must be integer',
    'limit_integer' => 'Limit must be integer',
    'sort_in' => 'Sort in asc or desc',
    'fieldSort_string' => 'fieldSort must be string',
    'TypeSort_in' => 'TypeSort in asc or desc',
    'fieldSearch_string' => 'fieldSearch must be string',
    'keySearch_string' => 'keySearch must be string',
    //custom error
    'email_password_invalid' => 'The email or password are invalid',
    'user_password_invalid' => 'The password is invalid', //when enter current password in change password
    'account_deactive' => 'Your account has been blocked or deactivated',
    'users_available' => 'The user has been available', //when send request create user
    'user_priority' => 'Permission denied',
    'fieldSort_not_found' => 'Field Sort not found',
    'fieldSearch_not_found' => 'Field Search not found',

    //feedback
    'feedback_title_required' => 'Feedback title is required',
    'feedback_title_string' => 'Feedback title must be string',
    'feedback_content_required' => 'Feedback content is required',
    'feedback_content_string' => 'Feedback content must be string',

    'notification_title_required' => 'Notification title is required',
    'notification_title_string' => 'Notification title must be string',
    'notification_content_required' => 'Notification content is required',
    'notification_content_string' => 'Notification content must be string',
    'notification_id_required' => 'Notification id is required',
    'notification_id_integer' => 'Notification id must be integer',
    'notification_id_not_found' => 'Notification id not found',
    'user_id_send_not_found' => 'User id send not found',
    'user_id_receive_not_found' => 'User id receive not found',

    'feedback_title_max' => 'The feedback title may not be greater than 50 characters.',
    'feedback_content_max' => 'The feedback content may not be greater than 2000 characters.',
    'notification_title_max' => 'The notification title may not be greater than 50 characters.',
    'notification_content_max' => 'The notification content may not be greater than 2000 characters.',
    'user_id_send_required' => 'User id send is required',
    'user_id_send_integer' => 'User id send must be integer',
    'user_id_receive_required' => 'User id receive is required',
    'user_id_receive_integer' => 'User id receive must be integer',
    'seen_required' => 'Seen is required',
    'seen_id_boolean' => 'Seen id send must be boolean',

    'devices_id_not_found' => 'Device id not found',
    'devices_id_required' => 'Devices id is required',
    'devices_id_integer' => 'Devices id must be integer',
    'temperature_number' => 'Temperature must be number',
    'humidity_number' => 'Humidity must be number',
    'EC_number' => 'EC must be number',
    'water_number' => 'Water must be number',
    'light_integer' => 'Light must be integer',
    'PPM_integer' => 'PPM must be integer',
    'day_integer' => 'Day must be integer',
    'type_string' => 'Type must be string',
    'permission_denied' => 'Permission denied',
);

$ApiErrorCodes = array(

    //user
    'unauthorized' => 1000,
    'userId_required' => 1001,
    'userId_integer' => 1002,
    'userId_min' => 1003,
    'can_not_delete_user' => 1004,
    'can_not_edit_user' => 1005,
    'middleware_users_not_found' => 1006,

    'avatar_required' => 1007,
    'avatar_image' => 1008,
    'avatar_mime' => 1009,
    'avatar_max' => 1010,

    'active_required' => 1011,
    'active_boolean' => 1012,

    // / Validator Errors code: using 2xxx /
    'users_not_found' => 2001,
    'users_not_create' => 2002,
    'users_name_required' => 2010,
    'users_name_min' => 2011,
    'users_name_max' => 2012,
    'users_email_required' => 2020,
    'users_email_unique' => 2022,
    'users_email_string' => 2023,
    'users_email_regex' => 2024,
    'users_password_required' => 2040,
    'users_password_min' => 2041,
    'users_password_max' => 2042,
    'users_password_incorrect' => 2043,
    'users_password_string' => 2044,
    'users_newPassword_required' => 2050,
    'users_newPassword_min' => 2051,
    'users_newPassword_max' => 2052,
    'users_newPassword_string' => 2053,
    'users_confirmNewPassword_min' => 2061,
    'users_confirmNewPassword_max' => 2062,
    'users_confirmNewPassword_string' => 2063,
    'users_confirmNewPassword_required' => 2064,
    'users_confirmNewPassword_same' => 2065,
    'users_confirmPassword_min' => 2066,
    'users_confirmPassword_max' => 2067,
    'users_confirmPassword_string' => 2068,
    'users_confirmPassword_required' => 2069,
    'users_confirmPassword_same' => 2070,
    'users_currentPassword_required' => 2071,
    'users_currentPassword_min' => 2072,
    'users_currentPassword_max' => 2073,
    'users_currentPassword_string' => 2074,
    'users_currentPassword_incorrect' => 2075,
    'user_email_or_password_incorrect' => 2076,
    'admin_required' => 2077,
    'admin_boolean' => 2078,

    // / Token Errors code: using 30xx /
    'tokens_not_found' => 3000,
    'tokens_not_create' => 3001,
    'tokens_expired' => 3002,
    'tokens_token_required' => 3003,
    'tokens_invalid' => 3004,
    'tokens_invalid_credentials' => 3005,

    'tokens_reset_password_not_found' => 3050,
    'tokens_reset_password_not_create' => 3051,
    'tokens_reset_password_expired' => 3052,
    'tokens_reset_password_token_required' => 3053,
    'tokens_reset_password_invalid' => 3054,
    'tokens_reset_password_invalid_credentials' => 3055,

    'tokens_create_user_invalid' => 3056,

    // / Ask Errors code: using 31xx /
    "ask_image_not_found" => 3100,
    "ask_image_image" => 3101,
    'ask_image_mimes' => 3102,
    "ask_image_size" => 3103,
    'ask_content_required' => 3115,
    'ask_content_max' => 3116,
    'ask_content_string' => 3117,
    'image_required_without_content' => 3120,
    'content_required_without_image' => 3121,
    'ask_not_found' => 3130,

    'learn_not_found' => 3140,
    'learn_priority_required' => 3141,
    'learn_priority_boolean' => 3142,
    'learn_priority_numberic' => 3143,
    'learn_priority_between' => 3144,
    "learn_image_not_found" => 3145,
    "learn_image_image" => 3146,
    'learn_image_mimes' => 3147,
    "learn_image_size" => 3148,
    'learn_content_required' => 3150,
    'learn_content_max' => 3151,
    'learn_title_required' => 3152,
    'learn_title_max' => 3153,
    'learn_content_string' => 3154,
    'learn_title_string' => 3155,

    'video_title_max' => 3160,
    'video_title_required' => 3161,
    'video_title_string' => 3162,

    'video_link_max' => 3165,
    'video_link_required' => 3166,
    'video_link_string' => 3167,
    'video_priority_required' => 3170,
    'video_priority_boolean' => 3171,
    'video_not_found' => 3172,

    'comment_not_found' => 3180,
    'comment_content_required' => 3181,
    'comment_content_max' => 3182,
    'comment_string' => 3183,

    //id
    'askId_required' => 3201,
    'askId_integer' => 3203,
    'askId_exists' => 3204,
    'learnId_required' => 3211,
    'learnId_integer' => 3212,
    'learnId_exists' => 3213,
    'commentId_required' => 3221,
    'commentId_integer' => 3222,
    'commentId_exists' => 3223,
    'reactionId_required' => 3231,
    'reactionId_integer' => 3232,
    'reactionId_exists' => 3233,
    'videoId_required' => 3241,
    'videoId_integer' => 3242,
    'videoId_exists' => 3243,

    //filter
    'offset_integer' => 3341,
    'limit_integer' => 3342,
    'sort_in' => 3343,
    'fieldSort_string' => 3351,
    'TypeSort_in' => 3361,
    'fieldSearch_string' => 3371,
    'keySearch_string' => 3381,

    //custom error
    'email_password_invalid' => 8000,
    'user_password_invalid' => 8001,
    'user_priority' => 8002,
    'account_deactive' => 8003,
    'users_available' => 8004, //when send request create user
    'fieldSort_not_found' => 8011,
    'fieldSearch_not_found' => 8012,

    //feedback
    'feedback_title_required' => 8013,
    'feedback_title_string' => 8014,
    'feedback_content_required' => 8015,
    'feedback_content_string' => 8016,

    'notification_title_required' => 8017,
    'notification_title_string' => 8018,
    'notification_content_required' => 8019,
    'notification_content_string' => 8020,

    'id_not_found' => 8021,
    'that_is_your_id' => 8022,
    'notification_id_required' => 8023,
    'notification_id_integer' =>8024,
    'notification_id_not_found' => 8025,
    'user_id_send_not_found' => 8026,
    'user_id_receive_not_found' => 8027,

    'feedback_title_max' => 8028,
    'feedback_content_max' => 8029,
    'notification_title_max' => 8030,
    'notification_content_max' => 8031,
    'user_id_send_required' => 8032,
    'user_id_send_integer' => 8033,
    'user_id_receive_required' => 8034,
    'user_id_receive_integer' => 8035,
    'seen_required' => 8036,
    'seen_id_boolean' => 8037,

    'devices_id_not_found' => 8038,
    'devices_id_required' => 8039,
    'devices_id_integer' => 8040,
    'temperature_number' => 8041,
    'humidity_number' => 8042,
    'EC_number' => 8043,
    'water_number' => 8044,
    'light_integer' => 8045,
    'PPM_integer' => 8046,
    'day_integer' => 8047,
    'type_string' => 8048,

    'permission_denied' => 8050,
);

$ApiCodes['ApiErrorMessages'] = $ApiErrorMessages;
$ApiCodes['ApiErrorCodes'] = $ApiErrorCodes;

return $ApiCodes;
