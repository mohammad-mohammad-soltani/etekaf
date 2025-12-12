<div x-data="{ current_tab: {{$current_level}} , max_tab : 9}" class="w-full h-[100vh] l lg:h-[85vh] xl:h-[90vh] 2xl:h-[75vh]  lg:w-[90%] xl:w-[90%] 2xl:w-[75%]  border-seccondary/19 dark:border-white/20 border-1 rounded-none lg:rounded-[3rem] flex" >
    <div class="w-4/10  rounded-none lg:rounded-4xl not-lg:hidden " style="background-image: url('{{ asset('assets/images/banner.webp')}}?ver=1234');background-size: cover" >
    </div>
    <div class="grid grid-rows-[1fr_9fr_1fr] relative w-full lg:w-6/10 p-3" >
        <div class="flex items-center flex-col" >
            <h1 class="h-fit text-xl font-black" >ثبت نام بزرگترین اعتکاف دانش اموزی</h1>
            <div class="flex gap-3">
                <span class="text-bold " >مسجد سید اصفهان</span>
{{--                <div class="flex gap-1" >--}}
{{--                    <span>مرحله</span><span wire:text="current_level" ></span><span>از</span><span x-text="max_tab" ></span>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="overflow-auto scrollbar-themed not-md:mask-t-from-95% not-md:mask-t-to-white/20 not-md:mask-b-from-95% not-md:mask-b-to-transparent" >
            <div class="{{$current_level == 2 || $current_level == 3 ? 'h-full' : ''}} not-md:pt-[2rem] not-md:pb-[4rem] min-h-full" >
{{--                {!!  json_encode($user_data ) !!}--}}
{{--                {{$end_of_form ? 'true' : 'false'}}--}}
                @if($current_level == 1)
                    <livewire:levels.lvl1 />
                @elseif($current_level == 2)
                    <livewire:levels.lvl2 />
                @elseif($current_level == 3)
                    <livewire:levels.lvl3 />
                @elseif($current_level == 4)
                    <livewire:levels.lvl4 />
                @elseif($current_level == 5)
                    <livewire:levels.lvl5 />
                @elseif($current_level == 6)
                    <livewire:levels.lvl6 />
                @elseif($current_level == 7)
                    <livewire:levels.lvl7 />
                @elseif($current_level == 8)
                    <livewire:levels.lvl8 :national_code="$user_data['national_code']" />
                @elseif($current_level == 9)
                    <livewire:levels.lvl9 :user_data="$user_data" />
                @endif
            </div>
        </div>
        <div class=" w-full flex justify-center ">
            <div class="flex items-center" >
                <div class="bg-seccondary text-white p-2 rounded-xl  " >
                    <a class="not-lg:block hidden" href="tel://09140275311">پشتیبان سایت : 09140275311</a>
                    <p class="lg:block hidden" >شماره پشتیبان » 09140275311</p>
                </div>
            </div>
        </div>
    </div>

</div>
