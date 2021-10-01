<div>

    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="justify-center w-full bg-yellow-400 rounded my-2">Prekės</button>

<div x-show="open" x-transition class="overflow-auto">
    <table class="whitespace-no-wrap bg-white w-full ">
        <thead>
        <tr class="text-center font-bold text-xs">
            <td class="border lg:px-6 lg:py-4 sm:px-2 sm:py-10">Foto
               </td>
            <td class="border px-6 py-4">Pavadinimas</td>
            <td class="border px-6 py-4">Matavimo vnt.</td>
            <td class="border px-6 py-4">Kategorija</td>
            <td class="border px-6 py-4">Modelis</td>
            <td class="border px-6 py-4">Kaina</td>
            <td class="border px-6 py-4">Akcija</td>
            <td class="border px-6 py-4">Kaina su akcija</td>
            <td class="border px-6 py-4">Akcijos pabaiga</td>
            <td class="border px-6 py-4">Veiksmai</td>
        </tr>
        </thead>
        @foreach($prods as $prod)
            <tr>
                <td class="border">
                    <img alt="nuotrauka" class="object-cover object-center w-32 h-32 block object-cover" src="{{asset('storage/products/'.$prod->photo)}}">

                </td>
                <td class="border px-6 py-4">{{$prod->name}}</td>
                <td class="border px-6 py-4">{{$prod->unit_of_measurement}}</td>
                <td class="border px-6 py-4">{{$prod->category}}</td>
                <td class="border px-6 py-4">{{$prod->model}}</td>
                <td class="border px-6 py-4">{{$prod->price}}</td>
                <td class="border px-6 py-4">{{$prod->discount_status}}</td>
                <td class="border px-6 py-4">{{$prod->discount_price}}</td>
                <td class="border px-6 py-4">{{$prod->discount_end}}</td>
                <td class="border px-6 py-4">
                    <button class="bg-green-400 rounded px-2" onclick="edit()" wire:click = "setId({{$prod->id}})">Redaguoti</button>
                    <button class="bg-red-400 rounded px-2" wire:click.prevent="delete({{$prod->id}})" >Trinti</button>
                </td>

            </tr>
        @endforeach
    </table>
        </div>
    </div>
</div>
</div>
