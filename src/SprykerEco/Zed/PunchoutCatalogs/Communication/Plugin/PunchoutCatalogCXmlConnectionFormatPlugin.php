<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\PunchoutCatalogs\Communication\Plugin;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerEco\Zed\PunchoutCatalogs\Communication\Form\PunchoutCatalogCXmlConnectionFormatForm;

/**
 * @method \SprykerEco\Zed\PunchoutCatalogs\Communication\PunchoutCatalogsCommunicationFactory getFactory()
 * @method \SprykerEco\Zed\PunchoutCatalogs\PunchoutCatalogsConfig getConfig()
 * @method \SprykerEco\Zed\PunchoutCatalogs\Business\PunchoutCatalogsFacadeInterface getFacade()
 */
class PunchoutCatalogCXmlConnectionFormatPlugin extends AbstractPlugin implements PunchoutCatalogConnectionFormatPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return string
     */
    public function getConnectionFormat(): string
    {
        return 'cxml';
    }

    /**
     * {@inheritdoc}
     * - Returns a form that is capable of handling all attributes related to the cXml connection format.
     *
     * @api
     *
     * @return string
     */
    public function getType(): string
    {
        return PunchoutCatalogCXmlConnectionFormatForm::class;
    }
}
