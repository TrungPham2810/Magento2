<?php
namespace Trung\Currency\Plugin;
class AfterCurrency {
    public function afterGetRegisterData()
    {
        return $this->getTemplate();
    }

}
?>