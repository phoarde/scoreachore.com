
    <div class="min-h-screen p-10 bg-white font-sserif-inter   dark:bg-zinc-800">
        <flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.header>
                <x-app-logo :sidebar="true" href="{{ route('home') }}" wire:navigate />
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>
            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Administrative Tasks')" class="grid">
                        <flux:sidebar.item icon="home" :href="route('admin-home')" :current="request()->routeIs('admin-home')" wire:navigate>
                            {{ __('Admin Home') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="user-group" :href="route('contractor-home')" :current="request()->routeIs('contractor-home')" wire:navigate>
                            {{ __('Edit Team') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="user" :href="route('user-home')" :current="request()->routeIs('user-home')" wire:navigate>
                            {{ __('Edit Users') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="wrench-screwdriver" :href="route('service-skills')" :current="request()->routeIs('skill-home')" wire:navigate>
                            {{ __('Edit Skills and Services') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="currency-dollar" :href="route('service-home')" :current="request()->routeIs('service-home')" wire:navigate>
                            {{ __('Service Orders and Invoices') }}
                        </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>
             <flux:sidebar.nav>
                 <flux:sidebar.spacer />
                <flux:sidebar.group :heading="__('User Menu')" class="grid">
                        <flux:sidebar.item icon="calendar" :href="route('schedule-home')" :current="request()->routeIs('schedule-home')" wire:navigate>
                            {{ __('Schedule Services') }}
                        </flux:sidebar.item>
                </flux:sidebar.group>
                        <flux:sidebar.item icon="pencil-square" :href="route('review-home')" :current="request()->routeIs('review-Review')" wire:navigate>
                            {{ __('Read and Write Reviews') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="briefcase" :href="route('join-us')" :current="request()->routeIs('join us')" wire:navigate>
                            {{ __('Join Us') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="at-symbol" :href="route('about-us')" :current="request()->routeIs('about-us')" wire:navigate>
                            {{ __('About Us') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="bell" :href="route('notifications')" :current="request()->routeIs('notifications')" wire:navigate>
                            {{ __('Notifications') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="clipboard-document-list" :href="route('terms-and-conditions')" :current="request()->routeIs('terms-and-conditions')" wire:navigate>
                            {{ __('Terms and Conditions') }}
                        </flux:sidebar.item>
                            <flux:sidebar.item icon="command-line" :href="route('developers')" :current="request()->routeIs('developers')" wire:navigate>
                                {{ __('Developers') }}
                            </flux:sidebar.item>
            </flux:sidebar.nav>
            <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
        </flux:sidebar>
        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar
                                    :name="auth()->user()->name"
                                    :initials="auth()->user()->initials()"
                                />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                    <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full cursor-pointer"
                            data-test="logout-button"
                        >
                            {{ __('Log out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </div>
