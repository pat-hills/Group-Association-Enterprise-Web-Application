DetectDevice 
============
[![Build Status](https://travis-ci.org/Kocal/DetectDevice.png?branch=master)](https://travis-ci.org/Kocal/DetectDevice)

DetectDevice is a little (~70 lines), simply, and functional PHP class which detect what kind of device is used to navigate on your website, a pc, a mobile, a tablet or a bot.


How use?
--------
#### Firstly, include DetectDevice class and initialize it
```php
<?php
require "class.DetectDevice.php";
$device = new DetectDevice();
// ...
```

#### Optional : If you want, you can set an other user-agent
```php
<?php
$userAgent = "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36";

// in the constructor
$device = new DetectDevice($userAgent);

// or with the "setUserAgent()" method
$device->setUserAgent($userAgent);
```

#### Use methods to find what kind of device is used
```php
<?php
// return a boolean (true or false)
echo $device->isComputer();
echo $device->isMobile();
echo $device->isTablet();
echo $device->isBot();
echo $device->isConsole();

// You can use the "getDeviceType()" to return a string
echo $device->getDeviceType(); // may return "computer", "mobile, "tablet", "bot" or "console"
// ...
```

#### Or use "is()"
```php
<?php
// The "is()" method match $str in UserAgent $str, and return true or false

$str = "msie";

if($device->is($str)) {
    // do stuff for Internet Explorer only
}

```