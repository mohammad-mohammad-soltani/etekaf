<div class="flex flex-col gap-2 items-center">
    <div class="w-full flex-col" >
        <h2 class="text-center font-black text-2xl" >انتخاب محل اسکان</h2>
        <p class="text-center" >محلی که در اینجا انتخاب میکنید محل اسکان شما داخل خیمه بزرگترین اعتکاف دانش آموزی خواهد بود</p>
        <p class="text-center" >برای انتخاب نام محور روی آن کلیک کنید . فقط مکان های سبز رنگ قابل انتخاب هستند</p>

    </div>
    <div class="w-full" >

        <div class="overflow-auto h-full flex lg:justify-center gap-2" >
            <flux:badge color="zinc">مکان های تکمیل ظرفیت شده</flux:badge>
            <flux:badge color="green">مکان های قابل انتخاب</flux:badge>
            <flux:badge color="yellow">مکان های غیر قابل اسکان</flux:badge>
        </div>
    </div>
    <div class="w-full h-full flex justify-center" >
        <div class="map grid grid-rows-[9fr_12.5fr_12.5fr_12.5fr_2.5fr_2fr] grid-cols-[1.45fr_1fr_1.45fr] gap-1 p-1 aspect-[49/52] w-[90%] md:w-[80%] lg:w-[90%] xl:w-[70%] 2xl:w-[60%] text-white" data-theme="light" >
            <input wire:model="location" type="radio" value="haniyeh" name="select_map" id="esmail" class="hidden peer/esmail" style="display: none !important;">
            <label for="esmail"  class="w-full duration-200 peer-checked/esmail:bg-yellow-300 peer-checked/esmail:text-black dark:bg-green-400/40 hover:bg-green- dark:text-white bg-green-800 text-white col-start-1 row-start-1 row-end-2" >
                <span>محور شهید اسمائیل هنیه</span>
            </label>
            <input wire:model="location" type="radio" value="safieddine" name="select_map" id="hashem" class="hidden peer/hashem" style="display: none !important;">
            <label for="hashem" class="peer-checked/hashem:bg-yellow-300 duration-200 peer-checked/hashem:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-2 row-start-1 row-end-2" >
                <span>محور شهید هاشم صفی الدین</span>
            </label>
            <input wire:model="location" value="mughniyeh" type="radio" name="select_map" id="emad" class="hidden peer/emad" style="display: none !important;">
            <label for="emad" class="peer-checked/emad:bg-yellow-300 duration-200 peer-checked/emad:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-3 row-start-1 row-end-2" >
                <span>محور شهید عماد مغنیه</span>
            </label>
            <div class="dark:bg-yellow-300/50 bg-yellow-300/70 col-start-3 row-start-2 row-end-5 text-black dark:text-white" >
                <span>محفل ذکر و شکر</span>
            </div>
            <input wire:model="location" value="deif" type="radio" name="select_map" id="alzeif" class="hidden peer/alzeif" style="display: none !important;">
            <label for="alzeif" class="peer-checked/alzeif:bg-yellow-300 duration-200 peer-checked/alzeif:text-black dark:bg-green-400/40 dark:text-white bg-green-800 0 col-start-1 row-start-2 row-end-3" >
                <span>محور شهید محمد الضیف</span>
            </label>
            <input wire:model="location" value="sinwar" type="radio" name="select_map" id="sinwar" class="hidden peer/sinwar" style="display: none !important;">
            <label for="sinwar" class="peer-checked/sinwar:bg-yellow-300 duration-200 peer-checked/sinwar:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-1 row-start-3 row-end-4" >
                <span>محور شهید یحیی السنوار</span>
            </label>
            <input wire:model="location" value="yamen" type="radio" name="select_map" id="yamen" class="hidden peer/yamen" style="display: none !important;">
            <label for="yamen" class="peer-checked/yamen:bg-yellow-300 duration-200 peer-checked/yamen:text-black dark:bg-green-400/40 dark:text-white bg-green-800   col-start-1 row-start-4 row-end-5" >
                <span>محور شهید عبدالکریم الغماری</span>
            </label>
            <div class="dark:bg-yellow-300/50 bg-yellow-300/70 col-start-3 row-start-5 row-end-7 text-black dark:text-white" >
                <span>ذخیره محفل ذکر و شکر</span>
            </div>
            <input value="kuntar" wire:model="location" type="radio" name="select_map" id="ghantar" class="hidden peer/ghantar" style="display: none !important;">
            <label for="ghantar" class="peer-checked/ghantar:bg-yellow-300 duration-200 peer-checked/ghantar:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-1 row-start-5 row-end-7" >
                <span>محور شهید سمیر قنطار</span>
            </label>
            <div class="dark:bg-yellow-300/50 bg-yellow-300/70 col-start-2 row-start-6 row-end-7  text-black dark:text-white" >
                <span>درب ورودی </span>
            </div>
            <input value="muhandis" wire:model="location" type="radio" name="select_map" id="almohandes" class="hidden peer/almohandes" style="display: none !important;">
            <label for="almohandes" class="peer-checked/almohandes:bg-yellow-300 duration-200 peer-checked/almohandes:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-2 row-start-4 row-end-6" >
                <span>محور شهید ابومهدی المهندس</span>
            </label>
            <input value="soleimani" wire:model="location" type="radio" name="select_map" id="solaimani" class="hidden peer/solaimani" style="display: none !important;">
            <label for="solaimani" class="peer-checked/solaimani:bg-yellow-300 duration-200 peer-checked/solaimani:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-2 row-start-2 row-end-3 " >
                <span>محور شهید قاسم سلیمانی</span>
            </label>
            <input value="nasrallah" wire:model="location" type="radio" name="select_map" id="nasr_allah" class="hidden peer/nasr_allah" style="display: none !important;">
            <label for="nasr_allah" class="peer-checked/nasr_allah:bg-yellow-300 duration-200 peer-checked/nasr_allah:text-black dark:bg-green-400/40 dark:text-white bg-green-800  col-start-2 row-start-3 row-end-4 ml-1 mr-1" >
                <span>محور شهید سید حسن نصر الله</span>
            </label>
        </div>
    </div>
    <div class="w-[50%]" >
        @error('location')
        <flux:callout variant="danger" icon="x-circle" heading="{{$message}}" />
        @enderror
    </div>

    <div class="w-[50%]  " wire:dirty  >
        <div class="flex gap-2" >
            <p class="w-fit">محور انتخاب شده :</p>

            <div class="flex w-fit">
    <span wire:show="location == 'nasrallah'" wire:cloak>
        نصر الله
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
        اسمائیل هنیه
    </span>

                <!-- اگر هیچ مورد انتخاب نشده -->
                <span wire:show="!location" wire:cloak>
        هیچ محوری انتخاب نشده
    </span>
            </div>
        </div>


        <flux:button variant="primary"  class="w-full"  wire:click="next_step" ><span class="text-lg">مرحله بعد</span></flux:button>

    </div>
</div>
