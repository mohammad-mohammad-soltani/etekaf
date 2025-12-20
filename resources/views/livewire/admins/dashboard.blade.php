<div class="w-full h-full flex flex-col items-center pt-4 gap-4" >
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <h1 class="text-3xl font-black" >پنل مانیتور اعتکاف</h1>
    <div class="md:w-3/4 w-full pl-2 pr-2 gap-2 flex flex-wrap justify-between" >
        <div class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >مجموع کل افراد ثبت نام شده (پرداخت موفق)</h2>
            <h3 class="text-8xl font-black font-[sans-serif]" >{{$countEtekafUsers}}</h3>
        </div>
        <div class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >تعداد افراد در حال پرداخت</h2>
            <h3 class="text-8xl font-black font-[sans-serif]" >{{$countPendingEtekafUsers}}</h3>
        </div>
        <div class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >تعداد نوجوانان قرآنی</h2>
            <h3 class="text-8xl font-black font-[sans-serif]" >{{$countQuranEtekafUsers}}</h3>
        </div>
        <div class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >تعداد نوجوانان علاقه مند به فعالیت</h2>
            <h3 class="text-8xl font-black font-[sans-serif]" >{{$countWorkerEtekafUsers}}</h3>
        </div>
        <div wire:ignore class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >وضعیت فعلی محور ها</h2>
            <canvas id="locations" ></canvas>
        </div>
        <div wire:ignore class="gap-5 pt-10 pb-10 flex items-center flex-col w-full md:w-[49.5%] rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <h2 class="text-2xl font-bold" >گزارش آشنایی</h2>
            <div class="w-2/3"><canvas  id="industry" ></canvas></div>
        </div>
        <div class="gap-5 pt-5 pb-10 flex  flex-col w-full rounded-2xl p-3 border-1 dark:border-white/10 border-black/10" >
            <input wire:model.live="search_text" placeholder="نام ، کد ملی ، شماره تلفن ، شماره تلفن والدین ، مدرسه" type="text" class="md:w-1/2 dark:bg-white/10 bg-black/10 p-2 pr-4 text-xl rounded-full focus:outline-none  " >


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
                        <th scope="col" class=" py-3 font-medium">
                            شماره تلفن والدین
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            استان
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            مدرسه
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            محور
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            آشنا شده از طریق
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            مکان فعالیت
                        </th>
                        <th scope="col" class="px-2 py-3 font-medium">
                            وضعیت پرداخت
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($search_result as $search)

                        <livewire:admins.component.row :user="$search" />
                    @endforeach
{{--                    <livewire:admins.component.row :user="\App\Models\EtekafUsers::first()" />--}}

                    </tbody>
                </table>
            </div>

        </div>

    </div>
    @if($IsShowUserModal)
        <livewire:modal.user-edite :user="$CurrentUser" ></livewire:modal.user-edite>
    @endif
    <script>
        const ctx = document.getElementById('locations');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['اسمائیل هنیه', 'هاشم صفی الدین', 'عماد مغنیه', 'محمد الضیف', 'یحیی سنوار' , 'سمیر قنطار' ,'ابومهدی المهندس' ,'قاسم سلیمانی' , 'سید حسن نصرالله' , 'عبد الکریم الغماری'],
                datasets: [{
                    label: 'درصد پر شدن هر محور',
                    data: [{{\App\Services\Capacity::have_capacity_percentage('haniyeh')}}, {{\App\Services\Capacity::have_capacity_percentage('safieddine')}}, {{\App\Services\Capacity::have_capacity_percentage('mughniyeh')}},{{\App\Services\Capacity::have_capacity_percentage('deif')}},{{\App\Services\Capacity::have_capacity_percentage('sinwar')}} , {{\App\Services\Capacity::have_capacity_percentage('kuntar')}} , {{\App\Services\Capacity::have_capacity_percentage('muhandis')}} , {{\App\Services\Capacity::have_capacity_percentage('soleimani')}} , {{\App\Services\Capacity::have_capacity_percentage('nasrallah')}}, {{\App\Services\Capacity::have_capacity_percentage('yamen')}}], // درصد پر بودن کلاس‌ها
                    backgroundColor: 'white',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });

        const ctx2 = document.getElementById('industry');

        const industry = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: [ 'بنر های سطح شهر' , 'فضای مجازی' ,'دوستان' , 'اتوبوس'],
                datasets: [{
                    label: 'بازده تبلیغ ها',
                    data: [{{\App\Services\Ads::percentage('banner')}} , {{\App\Services\Ads::percentage('social')}}  , {{\App\Services\Ads::percentage('friends')}} ,  {{\App\Services\Ads::percentage('bus')}}      ], // درصد پر بودن کلاس‌ها
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 255, 255)',

                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    </script>
</div>
