<?php

use Livewire\Component;

new class extends Component {

};
?>

        <div>
            <div class="text-info">
                <p class="text-accent text-sm">An original idea spawned my Monica Massoud and Realized by Ford Brittain, scoreachore aims to become for annoying household duties what uber has become for personal transportation. boasting 24 hour support and quick response times, scoreachore will inevitably become your first and one time choice for all your household chores. Detailed information can be found in our mission statement or terms and conditions. prospective employees, contractors, and those seeking franchise opportunities, visit our careers section fill out a contact us form or simply email us at info@scoreachore.com.</p>
            </div>
                    <div class=" ml-56 fixed bottom-0 left-0 z-50 grid grid-cols-4 h-16   p-4 text-center text-sm">
                            <div class="col-start-1  ">
                                <x-mary-button class="btn-ghost" label="Contact us" @click="$wire.contactUs"/>
                            </div>
                        <div class="col-start-2  float-right">
                            <x-mary-button  class="btn-ghost" label=" Terms and Conditions" @click="$wire.terms_and_conditions"/>
                        </div>
                        <div class="col-start-3 float-right">
                            <x-mary-button class="btn-ghost" label="Careers" @click="$wire.careers"/>
                        </div>
                        <div class="col-start-4 float-right">
                            <x-mary-button class="btn-ghost" label="Developers" @click="$wire.developers"/>
                        </div>
                    </div>
        </div>
