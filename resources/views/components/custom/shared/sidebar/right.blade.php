@props(['regionalBranches'])

<div class="md:col-span-1 flex flex-col space-y-3">
    <div class="flex flex-col space-y-3">
        {{-- jadwal prsi --}}
        <x-time-table-component />
        {{-- jadwal prsi --}}
        {{-- cabang PRSI --}}
        <x-custom.regional-section :regionalBranches="$regionalBranches" />
        {{-- cabang PRSI --}}
    </div>
</div>
