<x-layouts::auth :title="__('Register')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />
            <flux:input
                name="phone"
                :label="__('Phone')"
                :value="old('phone')"
                type="text"
                required
                autofocus
                autocomplete="phone"
                :placeholder="__('000-000-0000')"
            />
            <flux:input
                name="address"
                :label="__('Address')"
                :value="old('address')"
                type="text"
                required
                autofocus
                autocomplete="address"
                :placeholder="__('Address')"
            />
            <flux:input
                name="city"
                :label="__('City')"
                :value="old('city')"
                type="text"
                required
                autofocus
                autocomplete="city"
                :placeholder="__('City')"
            />
            <flux:input
                name="state"
                :label="__('State')"
                :value="old('state')"
                type="text"
                required
                autofocus
                autocomplete="state"
                :placeholder="__('State')"
            />
            <flux:input
                name="zip"
                :label="__('Zip')"
                :value="old('zip')"
                type="text"
                required
                autofocus
                autocomplete="zip"
                :placeholder="__('Zip')"
            />
            <flux:input
                name="country"
                :label="__('Country')"
                :value="old('country')"
                type="text"
                required
                autofocus
                autocomplete="country"
                :placeholder="__('Country')"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
