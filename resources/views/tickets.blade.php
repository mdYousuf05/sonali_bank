<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-auto p-6 bg-white border-b border-gray-200">
                    <h1>Complaints from Native Tourists</h1>

                    <table class="border-solid">
                        <tr>
                            <td class="border px-8 py-4">Name</td>
                            <td class="border px-8 py-4">Email</td>
                            <td class="border px-8 py-4">Phone</td>
                            <td class="border px-8 py-4">Hometown</td>
                            <td class="border px-8 py-4">NID</td>
                            <td class="border px-8 py-4">Location</td>
                            <td class="border px-8 py-4">Complaint</td>
                            <td class="border px-8 py-4">Assign To</td>
                        </tr>
                        @foreach ($nativecomplaints as $nativecomplaint)
                            <tr>
                                <td class="border px-8 py-4">{{ $nativecomplaint['name'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['email'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['phone'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['hometown'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['nid'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['location'] }}</td>
                                <td class="border px-8 py-4">{{ $nativecomplaint['message'] }}</td>
                                <td class="border px-8 py-4"><select name="agent-names" id="agent-names">
    <option value="rigatoni">Field Agent 1</option>
  <option value="dave">Field Agent 2</option>
  <option value="pumpernickel">Field Agent 3</option>
</select></td>
                            </tr>
                            @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
