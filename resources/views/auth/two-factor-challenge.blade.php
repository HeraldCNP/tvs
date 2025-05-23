<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="card-body">
            <div x-data="{ recovery: false }">
                <div class="mb-3" x-show="! recovery">
                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                </div>

                <div class="mb-3" x-show="recovery">
                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                </div>

                <x-validation-errors class="mb-3" />

                <form method="POST" action="{{ route('two-factor.login') }}">
                    @csrf

                    <div class="form-group" x-show="! recovery">
                        <x-label value="{{ __('Code') }}" />
                        <x-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text"
                                     inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                        <x-input-error for="code"></x-input-error>
                    </div>

                    <div class="form-group" x-show="recovery">
                        <x-label value="{{ __('Recovery Code') }}" />
                        <x-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}" type="text"
                                     name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                        <x-input-error for="recovery_code"></x-input-error>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-outline-secondary"
                                x-show="! recovery"
                                x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                            {{ __('Use a recovery code') }}
                        </button>

                        <button type="button" class="btn btn-outline-secondary"
                                x-show="recovery"
                                x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                            {{ __('Use an authentication code') }}
                        </button>

                        <x-button>
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
