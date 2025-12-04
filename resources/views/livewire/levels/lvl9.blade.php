<div class="w-full h-full flex justify-center flex-col items-center gap-2">
    <div class="bg-seccondary text-white w-[80%] p-3 rounded-2xl" >
        <h2>{{$user_data['name']}} <span>عزیز !</span> ثبت نام شما با موفقیت انجام شد.</h2>
        <p>کارت ورود به اعتکاف به شماره شما پیامک خواهد شد . حتما آن را موقع ثبت نام به همراه داشته باشید</p>
    </div>
    <p>چنان چه تمایل دارید ثبت نام دیگری برای فرد دیگری انجام دهید میتوانید از دکمه زیر استفاده نمایید</p>
    <flux:button variant="primary" wire:click="reform">ثبت نام مجدد</flux:button>

</div>
