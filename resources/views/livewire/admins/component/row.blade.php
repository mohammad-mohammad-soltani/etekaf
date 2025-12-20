<tr class="border-b dark:border-white/10 border-black/10" wire:click="open_user" >
    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap bg-neutral-secondary-soft">
        {{$user -> name}}
    </th>
    <td class="px-6 py-4">
        {{$user -> birth_year}}
    </td>
    <td class=" py-4">
        {{$user -> national_code}}
    </td>
    <td class=" py-4">
        0{{$user -> phone_number}}
    </td>
    <td class=" py-4">
        0{{$user -> parent_phone_number}}
    </td>
    <td class="px-2 py-4">
        {{$user -> province == 'isfahan' ? 'اصفهان' : 'دیگر استان ها'}}
    </td>
    <td class="px-2 py-4">
        {{$user -> school}}
    </td>
    <td class="px-2 py-4">
        {{\App\Services\Dictionary::location($user -> location)}}
    </td>
    <td class="px-2 py-4">
        {{\App\Services\Dictionary::industry($user -> industry)}}
    </td>
    <td class="px-2 py-4">
        {{\App\Services\Dictionary::job($user -> job)}}
    </td>
    <td class="px-2 py-4 flex justify-center"  >
        @if($user -> payment_status == 'approved')
            <div class="pt-1 pb-1 pl-3 pr-3 bg-green-700 text-center w-fit rounded-full  " >
                <span>انجام شده</span>
            </div>
        @else
            <div class="pt-1 pb-1 pl-3 pr-3 bg-orange-400 text-black text-center w-fit rounded-full  " >
                <span>در حالت انتظار</span>
            </div>
        @endif
    </td>

</tr>
