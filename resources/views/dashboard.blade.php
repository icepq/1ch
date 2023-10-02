<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('運営よりお知らせ') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">題名</p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="article">
                                {{ ('-----超重要-----') }}
                            </p>
                        </div>
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200"></p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="comment">
                                {{ ('IndexのArticle(Tweet)で、') }}<br>
                                {{ ('詳細画面でのコメントの表示が出来ませんでした。') }}<br>
                                {{ ('エラーは出てないです。') }}<br><br>
                                {{ ('あと、本来は詳細表示の中にみんなのコメントを') }}<br>
                                {{ ('かけるようにしたかった') }}<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">題名</p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="article">
                                {{ ('--使い方講座--') }}
                            </p>
                        </div>
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200"></p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="comment">
                                {{ ('時間的にムリでした!!') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">題名</p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="article">
                                {{ ('本来であれば') }}
                            </p>
                        </div>
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200"></p>
                            <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="comment">
                                {{ ('ここは運営からのお知らせや、') }}<br>
                                {{ ('その他のお知らせをかければいいなって') }}<br>
                                {{ ('思ってた') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
