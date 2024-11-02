<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class Registration extends Component
{
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $password = '';
    public $messages = [];

    // Define the validation rules
    protected $rules = [
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|'
    ];

    // This method is called whenever a property is updated
    public function updated($propertyName)
    {
        try {
            // Validate only the updated property
            $this->validateOnly($propertyName);
            // Clear the specific error message if validation passes
            $this->messages[$propertyName] = '';
        } catch (ValidationException $e) {
            // Set the specific error message if validation fails
            $this->messages[$propertyName] = $e->validator->errors()->first($propertyName);
        }
    }

    // This method is called when the form is submitted
    public function submit()
    {
        // Validate all properties
        $this->validate();

        // Save the user to the database
        User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hash the password
        ]);

        // Optionally, reset the form fields
        $this->resetForm(); 

        // Flash a success message to the session
        session()->flash('message', 'User successfully registered.');
    }

    // Reset form fields
    private function resetForm()
    {
        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->password = '';
    }
    public function render()
    {
        return view('livewire.registration');
    }
}
