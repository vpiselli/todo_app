<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    task: Object
});

const form = useForm({
    _method: 'PUT',
    completed: props.task.completed
});

const updateTask = () => {
    form.completed = ! form.completed;
    form.post(route('web.tasks.update', props.task.id));
}
</script>

<template>
    <input
        :checked="task.completed"
        @change="updateTask"
        type="checkbox"
    >
</template>