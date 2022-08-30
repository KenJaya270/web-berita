<?php
    class Login extends Controller{

        public function form(){
            $this->view('template/header')
            
            $this->view('login/form');

            $this->view('template/footer')
        }
    }