<?php
class Number{
    private $first = 6;
    private $second = 3;
    private $third = 7;

    function getFirst()
    {
        $first = $this->first;

        return $first;
    }

    function chkFirst($bool)
    {
        $first = 0;
        if ($bool) {
            $first = $this->first;
        }

        return $first;
    }

    function getSecond()
    {
        $second = $this->second;

        return $second;
    }

    function chkSecond($bool)
    {
        $second = 0;
        if ($bool) {
            $second = $this->second;
        }

        return $second;
    }

    function getThird($bool)
    {
        $third = $this->third;

        return $third;
    }

    function chkThird($bool)
    {
        $third = 0;
        if ($bool) {
            $third = $this->third;
        }

        return $third;
    }
}