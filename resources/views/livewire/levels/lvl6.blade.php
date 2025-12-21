<div class="flex flex-col justify-center items-center gap-2 mt-2" >
    <div class="w-full" >

        <div class="overflow-auto h-full flex lg:justify-center gap-2 py-3 mask-l-from-70% " >
            <flux:badge color="zinc">مکان های تکمیل ظرفیت شده</flux:badge>
            <flux:badge color="green">مکان های قابل انتخاب</flux:badge>
            <flux:badge color="blue">مکان های غیر قابل اسکان</flux:badge>
            <div class="pl-6 pr-6 p-1" >

            </div>
        </div>
    </div>
    <div class="w-full h-full flex justify-center" >
        <div class="map grid grid-rows-[9fr_12.5fr_12.5fr_12.5fr_2.5fr_2fr] grid-cols-[1.45fr_1fr_1.45fr] gap-1 p-1 aspect-[49/52] w-[90%] md:w-[80%] lg:w-[90%] xl:w-[70%] 2xl:w-[60%] text-white" data-theme="light" >

            <input {{\App\Services\Capacity::have_capacity('haniyeh') > 0 ? '' : 'disabled'}} wire:model="location" type="radio" value="haniyeh" name="select_map" id="esmail" class="hidden peer/esmail" style="display: none !important;">
            <label for="esmail" class="{{\App\Services\Capacity::have_capacity('haniyeh') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold ' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} w-full duration-200 peer-checked/esmail:bg-green-500 peer-checked/esmail:text-black dark:text-white col-start-1 row-start-1 row-end-2">
                <span>محور شهید اسماعیل هنیه</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('safieddine') > 0 ? '' : 'disabled'}} wire:model="location" type="radio" value="safieddine" name="select_map" id="hashem" class="hidden peer/hashem" style="display: none !important;">
            <label for="hashem" class="{{\App\Services\Capacity::have_capacity('safieddine') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} dark:text-white w-full duration-200 peer-checked/hashem:bg-green-500 peer-checked/hashem:text-black col-start-2 row-start-1 row-end-2">
                <span>محور شهید هاشم صفی الدین</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('mughniyeh') > 0 ? '' : 'disabled'}} wire:model="location" value="mughniyeh" type="radio" name="select_map" id="emad" class="hidden peer/emad" style="display: none !important;">
            <label for="emad" class="{{\App\Services\Capacity::have_capacity('mughniyeh') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/emad:bg-green-500 duration-200 peer-checked/emad:text-black dark:text-white col-start-3 row-start-1 row-end-2">
                <span>محور شهید عماد مغنیه</span>
            </label>

            <div class="dark:bg-blue-300/50 bg-blue-300/70 col-start-3 row-start-2 row-end-5 text-black dark:text-white" >
                <span>محفل ذکر و شکر</span>
            </div>

            <input {{\App\Services\Capacity::have_capacity('deif') > 0 ? '' : 'disabled'}} wire:model="location" value="deif" type="radio" name="select_map" id="alzeif" class="hidden peer/alzeif" style="display: none !important;">
            <label for="alzeif" class="{{\App\Services\Capacity::have_capacity('deif') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/alzeif:bg-green-500 duration-200 peer-checked/alzeif:text-black dark:text-white col-start-1 row-start-2 row-end-3">
                <span>محور شهید محمد الضیف</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('sinwar') > 0 ? '' : 'disabled'}} wire:model="location" value="sinwar" type="radio" name="select_map" id="sinwar" class="hidden peer/sinwar" style="display: none !important;">
            <label for="sinwar" class="{{\App\Services\Capacity::have_capacity('sinwar') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/sinwar:bg-green-500 duration-200 peer-checked/sinwar:text-black dark:text-white col-start-1 row-start-3 row-end-4">
                <span>محور شهید یحیی السنوار</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('yamen') > 0 ? '' : 'disabled'}} wire:model="location" value="yamen" type="radio" name="select_map" id="yamen" class="hidden peer/yamen" style="display: none !important;">
            <label for="yamen" class="{{\App\Services\Capacity::have_capacity('yamen') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/yamen:bg-green-500 duration-200 peer-checked/yamen:text-black dark:text-white col-start-1 row-start-4 row-end-5">
                <span>محور شهید عبدالکریم الغماری</span>
            </label>

            <div class="dark:bg-blue-300/50 bg-blue-300/70 col-start-3 row-start-5 row-end-7 text-black dark:text-white" >
                <span>ذخیره محفل ذکر و شکر</span>
            </div>

            <input {{\App\Services\Capacity::have_capacity('kuntar') > 0 ? '' : 'disabled'}} value="kuntar" wire:model="location" type="radio" name="select_map" id="ghantar" class="hidden peer/ghantar" style="display: none !important;">
            <label for="ghantar" class="{{\App\Services\Capacity::have_capacity('kuntar') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/ghantar:bg-green-500 duration-200 peer-checked/ghantar:text-black dark:text-white col-start-1 row-start-5 row-end-7">
                <span>محور شهید سمیر قنطار</span>
            </label>

            <div class="dark:bg-blue-300/50 bg-blue-300/70 col-start-2 row-start-6 row-end-7  text-black dark:text-white" >
                <span>درب ورودی </span>
            </div>

            <input {{\App\Services\Capacity::have_capacity('muhandis') > 0 ? '' : 'disabled'}} value="muhandis" wire:model="location" type="radio" name="select_map" id="almohandes" class="hidden peer/almohandes" style="display: none !important;">
            <label for="almohandes" class="{{\App\Services\Capacity::have_capacity('muhandis') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/almohandes:bg-green-500 duration-200 peer-checked/almohandes:text-black dark:text-white col-start-2 row-start-4 row-end-6">
                <span>محور شهید ابومهدی المهندس</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('soleimani') > 0 ? '' : 'disabled'}} value="soleimani" wire:model="location" type="radio" name="select_map" id="solaimani" class="hidden peer/solaimani" style="display: none !important;">
            <label for="solaimani" class="{{\App\Services\Capacity::have_capacity('soleimani') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/solaimani:bg-green-500 duration-200 peer-checked/solaimani:text-black dark:text-white col-start-2 row-start-2 row-end-3 ">
                <span>محور شهید قاسم سلیمانی</span>
            </label>

            <input {{\App\Services\Capacity::have_capacity('nasrallah') > 0 ? '' : 'disabled'}} value="nasrallah" wire:model="location" type="radio" name="select_map" id="nasr_allah" class="hidden peer/nasr_allah" style="display: none !important;">
            <label for="nasr_allah" class="{{\App\Services\Capacity::have_capacity('nasrallah') > 0 ? 'dark:bg-green-400/40 bg-green-200 text-green-800 font-bold' : 'dark:bg-zinc-600 bg-zinc-200 not-dark:text-zinc-800 pointer-events-none'}} peer-checked/nasr_allah:bg-green-500 duration-200 peer-checked/nasr_allah:text-black dark:text-white col-start-2 row-start-3 row-end-4 ml-1 mr-1">
                <span>محور شهید سید حسن نصرالله</span>
            </label>
        </div>
    </div>
    <div class="w-[50%]" >
        @error('location')
        <flux:callout variant="danger" icon="x-circle" heading="{{$message}}" />
        @enderror
    </div>
    <div  wire:dirty >

        <div class="flex gap-2 " >
            <p class="w-fit">محور انتخابی :</p>

            <div class="flex w-fit">
            <span wire:show="location == 'nasrallah'" wire:cloak>
                سید حسن نصرالله
            </span>

                <span wire:show="location == 'soleimani'" wire:cloak>
                قاسم سلیمانی
            </span>

                <span wire:show="location == 'muhandis'" wire:cloak>
                ابومهدی المهندس
            </span>

                <span wire:show="location == 'kuntar'" wire:cloak>
                سمیر قنطار
            </span>

                <span wire:show="location == 'yamen'" wire:cloak>
                عبدالکریم الغماری
            </span>

                <span wire:show="location == 'sinwar'" wire:cloak>
                یحیی السنوار
            </span>

                <span wire:show="location == 'deif'" wire:cloak>
                محمد الضیف
            </span>

                <span wire:show="location == 'mughniyeh'" wire:cloak>
                عماد مغنیه
            </span>

                <span wire:show="location == 'safieddine'" wire:cloak>
                هاشم صفی الدین
            </span>

                <span wire:show="location == 'haniyeh'" wire:cloak>
                اسماعیل هنیه
            </span>

                <span wire:show="!location" wire:cloak>
                هیچ محوری انتخاب نشده
            </span>
            </div>
        </div>
    </div>
    <div class="w-[50%]  " wire:dirty  >



        <flux:button variant="primary"  class="w-full"  wire:click="next_step" ><span class="text-lg">مرحله بعد</span></flux:button>

    </div>

</div>
