<div>
    <div wire:transition class="fixed w-full h-full backdrop:blur-[20px] z-2 bg-black/50 top-0 left-0" >
        <div class="w-full h-full flex justify-center items-center" >
            <div class="dark:bg-zinc-900 flex flex-col gap-1 items-center bg-white border-1 dark:border-white/10 border-black/10   p-3 md:w-2/3 pt-5 pb-5 rounded-3xl" >
                <h3 class="text-2xl font-bold" ><span>ویرایش اطلاعات </span> <span>{{$user -> name}}</span></h3>
                <div class="md:w-2/3 flex flex-col gap-2" >
                    <div class="flex flex-col gap-1" >
                        <label>سال تولد</label>
                        <flux:field>
                            <flux:input wire:model="birth_year" />
                            <flux:error name="birth_year" />
                        </flux:field>
                    </div>
                    <div class="flex flex-col gap-1" >
                        <label for="location">محل اسکان</label>
                        <flux:select wire:model="location" placeholder="انتخاب محل اسکان">
                            <flux:select.option value="haniyeh" ><span>شهید اسمائیل هنیه</span> <span>{{\App\Services\Capacity::have_capacity('haniyeh')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="safieddine" ><span>شهید هاشم صفی الدین</span> <span>{{\App\Services\Capacity::have_capacity('safieddine')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="mughniyeh" ><span>شهید عماد مغنیه</span> <span>{{\App\Services\Capacity::have_capacity('mughniyeh')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="deif" ><span>شهید محمد الضیف</span> <span>{{\App\Services\Capacity::have_capacity('deif')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="sinwar" ><span>شهید یحیی سنوار</span> <span>{{\App\Services\Capacity::have_capacity('sinwar')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="kuntar" ><span>شهید سمیر قنطار</span> <span>{{\App\Services\Capacity::have_capacity('kuntar')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="muhandis" ><span>شهید ابومهدی المهندس</span> <span>{{\App\Services\Capacity::have_capacity('muhandis')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="soleimani" ><span>شهید قاسم سلیمانی</span> <span>{{\App\Services\Capacity::have_capacity('soleimani')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="nasrallah" ><span>شهید سید حسن نصرالله</span> <span>{{\App\Services\Capacity::have_capacity('nasrallah')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                            <flux:select.option value="yamen" ><span>شهید عبد الکریم الغماری</span> <span>{{\App\Services\Capacity::have_capacity('yamen')}}</span> <span>باقی مانده ظرفیت</span></flux:select.option>
                        </flux:select>
                    </div>
                    <div class="flex flex-col gap-1" >
                        <label for="job">محل فعالیت</label>
                        <flux:select wire:model="job" placeholder="انتخاب محل فعالیت">
                            <flux:select.option value="null" >علاقه ندارم</flux:select.option>
                            <flux:select.option value="security_officer" >انتظامات</flux:select.option>
                            <flux:select.option value="catering_supervisor" >سفره</flux:select.option>
                            <flux:select.option value="media_group" >رسانه</flux:select.option>
                        </flux:select>
                    </div>
                    <div class="flex flex-col gap-1" >
                        <label for="payment_status">وضعیت پرداخت</label>
                        <flux:select wire:model="payment_status" placeholder="وضعیت پرداخت">
                            <flux:select.option value="pending" >در حالت انتظار</flux:select.option>
                            <flux:select.option value="approved" >پرداخت شده</flux:select.option>
                        </flux:select>
                    </div>
                </div>
                <div class="md:w-2/3 pt-3" wire:dirty>
                    <flux:button variant="primary" wire:click="save_changes" >ذخیره تغییرات</flux:button>
                </div>
                <flux:button variant="danger" wire:click="delete" >حذف کاربر</flux:button>
                <flux:button variant="primary" wire:click="close" >بستن</flux:button>

            </div>
        </div>
    </div>
</div>
