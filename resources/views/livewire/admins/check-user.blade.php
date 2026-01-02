<div class="w-full h-full flex flex-col items-center pt-4 gap-4" >
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <h1 class="text-3xl font-black" >پنل مانیتور اعتکاف</h1>
    <div class="md:w-3/4 w-full pl-2 pr-2 gap-2 flex flex-wrap justify-between" >
        <div class="gap-5 pt-5 pb-10 flex  flex-col w-full rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <div class="flex gap-2 items-center">
                <input
                    wire:model="search_text"
                    wire:keydown.enter.prevent="doSearch"
                    placeholder="نام، کد ملی، شماره تلفن، شماره تلفن والدین، مدرسه"
                    type="text"
                    class="md:w-1/2 dark:bg-white/10 bg-black/10 p-2 pr-4 text-xl rounded-full focus:outline-none"
                >

                <button
                    wire:click="doSearch"
                    class="px-4 py-2 rounded-full bg-blue-600 text-white text-lg"
                >
                    جستجو
                </button>
            </div>


            <div class="relative overflow-x-auto bg-neutral-primary shadow-xs rounded-base border-1 rounded-2xl dark:border-white/10 border-black/10">
                <table class="overflow-x-auto w-full text-sm text-left rtl:text-right text-body">
                    <thead class="overflow-x-auto text-sm text-body border-b dark:border-white/10 border-black/10">
                    <tr class="" >
                        <th scope="col" class="w-fit px-6 py-3 bg-neutral-secondary-soft font-medium">
                            نام و نام خانوادگی
                        </th>
                        <th  scope="col" class="  py-3 font-medium">
                            سال تولد
                        </th>
                        <th scope="col" class=" py-3 bg-neutral-secondary-soft font-medium">
                            کد ملی
                        </th>
                        <th scope="col" class="py-3 font-medium">
                            شماره تلفن
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            محور
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            فعالیت
                        </th>
                    </tr>
                    </thead>
                    @foreach ($search_result as $search)
                        <livewire:admins.component.row-check
                            :user="$search"
                            :key="$search->id"
                        />
                    @endforeach



                        </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

