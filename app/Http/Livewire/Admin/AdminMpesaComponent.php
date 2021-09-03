<?php

namespace App\Http\Livewire\Admin;

use Paymentsds\MPesa\Client;

use Livewire\Component;

class AdminMpesaComponent extends Component
{  

    public function paymentMPESA(){

        $client = new Client([
            'apiKey' => 'sa314g2bru4ws4kb00jup8x3dtnnpul7',             // API Key
            'publicKey' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==',          // Public Key
            'serviceProviderCode' => '1717117' // input_ServiceProviderCode
         ]);
         
         $paymentData = [
            'from' => '258843589545',       // input_CustomerMSISDN
            'reference' => 'ASVRYW',      // input_ThirdPartyReference
            'transaction' => 'T12344C', // input_TransactionReference
            'amount' => '10'             // input_Amount
         ];
         
         $result = $client->receive($paymentData);
         
         if ($result->success) {
            // Handle success
         } else {
            // Handle failure
         }
    }
    public function render()
    {

        
        return view('livewire.admin.admin-mpesa-component');
    }
}
