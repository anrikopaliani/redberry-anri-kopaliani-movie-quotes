<x-dashboard-layout>
    <div class="bg-white text-black  mt-20 w-full mb-20">

        <div class="overflow-x-auto max-h-screen border-x border-t">
            <table class="table-auto w-full">
                <thead class="border-b">
                    <tr class="bg-gray-100">
                        <th class="text-left p-4 font-medium">
                            Movies
                            <a href="{{ route('movie.get') }}"
                                class="bg-black text-white p-1 border">{{ __('messages.add') }}</a>
                        </th>
                        <th class="text-left p-4 font-medium">
                            Quotes
                            <a href="{{ route('add-quote.get') }}"
                                class="bg-black text-white p-1 border">{{ __('messages.add') }}</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                <div class="flex flex-col">
                                    <p class="w-72 break-words">
                                        {{ $movie->getTranslation('title', app()->getLocale()) }}
                                    </p>
                                    <div class="flex space-x-1">
                                        <a href="{{ route('movie.edit', ['movie' => $movie->id]) }}"
                                            class="bg-black text-white p-1">{{ __('messages.edit') }}</a>
                                        <form method="POST"
                                            action="{{ route('movie.delete', ['movie' => $movie->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-black text-white p-1">{{ __('messages.Delete') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 w-96">
                                @foreach ($quotes as $quote)
                                    @if ($quote->movie_id == $movie->id)
                                        <div class="mt-4 flex flex-col">
                                            <p class="w-72 break-words">
                                                {{ $quote->getTranslation('quote', app()->getLocale()) }}
                                            </p>
                                            <div class="flex space-x-1">
                                                <a href="{{ route('quote.edit', ['quote' => $quote->id]) }}"
                                                    class="bg-black text-white p-1">{{ __('messages.edit') }}</a>
                                                <form action="{{ route('quote.delete', ['quote' => $quote->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="bg-black text-white p-1">{{ __('messages.Delete') }}</button>
                                                </form>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>
