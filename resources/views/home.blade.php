<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-lg font-semibold mb-4">Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                    <p class="mb-4">
                        Last login:
                        {{ Auth::user()->last_login_at ? Auth::user()->last_login_at->format('Y-m-d H:i:s') : 'This is your first login' }}
                    </p>

                    <hr class="my-6">

                    <h4 class="text-md font-semibold mb-2">All Users</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">Full Name</th>
                                    <th class="border border-gray-300 px-4 py-2">Username</th>
                                    <th class="border border-gray-300 px-4 py-2">Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $user->username }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i:s') : 'Never logged in' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
