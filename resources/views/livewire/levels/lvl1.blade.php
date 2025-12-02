<div class="flex flex-col justify-between items-center gap-3 lg:pr-5 lg:pl-5 h-full lg:pb-15 duration-300" wire:target="next_step" wire:loading.class="opacity-[20%]" >
    <div class="flex flex-col justify-center items-center "  >
        <p style="text-align : center;" class="bold text-xl bg-seccondary w-fit text-white p-2">به ثبت نام بزرگترین اعتکاف نوجوانان محور مقاومت خوش آمدید   </p>
        <p>پیش از ثبت نام موارد زیر را مطالعه و تایید کنید</p>
        <p class="" >شرایط و ضوابط الزامی: <br>
            _ فقط ویژه پسران متولد 88 تا 93<br>
            _ هزینه ثبت نام هرنفر دویست هزار تومان<br>
            _ هدیه تخفیف چهل هزار تومانی ویژه پسران شهدا<br>
            _ هدیه تخفیف سی هزار تومانی ویژه حافظان بیش از پنج جزء قرآن<br>
            _ هرگونه‌ انصراف از ثبت نام صرفا تا بیستم دیماه<br>
            _ ممنوعیت قطعی گوشی و هرگونه دستگاه الکترونیکی<br>
            _ اعلام جزییات صرفا ازطریق کانال هیئت<br>
            _ تقدیم سه سحری و سه افطاری به هر معتکف<br>
            _ تعهد هر معتکف به جبران کامل هرگونه خسارت ناشی از عدم رعایت ضوابط انضباطی این اعتکاف توسط وی <br>
        </p>
    </div>
    <div class="w-full gap-2 flex flex-col" >
        <div class="flex w-full" >
            <flux:field variant="inline">
                <flux:checkbox wire:model="terms" />

                <flux:label  ><div class="flex gap-2 items-center " ><p>تمامی قوانین را خوانده ام و موافقت خود را با تمامی آنها اعلام میکنم</p><flux:badge color="red">ضروری</flux:badge></div></flux:label>

                <flux:error name="terms" />
            </flux:field>
        </div>
        <div>
            <flux:button variant="primary" wire:click="next_step" ><span class="text-lg"  >مرحله بعد</span></flux:button>
        </div>
    </div>

</div>
