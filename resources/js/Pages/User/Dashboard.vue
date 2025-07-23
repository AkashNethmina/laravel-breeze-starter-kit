<template>
    <AuthenticatedLayout>
        <Head title="User Dashboard" />

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">User Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4">Welcome to your dashboard!</h3>
                        <p>You're logged in as a regular user. Enjoy exploring the application!</p>

                        <div class="mt-6">
                            <div class="bg-indigo-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-indigo-800">Your Account</h4>
                                <p class="text-indigo-600 text-sm">Manage your profile and account settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
</script>
