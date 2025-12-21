<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >طریقه آشنایی</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>از چه طریقی با اعتکاف و مجموعه ابناءالامام آشنا شدید؟</p>
            <flux:field>
                <flux:select wire:model="referralSource" placeholder="برای انتخاب کلیک کنید...">
                    <flux:select.option value="null" >لطفا یک مورد را انتخاب کنید</flux:select.option>
                    <flux:select.option value="banner" >بنر های سطح شهر</flux:select.option>
                    <flux:select.option value="friends" >دوست و اطرافیان</flux:select.option>
                    <flux:select.option value="bus" >پوستر های  داخل اتوبوس</flux:select.option>
                    <flux:select.option value="social" >فضای مجازی</flux:select.option>
                </flux:select>
                <flux:error name="referralSource" />
            </flux:field>

        </div>
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >شما هم مسئول اعتکاف باشید</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>چنان چه علاقه به فعالیت در اعتکاف دارید یکی از کارگروه های زیر را انتخاب نمایید.</p>
            <flux:select wire:model="activityArea" placeholder="برای انتخاب کلیک کنید...">
                <flux:select.option value="null" >تمایل ندارم</flux:select.option>
                <flux:select.option value="security_officer" >انتظامات</flux:select.option>
                <flux:select.option value="catering_supervisor">سفره</flux:select.option>
                <flux:select.option value="media_group" >رسانه</flux:select.option>
            </flux:select>
        </div>
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >استعداد قرآنی دارید؟</h3>
                <flux:badge color="green" size="sm" ><span >اختیاری</span></flux:badge>
            </div>
            <p>اگر حافظ بیش از پنج جزء قرآن کریم هستید 50 هزار تومان تخفیف ویژه دریافت میکنید</p>
            <flux:select wire:model="quranState" placeholder="برای انتخاب کلیک کنید...">
                <flux:select.option value="false" >نیستم</flux:select.option>
                <flux:select.option value="true" >هستم</flux:select.option>
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
