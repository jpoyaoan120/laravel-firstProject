@include('partials.header')
  <x-nav_bar/>
{{-- {{ auth()->user()->name }} --}}

  <x-messages/>
  <header class="max-w-lg mx-auto mt-20">
    <a href="">
        <h1  class="text-4xl font-bold text-center">Student List</h1>
    </a>
  </header>

  <section class="mt-10">
    <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-800 uppercase bg-gray-50">
            <tr>
              <th scope="col" class="py-3 px-6">first name</th>
              <th scope="col" class="py-3 px-6">last name</th>
              <th scope="col" class="py-3 px-6">email</th>
              <th scope="col" class="py-3 px-6">age</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data)
              <tr class="bg-white border-b">
                <td class="py-4 px-6">{{ $data->first_name }}</td>
                <td class="py-4 px-6">{{ $data->last_name }}</td>
                <td class="py-4 px-6">{{ $data->email }}</td>
                <td class="py-4 px-6">{{ $data->age }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@include('partials.footer')