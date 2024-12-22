<!-- resources/views/testlab/partials/sidebar.blade.php -->
<div class="bg-gray-800 text-white w-64 min-h-screen">
    <div class="p-4">
        <ul>
            @if(isset($menuItems))
                @foreach ($menuItems as $item)
                    <li class="mb-2">
                        <a href="{{ route($item['route']) }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            @else
                <li class="mb-2">
                    <span class="block py-2 px-4 rounded bg-gray-700">No menu items available</span>
                </li>
            @endif
        </ul>
    </div>
</div>