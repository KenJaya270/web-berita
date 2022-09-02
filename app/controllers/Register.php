<?php

    class Register extends Controller{

        public function index(){

            $this->view('template/header');
            
            $this->view('register/form');
            
            $this->view('template/footer');
        }

    }