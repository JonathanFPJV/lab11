<div class="bg-white block mt-6 p-6 border-gray-300 hover:border-indigo-300 hover:ring hover:ring-indigo-200 hover:ring-opacity-50 rounded-md shadow-sm">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" viewBox="0 0 24 24" xml:space="preserve">
                <path d="M12 20H0v-3.5c0-2.4 1.3-4.5 3.2-5.6C2.5 10.2 2 9.2 2 8.1c0-2.2 1.8-4 4-4s4 1.8 4 4c0 1.1-.4 2.1-1.2 2.8 1.9 1.1 3.2 3.3 3.2 5.6V20zM2 18h8v-1.5c0-2.4-1.8-4.5-4-4.5-2.1 0-4 2.1-4 4.5V18zM6 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm18 11H14v-2h10v2zm-3-4h-7v-2h7v2zm3-4H14V7h10v2z"/>
            </svg>
        </div>
        <div class="flex-1 min-w-0 ms-4">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                {{ $contact->first_name }} {{ $contact->last_name }}
            </p>
            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                {{ $contact->email }}
            </p>
        </div>
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600 -scale-x-100" viewBox="0 0 100 100" xml:space="preserve">
                <path d="M72 23.199A6.2 6.2 0 0 0 65.8 17H35.2a6.2 6.2 0 0 0-6.2 6.199v55.602A6.2 6.2 0 0 0 35.2 85h30.6a6.2 6.2 0 0 0 6.2-6.199V23.199zm-4 55.602A2.2 2.2 0 0 1 65.8 81H35.2a2.2 2.2 0 0 1-2.2-2.199V23.199A2.2 2.2 0 0 1 35.2 21h30.6a2.2 2.2 0 0 1 2.2 2.199v55.602z"/>
                <path d="M65 26a2 2 0 0 0-2-2H38a2 2 0 0 0-2 2v42a2 2 0 0 0 2 2h25a2 2 0 0 0 2-2V26zm-25 2h21v38H40V28z"/>
                <circle cx="50.341" cy="75.003" r="3.455"/>
            </svg>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            {{ $contact->phone }}
        </div>
    </div>
</div>
