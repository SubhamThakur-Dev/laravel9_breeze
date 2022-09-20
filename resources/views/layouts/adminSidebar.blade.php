<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <i class="fa-solid fa-house"></i>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </li>
        @if(auth()->user()->is_admin)
        <li>
            <i class="fa-solid fa-list"></i>
            <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('Categories') }}
            </x-nav-link>
        </li>
        <li>
            <i class="fa-solid fa-signs-post"></i>
            <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                {{ __('Posts') }}
            </x-nav-link>
        </li>
        <li>
            <i class="fa-solid fa-address-book"></i>
            <x-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')">
                {{ __('Contacts') }}
            </x-nav-link>
        </li>
        @endif
    </ul>
</div>