<?php

namespace Suraj\CustomMyAccountPage\Block\TopLinks;

use Magento\Customer\Model\Context;

class CustomLinks extends \Magento\Framework\View\Element\Html\Link
{
    protected $httpContext;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->httpContext = $httpContext;
    }

    public function isLoggedIn()
    {
        return $this->httpContext->getValue(Context::CONTEXT_AUTH);
    }

}

