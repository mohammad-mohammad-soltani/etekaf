<div class="w-full h-full flex justify-center items-center flex-col gap-4" >
    <div class=" print:text-2xl xl:w-[40%] lg:w-[60%] md:w-[70%] w-[90%] p-4 dark:border-white/20 border-black/20 border-[0.09rem] rounded-2xl print:w-full print:h-full print:border-none" >
        <h1 class="text-center " >گواهی حضور  در بزرگترین اعتکاف دهه نودی ها</h1>
        <span class="w-full p-2" ></span>
        <p>بسم الله الرحمن الرحیم</p>
        <p>مدیرمحترم و معلم معزز مرکز آموزشی {{$user -> school}}</p>
        <p>سلام علیکم</p>
        <p>بدینوسیله تأیید میگردد که عزیزمان آقای {{$user -> name}}  در بزرگترین اعتکاف دهه نودی ها در تاریخ 13 تا 15 دی ماه 1404 در مسجد سید اصفهان معتکف بوده اند.</p>
        <p class="hidden print:block" >شما میتواند گواهی را از طریق لینک زیر راستی آزمایی کنید:</p>
        <p class="hidden print:block text-left" >{{route('verify_main_page')}}</p>
        <p>امیدواریم این افتخار حضور برایشان منشأ تحولات معنوی و سرنوشت ساز باشد، ان شاءالله.</p>
        <p class="text-center" >هیئت ابناءالامام - مسجد سید اصفهان</p>
    </div>
    <div class="flex flex-col justify-center gap-2 print:hidden " >
        <button class="bg-accent dark:text-black text-white p-2 rounded-xl" onclick="window.print()" >پرینت گرفتن گواهی</button>
        <button class="bg-accent dark:text-black text-white p-2 rounded-xl"  id="shareBtn">اشتراک گذاری گواهی مجازی</button>
    </div>
    <script >
        document.getElementById('shareBtn').addEventListener('click' , async () => {
            try{
                await navigator.share({
                    title: "گواهی حضور در اعتکاف",
                    text: "گواهی حضور در بزرگترین اعتکاف دهه نودی ها. برای دریافت به آدرس زیر مراجعه نمایید."+'\n'+'{{route('verify' , $user -> national_code)}}',
                });
            }catch (e){
                alert('مرورگر شما از این قابلیت پشتیبانی نمیکند')
            }
        })
    </script>
</div>
