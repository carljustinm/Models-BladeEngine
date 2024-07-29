<!-- resources/views/books/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.header')

    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Book List</h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">ISBN</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->id }}</td>
                        <td class="border px-4 py-2">{{ $book->isbn }}</td>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->description }}</td>
                        <td class="border px-4 py-2">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('partials.footer')
</body>
</html>
