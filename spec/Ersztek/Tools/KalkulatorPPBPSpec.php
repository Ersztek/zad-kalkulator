<?php

namespace spec\Ersztek\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorPPBPSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Ersztek\Tools\KalkulatorPPBP');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(4)->getB()->shouldReturn(4);
        $this->setH(6)->getH()->shouldReturn(6);
    }
    function it_should_calculate_PPBP()
    {
        $this->setA(2)->setB(4)->setH(6)->ppbp()->shouldReturn(72);
    }
}
