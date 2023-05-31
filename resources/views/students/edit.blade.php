@include('partials.header', [$title])
<x-nav_bar/> 
<div class="flex min-h-full flex-col justify-center px-6 py-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Edit : {{$student->first_name}} {{$student->last_name}} </h2>
    </div>
  
    <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/student/{{$student->id}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name {{$student->id}}</label>
            <div class="">
                <input id="first_name" name="first_name" type="text" value="{{$student->first_name}}" autocomplete="first_name" required class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
            <div class="">
                <input id="last_name" name="last_name" type="text" value="{{$student->last_name}}" autocomplete="last_name" required class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
            <select name="gender" class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" {{$student->gender == "" ? 'Selected' : ''}}></option>
                <option value="Male" {{$student->gender == "Male" ? 'Selected' : ''}}>Male</option>
                <option value="Female" {{$student->gender == "Female" ? 'Selected' : ''}}>Female</option>
            </select>
        </div>
        <div>
            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
            <div class="">
                <input id="age" name="age" type="text" value="{{$student->age}}" autocomplete="age" required class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="">
                <input id="email" name="email" type="email" value="{{$student->email}}" autocomplete="email" required class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
      </form>
    </div>
  </div>
@include('partials.footer')