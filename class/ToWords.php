<?php

define("MAJOR", '<strong>Ghana Cedis</strong>');
define("MINOR", '<strong>Pesewas</strong>');

class ToWord {

    var $pounds;
    var $pence;
    var $major;
    var $minor;
    var $words = '';
    var $number;
    var $magind;
    var $units = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
    var $teens = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
    var $tens = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');
    var $mag = array('', 'thousand', 'million', 'billion', 'trillion');

    function toWords($amount, $major = MAJOR, $minor = MINOR) {
        $this->__toWords__((int) ($amount), $major);
        $whole_number_part = $this->words;
        $strform = number_format($amount, 2);
        $right_of_decimal = (int) substr($strform, strpos($strform, '.') + 1);
        $this->__toWords__($right_of_decimal, $minor);
        echo $this->words = $whole_number_part . ' ' . $this->words;
    }

    function __toWords__($amount, $major) {
        $this->major = $major;
        $this->number = number_format($amount, 2);
        list($this->pounds, $this->pence) = explode('.', $this->number);
        $this->words = " $this->major";
        if ($this->pounds == 0) {
            $this->words = "_____ $this->words";
        } else {
            $group = explode(',', $this->pounds);
            $groups = array_reverse($group);
            for ($this->magind = 0; $this->magind < count($group); $this->magind++) {
                if (($this->magind == 1) && (strpos($this->words, 'hundred') === false) && ($groups[0] != '000')) {
                    $this->words = ' and ' . $this->words;
                }
                $this->words = $this->_build($groups[$this->magind]) . $this->words;
            }
        }
    }

    function _build($n) {
        $res = '';
        $na = str_pad("$n", 3, "0", STR_PAD_LEFT);

        if ($na == '000') {
            return '';
        }

        if ($na{0} != 0) {
            $res = ' ' . $this->units[$na{0}] . ' hundred';
        }

        if (($na{1} == '0') && ($na{2} == '0')) {
            return $res . ' ' . $this->mag[$this->magind];
        }

        $res .= $res == '' ? '' : ' and';

        $t = (int) $na{1};
        $u = (int) $na{2};

        switch ($t) {
            case 0:
                $res .= ' ' . $this->units[$u];
                break;
            case 1:
                $res .= ' ' . $this->teens[$u];
                break;
            default:
                $res .= ' ' . $this->tens[$t] . ' ' . $this->units[$u];
                break;
        }

        $res .= ' ' . $this->mag[$this->magind];
        return $res;
    }

}
