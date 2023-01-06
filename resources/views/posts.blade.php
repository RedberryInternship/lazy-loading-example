<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="grid w-full p-6 items-start  gap-6 grid-cols-2">
        @foreach ($posts as $post)
            <div class="w-full px-2 drop-shadow-md bg-white rounded-md">
                <h1 class="text-xl text-center">{{ $post->title }}</h1>
                <p class="px-5 text-sm mt-2 text-gray-500">{{ $post->text }}</p>
                <div class="w-full py-3 flex justify-end items-center">
                    <span class="text-xs text-gray-600">written by: {{ $post->user->name }}</span>
                </div>
                <details>
                    <summary>
                        <span class="text-xs text-gray-600">comments ({{ count($post->comments) }})</span>
                    </summary>

                    <div class="flex flex-col space-y-2">
                        @foreach ($post->comments as $comment)
                            <div class="w-full flex flex-col bg-gray-100 rounded-md">
                                <span>{{ $comment->body }}</span>
                                <span>written by: {{ $comment->user->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </details>
            </div>
        @endforeach
    </div>
</body>

</html>
