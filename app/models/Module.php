<?php

/**
 * @copyright Eliel de Paula <dev@elieldepaula.com.br>
 * @license http://wpanel.org/license
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model Module
 * 
 * @author Eliel de Paula <dev@elieldepaula.com.br>
 */
class Module extends MY_Model
{

    public $table_name = 'modules';
    public $primary_key = 'id';
    public $date_format = 'datetime';
    protected $soft_deletes = FALSE;
    protected $log_user = TRUE;
    protected $set_created = TRUE;
    protected $set_modified = TRUE;

}
