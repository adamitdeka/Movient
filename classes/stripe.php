<?php
    require_once('vendor/autoload.php');
    class Stripe{
        public static $s_sk = 'sk_test_Dj1M5b633r0K1e7I8yBiZ9E700RpBsuiV0';
        public function addCustomer($name, $email){
            \Stripe\Stripe::setApiKey($this::$s_sk);
            $customer = \Stripe\Customer::create([
                'name' => $name,
                'email' => $email
              ]);
              //$customer = json_decode($customer,true);
            return($customer);
        }
        public function charge($token){
            \Stripe\Stripe::setApiKey($this::$s_sk);
            $charge = \Stripe\Charge::create(
                array(
                    'amount' => 600,
                    'currency' => 'usd',
                    'source' => $token
                )
            );           
        }

        public function createInvoiceItem($cusID){
            \Stripe\Stripe::setApiKey($this::$s_sk);

            $invoiceItem = \Stripe\InvoiceItem::create([
                            'customer' => $cusID,
                            'amount' => 600,
                            'currency' => 'cad',
                            'description' => 'One-time setup fee',
                            ]);
            
            \Stripe\Invoice::create([
              'customer' => $cusID,
              'auto_advance' => false, /* auto-finalize this draft after ~1 hour */
            ]);  
            
            return $invoiceItem;
        }

        public function invoice($invoiceId){
            \Stripe\Stripe::setApiKey($this::$s_sk);

            $invoice = \Stripe\Invoice::retrieve($invoiceId);
            $invoice = $invoice->finalizeInvoice();
            return $invoice;
        }

        public function printInvoice($url){
            $client = new \Pdfcrowd\HtmlToPdfClient("movient", "9e8c26e1a89a9b9696c368c11882ac38");

            // run the conversion and write the result to a file
            $client->convertUrlToFile($url, "invoice.pdf");
        }
    }
?>