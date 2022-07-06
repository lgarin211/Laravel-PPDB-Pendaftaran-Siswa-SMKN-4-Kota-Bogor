<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="text-cente">
                <img src="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/core_admin/logo/0x200/1599786225/LOGO%20SMKN%204.png" class="img-fluit">
            </div>
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="hidden" name="password" value="this is null">
            <div>
                <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                <x-jet-label value="{{ __('NISN') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="NISN" :value="old('NISN')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('NIK SISWA') }}" />
                <x-jet-input id="reg_number" class="block mt-1 w-full" type="number" name="reg_number" required />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
