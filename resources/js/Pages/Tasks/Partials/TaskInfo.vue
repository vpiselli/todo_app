<script setup>
import { ref } from 'vue';
import { router, usePage } from '@inertiajs/vue3';

const showAll = usePage().props.showAll;

const toggleTasks = () => {
    router.get(route('web.tasks.index', { showAll: !showAll }));
}
</script>

<template>
    <div class="flex justify-between">
        <a
            @click="toggleTasks"
            v-text="showAll ? 'Hide completed' : 'Show completed'"
            class="text-sm text-red-400 hover:underline cursor-pointer"
        />

        <span
            class="text-sm"
        >{{ `${$page.props.tasks.meta.total} tasks` }}</span>
    </div>
</template>