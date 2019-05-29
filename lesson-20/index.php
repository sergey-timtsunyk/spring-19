<?php

class WriteToFile
{
    private $path;

    /**
     * @var TransformInterface
     */
    public $transform;

    public function __construct($path)
    {
        $this->path = $path;

    }

    public function setTransform(TransformInterface $transform)
    {
        $this->transform = $transform;
    }

    public function write($data)
    {
        $str = $this->transform->convert($data);
        file_put_contents($this->path, $str);
    }
}

interface TransformInterface
{
    public function convert(array $data): string;
}

class Transform implements TransformInterface
{
    public function convert(array $data): string
    {
        $str = '';

        foreach ($data as $key => $value) {
            $str .= sprintf('%s:[%s]%s', $key, $value, PHP_EOL);
        }

        return $str;
    }
}

class TransformJson implements TransformInterface
{
    public function convert(array $data): string
    {
        return json_encode($data);
    }
}


$arr = [
    'key1' => 'v1',
    'key2' => 'v2',
    'key3' => 'v3',
    'key4' => 'v4',
    'key5' => 'v5',
    'key6' => 'v6',
    'key7' => 'v7',
];


$transformJson = new TransformJson();
$transform = new Transform();

$write = new WriteToFile('./test.txt');

if (true) {
    $write->transform = $transformJson;
}

$write->write($arr);