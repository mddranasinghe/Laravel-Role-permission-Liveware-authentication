<div> {{-- ✅ Root tag required by Livewire --}}
    <h1>Livewire List</h1>

    <form wire:submit.prevent="submit_task" method="POST">
        @csrf
        <div class="row">
            
     @if ($successMessage)
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
     @endif



            <div class="col-8">
                <input class="form-control" type="text" placeholder="Enter Task" name="title" wire:model="task.title">

                @error('task.title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
