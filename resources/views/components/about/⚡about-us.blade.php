<?php

use Livewire\Component;

new class extends Component {

    public function mission()
    {
        return redirect()->to('mission');
    }
    public function terms()
    {
        return redirect()->to('terms-and-conditions');
    }
    public function privacy()
    {
        return redirect()->to('privacy');
    }

};
?>


            <div class="text-info">
                <flux:callout>
                 <div class="text-accent text-sm">An original idea spawned my Monica Massoud and Realized by Ford Brittain, scoreachore aims to become for annoying household duties what uber has become for personal transportation. boasting 24 hour support and quick response times, scoreachore will inevitably become your first and one time choice for all your household chores. Detailed information can be found in our mission statement or terms and conditions. prospective employees, contractors, and those seeking franchise opportunities, visit our <a href="{{ url('join-us') }}">join us </a>section fill out a contact us form or simply email us at <a
                                                                                                        href="{{'mailto:info@scoreachore.com'}}"> info@scoreachore.com.</a>
                 </div>
                </flux:callout>


                    <div class= "position-relative  mt-auto grid md:grid-cols-3  text-center text-sm p-5">
                        <div class="col-start-1">
                                <x-mary-button class="btn-ghost " label="Our Mission" @click="$wire.mission"/>
                        </div>
                        <div class="col-start-2  float-right">
                            <x-mary-button  class="btn-ghost" label=" Terms and Conditions" @click="$wire.terms"/>
                        </div>
                        <div class="col-start-3 float-right">
                            <x-mary-button class="btn-ghost" label="Your Privacy" @click="$wire.privacy"/>
                        </div>
                    </div>

            </div>
