<?php

/**
 * Model_CatchupData
 *
 * 
 *
 *     Logistics Management Information System for Vaccines
 * @subpackage Campaigns
 * @author     Ajmal Hussain <ajmal@deliver-pk.org>
 * @version    2.5.1
 */

/**
 *  Model for Catchup Data
 */

class Model_CatchupData extends Model_Base {

    /**
     * $_table
     * @var type 
     */
    private $_table;

    /**
     * Model_CatchupData __construct
     */
    public function __construct() {
        parent::__construct();
        $this->_table = $this->_em->getRepository('CatchupData');
    }

}