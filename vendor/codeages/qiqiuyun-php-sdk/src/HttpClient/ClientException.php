<?php

namespace QiQiuYun\SDK\HttpClient;

class ClientException extends \Exception
{
    protected $transferInfo;

    /**
     * Undocumented function
     *
     * @param string $message
     * @param integer $code
     * @param array $transferInfo 传输
     */
    public function __construct($message = '', $code = 0, array $transferInfo = array())
    {
        parent::__construct($message, $code);
        $this->transferInfo = $transferInfo;
    }
}
