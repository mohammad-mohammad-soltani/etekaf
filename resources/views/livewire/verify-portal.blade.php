<div class="w-full h-full flex justify-center items-center flex-col gap-4" >
    <div class=" print:text-2xl xl:w-[40%] lg:w-[60%] md:w-[70%] w-[90%] p-4 flex flex-col gap-2 dark:border-white/20 border-black/20 border-[0.09rem] rounded-2xl print:w-full print:h-full print:border-none" >
        <h2 class="text-center" > گواهی حضور در بزرگترین اعتکاف دهه نودی ها</h2>
        <flux:field>
            <flux:label>کد ملی معتکف</flux:label>
            <flux:input class="national" wire:model="national_code"  />
        </flux:field>
        <flux:button  variant="primary" wire:click="verify" >دریافت گواهی</flux:button>
    </div>
    <style>
        .national input{
            border-width: 2px;
            border-color: black;
        }
    </style>
</div>
