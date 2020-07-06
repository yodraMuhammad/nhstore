<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `USER_SUB_MENU`.*, `USER_MENU`.`MENU`
                    FROM `USER_SUB_MENU` JOIN `USER_MENU`
                      ON `USER_SUB_MENU`.`MENU_ID` = `USER_MENU`.`ID`
        ";
        return $this->db->query($query)->result_array();
    }
}
