<template>
    <GuestLayout>
        <Head title="Two-Factor Authentication" />

        <div class="mb-4 text-sm text-gray-600">
            We've sent a 6-digit verification code to your email address. Please enter it below to continue.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="code" value="Verification Code" />
                <TextInput
                    id="code"
                    type="text"
                    class="mt-1 block w-full text-center text-2xl tracking-widest"
                    v-model="form.code"
                    maxlength="6"
                    pattern="[0-9]{6}"
                    placeholder="000000"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.code" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Verify Code
                </PrimaryButton>

                <button
                    type="button"
                    @click="resendCode"
                    class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                    :disabled="resendDisabled"
                >
                    {{ resendDisabled ? `Resend code in ${countdown}s` : 'Resend code' }}
                </button>
            </div>
        </form>
    </GuestLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    status: String,
})

const form = useForm({
    code: '',
})

const resendDisabled = ref(false)
const countdown = ref(0)
let timer = null

const submit = () => {
    form.post(route('two-factor.verify'))
}

const resendCode = () => {
    form.post(route('two-factor.resend'), {
        preserveScroll: true,
        onSuccess: () => {
            startCountdown()
        }
    })
}

const startCountdown = () => {
    resendDisabled.value = true
    countdown.value = 60
    
    timer = setInterval(() => {
        countdown.value--
        if (countdown.value <= 0) {
            resendDisabled.value = false
            clearInterval(timer)
        }
    }, 1000)
}

onMounted(() => {
    startCountdown()
})

onUnmounted(() => {
    if (timer) {
        clearInterval(timer)
    }
})
</script>