

# zyan/wechat-factory

这是easywechat 6.0 工厂

## 要求

1. php >= 8.0.2
2. Composer

## 安装

```shell
composer require zyan/wechat-factory -vvv
```

## 使用

```php
use Zyan\WechatFactory\WechatFactory;

$config = [
    'app_id' => 'wx3cf0f39249eb0exx',
    'secret' => 'f1c242f4f28f735d4687abb469072axx',
    'token' => 'easywechat',
    'aes_key' => '' // 明文模式请勿填写 EncodingAESKey
    //...
];

//小程序
$app = WechatFactory::miniApp($config);

//微信公众号
$app = WechatFactory::officialAccount($config);

//微信开放平台
$app = WechatFactory::openPlatform($config);

//企业微信开放平台
$app = WechatFactory::openWork($config);

//微信支付
$app = WechatFactory::pay($config);

//企业微信
$app = WechatFactory::work($config);

```

详细使用方法请参考 [easywechat](https://easywechat.com/) 官网 

## 参与贡献

1. fork 当前库到你的名下
2. 在你的本地修改完成审阅过后提交到你的仓库
3. 提交 PR 并描述你的修改，等待合并

## License

[MIT license](https://opensource.org/licenses/MIT)
