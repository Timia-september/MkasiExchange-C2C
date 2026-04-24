<?php
$lang = [
    'en' => [
        'welcome' => 'Marketplace Nearby',
        'secure_btn' => 'Secure with Escrow',
        'chat_btn' => 'Chat with Seller',
        'price' => 'R',
        'success_msg' => 'Item secured in Escrow!',
        'login_title' => 'Login',
        'username' => 'Username',
        'password' => 'Password',
        'signin_btn' => 'Sign In',
        'need_account' => 'Need an account? Register here'
    ],

    'zu' => [
        'welcome' => 'Imakethe Eduze Nawe',
        'secure_btn' => 'Vikela nge-Escrow',
        'chat_btn' => 'Xoxa nomdayisi',
        'price' => 'R',
        'success_msg' => 'Isitemu sivikelekile e-Escrow!',
        'login_title' => 'Ngena',
        'username' => 'Igama lomsebenzisi',
        'password' => 'Inombolo yemfihlo',
        'signin_btn' => 'Ngena khona manje',
        'need_account' => 'Awunayo i-akhawunti? Bhalisa lapha'
    ],

    'xh' => [
        'welcome' => 'Indawo yoThengiso ekufutshane',
        'secure_btn' => 'Khusela nge-Escrow',
        'chat_btn' => 'Ncokola nomthengisi',
        'price' => 'R',
        'success_msg' => 'Impahla ikhuselekile kwi-Escrow!',
        'login_title' => 'Ngena',
        'username' => 'Igama lomsebenzisi',
        'password' => 'Inombolo yokungena',
        'signin_btn' => 'Ngena ngoku',
        'need_account' => 'Awunayo i-akhawunti? Bhalisa apha'
    ]
];


$current_lang = $_SESSION['lang'] ?? 'en';
$words = $lang[$current_lang];
?>