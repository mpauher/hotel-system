<x-guest-layout>
    <section class="div-father flex flex-row h-screen justify-center">
        <div class="image-left shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12"></div>
        <form form method="POST" action="{{ route('register') }}" class="div-right shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-2 justify-center">
            @csrf
            <!-- Logo -->
            <div class="items-center flex flex-col gap-12 justify-center">
                <div class="logo h-96 w-96"></div> 

                <!-- Name -->
                <div class="shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-4 justify-center">
                    <x-text-input id="name" class="input name w-96" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-4 justify-center">
                    <x-text-input id="email" class="input email w-96" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-4 justify-center">
                    <x-text-input id="password" class="input password w-96" type="password" name="password" required autocomplete="new-password" placeholder="New Password"/>
	    	        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <!-- Confirm Password -->
                <div class="mt-4 shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-4 justify-center">
                    <x-text-input id="password_confirmation" class="input password w-96" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
	    	        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-neutral-300 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ml-4 rounded-full button-login w-40 h-10 justify-items-center content-center items-center">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </section>   
</x-guest-layout>
