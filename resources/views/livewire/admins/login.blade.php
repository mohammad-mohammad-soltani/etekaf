<div class="flex min-h-screen w-full">
    <div class="flex-1 flex justify-center items-center">
        <div class="w-80 max-w-80 space-y-6">


            <flux:heading class="text-center" size="xl">بزرگترین اعتکاف دانش آموزی</flux:heading>



            <div class="flex flex-col gap-6">
                <flux:input wire:model="username" label="نام کاربری" type="text" placeholder="نام کاربری ادمین" />

                <flux:field>
                    <div class="mb-3 flex justify-between">
                        <flux:label>کلمه عبور</flux:label>

                    </div>

                    <flux:input wire:model="password" type="password" placeholder="کلمه عبور" />
                </flux:field>


                <flux:button wire:click="login" variant="primary" class="w-full">وارد شوید</flux:button>
            </div>
        </div>
    </div>


</div>
