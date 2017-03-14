<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site_Offline
 *
 * @author josue
 */
class SiteOffline
{

    /**
     * Check if the site is offline
     *
     * @return void
     */
    public function offline()
    {
        include(APPPATH . 'config/config.php');

        // Check offline configuration
        if (isset($config['is_offline']) && $config['is_offline'] === TRUE) {

            // Check the user IP
            if (isset($config['offline_allowed_ips']) && in_array($_SERVER['REMOTE_ADDR'], $config['offline_allowed_ips']) === FALSE) {
                $this->showMessage();
                exit();
            }
        }
    }

    /**
     * Show the maintance message
     *
     * @return string
     */
    public function showMessage()
    {
        echo '<html><body><h2>Este sitio web se encuentra en mantenimiento</h2></body></html>';
    }

}
