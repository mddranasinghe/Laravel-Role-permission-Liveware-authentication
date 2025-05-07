@extends('layouts.index')
@section("content")
<div class="container">
<div class="col-12">
    <div class="row">

@can('role-create')       
<div class="col-4">
    <livewire:user.form.user-form />
</div>
@endcan

<div class="col-8">

    <livewire:user.tables.user-table />

</div>
</div>
</div>
    

</div>

@endsection