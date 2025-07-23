<template>
    <AuthenticatedLayout>
        <Head title="Super Admin Dashboard" />

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Super Admin Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4">Welcome, Super Administrator!</h3>
                        <p>You have full access to all system features and can manage all users and administrators.</p>
                        
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-800">System Management</h4>
                                <p class="text-blue-600 text-sm">Manage system settings and configurations</p>
                            </div>
                            
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-green-800">User Management</h4>
                                <p class="text-green-600 text-sm">Create, edit, and manage all users</p>
                            </div>
                            
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-purple-800">Admin Management</h4>
                                <p class="text-purple-600 text-sm">Manage administrator accounts</p>
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