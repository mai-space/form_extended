<?php

namespace WapplerSystems\FormExtended\Event;

use WapplerSystems\FormExtended\Domain\Model\OptIn;

final class AfterOptInCreationEvent
{

    public function __construct(
        private readonly OptIn $optIn,
    ) {

    }


    public function getOptIn():OptIn {
        return $this->optIn;
    }




}