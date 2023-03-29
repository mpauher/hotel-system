@vite('resources/css/app.css')
<x-auth-session-status class="mb-4" :status="session('status')" />
<section class="div-father flex flex-row h-screen justify-center">
    <div class="image-left shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12"></div>
    <form method="POST" action="{{ route('login') }}" class="div-right shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-12 justify-center">
        @csrf
        <div class="div-right shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-12 justify-center">
            <div class="logo h-96 w-96"></div>  
            <div class="shrink-0 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-4/12 items-center flex flex-col gap-4 justify-center">
                <div>
                    <input type="email" class="input email w-96" id="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <input type="Password" class="input password w-96" id="password" placeholder="Password" required autocomplete="current-password" name="password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-4">
                <button class="rounded-full button-login w-40 h-10">{{ __('Login') }}</button> 
        </div>
    </form>
</section>