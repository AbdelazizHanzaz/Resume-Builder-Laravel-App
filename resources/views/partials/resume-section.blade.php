<div class="mb-8">
    <h2 class="text-lg font-bold mb-2">{{ $title }}</h2>
    @if ($section === 'personal')
        @include('partials.resume-field', ['label' => 'Name', 'name' => 'name', 'type' => 'text', 'value' => $resume->name ?? null])
        @include('partials.resume-field', ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'value' => $resume->email ?? null])
        @include('partials.resume-field', ['label' => 'Phone', 'name' => 'phone', 'type' => 'text', 'value' => $resume->phone ?? null])
        @include('partials.resume-field', ['label' => 'Summary', 'name' => 'summary', 'type' => 'textarea', 'value' => $resume->summary ?? null])
    @elseif ($section === 'education')
        @if (isset($resume->education) && is_array($resume->education))
            @foreach ($resume->education as $index => $education)
                <div class="mb-4">
                    <h3 class="text-lg font-bold mb-2">Education {{ $index + 1 }}</h3>
                    @include('partials.resume-field', ['label' => 'Institution', 'name' => "education[{$index}][institution]", 'type' => 'text', 'value' => $education['institution'] ?? null])
                    @include('partials.resume-field', ['label' => 'Degree', 'name' => "education[{$index}][degree]", 'type' => 'text', 'value' => $education['degree'] ?? null])
                    @include('partials.resume-field', ['label' => 'Start Date', 'name' => "education[{$index}][start_date]", 'type' => 'date', 'value' => $education['start_date'] ?? null])
                    @include('partials.resume-field', ['label' => 'End Date', 'name' => "education[{$index}][end_date]", 'type' => 'date', 'value' => $education['end_date'] ?? null])
                </div>
            @endforeach
        @else
            <p>No education information available.</p>
        @endif
        <div class="mb-4">
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="addEducation()">Add Education</button>
        </div>
    @elseif ($section === 'experience')
        @if (isset($resume->experience) && is_array($resume->experience))
            @foreach ($resume->experience as $index => $experience)
                <div class="mb-4">
                    <h3 class="text-lg font-bold mb-2">Experience {{ $index + 1 }}</h3>
                    @include('partials.resume-field', ['label' => 'Company', 'name' => "experience[{$index}][company]", 'type' => 'text', 'value' => $experience['company'] ?? null])
                    @include('partials.resume-field', ['label' => 'Position', 'name' => "experience[{$index}][position]", 'type' => 'text', 'value' => $experience['position'] ?? null])
                    @include('partials.resume-field', ['label' => 'Start Date', 'name' => "experience[{$index}][start_date]", 'type' => 'date', 'value' => $experience['start_date'] ?? null])
                    @include('partials.resume-field', ['label' => 'End Date', 'name' => "experience[{$index}][end_date]", 'type' => 'date', 'value' => $experience['end_date'] ?? null])
                </div>
            @endforeach
        @else
            <p>No experience information available.</p>
        @endif
        <div class="mb-4">
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="addExperience()">Add Experience</button>
        </div>
    @elseif ($section === 'skills')
        @if (isset($resume->skills) && is_array($resume->skills))
            <ul>
                @foreach ($resume->skills as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        @else
            <p>No skills information available.</p>
        @endif
        <div class="mb-4">
            @include('partials.resume-field', ['label' => 'Skill', 'name' => 'skills[]', 'type' => 'text', 'value' => null])
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="addSkill()">Add Skill</button>
        </div>
    @endif
</div>

