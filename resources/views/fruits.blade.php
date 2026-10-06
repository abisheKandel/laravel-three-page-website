<x-layout>
    <x-slot:heading>
        Mini Challenge: PHP Array Operations & Vowel Filter
    </x-slot:heading>

    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-bold text-gray-900 mb-2">Sorted Fruits Array</h2>
            <p class="text-sm text-gray-500 mb-3">Tested with <code>array_push('pear')</code>, <code>array_shift()</code>, and <code>sort()</code>:</p>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
                @foreach ($allFruits as $fruit)
                    <li class="capitalize">{{ $fruit }}</li>
                @endforeach
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-bold text-gray-900 mb-2">Fruits Starting with a Vowel (A, E, I, O, U)</h2>
            <p class="text-sm text-gray-500 mb-3">Filtered with <code>in_array(strtolower(substr($fruit, 0, 1)), ['a','e','i','o','u'])</code>:</p>
            <ul class="list-disc list-inside space-y-1 text-indigo-600 font-medium">
                @foreach ($vowelFruits as $fruit)
                    <li class="capitalize">{{ $fruit }}</li>
                @endforeach
            </ul>
            <p class="mt-3 text-sm text-gray-600">Total matched: {{ count($vowelFruits) }}</p>
        </div>
    </div>
</x-layout>
