<?php

namespace PI\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PIUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
