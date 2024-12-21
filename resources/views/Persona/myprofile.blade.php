<!-- resources/views/persona/myprofile.blade.php -->
@extends('layouts.fullbar')

@section('title', 'My Profile')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- 1/3 Column -->
            <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="p-4 rounded-lg text-center">
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
                        </div>
                        <div class="flex justify-center">
                            <i class="fas fa-link h-6 w-6 text-gray-600 hover:text-blue-600 cursor-pointer transition duration-300 ease-in-out"></i>
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
                                <a href="#account" class="inline-block py-2 px-4 text-blue-600 border-b-2 border-blue-600">Account</a>
                            </li>
                            <li class="mr-2">
                                <a href="#general" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600">General</a>
                            </li>
                            <li class="mr-2">
                                <a href="#education" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600">Education</a>
                            </li>
                            <li class="mr-2">
                                <a href="#work-experience" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600">Work Experience</a>
                            </li>
                            <li class="mr-2">
                                <a href="#journey" class="inline-block py-2 px-4 text-gray-600 hover:text-blue-600">Journey</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tabs Content -->
                    <div id="account" class="tab-content">
                        <p>Account content goes here.</p>
                    </div>
                    <div id="general" class="tab-content hidden">
                        <p>General content goes here.</p>
                    </div>
                    <div id="education" class="tab-content hidden">
                        <p>Education content goes here.</p>
                    </div>
                    <div id="work-experience" class="tab-content hidden">
                        <p>Work experience content goes here.</p>
                    </div>
                    <div id="journey" class="tab-content hidden">
                        <p>Journey content goes here.</p>
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

                    tabs.forEach(t => t.classList.remove('text-blue-600', 'border-blue-600', 'border-b-2'));
                    tab.classList.add('text-blue-600', 'border-blue-600', 'border-b-2');

                    tabContents.forEach(content => content.classList.add('hidden'));
                    const target = document.querySelector(tab.getAttribute('href'));
                    target.classList.remove('hidden');
                });
            });

            // Show the first tab content by default
            const firstTab = tabs[0];
            firstTab.classList.add('text-blue-600', 'border-blue-600', 'border-b-2');
            const firstContent = document.querySelector(firstTab.getAttribute('href'));
            firstContent.classList.remove('hidden');
        });
    </script>
@endsection