@extends('layouts.fullbar')

@section('title', 'Skill Claims')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Skill Claims</h1>
        <div class="mb-4 flex">
            <input 
                type="text" 
                id="skill-search" 
                placeholder="Search for skills..." 
                class="w-full bg-gray-200 text-gray-900 pl-4 pr-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button 
                id="show-button" 
                class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                Show
            </button>
        </div>
        <div id="skill-results" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Skill results will be displayed here -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('skill-search');
            const showButton = document.getElementById('show-button');
            const resultsContainer = document.getElementById('skill-results');

            function displayResults(query) {
                // Simulate an API call to search for skills
                const skills = [
                    { name: 'JavaScript', type: 'Programming Language', claimed: false },
                    { name: 'Project Management', type: 'Management Skill', claimed: true },
                    { name: 'Graphic Design', type: 'Creative Skill', claimed: false },
                    // Add more sample skills as needed
                ];

                const filteredSkills = skills.filter(skill => 
                    skill.name.toLowerCase().includes(query) || 
                    skill.type.toLowerCase().includes(query)
                );

                resultsContainer.innerHTML = filteredSkills.map(skill => `
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold">${skill.name}</h3>
                        <p class="text-gray-600">${skill.type}</p>
                        <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">
                            ${skill.claimed ? 'Retest' : 'Claim'}
                        </button>
                    </div>
                `).join('');
            }

            showButton.addEventListener('click', function () {
                const query = searchInput.value.trim().toLowerCase();
                displayResults(query);
            });
        });
    </script>
@endsection
