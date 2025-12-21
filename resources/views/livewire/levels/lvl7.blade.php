<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
        <div class="w-full flex flex-col gap-1" >
            <div class="flex gap-2 items-center" >
                <h3 class="text-2xl" >طریقه آشنایی</h3>
                <flux:badge color="red" size="sm" ><span >الزامی</span></flux:badge>
            </div>
            <p>از چه طریقی با این اعتکاف و هیئت ابناءالامام آشنا شدید؟</p>
            <flux:field>
                <flux:select wire:model="referralSource" >
                    <flux:select.option value="null" >برای انتخاب کلیک کنید...</flux:select.option>
                    <flux:select.option value="banner" >بنرهای سطح شهر</flux:select.option>
                    <flux:select.option value="friends" >دوستان و اطرافیان</flux:select.option>
                    <flux:select.option value="bus" >پوسترهای داخل اتوبوس</flux:select.option>
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
            <p>چنانچه علاقه مند مسئولیت‌پذیری در اعتکاف هستید یکی از کاگروه های زیر را انتخاب کنید.</p>
            <flux:select wire:model="activityArea" >
                <flux:select.option value="null" >برای انتخاب کلیک کنید...</flux:select.option>
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
