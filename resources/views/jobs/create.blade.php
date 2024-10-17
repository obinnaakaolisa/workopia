<x-layout>
    <x-slot name="title">Create a Job</x-slot>
    <h1>Create a New Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" id="" placeholder="Job Title"><br><br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Job Description"></textarea><br><br>
        <button type="submit">Create Job</button>
    </form>
</x-layout>