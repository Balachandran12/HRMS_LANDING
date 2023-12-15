<?php

namespace App\Livewire\Home;

use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RequestDemo extends Component
{





    
   
    #[Rule('required')] 
    public $name='';
    #[Rule('required')] 
    public $company='';
    #[Rule('required')] 
    public $companyEmail='';
    #[Rule('required')] 
    public $phoneNumber='';
    #[Rule('required')] 
    public $date;
    #[Rule('required')] 
    public $message=[];



    public function createUser(){
// dd($this->date);
    $this->validate(); 
// dd($this->name);
        
        $data1= UserDetail::create([
             'name'=>$this->name,
             'company_name'=>$this->company,
             'email'=>$this->companyEmail,
             'phone_number'=>$this->phoneNumber,
             'date'=>$this->date,
             'send_message'=>$this->message
        ]);


             


    

      $data=$data1->toArray();
      $data['date']=Carbon::create($data['date'])->toDateString();
// dd($data);
        if($data){
     Mail::send('content-email', $data, function ($mess) {
        $mess->to('hrms@gurushrconsultancy.com')
        ->subject('Demo Request');
          }); 
        }

        $this->reset();

        session()->flash('message', 'Email sent successfully .');


    }

   
    public function render()
    {
        return view('livewire.home.request-demo');
    }
}
