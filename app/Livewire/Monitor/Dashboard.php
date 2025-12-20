<?php

namespace App\Livewire\Monitor;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\EtekafUsers;
use App\Services\Capacity;
use Illuminate\Support\Facades\Session;

#[Layout('components.layouts.monitor')]
class Dashboard extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $sortBy = 'created_at';
    public $sortDirection = 'desc';
    public $filterLocation = '';
    public $filterPaymentStatus = '';

    public $editingUserId = null;
    public $showEditModal = false;
    public $showDeleteModal = false;
    public $userToDelete = null;

    // Form fields
    public $form = [
        'name' => '',
        'birth_year' => '',
        'national_code' => '',
        'phone_number' => '',
        'parent_phone_number' => '',
        'province' => '',
        'school' => '',
        'location' => '',
        'industry' => '',
        'job' => '',
        'quran' => '',
        'payment_status' => '',
    ];

    protected $rules = [
        'form.name' => 'nullable|string|max:255',
        'form.birth_year' => 'nullable|integer|min:1300|max:1450',
        'form.national_code' => 'nullable|string|max:20',
        'form.phone_number' => 'nullable|string|max:20',
        'form.parent_phone_number' => 'nullable|string|max:20',
        'form.province' => 'nullable|string|max:255',
        'form.school' => 'nullable|string|max:255',
        'form.location' => 'nullable|string|max:255',
        'form.industry' => 'nullable|string|max:255',
        'form.job' => 'nullable|string|max:255',
        'form.quran' => 'nullable|string|max:50',
        'form.payment_status' => 'nullable|string|in:pending,paid',
    ];

    public function mount()
    {
        if (!session('monitor_authenticated')) {
            redirect()->route('monitor.login')->send();
            exit;
        }
    }

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function updatingFilterLocation()
    {
        $this->resetPage();
    }

    public function updatingFilterPaymentStatus()
    {
        $this->resetPage();
    }

    public function setSortBy($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function getUsers()
    {
        $query = EtekafUsers::query();

        if ($this->searchTerm) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('national_code', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('phone_number', 'like', '%' . $this->searchTerm . '%');
            });
        }

        if ($this->filterLocation) {
            $query->where('location', $this->filterLocation);
        }

        if ($this->filterPaymentStatus) {
            $query->where('payment_status', $this->filterPaymentStatus);
        }

        return $query->orderBy($this->sortBy, $this->sortDirection)->paginate(15);
    }

    public function getStats()
    {
        $locations = Capacity::getAllLocationsData();
        $totalUsers = EtekafUsers::count();
        $totalCapacity = array_sum(array_column($locations, 'capacity'));

        return [
            'totalUsers' => $totalUsers,
            'totalCapacity' => $totalCapacity,
            'totalRegistered' => array_sum(array_column($locations, 'registered')),
            'totalRemaining' => array_sum(array_column($locations, 'remaining')),
            'locations' => $locations,
        ];
    }

    public function editUser($userId)
    {
        $user = EtekafUsers::findOrFail($userId);
        $this->editingUserId = $userId;

        $this->form = [
            'name' => $user->name,
            'birth_year' => $user->birth_year,
            'national_code' => $user->national_code,
            'phone_number' => $user->phone_number,
            'parent_phone_number' => $user->parent_phone_number,
            'province' => $user->province,
            'school' => $user->school,
            'location' => $user->location,
            'industry' => $user->industry,
            'job' => $user->job,
            'quran' => $user->quran,
            'payment_status' => $user->payment_status,
        ];

        $this->showEditModal = true;
    }

    public function saveUser()
    {
        $this->validate();

        $user = EtekafUsers::findOrFail($this->editingUserId);
        $user->update($this->form);

        $this->resetForm();
        $this->showEditModal = false;
        $this->dispatch('user-saved', message: 'اطلاعات کاربر با موفقیت بروزرسانی شد');
    }

    public function confirmDelete($userId)
    {
        $this->userToDelete = EtekafUsers::findOrFail($userId);
        $this->showDeleteModal = true;
    }

    public function deleteUser()
    {
        if ($this->userToDelete) {
            $this->userToDelete->delete();
            $this->resetForm();
            $this->showDeleteModal = false;
            $this->dispatch('user-deleted', message: 'کاربر با موفقیت حذف شد');
        }
    }

    public function resetForm()
    {
        $this->form = [
            'name' => '',
            'birth_year' => '',
            'national_code' => '',
            'phone_number' => '',
            'parent_phone_number' => '',
            'province' => '',
            'school' => '',
            'location' => '',
            'industry' => '',
            'job' => '',
            'quran' => '',
            'payment_status' => '',
        ];
        $this->editingUserId = null;
        $this->showEditModal = false;
        $this->showDeleteModal = false;
        $this->userToDelete = null;
    }

    public function logout()
    {
        session()->forget('monitor_authenticated');
        return redirect()->route('monitor.login');
    }

    public function render()
    {
        return view('livewire.monitor.dashboard', [
            'users' => $this->getUsers(),
            'stats' => $this->getStats(),
            'locations' => Capacity::getLocationNames(),
        ]);
    }
}
