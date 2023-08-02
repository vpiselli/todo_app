<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import AddButton from '@/Components/PrimaryButton.vue';

const form = useForm({
    _method: 'POST',
    name: ''
});

const createTask = () => {
    if (form.name) {
        form.post(route('web.tasks.store'), {
            onSuccess: () => form.reset()
        });
    }
}
</script>

<template>
    <div class="flex justify-between gap-2">
        <TextInput
            v-model="form.name"
            class="flex-1"
        />

        <AddButton
            @click="createTask"
        >Add</AddButton>
    </div>
</template>