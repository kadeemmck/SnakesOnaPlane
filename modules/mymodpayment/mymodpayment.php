<?php

        class MyModPayment extends PaymentModule {

            public function __construct(){

                $this->name = 'mymodpayment';
                $this->tab  = 'payment_gateways';
                $this->version = '0.1';
                $this->author = 'Fabien Serny';
                $this->bootstrap = true;
                parent::__construct();
                $this->displayName = $this->l('MyMod payment');
                $this->description = $this->l('A simple payment module');





            }

        }