<form method="POST" action="{{ route('form.process') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    @error('name')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    @error('email')
    <div class="text-red-500">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
