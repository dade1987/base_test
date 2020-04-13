<?php

$def = [
    'sign_in' => 'Accedi',
    'member_login' => 'Area Riservata',
    'member_login_subtitle' => 'Bentornato, amico. Accedi per iniziare', //'Welcome back, friend. Login to get started
    'not_member_yet' => 'Registrati',
    'forgot_password' => 'Password dimenticata',
    'remember_me' => 'Ricordami',
    //---------------------
    'sign_up' => 'Registrati',
    'member_register' => 'Area Riservata',
    'member_register_subtitle' => 'Entra a far parte della community',            //'Ready to get best offers? Let's get started!
    'repeat_password' => 'ripeti la password',
    'repeat_password_placeholder' => 'digita di nuovo la password', //Type your password again
    'already_member' => 'Già registrato',
    //---------------
    'password_recovery' => 'Recupero Password',
    'password_recovery_subtitle' => 'Hai dimenticato la password? Non preoccuparti, ci pensiamo noi ', //Forgot your password? Don't worry we can deal with it
    'request_new_password' => 'Recupera password',

    'ajax_login' => [
        'sign_in' => 'Accedi',
        'member_login' => 'Area Riservata',
        'member_login_subtitle' => 'Bentornato, amico. Accedi per iniziare', //'Welcome back, friend. Login to get started
        'not_member_yet' => 'Registrati',
        'forgot_password' => 'password dimenticata',
        'remember_me' => 'Ricordami',
    ],

    'ajax_register' => [
        'sign_up' => 'Registrati',
        'member_register' => 'Area Riservata',
        'member_register_subtitle' => 'Entra a far parte della community',            //'Ready to get best offers? Let's get started!
        'repeat_password' => 'ripeti la password',
        'repeat_password_placeholder' => 'digita di nuovo la password', //Type your password again
        'already_member' => 'Già registrato',
    ],
];

$def['failed'] = 'These credentials do not match our records.';
$def['throttle'] = 'Too many login attempts. Please try again in :seconds seconds.';

$def['login']['field']['ente'] = 'ente';
$def['login']['field']['ente_placeholder'] = 'es: 90 o 190';
$def['login']['field']['ente_help'] = ' 90 o 190 senza lo 0 davanti';

$def['login']['field']['matr'] = 'matricola';
$def['login']['field']['matr_placeholder'] = 'matricola';
$def['login']['field']['matr_help'] = 'la tua matricola';

$def['login']['field']['password'] = 'password';
$def['login']['field']['password_placeholder'] = '';
$def['login']['field']['password_help'] = 'password delle trasferte';
$def['login']['Forgot Password?'] = 'Dimenticato Password ?';

return $def;
