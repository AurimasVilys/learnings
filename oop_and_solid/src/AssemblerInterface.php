<?php

namespace AurimasVilys\OopAndSolid;

interface AssemblerInterface
{
    public function assemble(OrderInquiry $orderInquiry): void;
}
