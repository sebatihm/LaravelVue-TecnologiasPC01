<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Bienvenido" />

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="/images/eplus_logo.svg" width="60" alt="Logo SVG">
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"  class="w-7 h-7"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path stroke="currentColor" fill="#af4444" stroke-width="2" d="M64 64l0 177.6c5.2-1 10.5-1.6 16-1.6l16 0 0-32L96 64c0-8.8-7.2-16-16-16s-16 7.2-16 16zM80 288c-17.7 0-32 14.3-32 32c0 0 0 0 0 0l0 24c0 66.3 53.7 120 120 120l48 0c52.5 0 97.1-33.7 113.4-80.7c-3.1 .5-6.2 .7-9.4 .7c-20 0-37.9-9.2-49.7-23.6c-9 4.9-19.4 7.6-30.3 7.6c-15.1 0-29-5.3-40-14c-11 8.8-24.9 14-40 14l-40 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l40 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-40 0-40 0zM0 320s0 0 0 0c0-18 6-34.6 16-48L16 64C16 28.7 44.7 0 80 0s64 28.7 64 64l0 82c5.1-1.3 10.5-2 16-2c25.3 0 47.2 14.7 57.6 36c7-2.6 14.5-4 22.4-4c20 0 37.9 9.2 49.7 23.6c9-4.9 19.4-7.6 30.3-7.6c35.3 0 64 28.7 64 64l0 64 0 24c0 92.8-75.2 168-168 168l-48 0C75.2 512 0 436.8 0 344l0-24zm336-64c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 48 0 16c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM160 240c5.5 0 10.9 .7 16 2l0-2 0-32c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 32 16 0zm64 24l0 40c0 8.8 7.2 16 16 16s16-7.2 16-16l0-48 0-16c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 24z"/>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Mejoras</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Cansado de los constantes fallos en cierta plataforma negativa (minus)?, En EPLUS aseguramos una alta tolerancia a fallos y una interfaz mucho más amigable con el usuario
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>




                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-7 h-7"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path stroke="currentColor" fill="#af4444" stroke-width="2" d="M121 32C91.6 32 66 52 58.9 80.5L1.9 308.4C.6 313.5 0 318.7 0 323.9L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-92.1c0-5.2-.6-10.4-1.9-15.5l-57-227.9C446 52 420.4 32 391 32L121 32zm0 64l270 0 48 192-51.2 0c-12.1 0-23.2 6.8-28.6 17.7l-14.3 28.6c-5.4 10.8-16.5 17.7-28.6 17.7l-120.4 0c-12.1 0-23.2-6.8-28.6-17.7l-14.3-28.6c-5.4-10.8-16.5-17.7-28.6-17.7L73 288 121 96z"/>
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Quejas</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Si tienes al utilizar nuestro sistema, no dudes en realizarlas enviando un correo a la dirección de correo electronico:
                                <strong>mamercado@uv.mx</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-start">
                    &nbsp;
                </div>

                <div class="text-center text-sm text-gray-500 dark:text-gray-400 md:text-end sm:ms-0 flex items-center gap-1">
                    Desarrollado con
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="w-4 h-4"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path stroke="currentColor" fill="#af4444" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                    </svg> en <strong>LuisitosTech</strong>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
