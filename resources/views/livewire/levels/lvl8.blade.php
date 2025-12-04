<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
       <h2 class="text-2xl">پرداخت هزینه</h2>
        <div class="w-full flex flex-col items-center gap-1" >
            <p class="text-center" >در این مرحله شما باید مبلغ <strong>350 هزار تومان </strong> را به شماره کارت زیر واریز نمایید و سپس رسید آن را در همین صفحه ارسال نمایید.</p>
            <p>در صورت انجام ندادن این مرحله ثبت نام شما انجام نمیشود.</p>
        </div>
        <div class="card gap-4 text-white dark:bg-white/5 bg-seccondary border-1 dark:border-white/40 border-black/40  lg:w-[70%] rounded-2xl flex flex-col justify-between p-2" >

            <div class="pt-4 text-white flex gap-2 tracking-widest text-xl w-full justify-around pl-4 pr-4 flex-row-reverse" ><span>6219</span><span>8619</span><span>7446</span><span>0056</span></div>
            <div class="flex justify-between pl-4 pr-4 " >
                <span>به نام سید ناصر رضوی</span>
                <span>بانک ملی</span>
            </div>
        </div>
        <input wire:model="resid"  type="file" name="" class="hidden" id="resid">
        <label class="text-black dark:text-white dark:bg-white/5  border-2 border-seccondary rounded-2xl border-dashed dark:border-white/40 border-black/40  lg:w-[70%] p-3 flex flex-col justify-center items-center"  for="resid">

            @if($resid && !$errors -> has('resid'))
                <div class="flex">
                    <p>تصویر رسید شما با موفقیت انتخاب شد</p>
                    <img src="{{ $resid->temporaryUrl() }}" class="w-20 aspect-square rounded-3xl">
                </div>
            @elseif(!$resid)
                <h3 class="text-xl" >رسید بارگذاری نشده است</h3>
                <p class="text-sm" >برای بارگذاری کلیک کنید</p>
            @endif
        </label>
        <div class="w-[80%]" >
            @error('resid')
            <flux:callout variant="danger" icon="x-circle" heading="{{$message}}" />
            @enderror
        </div>
        <flux:button
            variant="primary"
            wire:click="next_step"
            class=" mt-4 w-[70%]">
            <span class="text-lg">تکمیل ثبت نام</span>
        </flux:button>
    </div>
</div>
