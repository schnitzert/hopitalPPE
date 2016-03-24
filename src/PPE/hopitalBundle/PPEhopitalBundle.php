<?php

namespace PPE\hopitalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PPEhopitalBundle extends Bundle
{
	public function getParent()
	  {
	    return 'FOSUserBundle';
	  }
}
