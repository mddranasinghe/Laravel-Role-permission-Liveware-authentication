@extends('layouts.index')
@section("content")

<div class="container">

    <livewire:todo.form.new-form />
 
<div>
    <livewire:todo.tables.all-table />
</div>

</div>

@endsection