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
      <h1 class="my-3 text-3xl font-semibold text-gray-700">Feedback Form</h1>
      <p class="text-gray-400 mb-6">Please let us know about any problems you've faced.</p>
    </div>
    
        @if(session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {!! session('status') !!}
                </div>
            @endif

    <div>
      <form action="/dashboard/ftfeedback" method="POST">
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
          <label for="feedback" class="block mb-2 text-sm text-gray-600"
            >Feedback</label
          >

          <textarea
            rows="5"
            name="feedback"
            placeholder="Write your message here"
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
