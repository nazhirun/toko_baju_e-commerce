<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer_message.command_handler.add_order_customer_message' shared service.

return $this->services['prestashop.adapter.customer_message.command_handler.add_order_customer_message'] = new \PrestaShop\PrestaShop\Adapter\CustomerService\CommandHandler\AddOrderCustomerMessageHandler(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['validator'] ?? $this->load('getValidatorService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->id, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee->id);
