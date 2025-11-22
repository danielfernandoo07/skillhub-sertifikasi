<!DOCTYPE html>
<html>
<head>
    <title>SkillHub</title>
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100">

    <nav class="bg-white shadow mb-6 p-4">
        <div class="max-w-6xl mx-auto flex justify-between">
            <a href="/" class="font-bold text-lg">SkillHub</a>

            <div class="space-x-4">
                <a href="{{ route('participants.index') }}" class="text-blue-600">Participants</a>
                <a href="{{ route('courses.index') }}" class="text-blue-600">Courses</a>
                <a href="{{ route('enrollments.create') }}" class="text-blue-600">Enroll</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>
