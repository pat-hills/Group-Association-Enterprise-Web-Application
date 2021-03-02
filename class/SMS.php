<?php

class SMS {

    var $host;
    var $port;
    /*
     * Username that is to be used for submission
     */
    var $strUserName;
    /*
     * password that is to be used along with username
     */
    var $strPassword;
    /*
     * Sender Id to be used for submitting the message
     */
    var $strSender;
    /*
     * Message content that is to be transmitted
     */
    var $strMessage;
    /*
     * Mobile No is to be transmitted.
     */
    var $strMobile;
    /*
     * What type of the message that is to be sent
     * <ul>
     * <li>0:means plain text</li>
     * <li>1:means flash</li>
     * <li>2:means Unicode (Message content should be in Hex)</li>
     * <li>6:means Unicode Flash (Message content should be in Hex)</li>
     * </ul>
     */
    var $strMessageType;
    /*
     * Require DLR or not
     * <ul>
     * <li>0:means DLR is not Required</li>
     * <li>1:means DLR is Required</li>
     * </ul>
     */
    var $strDlr;

    private function smsUnicode($message) {
        $hex1 = '';

        if (function_exists('iconv')) {
            $latin = @iconv('UTF-8', 'ISO-8859-1', $message);
            if (strcmp($latin, $message)) {
                $arr = unpack('H*hex', @iconv('UTF-8', 'UCS-2BE', $message));
                $hex1 = strtoupper($arr['hex']);
            }
            if ($hex1 == '') {
                $hex2 = '';
                $hex = '';
                for ($i = 0; $i < strlen($message); $i++) {
                    $hex = dechex(ord($message[$i]));
                    $len = strlen($hex);
                    $add = 4 - $len;
                    if ($len < 4) {
                        for ($j = 0; $j < $add; $j++) {
                            $hex = "0" . $hex;
                        }
                    }
                    $hex2.=$hex;
                }
                return $hex2;
            } else {
                return $hex1;
            }
        } else {
            print 'iconv Function Not Exists !';
        }
    }

    //   $sms = new SMS("121.241.242.114", "8080", "linu-church", "asore$" ,"ASKWA-ROMAN", $message, $sms_format_1, "0", "1"); 

//Constructor..
    public function SSMS($host, $port, $username, $password, $msgtype, $dlr,$mobile, $sender, $message) {
        $this->host = $host;
        $this->port = $port;
        $this->strUserName = $username;
        $this->strPassword = $password;
        $this->strMessageType = $msgtype;
        $this->strDlr = $dlr;
        $this->strMobile = $mobile;
        $this->strSender = $sender;
        $this->strMessage = $message; //URL Encode The Message..
    
      
    }

    public function submit() {
        if ($this->strMessageType == "2" || $this->strMessageType == "6") {
 
            $this->strMessage = $this->smsUnicode($this->strMessage);

            try {
              
                $live_url = "http://" . $this->host . ":" . $this->port . "/bulksms/bulksms?username=" . $this->strUserName . "&password=" . $this->strPassword . "&type=" . $this->strMessageType . "&dlr=" . $this->strDlr . "&destination=" . $this->strMobile . "&source=" . $this->strSender . "&message=" . $this->strMessage . "";
                $parse_url = file($live_url);
           
         //   $sms = new SMS("121.241.242.114", "8080", "linu-church", "asore$","0","1", $sms_format_1,"ASKWA-ROMAN",$message,); 
                $grab = substr($parse_url[0], 0, 4);
 
            } catch (Exception $e) {
//                echo 'Message:' . $e->getMessage();
            }
        } else {
            $this->strMessage = urlencode($this->strMessage);

            try {
 
                $live_url = "http://" . $this->host .
                 ":" . $this->port . "/bulksms/bulksms?username="
                  . $this->strUserName . "&password=" . $this->strPassword . 
                  "&type=" . $this->strMessageType . "&dlr=" 
                  . $this->strDlr . "&destination=" . $this->strMobile .
                   "&source=" . $this->strSender . "&message=" 
                   . $this->strMessage . "";
              //  $parse_url = file($live_url);
   //   $sms = new SMS("121.241.242.114", "8080", "linu-church", "asore$" ,"ASKWA-ROMAN", $message, $sms_format_1, "0", "1"); 

                $curl_handle=curl_init();
                curl_setopt($curl_handle, CURLOPT_URL,$live_url);
                curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
                curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Group MIS');
                $query = curl_exec($curl_handle);
                curl_close($curl_handle);


               // $grab = substr($parse_url[0], 0, 4);
              
            } catch (Exception $e) {
//                echo 'Message:' . $e->getMessage();
            }
        }
    }

}
 