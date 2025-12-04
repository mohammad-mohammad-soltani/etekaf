<div class="w-full h-full flex justify-center items-center flex-col " >
    <div class="lg:w-1/2 w-2/3 flex flex-col gap-5 justify-center items-center" >
        <h2 class="font-bold text-xl" >تایید کد ارسالی</h2>
        <flux:otp wire:model="code" length="6" />
        <flux:error name="code" />

        <div class="flex gap-3">
            <flux:button variant="primary" wire:click="next_step">تایید</flux:button>
        </div>
    </div>
</div>
