<?php

namespace spec\Ersztek\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ersztek\Tools\Trapez');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(5)->getA()->shouldReturn(5);
        $this->setB(7)->getB()->shouldReturn(7);
        $this->setH(4)->getH()->shouldReturn(4);
    }
    function it_should_calculate_sum()
    {
        $this->setA(5)->setB(7)->setH(4)->trapez()->shouldReturn(24);
    }
}
