<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Mnozenie');
    }
}
