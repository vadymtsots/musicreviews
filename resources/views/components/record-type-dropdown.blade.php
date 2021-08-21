<div>
    <x-dropdown>

        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                {{ isset($currentRecordType) ? $currentRecordType->name : 'Types' }}
            </button>
        </x-slot>

        @foreach($recordTypes as $recordType)
            <a href="/reviews?recordType={{ $recordType->name }}" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
                    {{isset($currentRecordType) && $currentRecordType->id === $recordType->id ? 'bg-blue-500 text-white' : ''}}">
                {{$recordType->name}}</a>
        @endforeach

    </x-dropdown>
</div>
