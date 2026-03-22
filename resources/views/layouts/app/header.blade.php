<div class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden mr-2" icon="bars-2" inset="left" />
@if (auth()->user()->isAdmin())
            <x-app-logo href="{{ route('admin-home') }}" wire:navigate />

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item icon="layout-grid" :href="route('admin-home')" :current="request()->routeIs('user-home')" wire:navigate>
                    {{ __('admin-home') }}
                </flux:navbar.item>
            </flux:navbar>
        </flux:header>
            <flux:spacer />
    {{--<flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
                <flux:tooltip :content="__('Search')" position="bottom">
                    <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#" :label="__('Search')" />
                </flux:tooltip>
                <flux:tooltip :content="__('App Git Repository')" position="bottom">
                    <flux:navbar.item
                        class="h-10 max-lg:hidden [&>div>svg]:size-5"
                        icon="folder-git-2"
                        href="https://github.com/phoarde/scoreachore,com"
                        target="_blank"
                        :label="__('Repository')"
                    />
                </flux:tooltip>
                <flux:tooltip :content="__('Documentation')" position="bottom">
                    <flux:navbar.item
                        class="h-10 max-lg:hidden [&>div>svg]:size-5"
                        icon="book-open-text"
                        href="https://scoreachore.com"
                        target="_blank"
                        :label="__('Documentation')"
                    />
                </flux:tooltip>
            </flux:navbar>

            <x-desktop-user-menu />


        <!-- Mobile Menu -->
        <flux:sidebar collapsible="mobile" sticky class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.header>
                <x-app-logo :sidebar="true" href="{{ route('admin-home') }}" wire:navigate />
                <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Platform')">
                    <flux:sidebar.item icon="layout-grid" :href="route('admin-home')" :current="request()->routeIs('admin-home')" wire:navigate>
                        {{ __('admin-home')  }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />

            <flux:sidebar.nav>
                    <flux:sidebar.item icon="folder-git-2" href="https://github.com/phoarde/scoreachore.com" target="_blank">
                        {{ __('App Git Repository') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="book-open-text" href="https://scoreachore.com" target="_blank">
                        {{ __('Documentation') }}
                    </flux:sidebar.item>
                <x-app-logo href="{{ route('user-home') }}" wire:navigate /> --}}
@else
                <flux:navbar class="-mb-px max-lg:hidden">
                    <flux:navbar.item icon="layout-grid" :href="route('user-home')" :current="request()->routeIs('user-home')" wire:navigate>
                        {{ __('user-home') }}
                    </flux:navbar.item>
                </flux:navbar>
           {{-- </flux:sidebar.nav>
        </flux:sidebar> --}}
        @endif

        {{ $slot }}

        @fluxScripts
</div>
