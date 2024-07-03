<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class MemberForm extends Component
{
    public $step = 1;

    // Step 1: Personal Information
    public $title, $firstName, $lastName, $otherName, $physicalAddress, $gender, $mobileNumber, $otherMobileNumber, $dateOfBirth, $placeOfWork, $email;

    // Step 2: Account Details
    public $accountType, $identificationType, $identificationNumber, $occupation;

    protected $rules = [
        1 => [
          'title' => 'required|string',
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'otherName' => 'nullable|string|max:255',
        'physicalAddress' => 'required|string|max:500',
        'gender' => 'required|in:Male,Female',
        'mobileNumber' => 'required|regex:/^07\d{8,9}$/|unique:members,mobile_number',
        'otherMobileNumber' => 'nullable|regex:/^07\d{8,9}$/',
        'dateOfBirth' => 'required|date',
        'placeOfWork' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:members,email',
        ],
        2 => [
            'accountType' => 'required|string',
            'identificationType' => 'required|string',
            'identificationNumber' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules[$this->step]);
    }

    public function nextStep()
    {
        $this->validate($this->rules[$this->step]);

        if ($this->step < 2) {
            $this->step++;
        }
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function render()
    {
        return view('livewire.member-form');
    }

    public function submit()
    {
        $this->validate($this->rules[$this->step]);

        try {
            // Create a new member record
            Member::create([
                'title' => $this->title,
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'other_name' => $this->otherName,
                'physical_address' => $this->physicalAddress,
                'gender' => $this->gender,
                'mobile_number' => $this->mobileNumber,
                'other_mobile_number' => $this->otherMobileNumber,
                'date_of_birth' => $this->dateOfBirth,
                'place_of_work' => $this->placeOfWork,
                'email' => $this->email,
                'account_type' => $this->accountType,
                'identification_type' => $this->identificationType,
                'identification_number' => $this->identificationNumber,
                'occupation' => $this->occupation,
            ]);

            session()->flash('success', 'Dear ' . $this->title . ' ' . $this->lastName . ' '.$this->firstName.' your application has been submitted successfully!');

            $this->reset([
                'title',
                'firstName',
                'lastName',
                'otherName',
                'physicalAddress',
                'gender',
                'mobileNumber',
                'otherMobileNumber',
                'dateOfBirth',
                'placeOfWork',
                'email',
                'accountType',
                'identificationType',
                'identificationNumber',
                'occupation'
            ]);

            $this->step = 1;


        } catch (\Exception $e) {
            // dump($e);
            session()->flash('error', 'Failed to register member. Please try again.');
        }
    }


}


