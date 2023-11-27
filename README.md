# dcat-themes
dcat-admin的theme扩展。由于dcat-admin默认的主题只有4种，不能满足业务需要。本项目的宗旨就是创建更多好看的适用于dcat-admin的主题。
目前版本只创建了7种主题，后面会不断扩展更多主题，希望大家喜欢。有什么问题或者建议，可以在issues中提交，或者给我邮件：thoomi@qq.com。

## 安装
### require
```shell
composer require thoomi2009/dcat-themes
```
### 发布主题
```shell
php artisan vendor:publish --provider="Thoomi\DcatThemes\ThemesServiceProvider"
```

## 配置
### 修改 bootstrap.php  
以cuilv为例，全部支持的主题见下面全部主题
- 打开app\Admin\bootstrap.php.
- 添加引用 use Thoomi\DcatThemes\Themes;
- 载入theme Dcat\Admin\Color::extend('cuilv', (new Themes())->get("cuilv"));
```php
use Thoomi\DcatThemes\Themes;

Dcat\Admin\Color::extend('cuilv', Themes::getColors("cuilv"));
```

### 配置config/admin.php
- 打开config/admin.php
- 找到 layout.color 配置为 'cuilv'
```php
'layout' => [
  'color' => 'cuilv'
  ...
]
```
刷新页面就可以看到新的theme的效果了。

## 所有主题截图
### cuilv  
色值：#20a162

![cuilv](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-cuilv.jpg)

### yunshanlan  
色值：#2f90b9

![yunshanlan](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-yunshanlan.jpg)

### pipahuang  
色值：#fca106

![pipahuang](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-pipahuang.jpg)

### budohnezumi  
色值：#5E3D50

![budohnezumi](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-budohnezumi.jpg)

### veludo  
色值：#096148

![veludo](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-veludo.jpg)

### qingtinglan  
色值：#3b818c

![qingtinglan](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-qingtinglan.jpg)

### hehui  
色值：#4a4035

![hehui](http://jinghuicdn.huan.tv/project/public/dcat-themes/mini-hehui.jpg)

