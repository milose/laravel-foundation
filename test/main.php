<?php

trait Original
{
    public function method()
    {
        return 1;
    }

    public function geez()
    {
        return 'x';
    }
}

trait Override
{
    use Original;

    public function method()
    {
        return 2;
    }
}

class Test
{
    use Override;

    public function output()
    {
        return $this->method().$this->geez();
    }
}

$test = new Test();

echo $test->output();
