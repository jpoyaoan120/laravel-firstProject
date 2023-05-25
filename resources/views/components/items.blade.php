<ul class="flex flex-col md:flex-row">
    <li>
        <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
    </li>
    <li>
        <a href="/registration" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Logout</button>
        </form>
    </li>
</ul>