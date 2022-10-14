<?php

namespace Zyan\WechatFactory;

use EasyWeChat\Pay\Application as Pay;
use EasyWeChat\MiniApp\Application as MiniApp;
use EasyWeChat\OpenPlatform\Application as OpenPlatform;
use EasyWeChat\OfficialAccount\Application as OfficialAccount;
use EasyWeChat\Work\Application as Work;
use EasyWeChat\OpenWork\Application as OpenWork;

/**
 * Class WechatFactory.
 *
 * @method static Pay                pay(array $config)
 * @method static MiniApp            miniApp(array $config)
 * @method static OpenPlatform       openPlatform(array $config)
 * @method static OfficialAccount    officialAccount(array $config)
 * @method static Work               work(array $config)
 * @method static OpenWork           openWork(array $config)
 *
 * @author 读心印 <aa24615@qq.com>
 */
class WechatFactory
{
    /**
     * @var string[]
     */
    protected static $class = [
        'pay' => Pay::class,
        'miniApp' => MiniApp::class,
        'openPlatform' => OpenPlatform::class,
        'officialAccount' => OfficialAccount::class,
        'work' => Work::class,
        'openWork' => OpenWork::class,
    ];

    /**
     * @param string $name
     * @param array  $config
     *
     * @return Pay|MiniApp|OpenPlatform|OfficialAccount|Work|OpenWork
     */
    protected static function make($name, array $config)
    {
        if (!isset(self::$class[$name])) {
            throw new \Exception('没有这个方法');
        }

        return new self::$class[$name]($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
