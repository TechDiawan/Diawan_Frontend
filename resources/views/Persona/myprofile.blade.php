<!-- resources/views/persona/myprofile.blade.php -->
@extends('layouts.fullbar')

@section('title', 'My Profile')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- 1/3 Column -->
            <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="px-8 rounded-lg text-center relative">
                        <div class="relative text-right top-0 left-0 my-4 space-x-2">
                            @php
                                $shareToken = Auth::user()->share_token ?? '';
                            @endphp
                            <a href="{{ $shareToken ? route('persona.e-card', ['token' => $shareToken]) : '#' }}" title="Share" class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-share-nodes h-6 w-6"></i>
                            </a>
                            <a href="#" title="Flip" class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-repeat h-6 w-6"></i>
                            </a>
                            <a href="#" title="Edit" class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-pencil-alt h-6 w-6"></i>
                            </a>
                            <a href="#" title="QR Code" class="text-gray-600 hover:text-blue-600 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-qrcode h-6 w-6"></i>
                            </a>
                        </div>
                        <div class="relative flex justify-center mb-4">
                            <img src="{{ asset('images/profile_pics/default.jpg') }}" alt="User Avatar" class="h-36 w-36 rounded-full transition duration-300 ease-in-out">
                            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition duration-300 ease-in-out rounded-full h-36 w-36" style="left: 50%; transform: translateX(-50%);">
                                <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13.5V17h3.5l9.5-9.5a2.121 2.121 0 00-3-3L9 13.5z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-bold">John Doe</h3>
                            <p class="text-gray-600">johndoe@example.com</p>
                            <p class="text-gray-600">+453678456347</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2/3 Column -->
            <div class="w-full md:w-2/3 px-4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <!-- Tabs Navigation -->
                    <div class="mb-4 border-b border-gray-200">
                        <ul class="flex flex-wrap -mb-px tabs">
                            <li class="mr-2">
                                <a href="#general" class="inline-block py-2 px-4 text-blue-600 border-b-2 border-blue-600">General</a>
                            </li>
                            <li class="mr-2">
                                <a href="#education" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600 hover:border-blue-600">Education</a>
                            </li>
                            <li class="mr-2">
                                <a href="#work-experience" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600 hover:border-blue-600">Work Experience</a>
                            </li>
                            <li class="mr-2">
                                <a href="#journey" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600 hover:border-blue-600">Journey</a>
                            </li>
                            <li class="mr-2">
                                <a href="#competency" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600 hover:border-blue-600">Competency</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tabs Content -->
                    <div id="general" class="tab-content">
                        <form action="{{ route('persona.update-profile') }}" method="POST">
                            @csrf
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full md:w-1/2 px-4">
                                    <div class="mb-4">
                                        <label for="full_name" class="block text-gray-700">Full Name</label>
                                        <input type="text" id="full_name" name="full_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('full_name', Auth::user()->full_name ?? '') }}">
                                        @error('full_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="nick_name" class="block text-gray-700">Nick Name</label>
                                        <input type="text" id="nick_name" name="nick_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('nick_name', Auth::user()->nick_name ?? '') }}">
                                        @error('nick_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="birth_date" class="block text-gray-700">Birth Date</label>
                                        <input type="date" id="birth_date" name="birth_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('birth_date', Auth::user()->birth_date ?? '') }}">
                                        @error('birth_date')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="birth_place" class="block text-gray-700">Birth Place</label>
                                        <input type="text" id="birth_place" name="birth_place" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('birth_place', Auth::user()->birth_place ?? '') }}">
                                        @error('birth_place')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-4">
                                    <div class="mb-4">
                                        <label for="gender" class="block text-gray-700">Gender</label>
                                        <select id="gender" name="gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                            @foreach($genders as $gender)
                                                <option value="{{ $gender }}" {{ old('gender', Auth::user()->gender ?? '') == $gender ? 'selected' : '' }}>{{ ucfirst($gender) }}</option>
                                            @endforeach
                                        </select>
                                        @error('gender')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="religion" class="block text-gray-700">Religion</label>
                                        <select id="religion" name="religion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                            @foreach($religions as $religion)
                                                <option value="{{ $religion }}" {{ old('religion', Auth::user()->religion ?? '') == $religion ? 'selected' : '' }}>{{ ucfirst($religion) }}</option>
                                            @endforeach
                                        </select>
                                        @error('religion')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="marital_status" class="block text-gray-700">Marital Status</label>
                                        <select id="marital_status" name="marital_status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                            @foreach($marital_statuses as $status)
                                                <option value="{{ $status }}" {{ old('marital_status', Auth::user()->marital_status ?? '') == $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                                            @endforeach
                                        </select>
                                        @error('marital_status')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-4 text-right">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="education" class="tab-content hidden">
                        <div class="flex justify-end mb-4">
                            <a href="#" title="Add New" class="text-green-600 hover:text-green-800 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-xl fa-plus-circle" style="width: 20px; height: 20px;"></i>
                                <span class="ml-2"> add new</span>
                            </a>
                        </div>
                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            @forelse($educations ?? [] as $education)
                                <li class="mb-10 ml-6">
                                    <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                        <i class="fas fa-graduation-cap text-gray-100"></i>
                                    </span>
                                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 relative">
                                        <div class="absolute top-2 right-2 flex space-x-2">
                                            <a href="#" title="Edit" class="text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-pencil-alt h-5 w-5"></i>
                                            </a>
                                            <a href="#" title="Delete" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-trash-alt h-5 w-5"></i>
                                            </a>
                                        </div>
                                        <div class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $education->title }}</div>
                                        <div class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">{{ $education->institution }}</div>
                                        <div class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $education->start_year }} to {{ $education->end_year }} ({{ $education->type }})</div>
                                    </div>
                                </li>
                            @empty
                                @foreach($sampleEducations ?? [] as $education)
                                    <li class="mb-10 ml-6">
                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                            <i class="fas fa-graduation-cap text-gray-100"></i>
                                        </span>
                                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 relative">
                                            <div class="absolute top-2 right-2 flex space-x-2">
                                                <a href="#" title="Edit" class="text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer">
                                                    <i class="fas fa-pencil-alt h-5 w-5"></i>
                                                </a>
                                                <a href="#" title="Delete" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out cursor-pointer">
                                                    <i class="fas fa-trash-alt h-5 w-5"></i>
                                                </a>
                                            </div>
                                            <div class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $education['title'] }}</div>
                                            <div class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">{{ $education['institution'] }}</div>
                                            <div class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $education['start_year'] }} to {{ $education['end_year'] }} ({{ $education['type'] }})</div>
                                        </div>
                                    </li>
                                @endforeach
                            @endforelse
                        </ol>
                    </div>
                    <div id="work-experience" class="tab-content hidden">
                        <div class="flex justify-end mb-4">
                            <a href="#" title="Add New" class="text-green-600 hover:text-green-800 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-plus-circle" style="width: 20px; height: 20px;"></i>
                                <span class="ml-2"> add new</span>
                            </a>
                        </div>
                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            @forelse($workExperiences ?? [] as $workExperience)
                                <li class="mb-10 ml-6">
                                    <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                        <i class="fas fa-briefcase text-gray-100"></i>
                                    </span>
                                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 relative">
                                        <div class="absolute top-2 right-2 flex space-x-2">
                                            <a href="#" title="Edit" class="text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-pencil-alt h-5 w-5"></i>
                                            </a>
                                            <a href="#" title="Delete" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-trash-alt h-5 w-5"></i>
                                            </a>
                                        </div>
                                        <div class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $workExperience->position }}</div>
                                        <div class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">{{ $workExperience->company }}</div>
                                        <div class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $workExperience->start_year }} to {{ $workExperience->end_year }} ({{ $workExperience->type }})</div>
                                    </div>
                                </li>
                            @empty
                                @foreach($sampleWorkExperiences ?? [] as $workExperience)
                                    <li class="mb-10 ml-6">
                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                            <i class="fas fa-briefcase text-gray-100"></i>
                                        </span>
                                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 relative">
                                            <div class="absolute top-2 right-2 flex space-x-2">
                                                <a href="#" title="Edit" class="text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer">
                                                    <i class="fas fa-pencil-alt h-5 w-5"></i>
                                                </a>
                                                <a href="#" title="Delete" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out cursor-pointer">
                                                    <i class="fas fa-trash-alt h-5 w-5"></i>
                                                </a>
                                            </div>
                                            <div class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $workExperience['position'] }}</div>
                                            <div class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">{{ $workExperience['company'] }}</div>
                                            <div class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $workExperience['start_year'] }} to {{ $workExperience['end_year'] }} ({{ $workExperience['type'] }})</div>
                                        </div>
                                    </li>
                                @endforeach
                            @endforelse
                        </ol>
                    </div>
                    <div id="journey" class="tab-content hidden">
                        <div class="flex justify-end mb-4">
                            <a href="#" title="Add New" class="text-green-600 hover:text-green-800 transition duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-plus-circle" style="width: 20px; height: 20px;"></i>
                                <span class="ml-2"> add new</span>
                            </a>
                        </div>
                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            @forelse($journeys ?? $sampleJourneys ?? [] as $journey)
                                <li class="mb-10 ml-6">
                                    <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                        <i class="fas fa-map-marker-alt text-gray-100"></i>
                                    </span>
                                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 relative">
                                        <div class="absolute top-2 right-2 flex space-x-2">
                                            <a href="#" title="Edit" class="text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-pencil-alt h-5 w-5"></i>
                                            </a>
                                            <a href="#" title="Delete" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out cursor-pointer">
                                                <i class="fas fa-trash-alt h-5 w-5"></i>
                                            </a>
                                        </div>
                                        <div class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $journey->title ?? $journey['title'] }}</div>
                                        <div class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">{{ $journey->location ?? $journey['location'] }}</div>
                                        <div class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $journey->start_month_year ?? $journey['start_month_year'] }} to {{ $journey->end_month_year ?? $journey['end_month_year'] }}</div>
                                    </div>
                                </li>
                            @empty
                                <p class="text-gray-600">No journeys available.</p>
                            @endforelse
                        </ol>
                    </div>
                    <div id="competency" class="tab-content hidden">
                        <div class="mb-4 text-center">
                            <a href="{{ route('testlab.skillclaim') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 ease-in-out">
                                Claim Your Skills by Taking a Test
                            </a>
                        </div>
                        <div class="flex flex-wrap -mx-4">
                            @forelse($competencies ?? $sampleCompetencies ?? [] as $competency)
                                <div class="w-full md:w-1/2 px-4 mb-4">
                                    <div class="bg-white p-4 rounded-lg shadow-md relative">
                                        <div class="absolute top-2 right-2 text-gray-600 flex items-center">
                                            <i class="fas fa-star text-yellow-500 mr-1"></i>
                                            <span class="text-xl font-semibold">{{ number_format($competency->rating ?? $competency['rating'], 1) }}</span>
                                        </div>
                                        <h3 class="text-lg font-bold">{{ $competency->title ?? $competency['title'] }}</h3>
                                        <p class="text-gray-600">{{ $competency->subtitle ?? $competency['subtitle'] }}</p>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-600">No competencies available.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.tabs a');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function (event) {
                    event.preventDefault();

                    tabs.forEach(t => t.classList.remove('text-blue-600', 'border-blue-600'));
                    tab.classList.add('text-blue-600', 'border-blue-600');

                    tabContents.forEach(content => content.classList.add('hidden'));
                    const target = document.querySelector(tab.getAttribute('href'));
                    target.classList.remove('hidden');
                });
            });

            const shareToken = "{{ Auth::user()->share_token ?? '' }}";
            const shareIcon = document.querySelector('.fa-share-nodes');
            if (shareIcon) {
                shareIcon.addEventListener('click', function (event) {
                    event.preventDefault();
                    if (shareToken) {
                        const url = "{{ route('persona.e-card', ['token' => '__TOKEN__']) }}".replace('__TOKEN__', shareToken);
                        navigator.clipboard.writeText(url).then(function () {
                            alert('URL copied to clipboard');
                        }, function (err) {
                            console.error('Could not copy text: ', err);
                        });
                    } else {
                        alert('No share token available');
                    }
                });
            }

            const sampleJourneys = [
                {
                    title: 'Backpacking through Europe',
                    location: 'Europe',
                    start_month_year: 'June 2019',
                    end_month_year: 'August 2019'
                },
                {
                    title: 'Volunteer Work in Africa',
                    location: 'Kenya',
                    start_month_year: 'January 2020',
                    end_month_year: 'March 2020'
                }
            ];

            const sampleCompetencies = [
                {
                    title: 'JavaScript',
                    subtitle: 'Programming Language',
                    rating: 4.5
                },
                {
                    title: 'Project Management',
                    subtitle: 'Management Skill',
                    rating: 4.0
                },
                {
                    title: 'Graphic Design',
                    subtitle: 'Creative Skill',
                    rating: 3.8
                }
            ];
        });
    </script>
@endsection