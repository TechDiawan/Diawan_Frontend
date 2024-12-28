<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    /**
     * Show the My Profile page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $genders = ['male', 'female', 'not-stated'];
        $religions = ['catholic', 'christian', 'not-stated', 'budhist', 'hindu', 'other'];
        $marital_statuses = ['single', 'married', 'divorced', 'widowed', 'not stated'];
        $educations = Auth::check() ? Auth::user()->educations()->orderBy('end_year', 'desc')->get() : collect();
        $workExperiences = Auth::check() ? Auth::user()->workExperiences()->orderBy('end_year', 'desc')->get() : collect();
        $sampleEducations = [
            [
                'start_year' => '2015',
                'end_year' => '2019',
                'title' => 'Bachelor of Science in Computer Science',
                'type' => 'formal',
                'institution' => 'University of Example'
            ],
            [
                'start_year' => '2012',
                'end_year' => '2015',
                'title' => 'High School Diploma',
                'type' => 'formal',
                'institution' => 'Example High School'
            ]
        ];
        $sampleWorkExperiences = [
            [
                'start_year' => '2020',
                'end_year' => '2022',
                'position' => 'Software Engineer',
                'type' => 'fulltime',
                'company' => 'Tech Company'
            ],
            [
                'start_year' => '2018',
                'end_year' => '2020',
                'position' => 'Junior Developer',
                'type' => 'contract',
                'company' => 'Startup Inc.'
            ]
        ];
        $sampleJourneys = [
            [
                'title' => 'Backpacking through Europe',
                'location' => 'Europe',
                'start_month_year' => 'June 2019',
                'end_month_year' => 'August 2019'
            ],
            [
                'title' => 'Volunteer Work in Africa',
                'location' => 'Kenya',
                'start_month_year' => 'January 2020',
                'end_month_year' => 'March 2020'
            ]
        ];

        $sampleCompetencies = [
            [
                'title' => 'JavaScript',
                'subtitle' => 'Programming Language',
                'rating' => 4.5
            ],
            [
                'title' => 'Project Management',
                'subtitle' => 'Management Skill',
                'rating' => 4.0
            ],
            [
                'title' => 'Graphic Design',
                'subtitle' => 'Creative Skill',
                'rating' => 3.8
            ]
        ];

        return view('persona.myprofile', compact('genders', 'religions', 'marital_statuses', 'educations', 'sampleEducations', 'workExperiences', 'sampleWorkExperiences', 'sampleJourneys', 'sampleCompetencies'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'nick_name' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,not-stated',
            'religion' => 'required|string|in:catholic,christian,not-stated,budhist,hindu,other',
            'marital_status' => 'required|string|in:single,married,divorced,widowed,not stated',
        ]);

        if (Auth::check()) {
            $user = Auth::user();
            $user->update($request->all());
        }

        return redirect()->route('persona.myprofile')->with('success', 'Profile updated successfully.');
    }
}
