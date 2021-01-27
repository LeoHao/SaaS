<?php

namespace App\Services;

use phpDocumentor\Reflection\DocBlock\Tags\Since;

class PaasService
{

    private static $actionList = [
        'plugins_network_special_open',
        //专网
    ];


    private static function connect()
    {
        $client = new \Swoole\Client(SWOOLE_SOCK_TCP);
        if (!$client->connect(config('paas.ip'), config('paas.port'), -1)) {
            exit("connect failed. Error: {$client->errCode}\n");
        }
        //todo 发送失败需要缓存数据重试

        //        register_shutdown_function([__CLASS__, 'close',], $client);//进程退出关闭链接

        return $client;
    }

    /**
     * @param  string  $action
     * @param  array  $device
     * @param  array  $params
     */
    public function send(string $action, $device = [], $params = [])
    {
        if (!in_array($action, self::$actionList)) {
            return false;
        }

        $data = [
            'Action' => $action,
            'ClientType' => 'SaaS',
            'CpeMac' => $device['mac'],
            'SecretKey' => crc32($action.'this is saas sncode'),
            'ActionExt' => [
                'node_id'=>1,
                'dest_id'=>7,
                'bw'=>$params['bandwidth']['num'],
            ],
        ];

        $client = self::connect();

        $client->send(json_encode($data));
        //echo $client->recv();//接收返回值
        //$client->send(json_encode($data));
        $this->close($client);
    }

    /**
     * 关闭链接
     *
     * @param $client
     */
    public function close($client)
    {
        $client->close();
    }
}