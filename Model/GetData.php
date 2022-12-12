<?php

class GetData
{
    protected $data, $filename;
    public function __construct($f)
    {
        $this->filename = $f;
        $file = fopen($f, "r") or die("could not find file");
        $this->data = json_decode(fread($file, filesize($f)), true);
    }

    function getData()
    {
        return $this->data;
    }

    function changeData($keys, $curValue, $newValue){
        foreach ($this->data as $key => $entry) {
            if ($entry[$keys] == $curValue) {
                $this->data[$key][$keys] = $newValue;
            }
        }
        $newJsonString = json_encode($this->data, JSON_PRETTY_PRINT);
        file_put_contents($this->filename, $newJsonString);
    }
}