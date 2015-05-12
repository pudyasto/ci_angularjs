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
 * Description of Hello
 *
 * @author adi
 */
class Hello extends CI_Controller{
    //put your code here
    public function index() {
        
        $this->load->view('design/header');
        $this->load->view('hello/index');
        $this->load->view('design/footer');
    }
}
