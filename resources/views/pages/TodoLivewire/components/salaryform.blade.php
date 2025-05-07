<div> {{-- ✅ Root tag required by Livewire --}}
    <h1>Livewire Salary</h1>

    <form wire:submit.prevent="submit_salary" method="POST">
        @csrf
        <div class="row">
            
            <div class="col-8">
                <input class="form-control" type="text" placeholder="Enter salary" name="salary" wire:model="salary.salary">
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
