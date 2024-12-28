{{-- resources/views/components/app-launcher.blade.php --}}
@props(['apps' => [], 'isOpen' => false])

@php
    if (empty($apps)) {
        $apps = [
            [
                'name' => 'Example App 1',
                'url' => '#',
                'icon_path' => 'images/apps/example1.png',
                'color' => 'blue'
            ],
            [
                'name' => 'Example App 2',
                'url' => '#',
                'icon_path' => 'images/apps/example2.png',
                'color' => 'green'
            ],
            // Add more sample apps as needed...
        ];
    }
@endphp

<div x-data="{ isOpen: @js($isOpen) }" class="relative">
    {{-- App Launcher Modal --}}
    <div
        x-show="isOpen"
        @click.away="isOpen = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="hidden absolute right-0 mt-2 w-screen max-w-md transform px-2 sm:px-0 z-50"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden bg-white">
            <div class="relative px-5 py-6">
                {{-- Search Bar --}}
                <div class="mb-6">
                    <div class="relative">
                        <input 
                            type="text" 
                            placeholder="Find apps" 
                            class="w-full bg-gray-200 text-gray-900 pl-10 pr-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Apps Grid --}}
                <div class="grid grid-cols-3 sm:grid-cols-4 gap-6">
                    @forelse($apps as $app)
                    <a 
                        href="{{ $app['url'] }}" 
                        class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                    >
                        {{-- App Icon --}}
                        <div class="w-12 h-12 flex items-center justify-center">
                            @if(isset($app['icon_path']))
                                <img src="{{ asset($app['icon_path']) }}" alt="{{ $app['name'] }}" class="w-full h-full">
                            @else
                                <div class="w-full h-full rounded-lg bg-{{ $app['color'] ?? 'blue' }}-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-bold">{{ substr($app['name'], 0, 1) }}</span>
                                </div>
                            @endif
                        </div>
                        {{-- App Name --}}
                        <span class="text-sm text-gray-900 text-center">{{ $app['name'] }}</span>
                    </a>
                    @empty
                    {{-- Example Data --}}
                    <a 
                        href="#" 
                        class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                    >
                        <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-lg">
                            <span class="text-white text-xl font-bold">E</span>
                        </div>
                        <span class="text-sm text-gray-900 text-center">Example</span>
                    </a>
                    @endforelse

                    {{-- More Apps Button --}}
                    <a 
                        href="{{ route('apps.index') }}" 
                        class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                    >
                        <div class="w-12 h-12 flex items-center justify-center border-2 border-gray-600 rounded-lg">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-900 text-center">More apps</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Usage in Controller:
public function index()
{
    $apps = [
        [
            'name' => 'Outlook',
            'url' => '/apps/outlook',
            'icon_path' => 'images/apps/outlook.png',
            'color' => 'blue'
        ],
        [
            'name' => 'OneDrive',
            'url' => '/apps/onedrive',
            'icon_path' => 'images/apps/onedrive.png',
            'color' => 'blue'
        ],
        // Add more apps...
    ];

    return view('your-view', compact('apps'));
}
--}}

{{-- Usage in Blade:
<x-app-launcher :apps="$apps" />
--}}