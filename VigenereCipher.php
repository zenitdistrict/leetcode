<?php

class VigenereCipher {
    public $key;
    public $alphabet;
    public function __construct($key, $alphabet)
    {
        $this->key = $key;
        $this->alphabet = $alphabet;
    }
    public function encode($s)
    {
        var_dump($s);
        $s = str_split($s);
        $alphabet = str_split($this->alphabet);
        $key = $this->key;
        $result = '';
        while (strlen($key) < count($s)) {
            $key .= $this->key;
        }

        foreach ($s as $key1 => $value) {
            if (in_array($value, $alphabet)) {
                $keyValaue = $key[$key1];
                $sPos = array_search($value, $alphabet);
                $keyPos = array_search($keyValaue, $alphabet);
                $shift = $sPos + $keyPos;
                if ($shift >= count($alphabet)) {
                    $shift -= count($alphabet);
                }

                $s[$key1] = $alphabet[$shift];
            }
        }

        return implode("", $s);
    }
    public function decode($s) {
        var_dump($s);
        $key = $this->key;
        while (strlen($key) < strlen($s)) {
            $key .= $this->key;
        }

        $s = str_split($s);
        $alph = str_split($this->alphabet);
        $shifr = "";
        for ($i=0; $i<count($s); $i++){
            if (in_array($s[$i], $alph)) {
                $pos = array_search($key[$i], $alph);
                $pos_s = array_search($s[$i], $alph);
                $shift = $pos_s - $pos;
                if ($shift < 0){
                    $shift += count($alph);
                }


                //$per = abs($pos_s-$pos);
                $shifr .= $alph[$shift];
            } else {
                $shifr .= $s[$i];
            }

        }
        return $shifr;
    }
}
