<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">articles</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                  <a href="{{ route('article.show',$article->id) }}">
                    <p class="text-left text-gray-800 dark:text-gray-200">{{$article->user->name}}</p>
                    <h3 class="text-left font-bold text-lg text-gray-800 dark:text-gray-200">{{$article->article}}</h3>
                  </a>
                  <div class="flex">
                    <!-- 🔽 追加 -->
                    <!-- favorite 状態で条件分岐 -->
                    @if($article->users()->where('user_id', Auth::id())->exists())
                    <!-- unfavorite ボタン -->
                    <form action="{{ route('unfavorites',$article) }}" method="POST" class="text-left">
                      @csrf
                      <x-primary-button class="ml-3">
                        <svg class="h-6 w-6 text-red-500" fill="red" viewBox="0 0 24 24" stroke="red">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        {{ $article->users()->count() }}
                      </x-primary-button>
                    </form>
                    @else
                    <!-- favorite ボタン -->
                    <form action="{{ route('favorites',$article) }}" method="POST" class="text-left">
                      @csrf
                      <x-primary-button class="ml-3">
                        <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        {{ $article->users()->count() }}
                      </x-primary-button>
                    </form>
                    @endif


                    <!-- 更新ボタン -->
                    <!-- 編集ボタン -->
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

