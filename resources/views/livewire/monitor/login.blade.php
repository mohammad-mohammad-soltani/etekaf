<div class="min-h-screen bg-gradient-to-br from-slate-950 via-purple-900 to-slate-950 flex items-center justify-center p-4">
    <flux:card class="w-full max-w-md border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
        <div class="p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">📊</span>
                </div>
                <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent mb-2">
                    پنل نظارتی
                </h1>
                <p class="text-gray-400 text-sm">سیستم مدیریت ثبت‌نام</p>
            </div>

            <!-- Password Error -->
            @if($passwordError)
                <flux:tooltip text="{{ $passwordError }}" color="red" position="top">
                    <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-300 text-sm">
                        {{ $passwordError }}
                    </div>
                </flux:tooltip>
            @endif

            <!-- Form -->
            <form wire:submit="authenticate" class="space-y-6">
                <flux:input
                    wire:model="password"
                    type="password"
                    placeholder="رمز عبور را وارد کنید"
                    label="رمز عبور"
                    icon="lock"
                    autofocus
                    class="bg-slate-800 border-purple-500/20"
                />

                <flux:button
                    type="submit"
                    class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 font-bold text-lg py-3"
                >
                    ورود به پنل
                </flux:button>
            </form>

            <!-- Footer -->
            <div class="mt-8 pt-8 border-t border-purple-500/20 text-center">
                <p class="text-gray-500 text-xs">
                    این پنل فقط برای مدیران سیستم است
                </p>
            </div>
        </div>
    </flux:card>
</div>
