<template>
    <AuthenticatedLayout>
        <Head title="Admin Dashboard" />

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4">Welcome, Administrator!</h3>
                        <p>You have administrative access to manage users and system features.</p>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-800">User Management</h4>
                                <p class="text-blue-600 text-sm">Manage user accounts and permissions</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-green-800">Content Management</h4>
                                <p class="text-green-600 text-sm">Manage application content and settings</p>
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
