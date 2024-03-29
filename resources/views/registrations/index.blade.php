<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrations') }}
        </h2>
    </x-slot>
    <!-- component -->
    <div class="flex min-h-screen max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm w-full">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th class="p-3 pl-6 text-left">Registrant</th>
                            <th class="p-3 text-left">Event</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12 object-cover shrink-0"
                                        src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
                                        alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Sumin Shrestha</div>
                                        <div class="text-gray-500">Pragya Higher Secondary School</div>
                                    </div>
                                </div>
                            </td>

                            <td class="p-3 font-bold">
                                200.00$
                            </td>
                            <td class="p-3">
                                <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                            </td>
                            <td class="p-3 text-center">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="fa-solid fa-eye text-base"></i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="fa-solid fa-edit text-base"></i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="fa-solid fa-trash text-base"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+4),
        tr th:nth-child(n+4) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
</x-app-layout>
