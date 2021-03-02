<?php class DetectDevice {

    private $userAgent = "";

    private $devices = array(
        "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "tablet" => array("tablet", "android", "ipad", "tablet.*firefox"),
        "mobile" => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
        "bot" => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis"),
        "console" => array("ps2", "playstation", "xbox", "wii", "nintendo 3?ds")
    );


    private $deviceType = "";

    private $isComputer = false;
    private $isMobile = false;
    private $isTablet = false;
    private $isBot = false;
    private $isConsole = false;

    public function __construct($userAgent = "") {
        if(!empty($userAgent)) {
            $this->userAgent = $userAgent;
        } else {
            $this->userAgent = $_SERVER["HTTP_USER_AGENT"];
        }

        $this->detectDevice();
    }

    public function detectDevice() {
        foreach($this->devices as $deviceType => $devices) {
            foreach($devices as $device) {
                if(preg_match("/" . $device . "/i", $this->userAgent)) {
                    $this->deviceType = $deviceType;
                }
            }
        }

        $d = "is" . ucfirst($this->deviceType);
        $this->$d = true;
    }

    public function setUserAgent($userAgent) {
        $this->userAgent = $userAgent;
        $this->resetDevices();
        $this->detectDevice();
    }

    public function resetDevices() {
        $this->isComputer = false;
        $this->isMobile = false;
        $this->isTablet = false;
        $this->isBot = false;
    }

    public function is($str, $userAgent = null) {
        if(!$userAgent) {
            $userAgent = $this->userAgent;
        }

        return preg_match('/' . $str . '/i', $userAgent);
    }

    public function getDeviceType() { return $this->deviceType; }
    public function isComputer()    { return $this->isComputer; }
    public function isMobile()      { return $this->isMobile; }
    public function isTablet()      { return $this->isTablet; }
    public function isBot()         { return $this->isBot; }
    public function isConsole()     { return $this->isConsole; }
}
