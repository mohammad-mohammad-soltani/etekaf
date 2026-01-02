<tr  class="{{$user -> logged_in ? 'bg-green-800' : ''}} border-b dark:border-white/10 border-black/10" wire:click="open_user" >
    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap bg-neutral-secondary-soft">
        {{$user -> name}}
    </th>
    <td class="px-6 py-4">
        {{$user -> birth_year}}
    </td>
    <td class=" py-4">
        {{$user -> national_code}}
    </td>
    <td class="px-2 py-4">
        {{\App\Services\Dictionary::location($user -> location)}}
    </td>
    <td class="px-2 py-4 flex justify-center "   >
        <div class="{{$user -> logged_in ? 'hidden' : ''}}" >
            <flux:button variant="primary" color="emerald" wire:click="user_logged_in"  >ثبت ورود</flux:button>
        </div>
    </td>

</tr>
