<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
        <div>
            <h2 class="font-bold text-2xl text-center">اطلاعات شخص</h2>
            <p class="text-sm text-center text-zinc-500" >به یاد داشتن این اطلاعات در هنگام ورود الزامی است</p>
        </div>

        <div class="w-full grid md:grid-cols-2 gap-6 items-end">
            <flux:field>
                <flux:label class="text-sm font-medium flex gap-2"> <span>نام و نام خانوادگی</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>نام و نام خانوادگی شخص معتکف</flux:description>
                <flux:input
                    wire:model="full_name"
                    class:input="text-right focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"
                    placeholder="نام و نام خانوادگی معتکف"
                    type="text"
                />
                <flux:error name="full_name" />
            </flux:field>


            <flux:field>
                <flux:label class="text-sm font-medium flex gap-2"> <span>سال تولد</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>فقط از سال 88 تا سال 93</flux:description>
                <flux:input
                    wire:model="birth_date"
                    type="number"
                    class:input="text-center focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"
                    placeholder="مثال: 1388"
                />
                <flux:error name="birth_date" />
            </flux:field>

            <flux:field>
                <flux:label class="text-sm font-medium flex gap-2"> <span>جنسیت</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>این اعتکاف مخصوص پسران میباشد</flux:description>
                <flux:select
                wire:model="gender" placeholder="جنسیت را انتخاب کنید">
                    <flux:select.option value="male" key="male" >پسر</flux:select.option>
                    <flux:select.option value="female" key="female" >دختر</flux:select.option>
                </flux:select>
                <flux:error name="gender" />
            </flux:field>

            <flux:field >
                <flux:label class="text-sm font-medium flex gap-2"> <span>کد ملی</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>هنگام ورود کد ملی را به یاد داشته باشید</flux:description>
                <flux:input
                    wire:model="national_code"
                    class="text-right focus:outline-none "
                    class:input="text-right focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"

                    placeholder="کد ملی (10 رقم)"
                    type="text"
                    inputmode="numeric"
                    maxlength="10"
                />
                <flux:error name="national_code" />
            </div>
        </flux:field>

        <flux:button
            variant="primary"
            wire:click="next_step"
            class="w-full mt-4"
        >
            <span class="text-lg">مرحله بعد</span>
        </flux:button>
    </div>
</div>
