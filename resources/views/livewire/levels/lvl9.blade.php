<div class="w-full h-full flex justify-center flex-col items-center gap-2">
    <div class="bg-seccondary text-white w-[80%] p-3 rounded-2xl" >
        <h2>{{$user_data['name']}} <span>عزیز !</span> ثبت نام شما با موفقیت انجام شد.</h2>
        <p>کارت ورود به اعتکاف به شماره شما پیامک خواهد شد . حتما آن را موقع ثبت نام به همراه داشته باشید</p>
    </div>
    <div class="bg-orange-700  text-white w-[80%] p-3 rounded-2xl flex flex-col" >
        <h2 class="font-black " >توجه!توجه!</h2>
        <p>معتکف عزیز!</p>
        <p>برای ادامه فرایند اعتکاف،حتما حتما داخل کانال هیئت ابناءالامام در پیامرسان ایتا عضو شوید</p>
        <a href="https://eitaa.com/GOFTEMANRAZMIR" class="w-full bg-white p-2 rounded-full text-black text-center font-bold hover:bg-transparent hover:text-white duration-200 "  >عضویت در کانال ایتا هیئت ابناء الامام</a>
    </div>
    <p>چنان چه تمایل دارید ثبت نام دیگری برای فرد دیگری انجام دهید میتوانید از دکمه زیر استفاده نمایید</p>
    <flux:button variant="primary" wire:click="reform">ثبت نام مجدد</flux:button>

</div>
