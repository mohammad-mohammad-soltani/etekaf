<div class="w-full h-full flex justify-center items-center flex-col">
    <div class="lg:w-2/3 w-5/6 flex flex-col gap-8 justify-center items-center">
        <h2 class="font-bold text-2xl text-center">شماره تماس و محل سکونت</h2>

        <!-- 2 Column 2 Row Grid -->
        <div class="w-full grid md:grid-cols-2 gap-6 items-end">
            <!-- Row 1 Col 1: Mobile Number -->
            <flux:field>
                <flux:label class="text-sm font-medium flex gap-2"> <span>شماره همراه</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>شماره دردسترس برای ارتباط با معتکف</flux:description>
                <flux:input
                    wire:model="mobile_number"
                    class="text-right focus:outline-none "
                    class:input="text-left focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"
                    placeholder="09XXXXXXXXX"
                    type="tel"
                    inputmode="numeric"
                />
                <flux:error name="mobile_number" />
            </flux:field>

            <!-- Row 1 Col 2: Province Select -->
            <flux:field >
                <flux:label class="text-sm font-medium flex gap-2"> <span>استان</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:description>استان محل سکونت</flux:description>
                <flux:select
                wire:model="province" placeholder="استان را انتخاب کنید">
                    <flux:select.option value="isfahan" >اصفهان</flux:select.option>
                    <flux:select.option value="other">غیر از اصفهان</flux:select.option>

                </flux:select>
                <flux:error name="gender" />
                <flux:error name="province" />
            </flux:field>

            <!-- Row 2 Col 1: Parent Mobile Number -->
            <flux:field >
                <flux:label class="text-sm font-medium flex gap-2"> <span>شماره همراه والدین</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                <flux:input
                    wire:model="parent_mobile"
                    class="text-right focus:outline-none "
                    placeholder="09XXXXXXXXX"
                    type="tel"
                    inputmode="numeric"
                    class:input="text-left focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"

                />
                <flux:error name="parent_mobile" />
            </flux:field>

            <!-- Row 2 Col 2: School Name -->
            @if(!$school_name)
                <flux:field>
                    <flux:label class="text-sm font-medium flex gap-2"> <span>نام مدرسه</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                    <flux:input
                        wire:model="school_name"
                        class="text-right focus:outline-none "
                        class:input="text-right focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"
                        placeholder="نام مدرسه"
                        type="text"
                    />
                    <flux:error name="school_name" />
                </flux:field>
            @else
                <flux:field>
                    <flux:label class="text-sm font-medium flex gap-2"> <span>نام موسسه / مدرسه قرآنی</span><flux:badge color="rose" size="sm" ><span >الزامی</span></flux:badge></flux:label>
                    <flux:input
                        wire:model="school_name"
                        class="text-right focus:outline-none "
                        class:input="text-right focus:outline-none hover:shadow-lg focus:shadow-lg focus:shadow-seccondary/20 hover:shadow-seccondary/20  transition-shadow duration-200"
                        placeholder="نام مدرسه"
                        type="text"
                        disabled
                    />
                    <flux:error name="school_name" />
                </flux:field>
            @endif
        </div>

        <!-- Submit Button -->
        <flux:button
            variant="primary"
            wire:click="next_step"
            class="w-full mt-4"
        >
            <span class="text-lg">مرحله بعد</span>
        </flux:button>
    </div>
</div>
