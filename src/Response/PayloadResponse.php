<?php

declare(strict_types=1);

namespace SSitdikov\ATOL\Response;

use stdClass;

/**
 * Class PayloadResponse.
 *
 * @package SSitdikov\ATOL\Response
 */
class PayloadResponse implements ResponseInterface, \JsonSerializable
{
    private $total;

    private $fnsSite;

    private $fnNumber;

    private $shiftNumber;

    private $receiptDatetime;

    private $fiscalReceiptNumber;

    private $fiscalDocumentNumber;

    private $fiscalDocumentAttribute;

    private $ecrRegistrationNumber;

    private $ofdReceiptUrl;


    /**
     * PayloadResponse constructor.
     *
     * @param stdClass $json
     */
    public function __construct(stdClass $json)
    {
        $this->total                   = $json->total;
        $this->fnsSite                 = $json->fns_site;
        $this->fnNumber                = $json->fn_number;
        $this->shiftNumber             = $json->shift_number;
        $this->receiptDatetime         = $json->receipt_datetime;
        $this->fiscalReceiptNumber     = $json->fiscal_receipt_number;
        $this->fiscalDocumentNumber    = $json->fiscal_document_number;
        $this->fiscalDocumentAttribute = $json->fiscal_document_attribute;
        $this->ecrRegistrationNumber   = $json->ecr_registration_number;
        $this->ofdReceiptUrl           = $json->ofd_receipt_url;
    }


    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * @return mixed
     */
    public function getFnsSite()
    {
        return $this->fnsSite;
    }


    /**
     * @return mixed
     */
    public function getFnNumber()
    {
        return $this->fnNumber;
    }


    /**
     * @return mixed
     */
    public function getShiftNumber()
    {
        return $this->shiftNumber;
    }


    /**
     * @return mixed
     */
    public function getReceiptDatetime()
    {
        return $this->receiptDatetime;
    }


    /**
     * @return mixed
     */
    public function getFiscalReceiptNumber()
    {
        return $this->fiscalReceiptNumber;
    }


    /**
     * @return mixed
     */
    public function getFiscalDocumentNumber()
    {
        return $this->fiscalDocumentNumber;
    }


    /**
     * @return mixed
     */
    public function getFiscalDocumentAttribute()
    {
        return $this->fiscalDocumentAttribute;
    }


    /**
     * @return mixed
     */
    public function getEcrRegistrationNumber()
    {
        return $this->ecrRegistrationNumber;
    }
    
    /**
     * @return mixed
     */
    public function getOfdReceiptUrl()
    {
        return $this->ofdReceiptUrl;
    }

    public function jsonSerialize(): array
    {
        return [
           'total'                     => $this->getTotal(),
           'fns_site'                  => $this->getFnsSite(),
           'fn_number'                 => $this->getFnNumber(),
           'shift_number'              => $this->getShiftNumber(),
           'receipt_datetime'          => $this->getReceiptDatetime(),
           'fiscal_receipt_number'     => $this->getFiscalReceiptNumber(),
           'fiscal_document_number'    => $this->getFiscalDocumentNumber(),
           'fiscal_document_attribute' => $this->getFiscalDocumentAttribute(),
           'ecr_registration_number'   => $this->getEcrRegistrationNumber(),
           'ofd_receipt_url'           => $this->getOfdReceiptUrl()
        ];
    }
    
}
