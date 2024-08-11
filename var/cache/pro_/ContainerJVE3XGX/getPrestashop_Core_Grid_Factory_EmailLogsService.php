<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.email_logs' shared service.

return $this->services['prestashop.core.grid.factory.email_logs'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.email_logs'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_EmailLogsService.php')), ($this->services['prestashop.core.grid.data_factory.email_logs'] ?? $this->load('getPrestashop_Core_Grid_DataFactory_EmailLogsService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));
