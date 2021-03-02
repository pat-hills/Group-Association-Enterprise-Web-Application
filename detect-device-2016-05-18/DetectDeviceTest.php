<?php
require "class.DetectDevice.php";

class DetectDeviceTest extends PHPUnit_Framework_TestCase {
    
    private $device;

    public function __construct() {
        $this->device = new DetectDevice("Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36");
    }

    public function testComputer() {
        // Google Chrome 29 on Windows 8 x64
        $this->device->setUserAgent("Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36");
        $this->assertEquals(true, $this->device->isComputer());

        // Mozilla Firefox 22 on Windows 8 x64
        $this->device->setUserAgent("Mozilla/5.0 (Windows NT 6.2; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0");
        $this->assertEquals(true, $this->device->isComputer());
    }

    public function testMobile() {
        // LGE Nexus 4
        $this->device->setUserAgent("Mozilla/5.0 (Linux; Android 4.2; Nexus 4 Build/JVP15Q) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19");
        $this->assertEquals(true, $this->device->isMobile());

        // Samsung Galaxy S4
        $this->device->setUserAgent("Mozilla/5.0 (Linux; U; Android 4.0.4; en-gb; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30");
        $this->assertEquals(true, $this->device->isMobile());
    }

    public function testTablet() {
        // Asus Nexus 7
        $this->device->setUserAgent("Mozilla/5.0 (Linux; Android 4.1.1; Nexus 7 Build/JRO03D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166  Safari/535.19");
        $this->assertEquals(true, $this->device->isTablet());

        // Samsung Galaxy Note 10.1
        $this->device->setUserAgent("Mozilla/5.0 (Linux; U; Android 4.0; xx-xx; GT-N8000 Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30");
        $this->assertEquals(true, $this->device->isTablet());
    }

    public function testBot() {
        // GoogleBot
        $this->device->setUserAgent("Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
        $this->assertEquals(true, $this->device->isBot());

        // BingBot
        $this->device->setUserAgent("Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)");
        $this->assertEquals(true, $this->device->isBot());
    }

    public function testConsole() {
        // PS3
        $this->device->setUserAgent("Mozilla/5.0 (PLAYSTATION 3; 3.55)");
        $this->assertEquals(true, $this->device->isConsole());        

        // XBox
        $this->device->setUserAgent("Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)");
        $this->assertEquals(true, $this->device->isConsole());
    }

    public function testIs() {
        // Google Chrome
        $this->device->setUserAgent("Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36");
        $this->assertEquals(true, $this->device->is("chrome"));

        // Nintendo DS
        $this->device->setUserAgent("Mozilla/5.0 (Windows NT 6.2; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0");
        $this->assertEquals(true, $this->device->is("firefox"));
    }
}