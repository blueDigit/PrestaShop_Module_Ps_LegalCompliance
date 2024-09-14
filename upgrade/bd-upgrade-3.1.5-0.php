<?php
/**
 * Copyright (c) 2024 blueDigit LP
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.
 *
 * @author    blueDigit LP <info@bluedigit.ca>
 * @copyright 2024 blueDigit LP
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

function bd_upgrade_ps_legalcompliance_3_1_5_0(Module $module): bool
{
    if (!$module->isRegisteredInHook('actionBuildMailPreviewTemplateVariables')) {
        return $module->registerHook('actionBuildMailPreviewTemplateVariables');
    }

    return true;
}
