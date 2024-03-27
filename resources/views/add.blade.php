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
    <div class="flex justify-center m-[10rem]">
        <div class="max-w-xl w-full">
            <form action="/store" method="POST">
            @csrf
            <label class="input input-bordered flex items-center gap-2 m-[1rem]">
                Routine
                <input type="text" class="grow" placeholder="Daisy" name="routine"/>
              </label>
              <label class="input input-bordered flex items-center gap-2 m-[1rem]">
                Place
                <input type="text" class="grow" placeholder="Daisy" name="place"/>
              </label>
              <label class="input input-bordered flex items-center gap-2 m-[1rem]">
                date
                <input type="date" class="grow" placeholder="Daisy" name="date"/>
              </label>
              <button class="btn btn-outline btn-secondary">Submit</button>
            </form>
        </div>
    </div>























    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>