<?php
class Contact extends Controller 
{
    public function index()
    {
        echo 'contact/index';
    }
    
    public function phone($number = 11111111)
    {
        echo 'contact/phone '. $number;
    }
}