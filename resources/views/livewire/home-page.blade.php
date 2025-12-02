<div x-data="{ current_tab: {{$current_level}} , max_tab : 3}" class="w-full h-[100vh] l lg:h-[70vh] xl:h-[65vh] 2xl:h-[74vh]  lg:w-[85%] xl:w-[80%] 2xl:w-[70%]  border-seccondary/19 border-1 rounded-none lg:rounded-[3rem] flex" >
    <div class="w-4/10  rounded-none lg:rounded-4xl not-lg:hidden " style="background-image: url('{{ asset('assets/images/banner.png')}}');background-size: cover" >
    </div>
    <div class="grid grid-rows-[1fr_9fr_1fr] relative w-full lg:w-6/10 p-3" >
        <div class="flex items-center flex-col" >
            <h1 class="h-fit text-xl font-black" >ثبت نام بزگترین اعتکاف دانش اموزی</h1>
            <div class="flex gap-3">
                <span class="text-bold text-black/50" >مسجد سید اصفهان</span>
                <div class="flex gap-1" >
                    <span>مرحله</span><span wire:text="current_level" ></span><span>از</span><span x-text="max_tab" ></span>
                </div>
            </div>
        </div>
        <div >
            <div class="h-full" >
                @if($current_level == 1)
                    <livewire:levels.lvl1 />
                @elseif($current_level == 2)
                        <livewire:levels.lvl2  />
                @endif
            </div>
        </div>
        <div class=" w-full flex justify-center ">
            <div class="flex items-center" >
                <div class="bg-seccondary text-white p-2 rounded-xl  " >
                    <a class="not-lg:block hidden" href="tel://09140275311">تماس با پشتیبان سایت</a>
                    <p class="lg:block hidden" >شماره پشتیبان » 09140275311</p>
                </div>
            </div>
{{--            <div class="flex gap-2 items-center " >--}}
{{--                <button wire:click="level_down" {{ $current_level <= $min_level ?  'disabled' : ''}}  class="{{ $current_level <= $min_level ?  'bg-black/10' : 'bg-primary'}} aspect-square gap-2 pl-3 h-14 p-3 flex justify-center items-center   rounded-full hover:scale-107 duration-200" >--}}
{{--                    <img src="{{asset('assets/icons/next_step.svg')}}" class="w-full rotate-180 " alt="">--}}
{{--                </button>--}}
{{--                <button x-transition wire:loading.attr="disabled"  wire:loading.class.remove="bg-primary" wire:loading.class="bg-primary/80" {{$current_level >= $max_tab ? 'disabled' : ''}}  wire:click="level_up" class=" {{$current_level >= $max_tab ? 'bg-black/10' : 'bg-primary'}} flex-row-reverse text-white gap-2  h-14 p-2 pr-3 pt-4 pb-4 flex justify-center items-center   rounded-full hover:scale-107 duration-200" >--}}
{{--                    <div wire:target="level_up" wire:loading.remove  class="flex-row-reverse flex gap-2 items-center" >--}}
{{--                        <img src="{{asset('assets/icons/next_step.svg')}}" class="w-10" alt="">--}}
{{--                        <span>مرحله بعد</span>--}}
{{--                    </div>--}}
{{--                    <div wire:target="level_up" wire:loading  class="flex-row-reverse flex gap-2 items-center">--}}
{{--                        <span>در حال بارگذاری</span>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    </div>

</div>
