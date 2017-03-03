<?php
/**
 *
 *          ..::..
 *     ..::::::::::::..
 *   ::'''''':''::'''''::
 *   ::..  ..:  :  ....::
 *   ::::  :::  :  :   ::
 *   ::::  :::  :  ''' ::
 *   ::::..:::..::.....::
 *     ''::::::::::::''
 *          ''::''
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\PostNL\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Backend\App\Action\Context;

use TIG\PostNL\Helper\Labelling\GetLabels;
use TIG\PostNL\Helper\Labelling\SaveLabels;
use TIG\PostNL\Helper\Pdf\Get as GetPdf;

abstract class LabelAbstract extends Action
{
    /**
     * @var GetLabels
     */
    //@codingStandardsIgnoreLine
    protected $getLabels;

    /**
     * @var SaveLabels
     */
    //@codingStandardsIgnoreLine
    protected $saveLabels;

    /**
     * @var GetPdf
     */
    //@codingStandardsIgnoreLine
    protected $getPdf;

    /**
     * @param Context    $context
     * @param GetLabels  $getLabels
     * @param SaveLabels $saveLabels
     * @param GetPdf     $getPdf
     */
    public function __construct(
        Context $context,
        GetLabels $getLabels,
        SaveLabels $saveLabels,
        GetPdf $getPdf
    ) {
        parent::__construct($context);

        $this->getLabels  = $getLabels;
        $this->saveLabels = $saveLabels;
        $this->getPdf     = $getPdf;
    }
}
