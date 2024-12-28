<!-- resources/views/testlab/partials/sidebar.blade.php -->
<div class="bg-gray-800 text-white w-64 min-h-screen">
    <div class="p-4">
        <ul>
            @foreach ($menuItems as $group => $items)
                <li class="mb-2">
                    <span class="block py-2 px-4 rounded bg-gray-700 text-lg">{{ $group }}</span>
                </li>
                @foreach ($items as $item)
                    <li class="mb-2">
                        <a href="{{ route($item['route']) }}" class="block py-2 px-4 rounded hover:bg-gray-700">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
                <hr class="my-4 border-gray-600">
            @endforeach
        </ul>
    </div>
</div>