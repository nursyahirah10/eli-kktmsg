@foreach ($errors->all() as $message)
<div class="p-4 bg-red-lighter rounded mb-4">{{ $message }}</div>
@endforeach