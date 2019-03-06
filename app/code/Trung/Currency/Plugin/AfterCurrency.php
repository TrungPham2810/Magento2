<?php
namespace Trung\Currency\Plugin;
class AfterCurrency extends \Trung\Currency\Block\Currency
{
    public function afterGetRegisterData($subject, $result)
    {
//        return $this->getTemplate();
//        return $result;
        return $subject->getTemplate();

//        return 'new ok chua';
    }

    public function beforeHelloWorld($subject, $ok = "ok nuon hihi")
    {
        $a = $subject->getTemplate();
        return [$a];

    }

    public function aroundGetInfo($subject, $procede)
    {
//        echo 'Calling' . __METHOD__ . ' -- before',"\n";
//        $result = $procede();
//        echo 'Calling' . __METHOD__ . ' -- after',"\n";
        return 'New return value';
//        return $result;
    }

}
?>