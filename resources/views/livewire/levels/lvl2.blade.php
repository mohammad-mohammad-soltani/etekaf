<div class="w-full h-full flex justify-center items-center flex-col " >
    <div class="h-full lg:w-1/2 w-2/3 flex flex-col gap-5 justify-center items-center" >
        <h2 class="font-bold text-xl" >تایید شماره تلفن</h2>
        <flux:input.group class="flex flex-col" >
            <div class="flex" >
                <flux:input wire:model="phone" class:input="text-left focus:outline-none font-[sans-serif]" placeholder="913xxxxxxx" ></flux:input>
                <flux:input.group.suffix>+98</flux:input.group.suffix>
            </div>
            <flux:error name="phone" />

        </flux:input.group>
        <flux:button variant="primary"  wire:click="next_step" ><span class="text-lg">مرحله بعد</span></flux:button>

    </div>
</div>
