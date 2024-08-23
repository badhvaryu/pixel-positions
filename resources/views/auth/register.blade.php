<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form action="/register" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" type="text"/>
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

{{--        <x-forms.label label="Password" name="password" />--}}
{{--        <input--}}
{{--            type="password"--}}
{{--            id="password"--}}
{{--            name="password"--}}
{{--            class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"--}}
{{--        >--}}

{{--        <x-forms.label label="Password Confirmation" name="password_confirmation" />--}}
{{--        <input--}}
{{--            type="password"--}}
{{--            id="password_confirmation"--}}
{{--            name="password_confirmation"--}}
{{--            class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"--}}
{{--        >--}}

        <x-forms.divider />

        <x-forms.input label="Employer" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
