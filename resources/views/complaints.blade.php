<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto">
  <div class="max-w-xl p-5 mx-auto my-10 bg-[#e0f2fe] rounded-md shadow-sm">
    <div class="text-center">
      <h1 class="my-3 text-3xl font-semibold text-gray-700">Complaint Form</h1>
      <p class="text-gray-400 mb-6">Fill up the form below with accurate information and we will get back to you as soon as possible.</p>
    </div>

    @if (count($errors) > 0)
   <div class = "bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
    </div>
  </div>
@endif

@if(session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {!! session('status') !!}
                </div>
            @endif

    <div>
      <form action="/dashboard/complaints" method="POST">
        @csrf

        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm text-gray-600"
            >Full Name</label
          >
          <input
            type="text"
            name="name"
            placeholder="John Doe"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm text-gray-600"
            >Email Address</label
          >
          <input
            type="email"
            name="email"
            placeholder="you@email.com"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>
        <div class="mb-6">
          <label for="phone" class="text-sm text-gray-600">Phone Number</label>
          <input
            type="number"
            name="phone"
            placeholder="91 1234-567"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>

        <div class="mb-6">
          <label for="hometown" class="block mb-2 text-sm text-gray-600"
            >Hometown</label
          >
          <input
            type="text"
            name="hometown"
            placeholder="City"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>

        <div class="mb-6">
          <label for="nid" class="block mb-2 text-sm text-gray-600"
            >NID Number</label
          >
          <input
            type="text"
            name="nid"
            placeholder="Enter NID number"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>

        <div class="mb-6">
          <label for="location" class="block mb-2 text-sm text-gray-600"
            >Location</label
          >
          <input
            type="text"
            name="location"
            placeholder="State the location of the incident"
            required
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
          />
        </div>

        <div class="mb-6">
          <label for="message" class="block mb-2 text-sm text-gray-600"
            >Your Complaint</label
          >

          <textarea
            rows="5"
            name="message"
            placeholder="Please describe your problem(s)"
            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
            required
          ></textarea>
        </div>

        <div class="mb-6">
          <button
            type="submit"
            class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md  focus:bg-indigo-600 focus:outline-none"
          >
            Submit
          </button>
        </div>
      </form>

</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
</x-app-layout>
