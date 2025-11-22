<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SkillHub Dashboard</title>
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100">

    <div class="max-w-4xl mx-auto mt-16 bg-white shadow p-8 rounded">
        <h1 class="text-3xl font-bold mb-6">SkillHub Management System</h1>

        <div class="space-y-4">
            <a href="{{ route('participants.index') }}" 
               class="block p-4 bg-blue-500 text-white rounded hover:bg-blue-600">
                Manajemen Peserta
            </a>

            <a href="{{ route('courses.index') }}" 
               class="block p-4 bg-green-500 text-white rounded hover:bg-green-600">
                Manajemen Kelas
            </a>

            <a href="{{ route('enrollments.create') }}" 
               class="block p-4 bg-purple-500 text-white rounded hover:bg-purple-600">
                Pendaftaran Peserta ke Kelas
            </a>
        </div>
    </div>

</body>
</html>
