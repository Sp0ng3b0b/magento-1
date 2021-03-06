<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone_Core to newer
 * versions in the future. If you wish to customize Payone_Core for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Core_Block
 * @subpackage      Payment
 * @copyright       Copyright (c) 2012 <info@noovias.com> - www.noovias.com
 * @author          Matthias Walter <info@noovias.com>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.noovias.com
 */

/**
 *
 * @category        Payone
 * @package         Payone_Core_Block
 * @subpackage      Payment
 * @copyright       Copyright (c) 2012 <info@noovias.com> - www.noovias.com
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.noovias.com
 */
class Payone_Core_Block_Payment_Method_Info_SafeInvoice
    extends Payone_Core_Block_Payment_Method_Info_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('payone/core/payment/method/info/safe_invoice.phtml');

    }

    /**
     * @return string
     */
    public function getSafeInvoiceType()
    {
        $model = $this->getFactory()->getModelSystemConfigSafeInvoiceType();
        $array = $model->toSelectArray();

        $safeInvoiceType = $this->getInfo()->getPayoneSafeInvoiceType();
        if (array_key_exists($safeInvoiceType, $array)) {
            return $array[$safeInvoiceType];
        }

        return '';
    }

    public function toPdf()
    {
        $this->setTemplate('payone/core/payment/method/pdf/safe_invoice.phtml');
        return $this->toHtml();
    }


    /**
     * @return string
     */
    public function getPayoneClearingBankAccountholder()
    {
        return $this->getInfo()->getPayoneClearingBankAccountholder();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankCountry()
    {
        return $this->getInfo()->getPayoneClearingBankCountry();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankAccount()
    {
        return $this->getInfo()->getPayoneClearingBankAccount();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankCode()
    {
        return $this->getInfo()->getPayoneClearingBankCode();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankIban()
    {
        return $this->getInfo()->getPayoneClearingBankIban();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankBic()
    {
        return $this->getInfo()->getPayoneClearingBankBic();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankCity()
    {
        return $this->getInfo()->getPayoneClearingBankCity();
    }

    /**
     * @return string
     */
    public function getPayoneClearingBankName()
    {
        return $this->getInfo()->getPayoneClearingBankName();
    }


    /**
     * @return string
     */
    public function getPayoneClearingReference()
    {
        return $this->getInfo()->getPayoneClearingReference();
    }


    /**
     * @return string
     */
    public function getPayoneClearingInstructionnote()
    {
        return $this->getInfo()->getPayoneClearingInstructionnote();
    }


    /**
     * @return string
     */
    public function getPayoneClearingLegalnote()
    {
        return $this->getInfo()->getPayoneClearingLegalnote();
    }


    /**
     * @return string
     */
    public function getPayoneClearingDuedate()
    {
        return $this->getInfo()->getPayoneClearingDuedate();
    }
}