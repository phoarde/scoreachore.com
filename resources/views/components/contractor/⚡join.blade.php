<?php

use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use App\Models\skill;
use App\Models\Contractors;
use Illuminate\Database\Eloquent\Casts\Json;


new class extends Component {

    public int $user_id=0;
    public string $name='';
    public string $email='';
    public string $phone='';
    public string $address='';
    public string $city='';
    public string $state='';
    public string $zip='';
    public string $country='';
    public array $values=[];
    public array $skills=[];
    public string $skill='';
    #[Validate('required|min:6|max:10')]
    public string $driversLicenseNumber='';
    #[Validate('required|date')]
    public string $driversLicenseExp='';
    #[Validate('required|min:2|max:2')]
    Public string $driversLicenseState='';
    #[Validate('required|min:3|max:20')]
    public string $skill_name='';
    #[Validate('required|min:9|max:9')]
    public int $ssn= 0;
    #[Validate('required|date')]
    public string $dob='';
    #[Validate('required')]
    public array $selectedSkill=[];
    public Collection $skillsOption;
    public Collection $contractors;


    public function mount(): void
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->address = auth()->user()->address;
        $this->city = auth()->user()->city;
        $this->state = auth()->user()->state;
        $this->zip = auth()->user()->zip;

        $this->skillsOption=Skill::all();
        $this->contractors=Contractors::all();

    }

    public function store()
    {
        $userdata=[
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'ssn' => $this->ssn,
            'address' => $this->address,
            'city' => $this->city,
            'zip' => $this->zip,
            'driversLicenseNumber' => $this->driversLicenseNumber,
            'driversLicenseExp' => $this->driversLicenseExp,
            'driversLicenseState' => $this->driversLicenseState,
            'dob' => $this->dob,
            'skills'=>json_encode($this->values,JSON_PRETTY_PRINT,1),
        ];
        //validate and store



               if (Contractors::create($userdata)) {

                   $this->reset();
                   dd($userdata);
                   return redirect()->to('join-us');
                               //    ->with(session()->flash('status', 'member object created successfully...we will be in touch'));
               }
               session()->flash('staus', 'create failed');
               return redirect()->to('home');

    }
}
?>

    <div class="flex h-full w-full flex-1 flex-col  rounded-xl">
        <div class="grid  auto-rows-min gap-4 lg:grid-cols-2 ">
            <div class="mt-9">
                <div class="col-1 float-start aspect-video overflow-visible rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                 <flux:callout icon="briefcase"   class="text-gray-300 text-center"><h1>Join our team</h1>
                      <flux:text> Our team of skilled professionals is growing daily. Answer a few questions to join your local team and
                    contribute to our mission of providing customers unmatched service and exceptional value. Cut out middle
                                 management and BE YOUR OWN BOSS! Verify your eligibility and join our team.
                      </flux:text>
                 </flux:callout>
                </div>
                <div class="float-end col-2 relative aspect-video overflow-visible rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <x-iconbw/>
                <div class="mt-4">
                    <flux:heading size="lg">Personal Information</flux:heading>
                    <flux:text class="mt-2">Verify and update to your personal details.</flux:text>
                </div>
            </div>
        </div>
    </div>



    <flux:modal.trigger name="edit-profile">
        <flux:button class="mx-auto w-auto float-end" icon:trailing="arrow-right">complete your employment profile</flux:button>
    </flux:modal.trigger>
        <flux:modal name="edit-profile" flyout variant="floating" class="2xl:w-1/2">
            <form type="submit" class="space-y-6" wire:model="contractors" wire:submit.prevent="store()" >
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Update profile</flux:heading>
                        <flux:text class="mt-2">Verify and update to your personal details.</flux:text>
                    </div>
                        <flux:input label="Name" placeholder="{{$name}}"/>
                        <flux:input label="Email" placeholder="{{$email}}"/>
                        <flux:input label="Phone number" placeholder="{{$phone}}"/>
                        <flux:input label="Address" placeholder="{{$address}}"/>
                        <flux:input label="City" placeholder="{{$city}}"/>
                        <flux:input label="State" placeholder="{{$state}}"/>
                        <flux:input label="Zip" placeholder="{{$zip}}"/>

                    <flux:input label="Social security number" placeholder="Your social security number" wire:model="ssn"/>
                    <flux:input label="Drivers License Number" placeholder="Your Drivers License number" wire:model="driversLicenseNumber"/>
                    <flux:input label="Drivers License Expiration" placeholder="Your Drivers License Expiration" wire:model="driversLicenseExp"/>
                    <flux:input label="Drivers License State" placeholder="Your Drivers License State" wire:model="driversLicenseState"/>
                    <flux:input label="Date of birth" type="date" wire:model="dob"/>
                    <flux:heading size="lg">Skills</flux:heading>
                    <flix:text>Select all skills that apply</flix:text>
                    <flux:checkbox.group wire:model="skill" label="select all that apply" class="flex flex-col gap-2">
                       @foreach($skillsOption as $skill)
                           <flux:checkbox wire:model.defer="values"  label="{{ $skill->skill_name }}"
                              value="{{ $skill['id'] }}" unchecked >
                           </flux:checkbox>
                       @endforeach
                    </flux:checkbox.group>
    {{--
    <flux:select.option value="" wire:model.defer="selectedSkill" indicator="checkbox" multiple
                                                >{{$skill->skill_name}}</flux:select.option>--}}
                        <div class="flex">
                            <flux:spacer/>
                            <flux:button type="submit" variant="subtle" >store</flux:button>
                        </div>
                </div>
            </form>
        </flux:modal>
    </div>


