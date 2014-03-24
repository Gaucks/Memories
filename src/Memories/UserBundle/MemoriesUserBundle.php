<?php

namespace Memories\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MemoriesUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
