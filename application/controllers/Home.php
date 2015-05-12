<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

/**
 * Description of Home
 *
 * @author adi
 */
class Home extends CI_Controller{
    //put your code here
    public function index() {
        
        $this->load->view('design/header');
        $this->load->view('home/index');
        $this->load->view('design/footer');
    }
}
