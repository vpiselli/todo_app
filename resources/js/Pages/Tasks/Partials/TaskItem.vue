<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import TextInput from '@/Components/TextInput.vue';

const editing = ref(false)

const props = defineProps({
    task: Object
});

const form = useForm({
    _method: 'PUT',
    name: props.task.name
});

const updateTask = () => {
    form.post(route('web.tasks.update', props.task.id), {
        onSuccess: () => editing.value = false
    });
}
</script>

<template>
    <span
        v-show="!editing"
        class="w-full"
        @click="editing = true"
        :class="task.completed ? 'line-through' : ''"
    >{{ task.name }}</span>

    <TextInput
        v-show="editing"
        v-model="form.name"
        @blur="updateTask"
        class="flex-1"
    />
</template>