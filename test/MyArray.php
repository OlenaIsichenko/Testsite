<?php
class MyArray
{
	public function getArray()
	{
        $a = [
            1 => 2,
            2 => 5,
            3 => 34,
            4 => 76,
            5 => 8
        ];

        $b = [
            'key1' => 'k',
            'key2' => 'e',
            'key3' => 'y'
        ];

	    function add($n)
        {
            return ($n * 3);
        }

        $d = array_map('add', $a);

        $k = $b + $a;
        $c = array_merge($k, $d);

        return $c;
    }
}
