<?php

namespace App\Services;

use phpDocumentor\Reflection\DocBlock\Tags\Since;

class PaasService
{

    private static $actionList = [
        'plugins_network_special_open',//专网
    ];

    private static function connect()
    {
        $ip           = config('paas.ip');
        $port         = config('paas.port');
        $streamClient = stream_socket_clent("tcp://{$ip}:{$port}");
        register_shutdown_function([__CLASS__, 'close',], $streamClient);

        return $streamClient;
    }

    /**
     * @param  string  $action
     * @param  array  $mac
     * @param  array  $params
     */
    public function send(string $action,$mac = [], $params = [])
    {
        if (!in_array($action, self::$actionList)) {
            return false;
        }

        $data = [
            'action'    => $action,
            'auth_name' => 'SaaS',
            'saas_ip'   => $_SERVER['SERVER_ADDR'],
            'key'       => crc32('1234567890'),
            'mac'       => $mac,
        ];

        $sendData = array_merge($data,$params);

        fwrite(self::connect(), json_encode($sendData));
    }

    /**
     * 关闭链接
     *
     * @param $streamClient
     */
    public function close($streamClient)
    {
        fclose($streamClient);
    }
}