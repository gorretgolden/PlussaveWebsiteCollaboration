<?php

namespace App\Http\Livewire;

use App\Models\LoanApplication;
use Livewire\Component;

class LoanApplicationForm extends Component
{
    public $loanAmount;
    public $name;
    public $email;
    public $phone;
    public $loanType;
    public $businessLocation;
    public $loanPurpose;
    public $businessNature;
    public $residence;
    public $status;

    public $isSubmitting = false;

       // List of business categories
       public $businessCategories = [
        'Retail',
        'Services',
        'Manufacturing',
        'Technology',
        'Healthcare',
        'Education',
        'Food & Beverage',
        'Finance',
        'Real Estate',
        'Construction',
        'Art & Entertainment',
        'Automotive',
        'Legal Services',
        'Travel & Tourism',
        'Media & Communication',
        'Retail',
        'Services',
        'Manufacturing',
        'Technology',
        'Healthcare',

    ];


    protected $rules = [
        'loanAmount' => 'required|numeric|min:0',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'loanType' => 'required|string',
        'businessLocation' => 'required|string|max:255',
        'loanPurpose' => 'required|string|max:255',
        'businessNature' => 'required|string|in:Retail,Services,Manufacturing,Technology,Healthcare,Education,Food & Beverage,Finance,Real Estate,Construction,Art & Entertainment,Automotive,Legal Services,Travel & Tourism,Media & Communication',
        'residence' => 'required|string|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $this->isSubmitting = true;

        sleep(10);


        LoanApplication::create([
            'loan_amount' => $this->loanAmount,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'loan_type' => $this->loanType,
            'business_location' => $this->businessLocation,
            'loan_purpose' => $this->loanPurpose,
            'business_nature' => $this->businessNature,
            'residence' => $this->residence,
            'status' =>'pending'
        ]);

        session()->flash('message', 'Your loan application has been submitted successfully!');

        $this->reset(['loanAmount', 'name', 'email', 'phone', 'loanType', 'businessLocation', 'loanPurpose', 'businessNature', 'residence']);
        $this->isSubmitting = false;

    }

    public function render()
    {
        return view('livewire.loan-application-form');
    }
}
