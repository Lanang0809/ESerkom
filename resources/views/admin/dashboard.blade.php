@extends('layout.dashbdoard')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Total Users -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2">Total Users</h2>
            <p class="text-3xl font-bold text-gray-800">120</p>
        </div>

        <!-- Card 2: Total Registrations -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2">Total Registrations</h2>
            <p class="text-3xl font-bold text-gray-800">50</p>
        </div>

        <!-- Card 3: Total Sessions -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2">Total Sessions</h2>
            <p class="text-3xl font-bold text-gray-800">30</p>
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-bold mb-4">Recent Registrations</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Name</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Email</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Phone</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Date Registered</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                    <td class="py-2 px-4 border-b border-gray-200">johndoe@example.com</td>
                    <td class="py-2 px-4 border-b border-gray-200">123-456-7890</td>
                    <td class="py-2 px-4 border-b border-gray-200">2024-08-25</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline ml-4">Delete</a>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>
@endsection
