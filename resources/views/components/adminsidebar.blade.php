<ul class="space-y-4 p-4">
    <li>
        <a href="{{ route('admin.dashboard') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.dashboard') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-tachometer-alt text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            Dashboard
        </a>
    </li>
    <li>
        <a href="{{ route('admin.users') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.users') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-users text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            Gebruikers
        </a>
    </li>
    <li>
        <a href="{{ route('admin.posts') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.posts') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-envelope text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            Berichten
        </a>
    </li>
    <li>
        <a href="{{ route('admin.predicates') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.predicates') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-tags text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            Predicaten
        </a>
    </li>
    <li>
        <a href="{{ route('admin.events') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.events') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-calendar-alt text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            Workshops / Evenementen
        </a>
    </li>
    <li>
        <a href="{{ route('admin.faq') }}" class="group flex gap-x-3 rounded-md p-2 text-lg font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600 {{ Route::is('admin.faq') ? 'text-indigo-600' : 'text-gray-700' }}">
            <i class="fas fa-question-circle text-xl shrink-0 text-gray-400 group-hover:text-indigo-600"></i>
            FAQ
        </a>
    </li>
</ul>
