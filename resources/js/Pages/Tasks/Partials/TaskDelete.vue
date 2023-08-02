<script setup>
import { useForm } from '@inertiajs/vue3';
import DeleteButton from '@/Components/SecondaryButton.vue';

const props = defineProps({
    task: Object
});

const form = useForm({
    _method: 'DELETE'
});

const deleteTask = () => {
    if (confirm(`Are you sure you want to delete this task: ${props.task.name}?`)) {
        form.post(route('web.tasks.delete', props.task.id));
    }
}
</script>

<template>
    <DeleteButton
        @click="deleteTask"
    >Delete</DeleteButton>
</template>