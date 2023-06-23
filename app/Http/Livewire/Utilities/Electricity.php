<?php

namespace App\Http\Livewire\Utilities;

use App\Models\Utilities\ProductList;
use Livewire\Component;

class Electricity extends Component
{
    public $success_message = "";
    public $error_message = "";
    public $electricity_list;
    public $electricity_index;
    public $meter_no;
    public $meter_info;
    public $isMeterVerified = false;

    public function mount()
    {
        $this->electricity_list = ProductList::getElectricityList();
    }

    public function resetMeter()
    {
        $this->isMeterVerified = false;
        $this->meter_info = "";
    }
    public function verifyMeter()
    {
        $res = ProductList::validateMeterNo($this->electricity_list[$this->electricity_index]["product_id"], $this->meter_no);
        if ($res->code == "100")
        {
            $this->meter_info = $res->message;
            $this->isMeterVerified = true;

            
        }
        else 
        {
            $this->meter_info = "Failed - ".$res->message;
            $this->isMeterVerified = false;
        }
    }

    public function render()
    {
        return view('livewire.utilities.electricity');
    }
}
