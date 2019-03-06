<?php

namespace Inchoo\Helloworld\Plugin;

class AfterHelloworld
{
    public function afterGetHelloWorldTxt() {
        return "new text after helloworld";
    }
}