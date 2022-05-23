<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-auto p-6 bg-white border-b border-gray-200">
                    
                    <h1>Complaints from Foreign Tourists</h1>
                    <table class="border-solid">
                        <tr>
                            <td class="border px-8 py-4">Name</td>
                            <td class="border px-8 py-4">Email</td>
                            <td class="border px-8 py-4">Phone</td>
                            <td class="border px-8 py-4">Nationality</td>
                            <td class="border px-8 py-4">Hometown</td>
                            <td class="border px-8 py-4">Passport Number</td>
                            <td class="border px-8 py-4">Visa Number</td>
                            <td class="border px-8 py-4">Visa Type</td>
                            <td class="border px-8 py-4">Visa Expiry Date</td>
                            <td class="border px-8 py-4">Date of Entry</td>
                            <td class="border px-8 py-4">Location</td>
                            <td class="border px-8 py-4">Complaint</td>
                            <td class="border px-8 py-4">Assign To</td>
                        </tr>
                        @foreach ($foreigncomplaints as $foreigncomplaint)
                            <tr>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['name'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['email'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['phone'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['nationality'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['hometown'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['passport'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['visanum'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['visatype'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['visaexp'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['dateofentry'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['location'] }}</td>
                                <td class="border px-8 py-4">{{ $foreigncomplaint['message'] }}</td>
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
