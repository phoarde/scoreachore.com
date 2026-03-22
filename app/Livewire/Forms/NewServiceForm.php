<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class NewServiceForm extends Form
{
    public $skills;
    public $services;
    public $Skill_id;
    #[validate]
    public $selectedSkill = '';
    #[validate]
    public $skill = '';
    #[validate('required')]
    public $service_name = '';
    #[validate('required')]
    public $service_description = '';
    #[validate('required')]
    public $service_est_time = '';
    #[validate('required')]
    public float $service_rate = 0.00;


}
