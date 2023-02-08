<?php

namespace CausalfunnelDatascience\Persona\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\UrlInterface;

class HeadJs extends Template
{
    protected $urlBuilder;

    public function __construct(
        Template\Context $context,
        UrlInterface $urlBuilder,
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $data);
    }

    public function getCausalFunnelScriptUrl()
    {
        $baseUrl = $this->urlBuilder->getBaseUrl();
        $urlData = parse_url($baseUrl);
        return "https://www.causalfunnel.com/assets/cfCKYv1_".str_replace(".", "-", $urlData['host'])."_ProdV1.js";
    }
}
