<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customerfilter extends Component
{ 
     public $search1;
    public $customerData = [];
    public $check = "Checking sucess";
 
    public function render()
    {
    	$search1_results = [];
  
    
            if(strlen($this->search1) > 2){
                $search1_results = Customer::select('name')->where('name', 'LIKE', '%' . $this->search1 . '%')->get();
            }
        return view('livewire.customerfilter',[
            'search1_results' => $search1_results,
        ]);
    }

    public function checkValue(){
        
    }
}
