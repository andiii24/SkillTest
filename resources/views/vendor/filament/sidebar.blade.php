<x-filament::layouts.app.sidebar>

    <!-- Original Filament sidebar content -->
    <x-filament::components.layouts.app.sidebar-content />

    <!-- Custom sidebar items -->
    <a href="{{ route('your.route.name') }}">Custom Link 1</a>
    <a href="{{ route('another.route.name') }}">Custom Link 2</a>
    <!-- Add other custom sidebar items -->

</x-filament::layouts.app.sidebar>
