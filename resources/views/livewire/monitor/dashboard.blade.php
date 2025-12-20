@php
    use Livewire\Volt\Attributes\On;
@endphp

<div class="min-h-screen bg-gradient-to-br from-slate-950 via-purple-900 to-slate-950">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 backdrop-blur-xl bg-slate-950/50 border-b border-purple-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                        <span class="text-2xl">📊</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">پنل نظارتی</h1>
                        <p class="text-xs text-purple-300">مدیریت ثبت‌نام‌ها</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <flux:button
                        wire:click="logout"
                        variant="ghost"
                        class="text-red-300 hover:text-red-200 hover:bg-red-500/10"
                    >
                        خروج
                    </flux:button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group">
                <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800 hover:border-purple-500/40 transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">کل افراد ثبت‌نام شده</p>
                            <p class="text-4xl font-bold text-white mt-2">{{ $stats['totalUsers'] }}</p>
                        </div>
                        <div class="text-5xl opacity-20 group-hover:opacity-40 transition">👥</div>
                    </div>
                </flux:card>
            </div>

            <div class="group">
                <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800 hover:border-purple-500/40 transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">کل ظرفیت</p>
                            <p class="text-4xl font-bold text-white mt-2">{{ $stats['totalCapacity'] }}</p>
                        </div>
                        <div class="text-5xl opacity-20 group-hover:opacity-40 transition">🎯</div>
                    </div>
                </flux:card>
            </div>

            <div class="group">
                <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800 hover:border-purple-500/40 transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">باقی‌مانده</p>
                            <p class="text-4xl font-bold text-white mt-2">{{ $stats['totalRemaining'] }}</p>
                        </div>
                        <div class="text-5xl opacity-20 group-hover:opacity-40 transition">📈</div>
                    </div>
                </flux:card>
            </div>

            <div class="group">
                <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800 hover:border-purple-500/40 transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">درصد اشغال</p>
                            <p class="text-4xl font-bold text-white mt-2">
                                {{ $stats['totalCapacity'] > 0 ? round(($stats['totalUsers'] / $stats['totalCapacity']) * 100, 1) : 0 }}%
                            </p>
                        </div>
                        <div class="text-5xl opacity-20 group-hover:opacity-40 transition">📊</div>
                    </div>
                </flux:card>
            </div>
        </div>

        <!-- Filters and Search -->
        <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <flux:input
                    wire:model.live="searchTerm"
                    type="text"
                    placeholder="جستجو: نام، کد ملی، شماره تماس"
                    variant="outline"
                    class="bg-slate-800 border-purple-500/20"
                />

                <flux:select
                    wire:model.live="filterLocation"
                    placeholder="فیلتر محور"
                    :options="array_merge([''] => 'همه محورها', $locations)"
                    variant="outline"
                    class="bg-slate-800 border-purple-500/20"
                />

                <flux:select
                    wire:model.live="filterPaymentStatus"
                    placeholder="فیلتر وضعیت پرداخت"
                    :options="['', 'pending', 'paid']"
                    variant="outline"
                    class="bg-slate-800 border-purple-500/20"
                >
                    <option value="">همه</option>
                    <option value="pending">انتظار پرداخت</option>
                    <option value="paid">پرداخت شده</option>
                </flux:select>
            </div>
        </flux:card>

        <!-- Locations Capacity -->
        <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
            <h2 class="text-xl font-bold text-white mb-6">📍 وضعیت محورها</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                @foreach($stats['locations'] as $location)
                    <div class="p-4 rounded-lg border border-purple-500/20 bg-slate-800/50 hover:border-purple-500/40 transition">
                        <p class="text-sm font-semibold text-purple-300">{{ $location['name'] }}</p>
                        <div class="mt-3 space-y-2">
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-400">{{ $location['registered'] }}/{{ $location['capacity'] }}</span>
                                <span class="text-purple-300 font-bold">{{ $location['percentage'] }}%</span>
                            </div>
                            <div class="w-full bg-slate-700 rounded-full h-2 overflow-hidden">
                                <div
                                    class="h-full bg-gradient-to-r from-purple-600 to-pink-600 transition-all duration-300"
                                    style="width: {{ min($location['percentage'], 100) }}%"
                                ></div>
                            </div>
                            <div class="flex gap-2">
                                @if($location['status'] === 'فعال')
                                    <flux:badge color="green" size="sm">✓ فعال</flux:badge>
                                @else
                                    <flux:badge color="red" size="sm">✕ پر</flux:badge>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </flux:card>

        <!-- Users Table -->
        <flux:card class="p-6 border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
            <h2 class="text-xl font-bold text-white mb-6">👥 لیست کاربران</h2>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-purple-500/20">
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold cursor-pointer hover:text-purple-200" wire:click="setSortBy('name')">
                                نام
                                @if($sortBy === 'name')
                                    <span>{{ $sortDirection === 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </th>
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold">کد ملی</th>
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold">شماره تماس</th>
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold">محور</th>
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold">پرداخت</th>
                            <th class="px-4 py-3 text-right text-purple-300 font-semibold">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-purple-500/10">
                        @forelse($users as $user)
                            <tr class="hover:bg-slate-800/30 transition">
                                <td class="px-4 py-3 text-white font-medium">{{ $user->name }}</td>
                                <td class="px-4 py-3 text-gray-300">{{ $user->national_code ?? '-' }}</td>
                                <td class="px-4 py-3 text-gray-300" dir="ltr">{{ $user->phone_number ?? '-' }}</td>
                                <td class="px-4 py-3 text-gray-300">
                                    @if($user->location)
                                        <flux:badge size="sm" color="purple">{{ $locations[$user->location] ?? $user->location }}</flux:badge>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-gray-300">
                                    @if($user->payment_status === 'paid')
                                        <flux:badge size="sm" color="green">✓ پرداخت شده</flux:badge>
                                    @else
                                        <flux:badge size="sm" color="yellow">⏳ انتظار</flux:badge>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-gray-300">
                                    <div class="flex gap-2">
                                        <flux:button
                                            wire:click="editUser({{ $user->id }})"
                                            icon="pencil"
                                            variant="ghost"
                                            size="sm"
                                            class="text-purple-400 hover:text-purple-300"
                                        />
                                        <flux:button
                                            wire:click="confirmDelete({{ $user->id }})"
                                            icon="trash"
                                            variant="ghost"
                                            size="sm"
                                            class="text-red-400 hover:text-red-300"
                                        />
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-8 text-center text-gray-400">
                                    <p>هیچ کاربری یافت نشد</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $users->links() }}
            </div>
        </flux:card>
    </div>

    <!-- Edit Modal -->
    @if($showEditModal && $editingUserId)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4" style="background-color: rgba(0, 0, 0, 0.7);">
            <flux:card class="w-full max-w-2xl border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-white mb-6">ویرایش کاربر</h2>

                <div class="space-y-4 max-h-96 overflow-y-auto">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.name"
                            label="نام"
                            placeholder="نام کاملی"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.birth_year"
                            label="سال تولد"
                            type="number"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.national_code"
                            label="کد ملی"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.phone_number"
                            label="شماره تماس"
                            type="tel"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.parent_phone_number"
                            label="شماره والد"
                            type="tel"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.province"
                            label="استان"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.school"
                            label="مدرسه/موسسه"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:select
                            wire:model="form.location"
                            label="محور"
                            :options="$locations"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 5 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.industry"
                            label="صنعت/حوزه"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.job"
                            label="شغل/نقش"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 6 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.quran"
                            label="آشنایی با قرآن"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:select
                            wire:model="form.payment_status"
                            label="وضعیت پرداخت"
                            class="bg-slate-800 border-purple-500/20"
                        >
                            <option value="">انتخاب کنید</option>
                            <option value="pending">انتظار پرداخت</option>
                            <option value="paid">پرداخت شده</option>
                        </flux:select>
                    </div>
                </div>

            <div class="p-6">
                <h2 class="text-2xl font-bold text-white mb-6">ویرایش کاربر</h2>

                <div class="space-y-4 max-h-96 overflow-y-auto">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.name"
                            label="نام"
                            placeholder="نام کاملی"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.birth_year"
                            label="سال تولد"
                            type="number"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.national_code"
                            label="کد ملی"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.phone_number"
                            label="شماره تماس"
                            type="tel"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.parent_phone_number"
                            label="شماره والد"
                            type="tel"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.province"
                            label="استان"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.school"
                            label="مدرسه/موسسه"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:select
                            wire:model="form.location"
                            label="محور"
                            :options="$locations"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 5 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.industry"
                            label="صنعت/حوزه"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:input
                            wire:model="form.job"
                            label="شغل/نقش"
                            class="bg-slate-800 border-purple-500/20"
                        />
                    </div>

                    <!-- Row 6 -->
                    <div class="grid grid-cols-2 gap-4">
                        <flux:input
                            wire:model="form.quran"
                            label="آشنایی با قرآن"
                            class="bg-slate-800 border-purple-500/20"
                        />
                        <flux:select
                            wire:model="form.payment_status"
                            label="وضعیت پرداخت"
                            class="bg-slate-800 border-purple-500/20"
                        >
                            <option value="">انتخاب کنید</option>
                            <option value="pending">انتظار پرداخت</option>
                            <option value="paid">پرداخت شده</option>
                        </flux:select>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 mt-6">
                    <flux:button
                        wire:click="saveUser"
                        class="flex-1 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700"
                    >
                        ✓ ذخیره
                    </flux:button>
                    <flux:button
                        wire:click="resetForm"
                        variant="ghost"
                        class="flex-1"
                    >
                        لغو
                    </flux:button>
                </div>
            </div>
        </flux:card>
        </div>
    @endif

    <!-- Delete Modal -->
    @if($showDeleteModal && $userToDelete)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4" style="background-color: rgba(0, 0, 0, 0.7);">
            <flux:card class="w-full max-w-md border border-purple-500/20 bg-gradient-to-br from-slate-900 to-slate-800">
            <div class="p-6 text-center">
                <div class="text-5xl mb-4">⚠️</div>
                <h2 class="text-2xl font-bold text-white mb-2">حذف کاربر</h2>
                <p class="text-gray-400 mb-6">آیا مطمئن هستید که می‌خواهید {{ $userToDelete->name }} را حذف کنید؟</p>

                <div class="flex gap-4">
                    <flux:button
                        wire:click="deleteUser"
                        class="flex-1 bg-red-600 hover:bg-red-700"
                    >
                        حذف
                    </flux:button>
                    <flux:button
                        wire:click="resetForm"
                        variant="ghost"
                        class="flex-1"
                    >
                        انصراف
                    </flux:button>
                </div>
            </div>
        </flux:card>
        </div>
    @endif

    @script
    <script>
        Livewire.on('user-saved', (data) => {
            alert(data.message);
        });

        Livewire.on('user-deleted', (data) => {
            alert(data.message);
        });
    </script>
    @endscript
</div>
