<x-app-layout>
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">ログイン</h1>

        @if ($errors->any())
            <div class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block mb-2">メールアドレス</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    class="w-full border rounded px-3 py-2" required autofocus>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2">パスワード</label>
                <input id="password" type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                ログイン
            </button>
        </form>
        <p class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-blue-500">新規登録はこちら</a>
        </p>
    </div>
</x-app-layout>