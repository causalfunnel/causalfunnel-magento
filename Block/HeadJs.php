<?php

namespace CausalfunnelDatascience\Persona\Block;

use Magento\Framework\View\Element\Template;

class HeadJs extends Template
{
    protected $urlBuilder;

    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getCausalFunnelScriptUrl()
    {
        return "https://www.causalfunnel.com/assets/cfCKYv1_" . str_replace(".", "-", $_SERVER['HTTP_HOST']) . "_ProdV1.js";
    }
}
