<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="px-4 sm:px-6 lg:px-8 container max-5xl mx-auto">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button type="button" class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                        <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">NIM</th>
                        <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">IPK</th>

                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse( $mahasiswas as $mhs )
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $mhs->nama }}</td>
                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $mhs->nim }}</td>
                        <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $mhs->ipk }}</td>

                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5">No data</td>
                        </tr>
                    @endforelse

                    <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

