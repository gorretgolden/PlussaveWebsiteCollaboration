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

    protected $rules = ['title' => 'required|string',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'otherName' => 'nullable|string|max:255',
            'physicalAddress' => 'required|string|max:500',
            'gender' => 'required|in:Male,Female',
            'mobileNumber' => 'required|regex:/^\+?[1-9]\d{1,14}$/',
            'otherMobileNumber' => 'nullable|regex:/^\+?[1-9]\d{1,14}$/',
            'dateOfBirth' => 'required|date',
            'placeOfWork' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'accountType' => 'required|string',
            'identificationType' => 'required|string',
            'identificationNumber' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',];

    public function mount()
    {
        $this->rules = [
            'title' => 'required|string',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'otherName' => 'nullable|string|max:255',
            'physicalAddress' => 'required|string|max:500',
            'gender' => 'required|in:Male,Female',
            'mobileNumber' => 'required|regex:/^\+?[1-9]\d{1,14}$/',
            'otherMobileNumber' => 'nullable|regex:/^\+?[1-9]\d{1,14}$/',
            'dateOfBirth' => 'required|date',
            'placeOfWork' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'accountType' => 'required|string',
            'identificationType' => 'required|string',
            'identificationNumber' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function nextStep()
    {
        $this->validate($this->rules);

        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }



    public function render()
    {
        return view('livewire.member-form');
    }

    public function submit()
    {

        $this->validate($this->rules);

        try {
            // Create a new member record
            Member::create([
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
                // Add other fields as needed
            ]);

            session()->flash('message', 'Dear '.$this->title.' '.$this->last_name.' '.$this->first_name.' your application has been submitted successfully!');

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

            return redirect()->to('/');

        } catch (\Exception $e) {
            session()->flash('error', 'Failed to register member. Please try again.');
        }






    }
}


