<?php

namespace VDS\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VDSUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
