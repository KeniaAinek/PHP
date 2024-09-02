<x-layout>
    <x-slot:heading>
       Edit Job: {{$job->title}}
    </x-slot:heading>
    
<form method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Update this Job</h2>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Shift Leader" required>
              </div>

              @error('title')
                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
              @enderror
            </div>
          </div>
       
    </div>
    <div class="sm:col-span-4 mt-4">
        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000.00 per year">
          </div>
          @error('salary')
                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
              @enderror
        </div>
    </div>
  
    <div class="flex items-center justify-between gap-x-6">
      <div class="mt-6 items-center ">
        <button type="button" form="delete" class="text-md font-semibold leading-6 text-red-500">Delete</button>
      </div>
      <div class="mt-6 items-center">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900 pr-3">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </div>
  </form>

  <form action="/jobs/{{$job->id}}" method="POST" id="delete" class="hidden">
    @csrf
    @method('DELETE')
  </form>
    
    
</x-layout>