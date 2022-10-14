<?php

namespace  Zyan\Tests;

use PHPUnit\Framework\TestCase;
use Zyan\WechatFactory\WechatFactory;

/**
 * Class WechatFactoryTest.
 *
 * @package Zyan\Tests
 *
 * @author 读心印 <aa24615@qq.com>
 */

class WechatFactoryTest extends TestCase
{
    public function test_factory()
    {
        $this->assertInstanceOf(\EasyWeChat\MiniApp\Application::class, WechatFactory::miniApp([]));

        $this->assertInstanceOf(\EasyWeChat\OfficialAccount\Application::class, WechatFactory::officialAccount([]));

        $this->assertInstanceOf(\EasyWeChat\OpenPlatform\Application::class, WechatFactory::openPlatform([]));

        $this->assertInstanceOf(\EasyWeChat\OpenWork\Application::class, WechatFactory::openWork([]));

        $this->assertInstanceOf(\EasyWeChat\Pay\Application::class, WechatFactory::pay([]));

        $this->assertInstanceOf(\EasyWeChat\Work\Application::class, WechatFactory::work([]));

        try {
            WechatFactory::test([]);
            $this->assertTrue(false);
        }catch (\Exception $exception){
            $this->assertTrue(true);
        }
    }
}
