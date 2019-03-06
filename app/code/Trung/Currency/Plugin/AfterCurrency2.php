<?php
namespace Trung\Currency\Plugin;
class AfterCurrency2 extends \Trung\Currency\Block\Currency
{
    public function afterGetRegisterData($subject, $result)
    {
//        return $this->getTemplate();
//        return $result;
        return 'after 2';

//        return 'new ok chua';
    }

    public function beforeHelloWorld($subject, $ok = "ok nuon hihi")
    {
        $a = 'okokok before  2';
        return [$a];

    }

    public function aroundGetInfo($subject, $procede)
    {
//        echo 'Calling' . __METHOD__ . ' -- before',"\n";
//        $result = $procede();
//        echo 'Calling' . __METHOD__ . ' -- after',"\n";
        return '2 around New return value ';
//        return $result;
    }

}
?>