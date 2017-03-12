<?php
/**
 * Abstract base for transfer
 * User: moyo
 * Date: 10/03/2017
 * Time: 3:21 PM
 */

namespace ONS\Transfer;

use ONS\Access\Authorized;
use ONS\Contract\Transfer;

abstract class AbstractBase implements Transfer
{
    /**
     * @var Authorized
     */
    protected $authorized = null;

    /**
     * @var string
     */
    protected $producerID = '';

    /**
     * @param Authorized $authorized
     */
    public function setAuthorized(Authorized $authorized)
    {
        $this->authorized = $authorized;
    }

    /**
     * @param $producerID
     */
    public function setProducerID($producerID)
    {
        $this->producerID = $producerID;
    }
}