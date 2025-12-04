<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >طریقه آشنایی</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>از چه طریقی با اعتکاف و مجموعه ابنا الامام آشنا شدید؟</p>
            <flux:select wire:model="industry" placeholder="برای انتخاب کلیک کنید...">
                <flux:select.option>بنر های سطح شهر</flux:select.option>
                <flux:select.option>دوست و اطرافیان</flux:select.option>
                <flux:select.option>پوستر های  داخل اتوبوس</flux:select.option>
                <flux:select.option>فضای مجازی</flux:select.option>
            </flux:select>
        </div>
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >شما هم مسئول اعتکاف باشید</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>چنان چه علاقه به فعالیت در اعتکاف دارید یکی از کارگروه های زیر را انتخاب نمایید.</p>
            <flux:select wire:model="industry" placeholder="برای انتخاب کلیک کنید...">
                <flux:select.option>انتظامات</flux:select.option>
                <flux:select.option>سفره</flux:select.option>
                <flux:select.option>رسانه</flux:select.option>
            </flux:select>
        </div>
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >استعداد قرآنی دارید؟</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>اگر حافظ بیش از پنج جزء قرآن کریم هستید 50 هزار تومان تخفیف ویژه دریافت میکنید</p>
            <flux:select wire:model="industry" placeholder="برای انتخاب کلیک کنید...">
                <flux:select.option>هستم</flux:select.option>
                <flux:select.option>نیستم</flux:select.option>
            </flux:select>
        </div>
        <flux:button
            variant="primary"
            wire:click="next_step"
            class="w-full mt-4"
        >
            <span class="text-lg">مرحله بعد</span>
        </flux:button>


    </div>
</div>
