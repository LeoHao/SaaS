<?php
return [
    'ip'        => '175.25.22.29',
    'port'      => '7250',
    'key'       => crc32('1234567890'),
    'auth_name' => 'SaaS',
    'type'      => [
        '1' => 'plugins_network_special_open',
    ],
];

/*
  $data = array(
                'action'=>'plugins_network_special_open',
                'auth_name'=>'SaaS',
                'ip'=> $_SERVER['SERVER_ADDR'],
                'cpeip' => '192.168.3.113',
                'key' => '1234567890',
                'mac' => '00:F1:F3:18:86:43',
            );
 */
