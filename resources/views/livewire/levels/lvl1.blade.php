<div class="flex flex-col justify-between items-center gap-3 lg:pr-5 lg:pl-5 h-full lg:pb-15 duration-300" wire:target="next_step" wire:loading.class="opacity-[20%]" >
    <div class="flex flex-col justify-center items-center gap-2 w-full "  >

{{--        <div style="text-align : center;" class="bold text-xl bg-seccondary text-white p-2 w-1/2 flex justify-center items-center flex-col rounded-3xl">--}}
{{--            <img class="mix-blend-screen w-[80%]" src="{{asset('assets/images/typo.jpeg')}}">--}}
{{--        </div>--}}
        <div class="w-full" >
            <h4 class="text-xl md:mt-2" >بسم الله النور</h4>
            <p>پیش از ثبت‌نام موارد زیر را مطالعه و تأیید کنید:</p>
            <div class="flex flex-col gap-1 pr-3" >
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>این اعتکاف ویژه پسران متولد 89 تا 93 میباشد</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>هزینه ثبت نام هرنفر سیصد و پنجاه هزار تومان</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>هدیه تخفیف پنجاه هزار تومانی ویژه حافظان بیش از پنج جزء قرآن یا فرزندان شهدا</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>به دلیل مصرف شدن مبلغ پرداختی شما برای ثبت نام در امور بر پایی خیمه هرگونه انصراف و استرداد مبلغ مقدور نمی باشد</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>پیرو تجربه سالیان گذشته در مورد پیچیدگی اجرایی ملاقات والدین با فرزندان معتکف خود  و نیز مغایرت فلسفه اعتکاف با این گونه ملافات ، لذا ثبت نام کنندگان بدانند که امسال به هیچ وجه امکان ملاقات به جز در مراسم اعمال ام داوود (بعد از ظهر روز سوم) وجود ندارد</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>ممنوعیت قطعی گوشی و هرگونه دستگاه الکترونیکی</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>اعلام جزییات صرفا ازطریق کانال هیئت ابناءالامام در پیامرسان ایتا</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>تقدیم سه سحری و سه افطاری به هر معتکف</p>
                </div>
                <div class="flex gap-1" >
                    <span>-</span>
                    <p>تعهد هر معتکف به جبران کامل هرگونه خسارت ناشی از عدم رعایت ضوابط انضباطی این اعتکاف توسط وی</p>
                </div>

            </div>
        </div>

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
