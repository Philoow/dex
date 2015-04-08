<?php

namespace Dex\ManagerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DexManagerBundle extends Bundle {
    public function getParent() {
        return 'SonataUserBundle';
    }
}
