<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="navbar bg-base-100 mb-3">
        <a  class="btn btn-ghost text-xl">Daily Routine</a>
    </div>
    {{-- button --}}
    <a href="/add" class="btn btn-outline mb-[5rem]">Default</a>
    {{-- end --}}
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                </tr>
            </thead>
            <tbody >
                <!-- row 1 -->
                @foreach ($routine as $item => $s)


                <tr class="bg-base-200">
                    <th>{{ $item+1}}</th>
                    <td>{{ $s->routine }}</td>
                    <td>{{ $s->place }}</td>
                    <td>{{ $s->date }}</td>
                    <td>
                      <a href="/{{ $s->id }}/edit" class="btn btn-outline mb-[5rem]">Default</a>
                      <form action="/update/{{ $s->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-outline mb-[5rem]">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

































    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
