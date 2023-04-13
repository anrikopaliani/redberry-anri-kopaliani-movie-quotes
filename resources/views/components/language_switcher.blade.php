<div class="absolute left-5 flex flex-col space-y-4">
    @if (app()->getLocale() == 'en')
    @endif
    <div
        class="{{ app()->getLocale() == 'en' ? 'w-8 h-8 border border-solid border-white rounded-full flex items-center justify-center bg-white text-black' : 'w-8 h-8 border border-solid border-white rounded-full flex items-center justify-center' }}">
        <a href="/language/en">en</a>
    </div>
    <div
        class="{{ app()->getLocale() == 'ka' ? 'w-8 h-8 border border-solid border-white rounded-full flex items-center justify-center bg-white text-black' : 'w-8 h-8 border border-solid border-white rounded-full flex items-center justify-center' }}">
        <a href="/language/ka">ka</a>
    </div>
</div>
